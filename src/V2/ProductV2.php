<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V2;

use InvalidArgumentException;
use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ProductV2
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Обновляет остатки товаров по складам.
     *
     * @param list<array<string, mixed>> $stocks
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function stocks(array $stocks): OzonApiResponse
    {
        if ($stocks === []) {
            throw new InvalidArgumentException('stocks must not be empty.');
        }

        return $this->client->v2('products')->post('/stocks', [
            'stocks' => $stocks,
        ]);
    }

    /**
     * Удаляет товары без SKU из архива.
     *
     * @param list<array<string, mixed>> $products
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function delete(array $products): OzonApiResponse
    {
        if ($products === []) {
            throw new InvalidArgumentException('products must not be empty.');
        }

        return $this->client->v2('products')->post('/delete', [
            'products' => $products,
        ]);
    }

    /**
     * Возвращает информацию об изображениях товаров.
     *
     * @param list<int|string> $productIds
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function picturesInfo(array $productIds): OzonApiResponse
    {
        if ($productIds === []) {
            throw new InvalidArgumentException('product_id must not be empty.');
        }

        return $this->client->v2('product/pictures')->post('/info', [
            'product_id' => $productIds,
        ]);
    }

    /**
     * Возвращает остатки на складах продавца.
     *
     * @param list<int|string> $sku
     * @param list<int|string> $offerId
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function infoStocksByWarehouseFbs(
        int $limit = 100,
        ?string $cursor = null,
        array $sku = [],
        array $offerId = [],
    ): OzonApiResponse {
        if ($limit <= 0) {
            throw new InvalidArgumentException('limit must be greater than zero.');
        }

        if ($sku === [] && $offerId === []) {
            throw new InvalidArgumentException('At least one of [sku, offer_id] must be provided.');
        }

        $payload = [
            'limit' => $limit,
        ];

        if ($cursor !== null && $cursor !== '') {
            $payload['cursor'] = $cursor;
        }

        if ($sku !== []) {
            $payload['sku'] = $sku;
        }

        if ($offerId !== []) {
            $payload['offer_id'] = $offerId;
        }

        return $this->client->v2('product/info')->post('/stocks-by-warehouse/fbs', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function certificationList(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('product/certification')->post('/list', $payload);
    }
}
