<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class SearchQueriesV1
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
    public function text(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('search-queries')->post('/text', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function top(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('search-queries')->post('/top', $payload);
    }
}
