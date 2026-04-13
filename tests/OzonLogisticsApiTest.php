<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PHPUnit\Framework\TestCase;

final class OzonLogisticsApiTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * @param callable(object): mixed $invoke
     *
     * @dataProvider logisticsRoutesProvider
     */
    public function testLogisticsRoutes(string $expectedPath, string $expectedMethod, callable $invoke): void
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
    public static function logisticsRoutesProvider(): iterable
    {
        yield 'v1 cargoes label file' => [
            '/v1/cargoes-label/file/file-guid-1',
            'GET',
            static fn (object $client): mixed => $client->cargoesLabelV1()->file('file-guid-1'),
        ];
        yield 'v1 assembly carriage posting list' => [
            '/v1/assembly/carriage/posting/list',
            'POST',
            static fn (object $client): mixed => $client->assemblyCarriageV1()->postingList(['limit' => 10]),
        ];
        yield 'v1 assembly carriage product list' => [
            '/v1/assembly/carriage/product/list',
            'POST',
            static fn (object $client): mixed => $client->assemblyCarriageV1()->productList(['limit' => 10]),
        ];

        yield 'v1 cargoes label create' => [
            '/v1/cargoes-label/create',
            'POST',
            static fn (object $client): mixed => $client->cargoesLabelV1()->create(['cargoes_ids' => [1]]),
        ];
        yield 'v1 cargoes label get' => [
            '/v1/cargoes-label/get',
            'POST',
            static fn (object $client): mixed => $client->cargoesLabelV1()->get(['task_id' => 1]),
        ];
        yield 'v1 cargoes create' => [
            '/v1/cargoes/create',
            'POST',
            static fn (object $client): mixed => $client->cargoesV1()->create(['draft_id' => 1]),
        ];
        yield 'v1 cargoes create info' => [
            '/v1/cargoes/create/info',
            'POST',
            static fn (object $client): mixed => $client->cargoesV1()->createInfo(['task_id' => 1]),
        ];
        yield 'v1 cargoes delete' => [
            '/v1/cargoes/delete',
            'POST',
            static fn (object $client): mixed => $client->cargoesV1()->delete(['cargoes_ids' => [1]]),
        ];
        yield 'v1 cargoes delete status' => [
            '/v1/cargoes/delete/status',
            'POST',
            static fn (object $client): mixed => $client->cargoesV1()->deleteStatus(['task_id' => 1]),
        ];
        yield 'v1 cargoes get' => [
            '/v1/cargoes/get',
            'POST',
            static fn (object $client): mixed => $client->cargoesV1()->get(['cargoes_ids' => [1]]),
        ];
        yield 'v1 cargoes rules get' => [
            '/v1/cargoes/rules/get',
            'POST',
            static fn (object $client): mixed => $client->cargoesV1()->rulesGet(['warehouse_id' => 1]),
        ];
        yield 'v2 cargoes create info' => [
            '/v2/cargoes/create/info',
            'POST',
            static fn (object $client): mixed => $client->cargoesV2()->createInfo(['task_id' => 1]),
        ];

        yield 'v1 carriage act discrepancy pdf' => [
            '/v1/carriage/act-discrepancy/pdf',
            'POST',
            static fn (object $client): mixed => $client->carriageV1()->actDiscrepancyPdf(['carriage_id' => 1]),
        ];
        yield 'v1 carriage approve' => [
            '/v1/carriage/approve',
            'POST',
            static fn (object $client): mixed => $client->carriageV1()->approve(['carriage_id' => 1]),
        ];
        yield 'v1 carriage cancel' => [
            '/v1/carriage/cancel',
            'POST',
            static fn (object $client): mixed => $client->carriageV1()->cancel(['carriage_id' => 1]),
        ];
        yield 'v1 carriage create' => [
            '/v1/carriage/create',
            'POST',
            static fn (object $client): mixed => $client->carriageV1()->create(['draft_id' => 1]),
        ];
        yield 'v1 carriage delivery list' => [
            '/v1/carriage/delivery/list',
            'POST',
            static fn (object $client): mixed => $client->carriageV1()->deliveryList(['limit' => 10]),
        ];
        yield 'v1 carriage ettn status' => [
            '/v1/carriage/ettn/status',
            'POST',
            static fn (object $client): mixed => $client->carriageV1()->ettnStatus(['carriage_id' => 1]),
        ];
        yield 'v1 carriage get' => [
            '/v1/carriage/get',
            'POST',
            static fn (object $client): mixed => $client->carriageV1()->get(['carriage_id' => 1]),
        ];
        yield 'v1 carriage pass create' => [
            '/v1/carriage/pass/create',
            'POST',
            static fn (object $client): mixed => $client->carriageV1()->passCreate(['carriage_id' => 1]),
        ];
        yield 'v1 carriage pass delete' => [
            '/v1/carriage/pass/delete',
            'POST',
            static fn (object $client): mixed => $client->carriageV1()->passDelete(['pass_id' => 1]),
        ];
        yield 'v1 carriage pass update' => [
            '/v1/carriage/pass/update',
            'POST',
            static fn (object $client): mixed => $client->carriageV1()->passUpdate(['pass_id' => 1]),
        ];
        yield 'v1 carriage set postings' => [
            '/v1/carriage/set-postings',
            'POST',
            static fn (object $client): mixed => $client->carriageV1()->setPostings(['carriage_id' => 1]),
        ];
        yield 'v2 carriage delivery list' => [
            '/v2/carriage/delivery/list',
            'POST',
            static fn (object $client): mixed => $client->carriageV2()->deliveryList(['limit' => 10]),
        ];

        yield 'v1 draft create' => [
            '/v1/draft/create',
            'POST',
            static fn (object $client): mixed => $client->draftV1()->create(['cluster_id' => 1]),
        ];
        yield 'v1 draft create info' => [
            '/v1/draft/create/info',
            'POST',
            static fn (object $client): mixed => $client->draftV1()->createInfo(['task_id' => 1]),
        ];
        yield 'v1 draft crossdock create' => [
            '/v1/draft/crossdock/create',
            'POST',
            static fn (object $client): mixed => $client->draftV1()->crossdockCreate(['warehouse_id' => 1]),
        ];
        yield 'v1 draft direct create' => [
            '/v1/draft/direct/create',
            'POST',
            static fn (object $client): mixed => $client->draftV1()->directCreate(['warehouse_id' => 1]),
        ];
        yield 'v1 draft multi cluster create' => [
            '/v1/draft/multi-cluster/create',
            'POST',
            static fn (object $client): mixed => $client->draftV1()->multiClusterCreate(['warehouse_id' => 1]),
        ];
        yield 'v1 draft supply create' => [
            '/v1/draft/supply/create',
            'POST',
            static fn (object $client): mixed => $client->draftV1()->supplyCreate(['warehouse_id' => 1]),
        ];
        yield 'v1 draft supply create status' => [
            '/v1/draft/supply/create/status',
            'POST',
            static fn (object $client): mixed => $client->draftV1()->supplyCreateStatus(['task_id' => 1]),
        ];
        yield 'v1 draft timeslot info' => [
            '/v1/draft/timeslot/info',
            'POST',
            static fn (object $client): mixed => $client->draftV1()->timeslotInfo(['draft_id' => 1]),
        ];

        yield 'v2 draft create info' => [
            '/v2/draft/create/info',
            'POST',
            static fn (object $client): mixed => $client->draftV2()->createInfo(['task_id' => 1]),
        ];
        yield 'v2 draft supply create' => [
            '/v2/draft/supply/create',
            'POST',
            static fn (object $client): mixed => $client->draftV2()->supplyCreate(['warehouse_id' => 1]),
        ];
        yield 'v2 draft supply create status' => [
            '/v2/draft/supply/create/status',
            'POST',
            static fn (object $client): mixed => $client->draftV2()->supplyCreateStatus(['task_id' => 1]),
        ];
        yield 'v2 draft timeslot info' => [
            '/v2/draft/timeslot/info',
            'POST',
            static fn (object $client): mixed => $client->draftV2()->timeslotInfo(['draft_id' => 1]),
        ];

        yield 'v1 fbp act from create' => [
            '/v1/fbp/act-from/create',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->actFromCreate(['draft_id' => 1]),
        ];
        yield 'v1 fbp act from get' => [
            '/v1/fbp/act-from/get',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->actFromGet(['act_id' => 1]),
        ];
        yield 'v1 fbp act to create' => [
            '/v1/fbp/act-to/create',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->actToCreate(['draft_id' => 1]),
        ];
        yield 'v1 fbp act to get' => [
            '/v1/fbp/act-to/get',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->actToGet(['act_id' => 1]),
        ];
        yield 'v1 fbp archive get' => [
            '/v1/fbp/archive/get',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->archiveGet(['id' => 1]),
        ];
        yield 'v1 fbp archive list' => [
            '/v1/fbp/archive/list',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->archiveList(['limit' => 10]),
        ];

        yield 'v1 fbp draft direct create' => [
            '/v1/fbp/draft/direct/create',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDirectCreate(['warehouse_id' => 1]),
        ];
        yield 'v1 fbp draft direct delete' => [
            '/v1/fbp/draft/direct/delete',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDirectDelete(['draft_id' => 1]),
        ];
        yield 'v1 fbp draft direct product validate' => [
            '/v1/fbp/draft/direct/product/validate',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDirectProductValidate(['items' => []]),
        ];
        yield 'v1 fbp draft direct registrate' => [
            '/v1/fbp/draft/direct/registrate',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDirectRegistrate(['draft_id' => 1]),
        ];
        yield 'v1 fbp draft direct seller dlv create' => [
            '/v1/fbp/draft/direct/seller-dlv/create',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDirectSellerDlvCreate(['draft_id' => 1]),
        ];
        yield 'v1 fbp draft direct seller dlv edit' => [
            '/v1/fbp/draft/direct/seller-dlv/edit',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDirectSellerDlvEdit(['draft_id' => 1]),
        ];
        yield 'v1 fbp draft direct timeslot edit' => [
            '/v1/fbp/draft/direct/timeslot/edit',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDirectTimeslotEdit(['draft_id' => 1]),
        ];
        yield 'v1 fbp draft direct timeslot get' => [
            '/v1/fbp/draft/direct/timeslot/get',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDirectTimeslotGet(['draft_id' => 1]),
        ];
        yield 'v1 fbp draft direct tpl dlv create' => [
            '/v1/fbp/draft/direct/tpl-dlv/create',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDirectTplDlvCreate(['draft_id' => 1]),
        ];
        yield 'v1 fbp draft direct tpl dlv edit' => [
            '/v1/fbp/draft/direct/tpl-dlv/edit',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDirectTplDlvEdit(['draft_id' => 1]),
        ];

        yield 'v1 fbp draft drop off create' => [
            '/v1/fbp/draft/drop-off/create',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDropOffCreate(['warehouse_id' => 1]),
        ];
        yield 'v1 fbp draft drop off delete' => [
            '/v1/fbp/draft/drop-off/delete',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDropOffDelete(['draft_id' => 1]),
        ];
        yield 'v1 fbp draft drop off dlv edit' => [
            '/v1/fbp/draft/drop-off/dlv/edit',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDropOffDlvEdit(['draft_id' => 1]),
        ];
        yield 'v1 fbp draft drop off point list' => [
            '/v1/fbp/draft/drop-off/point/list',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDropOffPointList(['cluster_id' => 1]),
        ];
        yield 'v1 fbp draft drop off point timetable' => [
            '/v1/fbp/draft/drop-off/point/timetable',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDropOffPointTimetable(['point_id' => 1]),
        ];
        yield 'v1 fbp draft drop off product validate' => [
            '/v1/fbp/draft/drop-off/product/validate',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDropOffProductValidate(['items' => []]),
        ];
        yield 'v1 fbp draft drop off province list' => [
            '/v1/fbp/draft/drop-off/province/list',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDropOffProvinceList(['cluster_id' => 1]),
        ];
        yield 'v1 fbp draft drop off registrate' => [
            '/v1/fbp/draft/drop-off/registrate',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftDropOffRegistrate(['draft_id' => 1]),
        ];

        yield 'v1 fbp draft get' => [
            '/v1/fbp/draft/get',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftGet(['draft_id' => 1]),
        ];
        yield 'v1 fbp draft list' => [
            '/v1/fbp/draft/list',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftList(['limit' => 10]),
        ];

        yield 'v1 fbp draft pick up create' => [
            '/v1/fbp/draft/pick-up/create',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftPickUpCreate(['warehouse_id' => 1]),
        ];
        yield 'v1 fbp draft pick up delete' => [
            '/v1/fbp/draft/pick-up/delete',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftPickUpDelete(['draft_id' => 1]),
        ];
        yield 'v1 fbp draft pick up dlv edit' => [
            '/v1/fbp/draft/pick-up/dlv/edit',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftPickUpDlvEdit(['draft_id' => 1]),
        ];
        yield 'v1 fbp draft pick up product validate' => [
            '/v1/fbp/draft/pick-up/product/validate',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftPickUpProductValidate(['items' => []]),
        ];
        yield 'v1 fbp draft pick up registrate' => [
            '/v1/fbp/draft/pick-up/registrate',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->draftPickUpRegistrate(['draft_id' => 1]),
        ];

        yield 'v1 fbp label create' => [
            '/v1/fbp/label/create',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->labelCreate(['draft_id' => 1]),
        ];
        yield 'v1 fbp label get' => [
            '/v1/fbp/label/get',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->labelGet(['task_id' => 1]),
        ];

        yield 'v1 fbp order direct cancel' => [
            '/v1/fbp/order/direct/cancel',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->orderDirectCancel(['order_id' => 1]),
        ];
        yield 'v1 fbp order direct seller dlv edit' => [
            '/v1/fbp/order/direct/seller-dlv/edit',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->orderDirectSellerDlvEdit(['order_id' => 1]),
        ];
        yield 'v1 fbp order direct timeslot edit' => [
            '/v1/fbp/order/direct/timeslot/edit',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->orderDirectTimeslotEdit(['order_id' => 1]),
        ];
        yield 'v1 fbp order direct timeslot list' => [
            '/v1/fbp/order/direct/timeslot/list',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->orderDirectTimeslotList(['order_id' => 1]),
        ];
        yield 'v1 fbp order drop off cancel' => [
            '/v1/fbp/order/drop-off/cancel',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->orderDropOffCancel(['order_id' => 1]),
        ];
        yield 'v1 fbp order drop off dlv edit' => [
            '/v1/fbp/order/drop-off/dlv/edit',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->orderDropOffDlvEdit(['order_id' => 1]),
        ];
        yield 'v1 fbp order drop off timetable' => [
            '/v1/fbp/order/drop-off/timetable',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->orderDropOffTimetable(['order_id' => 1]),
        ];
        yield 'v1 fbp order get' => [
            '/v1/fbp/order/get',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->orderGet(['order_id' => 1]),
        ];
        yield 'v1 fbp order list' => [
            '/v1/fbp/order/list',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->orderList(['limit' => 10]),
        ];
        yield 'v1 fbp order pick up cancel' => [
            '/v1/fbp/order/pick-up/cancel',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->orderPickUpCancel(['order_id' => 1]),
        ];
        yield 'v1 fbp order pick up dlv edit' => [
            '/v1/fbp/order/pick-up/dlv/edit',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->orderPickUpDlvEdit(['order_id' => 1]),
        ];
        yield 'v1 fbp warehouse list' => [
            '/v1/fbp/warehouse/list',
            'POST',
            static fn (object $client): mixed => $client->fbpV1()->warehouseList(['limit' => 10]),
        ];
    }
}
