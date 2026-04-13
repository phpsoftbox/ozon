<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use PhpSoftBox\Collection\Collection;
use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\Dto\V1\Finance\V1GetFinanceBalanceV1Response;
use PhpSoftBox\Ozon\Dto\V2\ProductPictures\V2ProductInfoPicturesResponse;
use PhpSoftBox\Ozon\Dto\V5\Product\GetProductInfoPricesV5Response;
use PhpSoftBox\Ozon\OzonApiResponse;
use PhpSoftBox\Ozon\OzonException;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PHPUnit\Framework\TestCase;

final class OzonApiClientHttpTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * Проверяет, что POST-запрос отправляет обязательные Ozon-заголовки и JSON-тело.
     */
    public function testPostSendsHeadersAndPayload(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $result = $client->post('/v3/product/info/list', [
            'offer_id' => ['SKU-1'],
        ]);

        self::assertInstanceOf(Collection::class, $result);
        self::assertInstanceOf(OzonApiResponse::class, $result);
        self::assertSame(['items' => []], $result->get('result'));

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('12345', $request->getHeaderLine('Client-Id'));
        self::assertSame('secret-key', $request->getHeaderLine('Api-Key'));
        self::assertStringContainsString('/v3/product/info/list', (string) $request->getUri());
        self::assertStringContainsString('"offer_id"', (string) $request->getBody());
    }

    /**
     * Проверяет, что низкоуровневый POST-ответ можно преобразовать в DTO через makeDto().
     */
    public function testPostCanMakeDto(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{
            "cursor": "next",
            "items": [
                {
                    "offer_id": "SKU-1",
                    "product_id": 10001,
                    "acquiring": 1.5,
                    "volume_weight": 2.25,
                    "price": {
                        "currency_code": "RUB",
                        "price": 1200.5,
                        "auto_action_enabled": true
                    },
                    "commissions": {
                        "sales_percent_fbs": 12.5
                    },
                    "marketing_actions": {
                        "ozon_actions_exist": true,
                        "actions": [
                            {
                                "title": "Promo",
                                "value": 10
                            }
                        ]
                    },
                    "price_indexes": {
                        "color_index": "GREEN",
                        "external_index_data": {
                            "min_price": 1100,
                            "min_price_currency": "RUB",
                            "price_index_value": 0.91
                        }
                    },
                    "new_ozon_field": "kept"
                }
            ],
            "total": 1
        }'));

        $dto = $client
            ->post('/v5/product/info/prices', ['filter' => ['offer_id' => ['SKU-1']], 'limit' => 1])
            ->makeDto();

        self::assertInstanceOf(GetProductInfoPricesV5Response::class, $dto);
        self::assertSame('next', $dto->cursor);
        self::assertSame(1, $dto->total);
        self::assertCount(1, $dto->items);

        $item = $dto->items[0];
        self::assertSame('SKU-1', $item->offerId);
        self::assertSame(10001, $item->productId);
        self::assertSame(1200.5, $item->price?->price);
        self::assertSame('RUB', $item->price?->currencyCode);
        self::assertTrue($item->price?->autoActionEnabled);
        self::assertSame(12.5, $item->commissions?->salesPercentFbs);
        self::assertTrue($item->marketingActions?->ozonActionsExist);
        self::assertSame('Promo', $item->marketingActions?->actions[0]->title);
        self::assertSame('GREEN', $item->priceIndexes?->colorIndex);
        self::assertSame(1100.0, $item->priceIndexes?->externalIndexData?->minPrice);
        self::assertSame(['new_ozon_field' => 'kept'], $item->extra);
    }

    /**
     * Проверяет, что makeDto() без аргумента использует карту DTO для endpoint,
     * а POST без payload отправляет JSON-объект.
     */
    public function testPostCanMakeDefaultDtoFromResponseMap(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{
            "cashflows": {},
            "total": {
                "amount": 1000
            }
        }'));

        $dto = $client
            ->post('/v1/finance/balance')
            ->makeDto();

        self::assertInstanceOf(V1GetFinanceBalanceV1Response::class, $dto);
        self::assertSame([], $dto->extra);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('{}', (string) $request->getBody());
    }

    /**
     * Проверяет, что карта DTO работает для сгенерированных endpoint-ов не из V1.
     */
    public function testPostCanMakeDefaultDtoForGeneratedV2Response(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{
            "items": []
        }'));

        $dto = $client
            ->post('/v2/product/pictures/info')
            ->makeDto();

        self::assertInstanceOf(V2ProductInfoPicturesResponse::class, $dto);
        self::assertSame([], $dto->items);
        self::assertSame([], $dto->extra);
    }

    /**
     * Проверяет, что GET-запрос строит query-string и не сериализует пустое тело.
     */
    public function testGetBuildsQueryString(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":[]}'));

        $client->get('/v3/product/list', [
            'page'      => 1,
            'page_size' => 50,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('GET', $request->getMethod());
        self::assertStringContainsString('page=1', (string) $request->getUri());
        self::assertStringContainsString('page_size=50', (string) $request->getUri());
        self::assertSame('', (string) $request->getBody());
    }

    /**
     * Проверяет, что ошибка API поднимает OzonException с текстом из ответа.
     */
    public function testErrorResponseThrowsException(): void
    {
        [$client] = $this->createClient(new Response(400, [], '{"message":"Bad request"}'));

        $this->expectException(OzonException::class);
        $this->expectExceptionMessage('Bad request');
        $client->post('/v3/product/info/list');
    }

    /**
     * Проверяет, что PUT-запрос отправляется корректным методом и с JSON-телом.
     */
    public function testPutSendsExpectedMethodAndPayload(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"updated":true}}'));

        $client->put('/v1/product/import/prices', [
            'prices' => [],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('PUT', $request->getMethod());
        self::assertStringContainsString('/v1/product/import/prices', (string) $request->getUri());
        self::assertStringContainsString('"prices"', (string) $request->getBody());
    }

    /**
     * Проверяет, что DELETE без payload не отправляет JSON-тело и поддерживает query-string.
     */
    public function testDeleteWithoutPayloadBuildsQueryAndHasEmptyBody(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->delete('/v1/product/archive', query: [
            'product_id' => 101,
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertSame('DELETE', $request->getMethod());
        self::assertStringContainsString('/v1/product/archive', (string) $request->getUri());
        self::assertStringContainsString('product_id=101', (string) $request->getUri());
        self::assertSame('', (string) $request->getBody());
    }

    /**
     * Проверяет, что helper `vX(section)` корректно собирает путь.
     */
    public function testVersionedHelperBuildsPath(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->v3('product')->post('/list', [
            'offer_id' => ['SKU-1'],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v3/product/list', (string) $request->getUri());
    }
}
