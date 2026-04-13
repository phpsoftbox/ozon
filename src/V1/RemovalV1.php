<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class RemovalV1
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
    public function fromStockList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('removal/from-stock')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function fromSupplyList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('removal/from-supply')->post('/list', $payload);
    }
}
