<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V2;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ProductCertificateV2
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Типы соответствия требованиям (v2).
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function accordanceTypesList(array $query = []): OzonApiResponse
    {
        return $this->client->v2('product/certificate/accordance-types')->get('/list', $query);
    }

    /**
     * Универсальный метод для product/certificate API v2.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v2('product/certificate')->request($path, $payload, $method, $query);
    }
}
