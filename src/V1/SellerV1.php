<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class SellerV1
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
    public function info(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function ozonLogisticsInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller/ozon-logistics')->post('/info', $payload);
    }
}
