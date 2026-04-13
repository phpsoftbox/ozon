<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V4;

use PhpSoftBox\Collection\Collection;
use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;
use stdClass;

final class ProductV4
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Возвращает характеристики товаров.
     *
     * @param array<string, mixed> $filter
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function infoAttributes(
        array $filter = [],
        ?string $lastId = null,
        int $limit = 100,
        ?string $sortBy = null,
        ?string $sortDir = null,
    ): OzonApiResponse {
        $resolvedFilter = Collection::from($filter)
            ->only(['offer_id', 'product_id', 'sku', 'visibility'])
            ->all();

        $payload = [
            'filter' => $resolvedFilter !== [] ? $resolvedFilter : new stdClass(),
            'limit'  => $limit,
        ];

        if ($lastId !== null && $lastId !== '') {
            $payload['last_id'] = $lastId;
        }

        if ($sortBy !== null && $sortBy !== '') {
            $payload['sort_by'] = $sortBy;
        }

        if ($sortDir !== null && $sortDir !== '') {
            $payload['sort_dir'] = $sortDir;
        }

        return $this->client->v4('product')->post('/info/attributes', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function infoLimit(array $payload = []): OzonApiResponse
    {
        return $this->client->v4('product/info')->post('/limit', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function infoStocks(array $payload = []): OzonApiResponse
    {
        return $this->client->v4('product/info')->post('/stocks', $payload);
    }
}
