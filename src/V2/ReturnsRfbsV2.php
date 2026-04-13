<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V2;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ReturnsRfbsV2
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
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('returns/rfbs')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function get(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('returns/rfbs')->post('/get', $payload);
    }
}
