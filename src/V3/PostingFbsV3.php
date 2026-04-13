<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V3;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class PostingFbsV3
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Список отправлений FBS (v3).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v3('posting/fbs')->post('/list', $payload);
    }

    /**
     * Детали отправления FBS (v3).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function get(array $payload = []): OzonApiResponse
    {
        return $this->client->v3('posting/fbs')->post('/get', $payload);
    }

    /**
     * Список необработанных отправлений FBS (v3).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function unfulfilledList(array $payload = []): OzonApiResponse
    {
        return $this->client->v3('posting/fbs')->post('/unfulfilled/list', $payload);
    }

    /**
     * Установка количества коробок для многоместного отправления.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function setMultiBoxQty(array $payload = []): OzonApiResponse
    {
        return $this->client->v3('posting/multiboxqty')->post('/set', $payload);
    }

    /**
     * Универсальный метод для FBS posting API v3.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v3('posting/fbs')->request($path, $payload, $method, $query);
    }
}
