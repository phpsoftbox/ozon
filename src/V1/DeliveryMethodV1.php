<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class DeliveryMethodV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Список методов доставки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('delivery-method')->post('/list', $payload);
    }

    /**
     * Настройки возврата для метода доставки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function returnSettingsGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('delivery-method/return/settings')->post('/get', $payload);
    }

    /**
     * Универсальный метод для delivery-method API v1.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v1('delivery-method')->request($path, $payload, $method, $query);
    }
}
