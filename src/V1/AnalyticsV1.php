<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class AnalyticsV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function turnoverStocks(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('analytics/turnover')->post('/stocks', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function stocks(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('analytics')->post('/stocks', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function data(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('analytics')->post('/data', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productQueries(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('analytics')->post('/product-queries', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productQueriesDetails(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('analytics/product-queries')->post('/details', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function manageStocks(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('analytics/manage')->post('/stocks', $payload);
    }

    /**
     * Получить отчёт о списанных товарах.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function decommissionedGoods(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('analytics')->post('/decommissioned-goods', $payload);
    }

    /**
     * Получить информацию о сравнении категорий.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function categoryComparison(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('analytics')->post('/category/comparison', $payload);
    }
}
