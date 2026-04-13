<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V3;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class SupplyOrderV3
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Список поставок (v3).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v3('supply-order')->post('/list', $payload);
    }

    /**
     * Детали поставки (v3).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function get(array $payload = []): OzonApiResponse
    {
        return $this->client->v3('supply-order')->post('/get', $payload);
    }
}
