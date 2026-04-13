<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V2;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class DeliveryMethodV2
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Список методов доставки (v2).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('delivery-method')->post('/list', $payload);
    }

    /**
     * Универсальный метод для delivery-method API v2.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v2('delivery-method')->request($path, $payload, $method, $query);
    }
}
