<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonResponseDtoMap;
use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

use function array_keys;
use function file_get_contents;
use function glob;
use function in_array;
use function is_subclass_of;
use function json_decode;
use function method_exists;
use function preg_match_all;
use function rtrim;
use function sort;
use function strtoupper;

use const JSON_THROW_ON_ERROR;
use const PREG_SET_ORDER;

#[CoversClass(OzonApiClient::class)]
#[CoversClass(OzonResponseDtoMap::class)]
#[CoversMethod(OzonApiClient::class, 'request')]
#[CoversMethod(OzonApiResponse::class, 'makeDto')]
final class OzonSwaggerAuditTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * Проверяет точный маршрут, передачу тела и создание DTO для каждого добавленного метода.
     *
     * @see OzonApiClient::request()
     * @see OzonApiResponse::makeDto()
     */
    #[Test]
    #[DataProvider('addedRoutes')]
    public function addedOperationSendsPayloadAndMakesDto(string $path, string $accessor, string $method): void
    {
        [$client, $http] = $this->createClient(new Response(200, [], '{}'));
        $payload         = ['filter' => ['ids' => ['123']], 'limit' => 10];
        $response        = $client->{$accessor}()->{$method}($payload);
        $request         = $http->lastRequest();

        self::assertNotNull($request);
        self::assertSame('POST', $request->getMethod());
        self::assertSame($path, $request->getUri()->getPath());
        self::assertSame($payload, json_decode((string) $request->getBody(), true, flags: JSON_THROW_ON_ERROR));
        self::assertInstanceOf(OzonApiResponse::class, $response);
        $dtoClass = OzonResponseDtoMap::resolve('POST', $path);
        self::assertNotNull($dtoClass);
        self::assertInstanceOf($dtoClass, $response->makeDto());
    }

    /**
     * Проверяет отсутствие публичных обёрток и response-mapping для удалённых операций.
     *
     * @see OzonResponseDtoMap::resolve()
     */
    #[Test]
    #[DataProvider('removedRoutes')]
    public function removedOperationIsNotExposed(string $path, string $accessor, string $method): void
    {
        [$client] = $this->createClient(new Response(200, [], '{}'));

        self::assertFalse(method_exists($client->{$accessor}(), $method));
        self::assertNull(OzonResponseDtoMap::resolve('POST', $path));
    }

    /**
     * Проверяет полное совпадение карты DTO с операциями Swagger и загрузку всех классов ответов.
     *
     * @see OzonResponseDtoMap::resolve()
     */
    #[Test]
    public function responseMapMatchesSnapshot(): void
    {
        $spec     = json_decode(file_get_contents(__DIR__ . '/../docs/swagger.json'), true, flags: JSON_THROW_ON_ERROR);
        $expected = [];
        foreach ($spec['paths'] as $path => $item) {
            foreach ($item as $method => $operation) {
                if (!in_array($method, ['get', 'post', 'put', 'patch', 'delete', 'head', 'options'], true)) {
                    continue;
                }
                $expected[] = strtoupper($method) . ' ' . $path;
                $class      = OzonResponseDtoMap::resolve($method, $path);
                self::assertNotNull($class, $path);
                self::assertTrue(is_subclass_of($class, OzonDtoInterface::class), $class);
            }
        }
        $actual = array_keys(new ReflectionClass(OzonResponseDtoMap::class)->getConstant('MAP'));
        sort($expected);
        sort($actual);
        self::assertSame($expected, $actual);
    }

    /**
     * Проверяет, что каждый маршрут Swagger имеет явную обёртку, а устаревших маршрутов в ней нет.
     *
     * @see OzonApiClient::request()
     */
    #[Test]
    public function wrapperRoutesMatchSnapshot(): void
    {
        $spec     = json_decode(file_get_contents(__DIR__ . '/../docs/swagger.json'), true, flags: JSON_THROW_ON_ERROR);
        $expected = [];
        foreach ($spec['paths'] as $path => $item) {
            foreach (array_keys($item) as $method) {
                if (in_array($method, ['get', 'post', 'put', 'patch', 'delete', 'head', 'options'], true)) {
                    $expected[] = strtoupper($method) . ' ' . $path;
                }
            }
        }
        $actual = [];
        foreach (glob(__DIR__ . '/../src/V*/*.php') as $file) {
            $source = file_get_contents($file);
            preg_match_all("~->(v[0-9]+)\\('([^']*)'\\)->(get|post|put|patch|delete)\\('([^']*)'~", $source, $matches, PREG_SET_ORDER);
            foreach ($matches as $match) {
                $path = rtrim('/' . $match[1] . '/' . $match[2] . $match[4], '/');
                if ($path === '/v1/cargoes-label/file') {
                    $path .= '/{file_guid}';
                }
                $actual[] = strtoupper($match[3]) . ' ' . $path;
            }
        }
        sort($expected);
        sort($actual);
        self::assertSame($expected, $actual);
    }

    /** @return iterable<string, array{string, string, string}> */
    public static function addedRoutes(): iterable
    {
        yield 'POST /v2/product/pictures/import' => ['/v2/product/pictures/import', 'productV2', 'picturesImport'];
        yield 'POST /v3/posting/fbo/list' => ['/v3/posting/fbo/list', 'postingFboV3', 'list'];
        yield 'POST /v2/supply-order/timeslot/list' => ['/v2/supply-order/timeslot/list', 'supplyOrderV2', 'timeslotList'];
        yield 'POST /v1/carriage/courier-contact/set' => ['/v1/carriage/courier-contact/set', 'carriageV1', 'courierContactSet'];
        yield 'POST /v1/carriage/courier-contact/get' => ['/v1/carriage/courier-contact/get', 'carriageV1', 'courierContactGet'];
        yield 'POST /v4/posting/fbs/unfulfilled/list' => ['/v4/posting/fbs/unfulfilled/list', 'postingFbsV4', 'unfulfilledList'];
        yield 'POST /v4/posting/fbs/list' => ['/v4/posting/fbs/list', 'postingFbsV4', 'list'];
        yield 'POST /v1/product/info/stocks-by-warehouse/fbo' => ['/v1/product/info/stocks-by-warehouse/fbo', 'productV1', 'infoStocksByWarehouseFbo'];
        yield 'POST /v2/review/comment/delete' => ['/v2/review/comment/delete', 'reviewV2', 'commentDelete'];
        yield 'POST /v2/review/change-status' => ['/v2/review/change-status', 'reviewV2', 'changeStatus'];
        yield 'POST /v2/review/count' => ['/v2/review/count', 'reviewV2', 'count'];
        yield 'POST /v2/review/info' => ['/v2/review/info', 'reviewV2', 'info'];
        yield 'POST /v2/review/list' => ['/v2/review/list', 'reviewV2', 'list'];
        yield 'POST /v1/analytics/decommissioned-goods' => ['/v1/analytics/decommissioned-goods', 'analyticsV1', 'decommissionedGoods'];
        yield 'POST /v1/analytics/category/comparison' => ['/v1/analytics/category/comparison', 'analyticsV1', 'categoryComparison'];
        yield 'POST /v2/posting/digital/list' => ['/v2/posting/digital/list', 'postingDigitalV2', 'list'];
        yield 'POST /v1/finance/accrual/postings' => ['/v1/finance/accrual/postings', 'financeV1', 'accrualPostings'];
        yield 'POST /v1/finance/accrual/types' => ['/v1/finance/accrual/types', 'financeV1', 'accrualTypes'];
        yield 'POST /v1/finance/accrual/by-day' => ['/v1/finance/accrual/by-day', 'financeV1', 'accrualByDay'];
        yield 'POST /v1/product/visibility/info' => ['/v1/product/visibility/info', 'productV1', 'visibilityInfo'];
        yield 'POST /v1/posting/fbp/get' => ['/v1/posting/fbp/get', 'postingFbpV1', 'get'];
        yield 'POST /v1/report/realization/posting/create' => ['/v1/report/realization/posting/create', 'reportV1', 'realizationPostingCreate'];
        yield 'POST /v2/product/certification/options' => ['/v2/product/certification/options', 'productV2', 'certificationOptions'];
        yield 'POST /v2/product/certification/params' => ['/v2/product/certification/params', 'productV2', 'certificationParams'];
        yield 'POST /v2/product/certificate/create' => ['/v2/product/certificate/create', 'productCertificateV2', 'create'];
        yield 'POST /v1/description-category/dependent-attributes' => ['/v1/description-category/dependent-attributes', 'descriptionCategoryV1', 'dependentAttributes'];
        yield 'POST /v1/description-category/dependent-attributes/values' => ['/v1/description-category/dependent-attributes/values', 'descriptionCategoryV1', 'dependentAttributesValues'];
        yield 'POST /v1/supply-order/act/summary/get' => ['/v1/supply-order/act/summary/get', 'supplyOrderV1', 'actSummaryGet'];
        yield 'POST /v1/supply-order/act/product/get' => ['/v1/supply-order/act/product/get', 'supplyOrderV1', 'actProductGet'];
        yield 'POST /v1/supply-order/act/accept' => ['/v1/supply-order/act/accept', 'supplyOrderV1', 'actAccept'];
        yield 'POST /v1/supply-order/act/accept/status' => ['/v1/supply-order/act/accept/status', 'supplyOrderV1', 'actAcceptStatus'];
        yield 'POST /v1/actions/auto-add/products/list' => ['/v1/actions/auto-add/products/list', 'actionsV1', 'autoAddProductsList'];
        yield 'POST /v1/actions/auto-add/products/candidates' => ['/v1/actions/auto-add/products/candidates', 'actionsV1', 'autoAddProductsCandidates'];
        yield 'POST /v1/actions/auto-add/products/delete' => ['/v1/actions/auto-add/products/delete', 'actionsV1', 'autoAddProductsDelete'];
        yield 'POST /v1/actions/auto-add/products/update' => ['/v1/actions/auto-add/products/update', 'actionsV1', 'autoAddProductsUpdate'];
        yield 'POST /v2/cargoes/get' => ['/v2/cargoes/get', 'cargoesV2', 'get'];
        yield 'POST /v2/cargoes/delete' => ['/v2/cargoes/delete', 'cargoesV2', 'delete'];
        yield 'POST /v2/cargoes/delete/status' => ['/v2/cargoes/delete/status', 'cargoesV2', 'deleteStatus'];
        yield 'POST /v1/cargoes/transport/activate' => ['/v1/cargoes/transport/activate', 'cargoesV1', 'transportActivate'];
        yield 'POST /v1/cargoes/transport/activate/status' => ['/v1/cargoes/transport/activate/status', 'cargoesV1', 'transportActivateStatus'];
        yield 'POST /v1/cargoes/transport/create' => ['/v1/cargoes/transport/create', 'cargoesV1', 'transportCreate'];
        yield 'POST /v1/cargoes/transport/create/status' => ['/v1/cargoes/transport/create/status', 'cargoesV1', 'transportCreateStatus'];
        yield 'POST /v1/cargoes/transport/bind' => ['/v1/cargoes/transport/bind', 'cargoesV1', 'transportBind'];
        yield 'POST /v1/cargoes/transport/bind/status' => ['/v1/cargoes/transport/bind/status', 'cargoesV1', 'transportBindStatus'];
        yield 'POST /v1/cargoes/supplies/get' => ['/v1/cargoes/supplies/get', 'cargoesV1', 'suppliesGet'];
        yield 'POST /v1/cargoes/label/transport-by-order/create' => ['/v1/cargoes/label/transport-by-order/create', 'cargoesV1', 'labelTransportByOrderCreate'];
        yield 'POST /v1/cargoes/label/transport-by-order/status' => ['/v1/cargoes/label/transport-by-order/status', 'cargoesV1', 'labelTransportByOrderStatus'];
        yield 'POST /v1/cargoes/label/transport/create' => ['/v1/cargoes/label/transport/create', 'cargoesV1', 'labelTransportCreate'];
        yield 'POST /v1/cargoes/label/transport/status' => ['/v1/cargoes/label/transport/status', 'cargoesV1', 'labelTransportStatus'];
        yield 'POST /v1/fbp/order/direct/tpl-dlv/edit' => ['/v1/fbp/order/direct/tpl-dlv/edit', 'fbpV1', 'orderDirectTplDlvEdit'];
        yield 'POST /v1/posting/fbp/list' => ['/v1/posting/fbp/list', 'postingFbpV1', 'list'];
        yield 'POST /v1/carriage/container/create' => ['/v1/carriage/container/create', 'carriageV1', 'containerCreate'];
        yield 'POST /v1/carriage/container/fill' => ['/v1/carriage/container/fill', 'carriageV1', 'containerFill'];
        yield 'POST /v1/carriage/container/approve' => ['/v1/carriage/container/approve', 'carriageV1', 'containerApprove'];
        yield 'POST /v1/carriage/container/place-into' => ['/v1/carriage/container/place-into', 'carriageV1', 'containerPlaceInto'];
        yield 'POST /v1/carriage/container/remove-postings' => ['/v1/carriage/container/remove-postings', 'carriageV1', 'containerRemovePostings'];
        yield 'POST /v1/carriage/container/remove-from' => ['/v1/carriage/container/remove-from', 'carriageV1', 'containerRemoveFrom'];
        yield 'POST /v1/carriage/container/cancel' => ['/v1/carriage/container/cancel', 'carriageV1', 'containerCancel'];
        yield 'POST /v1/carriage/container/list' => ['/v1/carriage/container/list', 'carriageV1', 'containerList'];
        yield 'POST /v1/carriage/container/get' => ['/v1/carriage/container/get', 'carriageV1', 'containerGet'];
        yield 'POST /v1/carriage/container/status/get' => ['/v1/carriage/container/status/get', 'carriageV1', 'containerStatusGet'];
        yield 'POST /v1/carriage/container/task/info' => ['/v1/carriage/container/task/info', 'carriageV1', 'containerTaskInfo'];
        yield 'POST /v1/carriage/container/document/get' => ['/v1/carriage/container/document/get', 'carriageV1', 'containerDocumentGet'];
        yield 'POST /v1/carriage/container/label/get' => ['/v1/carriage/container/label/get', 'carriageV1', 'containerLabelGet'];
    }

    /** @return iterable<string, array{string, string, string}> */
    public static function removedRoutes(): iterable
    {
        yield 'POST /v1/analytics/average-delivery-time' => ['/v1/analytics/average-delivery-time', 'analyticsV1', 'averageDeliveryTime'];
        yield 'POST /v1/analytics/average-delivery-time/details' => ['/v1/analytics/average-delivery-time/details', 'analyticsV1', 'averageDeliveryTimeDetails'];
        yield 'POST /v1/analytics/average-delivery-time/summary' => ['/v1/analytics/average-delivery-time/summary', 'analyticsV1', 'averageDeliveryTimeSummary'];
        yield 'POST /v1/cargoes/create/info' => ['/v1/cargoes/create/info', 'cargoesV1', 'createInfo'];
        yield 'POST /v1/draft/create' => ['/v1/draft/create', 'draftV1', 'create'];
        yield 'POST /v1/draft/create/info' => ['/v1/draft/create/info', 'draftV1', 'createInfo'];
        yield 'POST /v1/draft/supply/create' => ['/v1/draft/supply/create', 'draftV1', 'supplyCreate'];
        yield 'POST /v1/draft/supply/create/status' => ['/v1/draft/supply/create/status', 'draftV1', 'supplyCreateStatus'];
        yield 'POST /v1/draft/timeslot/info' => ['/v1/draft/timeslot/info', 'draftV1', 'timeslotInfo'];
        yield 'POST /v1/product/quant/info' => ['/v1/product/quant/info', 'productV1', 'quantInfo'];
        yield 'POST /v1/product/quant/list' => ['/v1/product/quant/list', 'productV1', 'quantList'];
        yield 'POST /v1/seller-actions/create/ozon-card-discount' => ['/v1/seller-actions/create/ozon-card-discount', 'sellerActionsV1', 'createOzonCardDiscount'];
        yield 'POST /v1/seller-actions/update/ozon-card-discount' => ['/v1/seller-actions/update/ozon-card-discount', 'sellerActionsV1', 'updateOzonCardDiscount'];
        yield 'POST /v2/chat/list' => ['/v2/chat/list', 'chatV2', 'list'];
        yield 'POST /v2/returns/rfbs/reject' => ['/v2/returns/rfbs/reject', 'returnsRfbsV2', 'reject'];
        yield 'POST /v2/returns/rfbs/compensate' => ['/v2/returns/rfbs/compensate', 'returnsRfbsV2', 'compensate'];
        yield 'POST /v2/returns/rfbs/verify' => ['/v2/returns/rfbs/verify', 'returnsRfbsV2', 'verify'];
        yield 'POST /v2/returns/rfbs/receive-return' => ['/v2/returns/rfbs/receive-return', 'returnsRfbsV2', 'receiveReturn'];
        yield 'POST /v2/returns/rfbs/return-money' => ['/v2/returns/rfbs/return-money', 'returnsRfbsV2', 'returnMoney'];
    }
}
