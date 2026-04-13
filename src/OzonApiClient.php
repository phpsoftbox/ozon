<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon;

use JsonException;
use PhpSoftBox\Ozon\Dto\OzonResponseDtoMap;
use PhpSoftBox\Ozon\V1\ActionsV1;
use PhpSoftBox\Ozon\V1\AnalyticsV1;
use PhpSoftBox\Ozon\V1\AssemblyCarriageV1;
use PhpSoftBox\Ozon\V1\AssemblyFbsV1;
use PhpSoftBox\Ozon\V1\BarcodeV1;
use PhpSoftBox\Ozon\V1\BrandV1;
use PhpSoftBox\Ozon\V1\CancelReasonV1;
use PhpSoftBox\Ozon\V1\CargoesLabelV1;
use PhpSoftBox\Ozon\V1\CargoesV1;
use PhpSoftBox\Ozon\V1\CarriageV1;
use PhpSoftBox\Ozon\V1\ChatV1;
use PhpSoftBox\Ozon\V1\ClusterV1;
use PhpSoftBox\Ozon\V1\DeliveryMethodV1;
use PhpSoftBox\Ozon\V1\DeliveryV1;
use PhpSoftBox\Ozon\V1\DescriptionCategoryV1;
use PhpSoftBox\Ozon\V1\DraftV1;
use PhpSoftBox\Ozon\V1\FbpV1;
use PhpSoftBox\Ozon\V1\FinanceV1;
use PhpSoftBox\Ozon\V1\InvoiceV1;
use PhpSoftBox\Ozon\V1\NotificationV1;
use PhpSoftBox\Ozon\V1\OrderV1;
use PhpSoftBox\Ozon\V1\PassV1;
use PhpSoftBox\Ozon\V1\PolygonV1;
use PhpSoftBox\Ozon\V1\PostingFboV1;
use PhpSoftBox\Ozon\V1\PostingFbsV1;
use PhpSoftBox\Ozon\V1\PostingV1;
use PhpSoftBox\Ozon\V1\PricingStrategyV1;
use PhpSoftBox\Ozon\V1\ProductCertificateV1;
use PhpSoftBox\Ozon\V1\ProductV1;
use PhpSoftBox\Ozon\V1\QuestionV1;
use PhpSoftBox\Ozon\V1\RatingV1;
use PhpSoftBox\Ozon\V1\ReceiptsV1;
use PhpSoftBox\Ozon\V1\RemovalV1;
use PhpSoftBox\Ozon\V1\ReportV1;
use PhpSoftBox\Ozon\V1\ReturnsV1;
use PhpSoftBox\Ozon\V1\ReviewV1;
use PhpSoftBox\Ozon\V1\RolesV1;
use PhpSoftBox\Ozon\V1\SearchQueriesV1;
use PhpSoftBox\Ozon\V1\SellerActionsV1;
use PhpSoftBox\Ozon\V1\SellerV1;
use PhpSoftBox\Ozon\V1\SupplierV1;
use PhpSoftBox\Ozon\V1\SupplyOrderV1;
use PhpSoftBox\Ozon\V1\WarehouseV1;
use PhpSoftBox\Ozon\V2\ActionsV2;
use PhpSoftBox\Ozon\V2\AnalyticsV2;
use PhpSoftBox\Ozon\V2\CargoesV2;
use PhpSoftBox\Ozon\V2\CarriageV2;
use PhpSoftBox\Ozon\V2\ChatV2;
use PhpSoftBox\Ozon\V2\ClusterV2;
use PhpSoftBox\Ozon\V2\ConditionalCancellationV2;
use PhpSoftBox\Ozon\V2\DeliveryMethodV2;
use PhpSoftBox\Ozon\V2\DeliveryV2;
use PhpSoftBox\Ozon\V2\DraftV2;
use PhpSoftBox\Ozon\V2\FinanceV2;
use PhpSoftBox\Ozon\V2\InvoiceV2;
use PhpSoftBox\Ozon\V2\OrderV2;
use PhpSoftBox\Ozon\V2\PolygonV2;
use PhpSoftBox\Ozon\V2\PostingFboV2;
use PhpSoftBox\Ozon\V2\PostingFbsV2;
use PhpSoftBox\Ozon\V2\ProductCertificateV2;
use PhpSoftBox\Ozon\V2\ProductV2;
use PhpSoftBox\Ozon\V2\ReportV2;
use PhpSoftBox\Ozon\V2\ReturnsRfbsV2;
use PhpSoftBox\Ozon\V2\WarehouseV2;
use PhpSoftBox\Ozon\V3\ChatV3;
use PhpSoftBox\Ozon\V3\FinanceV3;
use PhpSoftBox\Ozon\V3\PostingFbsV3;
use PhpSoftBox\Ozon\V3\ProductV3;
use PhpSoftBox\Ozon\V3\SupplyOrderV3;
use PhpSoftBox\Ozon\V4\PostingFbsV4;
use PhpSoftBox\Ozon\V4\ProductV4;
use PhpSoftBox\Ozon\V5\PostingFbsV5;
use PhpSoftBox\Ozon\V5\ProductV5;
use PhpSoftBox\Ozon\V6\PostingFbsV6;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

use function http_build_query;
use function in_array;
use function is_array;
use function is_string;
use function json_decode;
use function json_encode;
use function ltrim;
use function rtrim;
use function strtoupper;
use function trim;

use const JSON_THROW_ON_ERROR;
use const JSON_UNESCAPED_SLASHES;
use const JSON_UNESCAPED_UNICODE;
use const PHP_QUERY_RFC3986;

final class OzonApiClient
{
    private string $baseUrl;

    public function __construct(
        private readonly string $clientId,
        private readonly string $apiKey,
        private readonly ClientInterface $httpClient,
        private readonly RequestFactoryInterface $requestFactory,
        private readonly StreamFactoryInterface $streamFactory,
        string $apiBase = 'https://api-seller.ozon.ru',
    ) {
        $this->baseUrl = rtrim($apiBase, '/');
    }

    /**
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function get(string $path, array $query = []): OzonApiResponse
    {
        return $this->request($path, method: 'GET', query: $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function post(string $path, array $payload = [], array $query = []): OzonApiResponse
    {
        return $this->request($path, $payload, 'POST', $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function put(string $path, array $payload = [], array $query = []): OzonApiResponse
    {
        return $this->request($path, $payload, 'PUT', $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function patch(string $path, array $payload = [], array $query = []): OzonApiResponse
    {
        return $this->request($path, $payload, 'PATCH', $query);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function delete(string $path, array $payload = [], array $query = []): OzonApiResponse
    {
        return $this->request($path, $payload, 'DELETE', $query);
    }

    public function v1(string $section = ''): OzonApiVersion
    {
        return $this->version('v1', $section);
    }

    public function v2(string $section = ''): OzonApiVersion
    {
        return $this->version('v2', $section);
    }

    public function v3(string $section = ''): OzonApiVersion
    {
        return $this->version('v3', $section);
    }

    public function v4(string $section = ''): OzonApiVersion
    {
        return $this->version('v4', $section);
    }

    public function v5(string $section = ''): OzonApiVersion
    {
        return $this->version('v5', $section);
    }

    public function v6(string $section = ''): OzonApiVersion
    {
        return $this->version('v6', $section);
    }

    public function version(string $version, string $section = ''): OzonApiVersion
    {
        return new OzonApiVersion($this, $version, $section);
    }

    public function descriptionCategoryV1(): DescriptionCategoryV1
    {
        return new DescriptionCategoryV1($this);
    }

    public function actionsV1(): ActionsV1
    {
        return new ActionsV1($this);
    }

    public function cancelReasonV1(): CancelReasonV1
    {
        return new CancelReasonV1($this);
    }

    public function orderV1(): OrderV1
    {
        return new OrderV1($this);
    }

    public function postingV1(): PostingV1
    {
        return new PostingV1($this);
    }

    public function returnsV1(): ReturnsV1
    {
        return new ReturnsV1($this);
    }

    public function chatV1(): ChatV1
    {
        return new ChatV1($this);
    }

    public function clusterV1(): ClusterV1
    {
        return new ClusterV1($this);
    }

    public function deliveryV1(): DeliveryV1
    {
        return new DeliveryV1($this);
    }

    public function invoiceV1(): InvoiceV1
    {
        return new InvoiceV1($this);
    }

    public function sellerActionsV1(): SellerActionsV1
    {
        return new SellerActionsV1($this);
    }

    public function pricingStrategyV1(): PricingStrategyV1
    {
        return new PricingStrategyV1($this);
    }

    public function reportV1(): ReportV1
    {
        return new ReportV1($this);
    }

    public function analyticsV1(): AnalyticsV1
    {
        return new AnalyticsV1($this);
    }

    public function financeV1(): FinanceV1
    {
        return new FinanceV1($this);
    }

    public function ratingV1(): RatingV1
    {
        return new RatingV1($this);
    }

    public function brandV1(): BrandV1
    {
        return new BrandV1($this);
    }

    public function barcodeV1(): BarcodeV1
    {
        return new BarcodeV1($this);
    }

    public function cargoesLabelV1(): CargoesLabelV1
    {
        return new CargoesLabelV1($this);
    }

    public function cargoesV1(): CargoesV1
    {
        return new CargoesV1($this);
    }

    public function carriageV1(): CarriageV1
    {
        return new CarriageV1($this);
    }

    public function draftV1(): DraftV1
    {
        return new DraftV1($this);
    }

    public function fbpV1(): FbpV1
    {
        return new FbpV1($this);
    }

    public function notificationV1(): NotificationV1
    {
        return new NotificationV1($this);
    }

    public function questionV1(): QuestionV1
    {
        return new QuestionV1($this);
    }

    public function reviewV1(): ReviewV1
    {
        return new ReviewV1($this);
    }

    public function receiptsV1(): ReceiptsV1
    {
        return new ReceiptsV1($this);
    }

    public function searchQueriesV1(): SearchQueriesV1
    {
        return new SearchQueriesV1($this);
    }

    public function sellerV1(): SellerV1
    {
        return new SellerV1($this);
    }

    public function rolesV1(): RolesV1
    {
        return new RolesV1($this);
    }

    public function passV1(): PassV1
    {
        return new PassV1($this);
    }

    public function polygonV1(): PolygonV1
    {
        return new PolygonV1($this);
    }

    public function removalV1(): RemovalV1
    {
        return new RemovalV1($this);
    }

    public function productCertificateV1(): ProductCertificateV1
    {
        return new ProductCertificateV1($this);
    }

    public function deliveryMethodV1(): DeliveryMethodV1
    {
        return new DeliveryMethodV1($this);
    }

    public function warehouseV1(): WarehouseV1
    {
        return new WarehouseV1($this);
    }

    public function assemblyFbsV1(): AssemblyFbsV1
    {
        return new AssemblyFbsV1($this);
    }

    public function assemblyCarriageV1(): AssemblyCarriageV1
    {
        return new AssemblyCarriageV1($this);
    }

    public function postingFbsV1(): PostingFbsV1
    {
        return new PostingFbsV1($this);
    }

    public function postingFboV1(): PostingFboV1
    {
        return new PostingFboV1($this);
    }

    public function supplyOrderV1(): SupplyOrderV1
    {
        return new SupplyOrderV1($this);
    }

    public function supplierV1(): SupplierV1
    {
        return new SupplierV1($this);
    }

    public function productV1(): ProductV1
    {
        return new ProductV1($this);
    }

    public function productV3(): ProductV3
    {
        return new ProductV3($this);
    }

    public function postingFboV2(): PostingFboV2
    {
        return new PostingFboV2($this);
    }

    public function actionsV2(): ActionsV2
    {
        return new ActionsV2($this);
    }

    public function cargoesV2(): CargoesV2
    {
        return new CargoesV2($this);
    }

    public function carriageV2(): CarriageV2
    {
        return new CarriageV2($this);
    }

    public function draftV2(): DraftV2
    {
        return new DraftV2($this);
    }

    public function clusterV2(): ClusterV2
    {
        return new ClusterV2($this);
    }

    public function deliveryV2(): DeliveryV2
    {
        return new DeliveryV2($this);
    }

    public function orderV2(): OrderV2
    {
        return new OrderV2($this);
    }

    public function polygonV2(): PolygonV2
    {
        return new PolygonV2($this);
    }

    public function conditionalCancellationV2(): ConditionalCancellationV2
    {
        return new ConditionalCancellationV2($this);
    }

    public function returnsRfbsV2(): ReturnsRfbsV2
    {
        return new ReturnsRfbsV2($this);
    }

    public function chatV2(): ChatV2
    {
        return new ChatV2($this);
    }

    public function invoiceV2(): InvoiceV2
    {
        return new InvoiceV2($this);
    }

    public function deliveryMethodV2(): DeliveryMethodV2
    {
        return new DeliveryMethodV2($this);
    }

    public function productCertificateV2(): ProductCertificateV2
    {
        return new ProductCertificateV2($this);
    }

    public function warehouseV2(): WarehouseV2
    {
        return new WarehouseV2($this);
    }

    public function reportV2(): ReportV2
    {
        return new ReportV2($this);
    }

    public function analyticsV2(): AnalyticsV2
    {
        return new AnalyticsV2($this);
    }

    public function financeV2(): FinanceV2
    {
        return new FinanceV2($this);
    }

    public function postingFbsV2(): PostingFbsV2
    {
        return new PostingFbsV2($this);
    }

    public function productV2(): ProductV2
    {
        return new ProductV2($this);
    }

    public function postingFbsV3(): PostingFbsV3
    {
        return new PostingFbsV3($this);
    }

    public function chatV3(): ChatV3
    {
        return new ChatV3($this);
    }

    public function financeV3(): FinanceV3
    {
        return new FinanceV3($this);
    }

    public function supplyOrderV3(): SupplyOrderV3
    {
        return new SupplyOrderV3($this);
    }

    public function postingFbsV4(): PostingFbsV4
    {
        return new PostingFbsV4($this);
    }

    public function postingFbsV5(): PostingFbsV5
    {
        return new PostingFbsV5($this);
    }

    public function postingFbsV6(): PostingFbsV6
    {
        return new PostingFbsV6($this);
    }

    public function productV4(): ProductV4
    {
        return new ProductV4($this);
    }

    public function productV5(): ProductV5
    {
        return new ProductV5($this);
    }

    /**
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        $method   = strtoupper($method);
        $url      = $this->buildUrl($path, $query);
        $dtoClass = OzonResponseDtoMap::resolve($method, $path);

        $request = $this->requestFactory
            ->createRequest($method, $url)
            ->withHeader('Client-Id', $this->clientId)
            ->withHeader('Api-Key', $this->apiKey)
            ->withHeader('Accept', 'application/json')
            ->withHeader('Content-Type', 'application/json');

        $hasBody = $payload !== [] || !in_array($method, ['GET', 'HEAD', 'DELETE'], true);
        if ($hasBody) {
            $body    = $this->encodePayload($payload);
            $request = $request->withBody($this->streamFactory->createStream($body));
        }

        $response = $this->httpClient->sendRequest($request);
        $status   = $response->getStatusCode();
        $raw      = (string) $response->getBody();

        if ($raw === '') {
            if ($status >= 400) {
                throw new OzonException('Ozon API error.', $status);
            }

            return new OzonApiResponse(defaultDtoClass: $dtoClass);
        }

        try {
            $decoded = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException) {
            throw new OzonException('Invalid Ozon response.', $status, ['body' => $raw]);
        }

        if (!is_array($decoded)) {
            throw new OzonException('Invalid Ozon response.', $status, ['body' => $raw]);
        }

        if ($status >= 400) {
            throw new OzonException($this->resolveErrorMessage($decoded), $status, $decoded);
        }

        return new OzonApiResponse($decoded, $dtoClass);
    }

    /**
     * @param array<string, mixed> $payload
     */
    private function encodePayload(array $payload): string
    {
        $value = $payload === [] ? (object) [] : $payload;
        $body  = json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        if ($body === false) {
            throw new OzonException('Failed to encode Ozon request.');
        }

        return $body;
    }

    /**
     * @param array<string, mixed> $payload
     */
    private function resolveErrorMessage(array $payload): string
    {
        $message = $payload['message'] ?? null;
        if (is_string($message) && trim($message) !== '') {
            return trim($message);
        }

        $error = $payload['error'] ?? null;
        if (is_array($error)) {
            $nested = $error['message'] ?? null;
            if (is_string($nested) && trim($nested) !== '') {
                return trim($nested);
            }
        }

        return 'Ozon API error.';
    }

    /**
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     */
    private function buildUrl(string $path, array $query = []): string
    {
        $url = $this->baseUrl . '/' . ltrim($path, '/');
        if ($query === []) {
            return $url;
        }

        return $url . '?' . http_build_query($query, '', '&', PHP_QUERY_RFC3986);
    }
}
