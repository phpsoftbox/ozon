<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use InvalidArgumentException;
use PhpSoftBox\Collection\Collection;
use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ProductV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Возвращает описание товара по offer_id или product_id.
     *
     * @param array<string, mixed> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function infoDescription(array $query): OzonApiResponse
    {
        $payload = Collection::from($query)
            ->only(['offer_id', 'product_id'])
            ->all();
        if ($payload === []) {
            throw new InvalidArgumentException('At least one of [offer_id, product_id] is required.');
        }

        return $this->client->v1('product')->post('/info/description', $payload);
    }

    /**
     * Возвращает статус задачи импорта/обновления товара.
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function importInfo(int $taskId): OzonApiResponse
    {
        if ($taskId <= 0) {
            throw new InvalidArgumentException('task_id must be greater than zero.');
        }

        return $this->client->v1('product/import')->post('/info', [
            'task_id' => $taskId,
        ]);
    }

    /**
     * Обновляет цены товаров.
     *
     * @param list<array<string, mixed>> $prices
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function importPrices(array $prices): OzonApiResponse
    {
        if ($prices === []) {
            throw new InvalidArgumentException('prices must not be empty.');
        }

        return $this->client->v1('product/import')->post('/prices', [
            'prices' => $prices,
        ]);
    }

    /**
     * Создает товары по SKU.
     *
     * @param list<array<string, mixed>> $items
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function importBySku(array $items): OzonApiResponse
    {
        if ($items === []) {
            throw new InvalidArgumentException('items must not be empty.');
        }

        return $this->client->v1('product')->post('/import-by-sku', [
            'items' => $items,
        ]);
    }

    /**
     * Обновляет характеристики товаров.
     *
     * @param list<array<string, mixed>> $items
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function attributesUpdate(array $items): OzonApiResponse
    {
        if ($items === []) {
            throw new InvalidArgumentException('items must not be empty.');
        }

        return $this->client->v1('product/attributes')->post('/update', [
            'items' => $items,
        ]);
    }

    /**
     * Загружает/обновляет изображения товара.
     *
     * @param list<string> $images
     * @param list<string> $images360
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function picturesImport(
        int $productId,
        array $images = [],
        array $images360 = [],
        ?string $colorImage = null,
    ): OzonApiResponse {
        if ($productId <= 0) {
            throw new InvalidArgumentException('product_id must be greater than zero.');
        }

        $payload = [
            'product_id' => $productId,
        ];

        if ($images !== []) {
            $payload['images'] = $images;
        }

        if ($images360 !== []) {
            $payload['images360'] = $images360;
        }

        if ($colorImage !== null && $colorImage !== '') {
            $payload['color_image'] = $colorImage;
        }

        return $this->client->v1('product/pictures')->post('/import', $payload);
    }

    /**
     * Архивирует товары по product_id.
     *
     * @param list<int> $productIds
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function archive(array $productIds): OzonApiResponse
    {
        if ($productIds === []) {
            throw new InvalidArgumentException('product_id must not be empty.');
        }

        return $this->client->v1('product')->post('/archive', [
            'product_id' => $productIds,
        ]);
    }

    /**
     * Восстанавливает товары из архива по product_id.
     *
     * @param list<int> $productIds
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function unarchive(array $productIds): OzonApiResponse
    {
        if ($productIds === []) {
            throw new InvalidArgumentException('product_id must not be empty.');
        }

        return $this->client->v1('product')->post('/unarchive', [
            'product_id' => $productIds,
        ]);
    }

    /**
     * Возвращает информацию об уценке по SKU уцененного товара.
     *
     * @param list<int|string> $discountedSkus
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function infoDiscounted(array $discountedSkus): OzonApiResponse
    {
        if ($discountedSkus === []) {
            throw new InvalidArgumentException('discounted_skus must not be empty.');
        }

        return $this->client->v1('product/info')->post('/discounted', [
            'discounted_skus' => $discountedSkus,
        ]);
    }

    /**
     * Возвращает остатки на складах продавца для FBS/rFBS.
     *
     * @param list<int|string> $sku
     * @param list<int|string> $offerId
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function infoStocksByWarehouseFbs(array $sku = [], array $offerId = []): OzonApiResponse
    {
        if ($sku === [] && $offerId === []) {
            throw new InvalidArgumentException('At least one of [sku, offer_id] must be provided.');
        }

        $payload = [];
        if ($sku !== []) {
            $payload['sku'] = $sku;
        }

        if ($offerId !== []) {
            $payload['offer_id'] = $offerId;
        }

        return $this->client->v1('product/info')->post('/stocks-by-warehouse/fbs', $payload);
    }

    /**
     * Возвращает подробную информацию о ценах товаров.
     *
     * @param list<int|string> $skus
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function pricesDetails(array $skus): OzonApiResponse
    {
        if ($skus === []) {
            throw new InvalidArgumentException('skus must not be empty.');
        }

        return $this->client->v1('product/prices')->post('/details', [
            'skus' => $skus,
        ]);
    }

    /**
     * Возвращает контент-рейтинг товаров по SKU.
     *
     * @param list<int|string> $skus
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function ratingBySku(array $skus): OzonApiResponse
    {
        if ($skus === []) {
            throw new InvalidArgumentException('skus must not be empty.');
        }

        return $this->client->v1('product')->post('/rating-by-sku', [
            'skus' => $skus,
        ]);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function updateOfferId(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/update')->post('/offer-id', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function infoSubscription(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/info')->post('/subscription', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function relatedSkuGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/related-sku')->post('/get', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function infoWrongVolume(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/info')->post('/wrong-volume', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function placementZoneInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/placement-zone')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function infoWarehouseStocks(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/info/warehouse')->post('/stocks', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function updateDiscount(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/update')->post('/discount', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actionTimerUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/action/timer')->post('/update', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function actionTimerStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/action/timer')->post('/status', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function digitalStocksImport(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/digital/stocks')->post('/import', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function certificationList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/certification')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function visibilitySet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/visibility')->post('/set', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function quantInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/quant')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function quantList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/quant')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function stairwayDiscountByQuantityGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/stairway-discount/by-quantity')->post('/get', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function stairwayDiscountByQuantitySet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/stairway-discount/by-quantity')->post('/set', $payload);
    }
}
