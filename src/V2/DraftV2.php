<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V2;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class DraftV2
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
    public function createInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('draft/create')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function supplyCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('draft/supply')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function supplyCreateStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('draft/supply/create')->post('/status', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function timeslotInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('draft/timeslot')->post('/info', $payload);
    }
}
