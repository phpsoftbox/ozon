<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ReportV1
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
    public function info(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('report')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('report')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('report/products')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function postingsCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('report/postings')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function discountedCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('report/discounted')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function warehouseStock(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('report/warehouse')->post('/stock', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function placementByProductsCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('report/placement/by-products')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function placementBySuppliesCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('report/placement/by-supplies')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function markedProductsSalesCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('report/marked-products-sales')->post('/create', $payload);
    }
}
