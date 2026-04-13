<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class BrandV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Список брендов, требующих сертификат компании.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function companyCertificationList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('brand/company-certification')->post('/list', $payload);
    }

    /**
     * Универсальный метод для brand API v1.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v1('brand')->request($path, $payload, $method, $query);
    }
}
