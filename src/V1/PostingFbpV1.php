<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class PostingFbpV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Получить информацию об отправлении по идентификатору.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function get(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbp')->post('/get', $payload);
    }

    /**
     * Получить список отправлений.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbp')->post('/list', $payload);
    }
}
