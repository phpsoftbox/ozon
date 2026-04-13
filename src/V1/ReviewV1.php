<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ReviewV1
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
    public function changeStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('review')->post('/change-status', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function commentCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('review/comment')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function commentDelete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('review/comment')->post('/delete', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function commentList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('review/comment')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function count(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('review')->post('/count', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function info(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('review')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('review')->post('/list', $payload);
    }
}
