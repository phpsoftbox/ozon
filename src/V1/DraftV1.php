<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class DraftV1
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
    public function create(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('draft')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function createInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('draft/create')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function crossdockCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('draft/crossdock')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function directCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('draft/direct')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function multiClusterCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('draft/multi-cluster')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function supplyCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('draft/supply')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function supplyCreateStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('draft/supply/create')->post('/status', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function timeslotInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('draft/timeslot')->post('/info', $payload);
    }
}
