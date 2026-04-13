<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class OrderV1
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
        return $this->client->v1('order')->post('/cancel', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function cancelCheck(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('order/cancel')->post('/check', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function cancelStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('order/cancel')->post('/status', $payload);
    }
}
