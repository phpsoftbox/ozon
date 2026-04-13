<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V4;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class PostingFbsV4
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Собрать отправление FBS (v4).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function ship(array $payload = []): OzonApiResponse
    {
        return $this->client->v4('posting/fbs')->post('/ship', $payload);
    }

    /**
     * Упаковка отправления FBS (v4).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function shipPackage(array $payload = []): OzonApiResponse
    {
        return $this->client->v4('posting/fbs')->post('/ship/package', $payload);
    }

    /**
     * Универсальный метод для FBS posting API v4.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v4('posting/fbs')->request($path, $payload, $method, $query);
    }
}
