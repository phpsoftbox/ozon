<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class PricingStrategyV1
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
    public function competitorsList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy/competitors')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function create(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function info(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function update(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy')->post('/update', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsAdd(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy/products')->post('/add', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function strategyIdsByProductIds(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy')->post('/strategy-ids-by-product-ids', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy/products')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy/product')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsDelete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy/products')->post('/delete', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function status(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy')->post('/status', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function delete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy')->post('/delete', $payload);
    }

    /**
     * Универсальный метод для pricing-strategy API v1.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v1('pricing-strategy')->request($path, $payload, $method, $query);
    }
}
