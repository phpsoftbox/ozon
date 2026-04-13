<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PHPUnit\Framework\TestCase;

final class OzonCommercialApiTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * @param callable(object): mixed $invoke
     *
     * @dataProvider commercialRoutesProvider
     */
    public function testCommercialRoutes(string $expectedPath, string $expectedMethod, callable $invoke): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));
        $invoke($client);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame($expectedMethod, $request->getMethod());
        self::assertStringContainsString($expectedPath, (string) $request->getUri());
    }

    /**
     * @return iterable<string, array{0: string, 1: string, 2: callable(object): mixed}>
     */
    public static function commercialRoutesProvider(): iterable
    {
        yield 'v1 actions list' => [
            '/v1/actions',
            'GET',
            static fn (object $client): mixed => $client->actionsV1()->list(),
        ];
        yield 'v1 actions candidates' => [
            '/v1/actions/candidates',
            'POST',
            static fn (object $client): mixed => $client->actionsV1()->candidates(['action_id' => 1]),
        ];
        yield 'v1 actions products' => [
            '/v1/actions/products',
            'POST',
            static fn (object $client): mixed => $client->actionsV1()->products(['action_id' => 1]),
        ];
        yield 'v1 actions products activate' => [
            '/v1/actions/products/activate',
            'POST',
            static fn (object $client): mixed => $client->actionsV1()->productsActivate(['action_id' => 1]),
        ];
        yield 'v1 actions products deactivate' => [
            '/v1/actions/products/deactivate',
            'POST',
            static fn (object $client): mixed => $client->actionsV1()->productsDeactivate(['action_id' => 1]),
        ];
        yield 'v1 actions discounts task list' => [
            '/v1/actions/discounts-task/list',
            'POST',
            static fn (object $client): mixed => $client->actionsV1()->discountsTaskList(['limit' => 10]),
        ];
        yield 'v1 actions discounts task approve' => [
            '/v1/actions/discounts-task/approve',
            'POST',
            static fn (object $client): mixed => $client->actionsV1()->discountsTaskApprove(['task_id' => 1]),
        ];
        yield 'v1 actions discounts task decline' => [
            '/v1/actions/discounts-task/decline',
            'POST',
            static fn (object $client): mixed => $client->actionsV1()->discountsTaskDecline(['task_id' => 1]),
        ];
        yield 'v2 actions discounts task list' => [
            '/v2/actions/discounts-task/list',
            'POST',
            static fn (object $client): mixed => $client->actionsV2()->discountsTaskList(['limit' => 10]),
        ];

        yield 'v1 seller actions create discount' => [
            '/v1/seller-actions/create/discount',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->createDiscount(['name' => 'sale']),
        ];
        yield 'v1 seller actions create discount with condition' => [
            '/v1/seller-actions/create/discount-with-condition',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->createDiscountWithCondition(['name' => 'sale']),
        ];
        yield 'v1 seller actions create installment' => [
            '/v1/seller-actions/create/installment',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->createInstallment(['name' => 'sale']),
        ];
        yield 'v1 seller actions create multi level discount' => [
            '/v1/seller-actions/create/multi-level-discount',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->createMultiLevelDiscount(['name' => 'sale']),
        ];
        yield 'v1 seller actions create ozon card discount' => [
            '/v1/seller-actions/create/ozon-card-discount',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->createOzonCardDiscount(['name' => 'sale']),
        ];
        yield 'v1 seller actions create voucher' => [
            '/v1/seller-actions/create/voucher',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->createVoucher(['name' => 'sale']),
        ];
        yield 'v1 seller actions update discount' => [
            '/v1/seller-actions/update/discount',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->updateDiscount(['id' => 1]),
        ];
        yield 'v1 seller actions update discount with condition' => [
            '/v1/seller-actions/update/discount-with-condition',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->updateDiscountWithCondition(['id' => 1]),
        ];
        yield 'v1 seller actions update installment' => [
            '/v1/seller-actions/update/installment',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->updateInstallment(['id' => 1]),
        ];
        yield 'v1 seller actions update multi level discount' => [
            '/v1/seller-actions/update/multi-level-discount',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->updateMultiLevelDiscount(['id' => 1]),
        ];
        yield 'v1 seller actions update ozon card discount' => [
            '/v1/seller-actions/update/ozon-card-discount',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->updateOzonCardDiscount(['id' => 1]),
        ];
        yield 'v1 seller actions update voucher' => [
            '/v1/seller-actions/update/voucher',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->updateVoucher(['id' => 1]),
        ];
        yield 'v1 seller actions products add' => [
            '/v1/seller-actions/products/add',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->productsAdd(['action_id' => 1]),
        ];
        yield 'v1 seller actions products candidates' => [
            '/v1/seller-actions/products/candidates',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->productsCandidates(['action_id' => 1]),
        ];
        yield 'v1 seller actions products delete' => [
            '/v1/seller-actions/products/delete',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->productsDelete(['action_id' => 1]),
        ];
        yield 'v1 seller actions products list' => [
            '/v1/seller-actions/products/list',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->productsList(['action_id' => 1]),
        ];
        yield 'v1 seller actions archive' => [
            '/v1/seller-actions/archive',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->archive(['action_id' => 1]),
        ];
        yield 'v1 seller actions change activity' => [
            '/v1/seller-actions/change-activity',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->changeActivity(['action_id' => 1]),
        ];
        yield 'v1 seller actions list' => [
            '/v1/seller-actions/list',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->list(['limit' => 10]),
        ];
        yield 'v1 seller actions voucher get' => [
            '/v1/seller-actions/voucher/get',
            'POST',
            static fn (object $client): mixed => $client->sellerActionsV1()->voucherGet(['action_id' => 1]),
        ];

        yield 'v1 pricing competitors list' => [
            '/v1/pricing-strategy/competitors/list',
            'POST',
            static fn (object $client): mixed => $client->pricingStrategyV1()->competitorsList(['strategy_id' => 1]),
        ];
        yield 'v1 pricing list' => [
            '/v1/pricing-strategy/list',
            'POST',
            static fn (object $client): mixed => $client->pricingStrategyV1()->list(['limit' => 10]),
        ];
        yield 'v1 pricing create' => [
            '/v1/pricing-strategy/create',
            'POST',
            static fn (object $client): mixed => $client->pricingStrategyV1()->create(['name' => 's1']),
        ];
        yield 'v1 pricing info' => [
            '/v1/pricing-strategy/info',
            'POST',
            static fn (object $client): mixed => $client->pricingStrategyV1()->info(['strategy_id' => 1]),
        ];
        yield 'v1 pricing update' => [
            '/v1/pricing-strategy/update',
            'POST',
            static fn (object $client): mixed => $client->pricingStrategyV1()->update(['strategy_id' => 1]),
        ];
        yield 'v1 pricing products add' => [
            '/v1/pricing-strategy/products/add',
            'POST',
            static fn (object $client): mixed => $client->pricingStrategyV1()->productsAdd(['strategy_id' => 1]),
        ];
        yield 'v1 pricing strategy ids by product ids' => [
            '/v1/pricing-strategy/strategy-ids-by-product-ids',
            'POST',
            static fn (object $client): mixed => $client->pricingStrategyV1()->strategyIdsByProductIds(['product_ids' => [1]]),
        ];
        yield 'v1 pricing products list' => [
            '/v1/pricing-strategy/products/list',
            'POST',
            static fn (object $client): mixed => $client->pricingStrategyV1()->productsList(['strategy_id' => 1]),
        ];
        yield 'v1 pricing product info' => [
            '/v1/pricing-strategy/product/info',
            'POST',
            static fn (object $client): mixed => $client->pricingStrategyV1()->productInfo(['product_id' => 1]),
        ];
        yield 'v1 pricing products delete' => [
            '/v1/pricing-strategy/products/delete',
            'POST',
            static fn (object $client): mixed => $client->pricingStrategyV1()->productsDelete(['strategy_id' => 1]),
        ];
        yield 'v1 pricing status' => [
            '/v1/pricing-strategy/status',
            'POST',
            static fn (object $client): mixed => $client->pricingStrategyV1()->status(['strategy_id' => 1]),
        ];
        yield 'v1 pricing delete' => [
            '/v1/pricing-strategy/delete',
            'POST',
            static fn (object $client): mixed => $client->pricingStrategyV1()->delete(['strategy_id' => 1]),
        ];

        yield 'v1 brand company certification list' => [
            '/v1/brand/company-certification/list',
            'POST',
            static fn (object $client): mixed => $client->brandV1()->companyCertificationList(['limit' => 10]),
        ];
        yield 'v1 product certificate accordance types' => [
            '/v1/product/certificate/accordance-types',
            'GET',
            static fn (object $client): mixed => $client->productCertificateV1()->accordanceTypes(),
        ];
        yield 'v2 product certificate accordance types list' => [
            '/v2/product/certificate/accordance-types/list',
            'GET',
            static fn (object $client): mixed => $client->productCertificateV2()->accordanceTypesList(),
        ];
        yield 'v1 product certificate types' => [
            '/v1/product/certificate/types',
            'GET',
            static fn (object $client): mixed => $client->productCertificateV1()->types(),
        ];
        yield 'v1 product certificate create' => [
            '/v1/product/certificate/create',
            'POST',
            static fn (object $client): mixed => $client->productCertificateV1()->create(['type_code' => 'DECL']),
        ];
        yield 'v1 product certificate bind' => [
            '/v1/product/certificate/bind',
            'POST',
            static fn (object $client): mixed => $client->productCertificateV1()->bind(['certificate_id' => 1]),
        ];
        yield 'v1 product certificate delete' => [
            '/v1/product/certificate/delete',
            'POST',
            static fn (object $client): mixed => $client->productCertificateV1()->delete(['certificate_id' => 1]),
        ];
        yield 'v1 product certificate info' => [
            '/v1/product/certificate/info',
            'POST',
            static fn (object $client): mixed => $client->productCertificateV1()->info(['certificate_id' => 1]),
        ];
        yield 'v1 product certificate list' => [
            '/v1/product/certificate/list',
            'POST',
            static fn (object $client): mixed => $client->productCertificateV1()->list(['limit' => 10]),
        ];
        yield 'v1 product certificate product status list' => [
            '/v1/product/certificate/product_status/list',
            'POST',
            static fn (object $client): mixed => $client->productCertificateV1()->productStatusList(['certificate_id' => 1]),
        ];
        yield 'v1 product certificate products list' => [
            '/v1/product/certificate/products/list',
            'POST',
            static fn (object $client): mixed => $client->productCertificateV1()->productsList(['certificate_id' => 1]),
        ];
        yield 'v1 product certificate unbind' => [
            '/v1/product/certificate/unbind',
            'POST',
            static fn (object $client): mixed => $client->productCertificateV1()->unbind(['certificate_id' => 1]),
        ];
        yield 'v1 product certificate rejection reasons list' => [
            '/v1/product/certificate/rejection_reasons/list',
            'POST',
            static fn (object $client): mixed => $client->productCertificateV1()->rejectionReasonsList(['limit' => 10]),
        ];
        yield 'v1 product certificate status list' => [
            '/v1/product/certificate/status/list',
            'POST',
            static fn (object $client): mixed => $client->productCertificateV1()->statusList(['limit' => 10]),
        ];

        yield 'v1 delivery method list' => [
            '/v1/delivery-method/list',
            'POST',
            static fn (object $client): mixed => $client->deliveryMethodV1()->list(['limit' => 10]),
        ];
        yield 'v1 delivery method return settings get' => [
            '/v1/delivery-method/return/settings/get',
            'POST',
            static fn (object $client): mixed => $client->deliveryMethodV1()->returnSettingsGet(['delivery_method_id' => 1]),
        ];
        yield 'v2 delivery method list' => [
            '/v2/delivery-method/list',
            'POST',
            static fn (object $client): mixed => $client->deliveryMethodV2()->list(['limit' => 10]),
        ];

        yield 'v1 warehouse list' => [
            '/v1/warehouse/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->list(['limit' => 10]),
        ];
        yield 'v2 warehouse list' => [
            '/v2/warehouse/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV2()->list(['limit' => 10]),
        ];
        yield 'v1 warehouse operation status' => [
            '/v1/warehouse/operation/status',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->operationStatus(['task_id' => 1]),
        ];
        yield 'v1 warehouse archive' => [
            '/v1/warehouse/archive',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->archive(['warehouse_id' => 1]),
        ];
        yield 'v1 warehouse unarchive' => [
            '/v1/warehouse/unarchive',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->unarchive(['warehouse_id' => 1]),
        ];
        yield 'v1 warehouse invalid products get' => [
            '/v1/warehouse/invalid-products/get',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->invalidProductsGet(['warehouse_id' => 1]),
        ];
        yield 'v1 warehouse with invalid products' => [
            '/v1/warehouse/warehouses-with-invalid-products',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->warehousesWithInvalidProducts(),
        ];
        yield 'v1 warehouse fbo list' => [
            '/v1/warehouse/fbo/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fboList(),
        ];
        yield 'v1 warehouse fbo seller list' => [
            '/v1/warehouse/fbo/seller/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fboSellerList(),
        ];
        yield 'v1 warehouse ozon list' => [
            '/v1/warehouse/ozon/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->ozonList(),
        ];
        yield 'v1 warehouse rfbs pause' => [
            '/v1/warehouse/rfbs/pause',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->rfbsPause(['warehouse_id' => 1]),
        ];
        yield 'v1 warehouse rfbs unpause' => [
            '/v1/warehouse/rfbs/unpause',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->rfbsUnpause(['warehouse_id' => 1]),
        ];
        yield 'v1 warehouse fbs create drop off list' => [
            '/v1/warehouse/fbs/create/drop-off/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsCreateDropOffList(),
        ];
        yield 'v1 warehouse fbs update drop off list' => [
            '/v1/warehouse/fbs/update/drop-off/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsUpdateDropOffList(),
        ];
        yield 'v1 warehouse fbs create drop off timeslot list' => [
            '/v1/warehouse/fbs/create/drop-off/timeslot/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsCreateDropOffTimeslotList(),
        ];
        yield 'v1 warehouse fbs update drop off timeslot list' => [
            '/v1/warehouse/fbs/update/drop-off/timeslot/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsUpdateDropOffTimeslotList(),
        ];
        yield 'v1 warehouse fbs create pick up timeslot list' => [
            '/v1/warehouse/fbs/create/pick-up/timeslot/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsCreatePickUpTimeslotList(),
        ];
        yield 'v1 warehouse fbs update pick up timeslot list' => [
            '/v1/warehouse/fbs/update/pick-up/timeslot/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsUpdatePickUpTimeslotList(),
        ];
        yield 'v1 warehouse fbs create' => [
            '/v1/warehouse/fbs/create',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsCreate(['name' => 'w1']),
        ];
        yield 'v1 warehouse fbs update' => [
            '/v1/warehouse/fbs/update',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsUpdate(['warehouse_id' => 1]),
        ];
        yield 'v1 warehouse fbs first mile update' => [
            '/v1/warehouse/fbs/first-mile/update',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsFirstMileUpdate(['warehouse_id' => 1]),
        ];
        yield 'v1 warehouse fbs create return point list' => [
            '/v1/warehouse/fbs/create/return-point/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsCreateReturnPointList(),
        ];
        yield 'v1 warehouse fbs update return point list' => [
            '/v1/warehouse/fbs/update/return-point/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsUpdateReturnPointList(),
        ];
        yield 'v1 warehouse fbs return mile info' => [
            '/v1/warehouse/fbs/return-mile/info',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsReturnMileInfo(['warehouse_id' => 1]),
        ];
        yield 'v1 warehouse fbs return mile check' => [
            '/v1/warehouse/fbs/return-mile/check',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsReturnMileCheck(['warehouse_id' => 1]),
        ];
        yield 'v1 warehouse fbs pickup courier create' => [
            '/v1/warehouse/fbs/pickup/courier/create',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsPickupCourierCreate(['warehouse_id' => 1]),
        ];
        yield 'v1 warehouse fbs pickup courier cancel' => [
            '/v1/warehouse/fbs/pickup/courier/cancel',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsPickupCourierCancel(['pickup_id' => 1]),
        ];
        yield 'v1 warehouse fbs pickup history list' => [
            '/v1/warehouse/fbs/pickup/history/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsPickupHistoryList(['limit' => 10]),
        ];
        yield 'v1 warehouse fbs pickup planning list' => [
            '/v1/warehouse/fbs/pickup/planning/list',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->fbsPickupPlanningList(['limit' => 10]),
        ];
        yield 'v1 warehouse erfbs aggregator create' => [
            '/v1/warehouse/erfbs/aggregator/create',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->erfbsAggregatorCreate(['name' => 'w1']),
        ];
        yield 'v1 warehouse erfbs update' => [
            '/v1/warehouse/erfbs/update',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->erfbsUpdate(['warehouse_id' => 1]),
        ];
        yield 'v1 warehouse erfbs aggregator delivery method update' => [
            '/v1/warehouse/erfbs/aggregator/delivery-method/update',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->erfbsAggregatorDeliveryMethodUpdate(['warehouse_id' => 1]),
        ];
        yield 'v1 warehouse erfbs non integrated create' => [
            '/v1/warehouse/erfbs/non-integrated/create',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->erfbsNonIntegratedCreate(['name' => 'w1']),
        ];
        yield 'v1 warehouse erfbs non integrated delivery method update' => [
            '/v1/warehouse/erfbs/non-integrated/delivery-method/update',
            'POST',
            static fn (object $client): mixed => $client->warehouseV1()->erfbsNonIntegratedDeliveryMethodUpdate(['warehouse_id' => 1]),
        ];
    }
}
