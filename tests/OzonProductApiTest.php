<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Tests;

use InvalidArgumentException;
use PhpSoftBox\Http\Message\Response;
use PhpSoftBox\Ozon\OzonApiResponse;
use PhpSoftBox\Ozon\Tests\Support\CreatesOzonClient;
use PHPUnit\Framework\TestCase;

final class OzonProductApiTest extends TestCase
{
    use CreatesOzonClient;

    /**
     * Проверяет обертку v1/description-category: tree().
     */
    public function testDescriptionCategoryTreeV1BuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->descriptionCategoryV1()->tree(123, 'RU');

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/description-category/tree', (string) $request->getUri());
        self::assertStringContainsString('"category_id":123', (string) $request->getBody());
        self::assertStringContainsString('"language":"RU"', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию v1/description-category: attributes().
     */
    public function testDescriptionCategoryAttributesThrowsOnInvalidIds(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->descriptionCategoryV1()->attributes(0, 1);
    }

    /**
     * Проверяет обертку v1/description-category: attributes().
     */
    public function testDescriptionCategoryAttributesBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->descriptionCategoryV1()->attributes(123, 456, 'RU');

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/description-category/attribute', (string) $request->getUri());
        self::assertStringContainsString('"description_category_id":123', (string) $request->getBody());
        self::assertStringContainsString('"type_id":456', (string) $request->getBody());
        self::assertStringContainsString('"language":"RU"', (string) $request->getBody());
    }

    /**
     * Проверяет обертку v1/description-category: attribute/values().
     */
    public function testDescriptionCategoryAttributeValuesBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->descriptionCategoryV1()->attributeValues(
            attributeId: 10,
            descriptionCategoryId: 123,
            typeId: 456,
            limit: 50,
            lastValueId: 999,
            language: 'RU',
        );

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/description-category/attribute/values', (string) $request->getUri());
        self::assertStringContainsString('"attribute_id":10', (string) $request->getBody());
        self::assertStringContainsString('"description_category_id":123', (string) $request->getBody());
        self::assertStringContainsString('"type_id":456', (string) $request->getBody());
        self::assertStringContainsString('"limit":50', (string) $request->getBody());
        self::assertStringContainsString('"last_value_id":999', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию v1/description-category: attribute/values/search().
     */
    public function testDescriptionCategorySearchAttributeValuesThrowsOnEmptyValue(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->descriptionCategoryV1()->searchAttributeValues(10, 123, 456, '');
    }

    /**
     * Проверяет обертку v1/description-category: attribute/values/search().
     */
    public function testDescriptionCategorySearchAttributeValuesBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->descriptionCategoryV1()->searchAttributeValues(10, 123, 456, 'чехол', 30);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/description-category/attribute/values/search', (string) $request->getUri());
        self::assertStringContainsString('"attribute_id":10', (string) $request->getBody());
        self::assertStringContainsString('"value":"чехол"', (string) $request->getBody());
        self::assertStringContainsString('"limit":30', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v1/infoDescription().
     */
    public function testProductV1InfoDescriptionThrowsOnEmptyQuery(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV1()->infoDescription([]);
    }

    /**
     * Проверяет product/v1/infoDescription() и фильтрацию payload.
     */
    public function testProductV1InfoDescriptionBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $client->productV1()->infoDescription([
            'offer_id' => 'SKU-1',
            'ignored'  => 'value',
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/product/info/description', (string) $request->getUri());
        self::assertStringContainsString('"offer_id":"SKU-1"', (string) $request->getBody());
        self::assertStringNotContainsString('ignored', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v1/importInfo().
     */
    public function testProductV1ImportInfoThrowsOnInvalidTaskId(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV1()->importInfo(0);
    }

    /**
     * Проверяет product/v1/importInfo().
     */
    public function testProductV1ImportInfoBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"status":"ok"}}'));

        $client->productV1()->importInfo(123456);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/product/import/info', (string) $request->getUri());
        self::assertStringContainsString('"task_id":123456', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v1/importPrices().
     */
    public function testProductV1ImportPricesThrowsOnEmptyPrices(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV1()->importPrices([]);
    }

    /**
     * Проверяет product/v1/importPrices().
     */
    public function testProductV1ImportPricesBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"task_id":1}}'));

        $client->productV1()->importPrices([
            [
                'offer_id' => 'SKU-1',
                'price'    => '1000',
            ],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/product/import/prices', (string) $request->getUri());
        self::assertStringContainsString('"offer_id":"SKU-1"', (string) $request->getBody());
        self::assertStringContainsString('"price":"1000"', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v1/importBySku().
     */
    public function testProductV1ImportBySkuThrowsOnEmptyItems(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV1()->importBySku([]);
    }

    /**
     * Проверяет product/v1/importBySku().
     */
    public function testProductV1ImportBySkuBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"task_id":1}}'));

        $client->productV1()->importBySku([
            [
                'sku' => 10001,
            ],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/product/import-by-sku', (string) $request->getUri());
        self::assertStringContainsString('"sku":10001', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v1/attributesUpdate().
     */
    public function testProductV1AttributesUpdateThrowsOnEmptyItems(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV1()->attributesUpdate([]);
    }

    /**
     * Проверяет product/v1/attributesUpdate().
     */
    public function testProductV1AttributesUpdateBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"task_id":1}}'));

        $client->productV1()->attributesUpdate([
            [
                'offer_id' => 'SKU-1',
            ],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/product/attributes/update', (string) $request->getUri());
        self::assertStringContainsString('"offer_id":"SKU-1"', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v1/picturesImport().
     */
    public function testProductV1PicturesImportThrowsOnInvalidProductId(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV1()->picturesImport(0);
    }

    /**
     * Проверяет product/v1/picturesImport().
     */
    public function testProductV1PicturesImportBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"state":"ok"}}'));

        $client->productV1()->picturesImport(
            productId: 101,
            images: ['https://cdn.example/img1.jpg'],
            images360: ['https://cdn.example/360-1.jpg'],
            colorImage: 'https://cdn.example/color.jpg',
        );

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/product/pictures/import', (string) $request->getUri());
        self::assertStringContainsString('"product_id":101', (string) $request->getBody());
        self::assertStringContainsString('"images":["https://cdn.example/img1.jpg"]', (string) $request->getBody());
        self::assertStringContainsString('"images360":["https://cdn.example/360-1.jpg"]', (string) $request->getBody());
        self::assertStringContainsString('"color_image":"https://cdn.example/color.jpg"', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v1/archive().
     */
    public function testProductV1ArchiveThrowsOnEmptyProductIds(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV1()->archive([]);
    }

    /**
     * Проверяет product/v1/archive().
     */
    public function testProductV1ArchiveBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"task_id":1}}'));

        $client->productV1()->archive([1001, 1002]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/product/archive', (string) $request->getUri());
        self::assertStringContainsString('"product_id":[1001,1002]', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v1/unarchive().
     */
    public function testProductV1UnarchiveThrowsOnEmptyProductIds(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV1()->unarchive([]);
    }

    /**
     * Проверяет product/v1/unarchive().
     */
    public function testProductV1UnarchiveBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"task_id":1}}'));

        $client->productV1()->unarchive([1001]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/product/unarchive', (string) $request->getUri());
        self::assertStringContainsString('"product_id":[1001]', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v1/infoDiscounted().
     */
    public function testProductV1InfoDiscountedThrowsOnEmptyDiscountedSkus(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV1()->infoDiscounted([]);
    }

    /**
     * Проверяет product/v1/infoDiscounted().
     */
    public function testProductV1InfoDiscountedBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->productV1()->infoDiscounted([12345]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/product/info/discounted', (string) $request->getUri());
        self::assertStringContainsString('"discounted_skus":[12345]', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v1/infoStocksByWarehouseFbs().
     */
    public function testProductV1InfoStocksByWarehouseFbsThrowsOnEmptyFilters(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV1()->infoStocksByWarehouseFbs();
    }

    /**
     * Проверяет product/v1/infoStocksByWarehouseFbs().
     */
    public function testProductV1InfoStocksByWarehouseFbsBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->productV1()->infoStocksByWarehouseFbs(
            sku: [111, 222],
            offerId: ['SKU-1'],
        );

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/product/info/stocks-by-warehouse/fbs', (string) $request->getUri());
        self::assertStringContainsString('"sku":[111,222]', (string) $request->getBody());
        self::assertStringContainsString('"offer_id":["SKU-1"]', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v1/pricesDetails().
     */
    public function testProductV1PricesDetailsThrowsOnEmptySkus(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV1()->pricesDetails([]);
    }

    /**
     * Проверяет product/v1/pricesDetails().
     */
    public function testProductV1PricesDetailsBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->productV1()->pricesDetails([111, 222]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/product/prices/details', (string) $request->getUri());
        self::assertStringContainsString('"skus":[111,222]', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v1/ratingBySku().
     */
    public function testProductV1RatingBySkuThrowsOnEmptySkus(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV1()->ratingBySku([]);
    }

    /**
     * Проверяет product/v1/ratingBySku().
     */
    public function testProductV1RatingBySkuBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->productV1()->ratingBySku([111, 222]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v1/product/rating-by-sku', (string) $request->getUri());
        self::assertStringContainsString('"skus":[111,222]', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v2/stocks().
     */
    public function testProductV2StocksThrowsOnEmptyStocks(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV2()->stocks([]);
    }

    /**
     * Проверяет product/v2/stocks().
     */
    public function testProductV2StocksBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"status":"ok"}}'));

        $client->productV2()->stocks([
            [
                'offer_id'     => 'SKU-1',
                'stock'        => 10,
                'warehouse_id' => 1,
            ],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/products/stocks', (string) $request->getUri());
        self::assertStringContainsString('"offer_id":"SKU-1"', (string) $request->getBody());
        self::assertStringContainsString('"stock":10', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v2/delete().
     */
    public function testProductV2DeleteThrowsOnEmptyProducts(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV2()->delete([]);
    }

    /**
     * Проверяет product/v2/delete().
     */
    public function testProductV2DeleteBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"deleted":[1]}}'));

        $client->productV2()->delete([
            [
                'product_id' => 101,
            ],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/products/delete', (string) $request->getUri());
        self::assertStringContainsString('"product_id":101', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v2/picturesInfo().
     */
    public function testProductV2PicturesInfoThrowsOnEmptyProductIds(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV2()->picturesInfo([]);
    }

    /**
     * Проверяет product/v2/picturesInfo().
     */
    public function testProductV2PicturesInfoBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->productV2()->picturesInfo([101, 102]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/product/pictures/info', (string) $request->getUri());
        self::assertStringContainsString('"product_id":[101,102]', (string) $request->getBody());
    }

    /**
     * Проверяет валидацию product/v2/infoStocksByWarehouseFbs() по limit.
     */
    public function testProductV2InfoStocksByWarehouseFbsThrowsOnInvalidLimit(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV2()->infoStocksByWarehouseFbs(limit: 0, sku: [111]);
    }

    /**
     * Проверяет валидацию product/v2/infoStocksByWarehouseFbs() по фильтрам.
     */
    public function testProductV2InfoStocksByWarehouseFbsThrowsOnEmptyFilters(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV2()->infoStocksByWarehouseFbs(limit: 100);
    }

    /**
     * Проверяет product/v2/infoStocksByWarehouseFbs().
     */
    public function testProductV2InfoStocksByWarehouseFbsBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->productV2()->infoStocksByWarehouseFbs(
            limit: 200,
            cursor: 'next-cursor',
            sku: [111],
            offerId: ['SKU-1'],
        );

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v2/product/info/stocks-by-warehouse/fbs', (string) $request->getUri());
        self::assertStringContainsString('"limit":200', (string) $request->getBody());
        self::assertStringContainsString('"cursor":"next-cursor"', (string) $request->getBody());
        self::assertStringContainsString('"sku":[111]', (string) $request->getBody());
        self::assertStringContainsString('"offer_id":["SKU-1"]', (string) $request->getBody());
    }

    /**
     * Проверяет product/v3/list().
     */
    public function testProductV3ListBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $response = $client->productV3()->list(
            filter: [
                'offer_id' => ['SKU-1'],
                'ignored'  => 'value',
            ],
            lastId: 'next-1',
            limit: 50,
        );

        self::assertInstanceOf(OzonApiResponse::class, $response);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v3/product/list', (string) $request->getUri());
        self::assertStringContainsString('"offer_id":["SKU-1"]', (string) $request->getBody());
        self::assertStringContainsString('"last_id":"next-1"', (string) $request->getBody());
        self::assertStringContainsString('"limit":50', (string) $request->getBody());
        self::assertStringNotContainsString('ignored', (string) $request->getBody());
    }

    /**
     * Проверяет product/v3/info/list с валидацией query.
     */
    public function testProductV3InfoListThrowsOnEmptyQuery(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV3()->infoList([]);
    }

    /**
     * Проверяет валидацию product/v3/import().
     */
    public function testProductV3ImportThrowsOnEmptyItems(): void
    {
        [$client] = $this->createClient(new Response(200, [], '{"result":{}}'));

        $this->expectException(InvalidArgumentException::class);
        $client->productV3()->import([]);
    }

    /**
     * Проверяет product/v3/import().
     */
    public function testProductV3ImportBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"task_id":1}}'));

        $client->productV3()->import([
            [
                'offer_id' => 'SKU-1',
                'name'     => 'Test product',
            ],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v3/product/import', (string) $request->getUri());
        self::assertStringContainsString('"offer_id":"SKU-1"', (string) $request->getBody());
        self::assertStringContainsString('"name":"Test product"', (string) $request->getBody());
    }

    /**
     * Проверяет product/v4/info/attributes.
     */
    public function testProductV4InfoAttributesBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"items":[]}}'));

        $client->productV4()->infoAttributes(
            filter: [
                'sku'     => ['SKU-1'],
                'ignored' => true,
            ],
            lastId: 'next-2',
            limit: 20,
            sortBy: 'sku',
            sortDir: 'asc',
        );

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v4/product/info/attributes', (string) $request->getUri());
        self::assertStringContainsString('"sku":["SKU-1"]', (string) $request->getBody());
        self::assertStringContainsString('"last_id":"next-2"', (string) $request->getBody());
        self::assertStringContainsString('"sort_by":"sku"', (string) $request->getBody());
        self::assertStringContainsString('"sort_dir":"asc"', (string) $request->getBody());
        self::assertStringNotContainsString('ignored', (string) $request->getBody());
    }

    /**
     * Проверяет универсальный product/v5/request().
     */
    public function testProductV5RequestBuildsExpectedRequest(): void
    {
        [$client, $httpClient] = $this->createClient(new Response(200, [], '{"result":{"ok":true}}'));

        $client->productV5()->request('/info/prices', [
            'product_id' => [1],
        ]);

        $request = $httpClient->lastRequest();
        self::assertNotNull($request);
        self::assertStringContainsString('/v5/product/info/prices', (string) $request->getUri());
        self::assertStringContainsString('"product_id":[1]', (string) $request->getBody());
    }

    /**
     * Проверяет, что listCount() корректно работает с OzonApiResponse.
     */
    public function testProductV3ListCountWorksWithCollectionResponses(): void
    {
        $response1 = new Response(200, [], '{"result":{"items":[{"id":1},{"id":2}],"last_id":"next-1"}}');
        $response2 = new Response(200, [], '{"result":{"items":[{"id":3}]}}');

        [$client] = $this->createClient([$response1, $response2]);
        $count    = $client->productV3()->listCount(limit: 2);

        self::assertSame(3, $count);
    }
}
