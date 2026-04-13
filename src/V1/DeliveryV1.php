<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class DeliveryV1
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
    public function check(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('delivery')->post('/check', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function map(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('delivery')->post('/map', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function pointInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('delivery/point')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function pointList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('delivery/point')->post('/list', $payload);
    }
}
