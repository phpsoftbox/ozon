<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ChatV1
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
    public function sendFile(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('chat/send')->post('/file', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function sendMessage(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('chat/send')->post('/message', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function start(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('chat')->post('/start', $payload);
    }
}
