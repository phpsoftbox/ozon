<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class RatingV1
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
    public function summary(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('rating')->post('/summary', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function history(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('rating')->post('/history', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function indexFbsInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('rating/index/fbs')->post('/info', $payload);
    }
}
