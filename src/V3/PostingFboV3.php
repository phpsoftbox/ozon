<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V3;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class PostingFboV3
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
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
        return $this->client->v3('posting/fbo')->post('/list', $payload);
    }
}
