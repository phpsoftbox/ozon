<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class NotificationV1
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
    public function check(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('notification')->post('/check', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function delete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('notification')->post('/delete', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function enable(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('notification')->post('/enable', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('notification')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function pushTypeList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('notification/push-type')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function set(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('notification')->post('/set', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function update(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('notification')->post('/update', $payload);
    }
}
