<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V5;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ProductV5
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Универсальный метод для вызова product-методов V5.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v5('product')->request($path, $payload, $method, $query);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function infoPrices(array $payload = []): OzonApiResponse
    {
        return $this->client->v5('product/info')->post('/prices', $payload);
    }
}
