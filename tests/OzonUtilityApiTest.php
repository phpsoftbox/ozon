<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PHPUnit\Framework\TestCase;

final class OzonUtilityApiTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * @param callable(object): mixed $invoke
     *
     * @dataProvider utilityRoutesProvider
     */
    public function testUtilityRoutes(string $expectedPath, string $expectedMethod, callable $invoke): void
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
    public static function utilityRoutesProvider(): iterable
    {
        yield 'v1 cluster list' => [
            '/v1/cluster/list',
            'POST',
            static fn (object $client): mixed => $client->clusterV1()->list(['limit' => 10]),
        ];
        yield 'v2 cluster list' => [
            '/v2/cluster/list',
            'POST',
            static fn (object $client): mixed => $client->clusterV2()->list(['limit' => 10]),
        ];

        yield 'v1 delivery check' => [
            '/v1/delivery/check',
            'POST',
            static fn (object $client): mixed => $client->deliveryV1()->check(['address' => 'Moscow']),
        ];
        yield 'v1 delivery map' => [
            '/v1/delivery/map',
            'POST',
            static fn (object $client): mixed => $client->deliveryV1()->map(['address' => 'Moscow']),
        ];
        yield 'v1 delivery point info' => [
            '/v1/delivery/point/info',
            'POST',
            static fn (object $client): mixed => $client->deliveryV1()->pointInfo(['point_id' => 1]),
        ];
        yield 'v1 delivery point list' => [
            '/v1/delivery/point/list',
            'POST',
            static fn (object $client): mixed => $client->deliveryV1()->pointList(['limit' => 10]),
        ];
        yield 'v2 delivery checkout' => [
            '/v2/delivery/checkout',
            'POST',
            static fn (object $client): mixed => $client->deliveryV2()->checkout(['items' => []]),
        ];

        yield 'v1 pass list' => [
            '/v1/pass/list',
            'POST',
            static fn (object $client): mixed => $client->passV1()->list(['limit' => 10]),
        ];

        yield 'v1 polygon bind' => [
            '/v1/polygon/bind',
            'POST',
            static fn (object $client): mixed => $client->polygonV1()->bind(['polygon_id' => 1]),
        ];
        yield 'v1 polygon create' => [
            '/v1/polygon/create',
            'POST',
            static fn (object $client): mixed => $client->polygonV1()->create(['name' => 'Zone-1']),
        ];
        yield 'v1 polygon delete' => [
            '/v1/polygon/delete',
            'POST',
            static fn (object $client): mixed => $client->polygonV1()->delete(['polygon_id' => 1]),
        ];
        yield 'v1 polygon list' => [
            '/v1/polygon/list',
            'POST',
            static fn (object $client): mixed => $client->polygonV1()->list(['limit' => 10]),
        ];
        yield 'v1 polygon time coordinates update' => [
            '/v1/polygon/time/coordinates/update',
            'POST',
            static fn (object $client): mixed => $client->polygonV1()->timeCoordinatesUpdate(['polygon_id' => 1]),
        ];
        yield 'v1 polygon time set' => [
            '/v1/polygon/time/set',
            'POST',
            static fn (object $client): mixed => $client->polygonV1()->timeSet(['polygon_id' => 1]),
        ];
        yield 'v2 polygon bind' => [
            '/v2/polygon/bind',
            'POST',
            static fn (object $client): mixed => $client->polygonV2()->bind(['polygon_id' => 1]),
        ];

        yield 'v1 posting cutoff set' => [
            '/v1/posting/cutoff/set',
            'POST',
            static fn (object $client): mixed => $client->postingV1()->cutoffSet(['posting_number' => 'p1']),
        ];
        yield 'v1 posting digital codes upload' => [
            '/v1/posting/digital/codes/upload',
            'POST',
            static fn (object $client): mixed => $client->postingV1()->digitalCodesUpload(['posting_number' => 'p1']),
        ];
        yield 'v1 posting digital list' => [
            '/v1/posting/digital/list',
            'POST',
            static fn (object $client): mixed => $client->postingV1()->digitalList(['limit' => 10]),
        ];
        yield 'v1 posting marks' => [
            '/v1/posting/marks',
            'POST',
            static fn (object $client): mixed => $client->postingV1()->marks(['posting_number' => ['p1']]),
        ];
        yield 'v1 posting unpaid legal product list' => [
            '/v1/posting/unpaid-legal/product/list',
            'POST',
            static fn (object $client): mixed => $client->postingV1()->unpaidLegalProductList(['limit' => 10]),
        ];

        yield 'v1 removal from stock list' => [
            '/v1/removal/from-stock/list',
            'POST',
            static fn (object $client): mixed => $client->removalV1()->fromStockList(['limit' => 10]),
        ];
        yield 'v1 removal from supply list' => [
            '/v1/removal/from-supply/list',
            'POST',
            static fn (object $client): mixed => $client->removalV1()->fromSupplyList(['limit' => 10]),
        ];

        yield 'v2 order create' => [
            '/v2/order/create',
            'POST',
            static fn (object $client): mixed => $client->orderV2()->create(['items' => []]),
        ];
    }
}
