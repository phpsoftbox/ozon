<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class PostingFboV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Список причин отмены FBO отправлений.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function cancelReasonList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbo')->post('/cancel-reason/list', $payload);
    }
}
