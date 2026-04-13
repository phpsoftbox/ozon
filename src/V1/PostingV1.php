<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class PostingV1
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
    public function cancel(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting')->post('/cancel', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function cancelStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/cancel')->post('/status', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function cutoffSet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/cutoff')->post('/set', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function digitalCodesUpload(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/digital/codes')->post('/upload', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function digitalList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/digital')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function marks(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting')->post('/marks', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function unpaidLegalProductList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/unpaid-legal/product')->post('/list', $payload);
    }
}
