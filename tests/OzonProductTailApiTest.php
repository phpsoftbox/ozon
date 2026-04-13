<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\Dto\V5\Product\GetProductInfoPricesV5Response;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PHPUnit\Framework\TestCase;

final class OzonProductTailApiTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * @param callable(object): mixed $invoke
     *
     * @dataProvider productTailRoutesProvider
     */
    public function testProductTailRoutes(string $expectedPath, string $expectedMethod, callable $invoke): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));
        $invoke($client);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame($expectedMethod, $request->getMethod());
        self::assertStringContainsString($expectedPath, (string) $request->getUri());
    }

    /**
     * Проверяет, что product V5 infoPrices() можно явно преобразовать в DTO ответа.
     */
    public function testProductV5InfoPricesCanMakeDto(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{
            "cursor": "",
            "items": [
                {
                    "offer_id": "SKU-1",
                    "product_id": 10001,
                    "price": {
                        "currency_code": "RUB",
                        "price": 1000
                    }
                }
            ],
            "total": 1
        }'));

        $response = $client->productV5()->infoPrices([
            'filter' => ['offer_id' => ['SKU-1']],
            'limit'  => 1,
        ])->makeDto(GetProductInfoPricesV5Response::class);

        self::assertInstanceOf(GetProductInfoPricesV5Response::class, $response);
        self::assertSame(1, $response->total);
        self::assertSame('SKU-1', $response->items[0]->offerId);
        self::assertSame(1000.0, $response->items[0]->price?->price);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v5/product/info/prices', (string) $request->getUri());
        self::assertStringContainsString('"offer_id":["SKU-1"]', (string) $request->getBody());
    }

    /**
     * @return iterable<string, array{0: string, 1: string, 2: callable(object): mixed}>
     */
    public static function productTailRoutesProvider(): iterable
    {
        yield 'v1 barcode add' => [
            '/v1/barcode/add',
            'POST',
            static fn (object $client): mixed => $client->barcodeV1()->add(['sku' => [1]]),
        ];
        yield 'v1 barcode generate' => [
            '/v1/barcode/generate',
            'POST',
            static fn (object $client): mixed => $client->barcodeV1()->generate(['quantity' => 10]),
        ];
        yield 'v1 product update offer id' => [
            '/v1/product/update/offer-id',
            'POST',
            static fn (object $client): mixed => $client->productV1()->updateOfferId(['update_items' => []]),
        ];
        yield 'v1 product info subscription' => [
            '/v1/product/info/subscription',
            'POST',
            static fn (object $client): mixed => $client->productV1()->infoSubscription(['offer_id' => ['SKU-1']]),
        ];
        yield 'v1 product related sku get' => [
            '/v1/product/related-sku/get',
            'POST',
            static fn (object $client): mixed => $client->productV1()->relatedSkuGet(['sku' => [1]]),
        ];
        yield 'v1 product info wrong volume' => [
            '/v1/product/info/wrong-volume',
            'POST',
            static fn (object $client): mixed => $client->productV1()->infoWrongVolume(['limit' => 10]),
        ];
        yield 'v1 product placement zone info' => [
            '/v1/product/placement-zone/info',
            'POST',
            static fn (object $client): mixed => $client->productV1()->placementZoneInfo(['sku' => [1]]),
        ];
        yield 'v1 product info warehouse stocks' => [
            '/v1/product/info/warehouse/stocks',
            'POST',
            static fn (object $client): mixed => $client->productV1()->infoWarehouseStocks(['sku' => [1]]),
        ];
        yield 'v1 product update discount' => [
            '/v1/product/update/discount',
            'POST',
            static fn (object $client): mixed => $client->productV1()->updateDiscount(['products' => []]),
        ];
        yield 'v1 product action timer update' => [
            '/v1/product/action/timer/update',
            'POST',
            static fn (object $client): mixed => $client->productV1()->actionTimerUpdate(['action_id' => 1]),
        ];
        yield 'v1 product action timer status' => [
            '/v1/product/action/timer/status',
            'POST',
            static fn (object $client): mixed => $client->productV1()->actionTimerStatus(['action_id' => 1]),
        ];
        yield 'v1 product digital stocks import' => [
            '/v1/product/digital/stocks/import',
            'POST',
            static fn (object $client): mixed => $client->productV1()->digitalStocksImport(['stocks' => []]),
        ];
        yield 'v1 product certification list' => [
            '/v1/product/certification/list',
            'POST',
            static fn (object $client): mixed => $client->productV1()->certificationList(['sku' => [1]]),
        ];
        yield 'v1 product visibility set' => [
            '/v1/product/visibility/set',
            'POST',
            static fn (object $client): mixed => $client->productV1()->visibilitySet(['offer_id' => ['SKU-1']]),
        ];
        yield 'v1 product quant info' => [
            '/v1/product/quant/info',
            'POST',
            static fn (object $client): mixed => $client->productV1()->quantInfo(['sku' => [1]]),
        ];
        yield 'v1 product quant list' => [
            '/v1/product/quant/list',
            'POST',
            static fn (object $client): mixed => $client->productV1()->quantList(['limit' => 10]),
        ];
        yield 'v1 product stairway discount by quantity get' => [
            '/v1/product/stairway-discount/by-quantity/get',
            'POST',
            static fn (object $client): mixed => $client->productV1()->stairwayDiscountByQuantityGet(['sku' => [1]]),
        ];
        yield 'v1 product stairway discount by quantity set' => [
            '/v1/product/stairway-discount/by-quantity/set',
            'POST',
            static fn (object $client): mixed => $client->productV1()->stairwayDiscountByQuantitySet(['items' => []]),
        ];
        yield 'v2 product certification list' => [
            '/v2/product/certification/list',
            'POST',
            static fn (object $client): mixed => $client->productV2()->certificationList(['sku' => [1]]),
        ];
        yield 'v4 product info limit' => [
            '/v4/product/info/limit',
            'POST',
            static fn (object $client): mixed => $client->productV4()->infoLimit(['filter' => []]),
        ];
        yield 'v4 product info stocks' => [
            '/v4/product/info/stocks',
            'POST',
            static fn (object $client): mixed => $client->productV4()->infoStocks(['filter' => []]),
        ];
        yield 'v5 product info prices' => [
            '/v5/product/info/prices',
            'POST',
            static fn (object $client): mixed => $client->productV5()->infoPrices(['product_id' => [1]]),
        ];
    }
}
