<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V2;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ActionsV2
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Список заявок на скидки (v2).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function discountsTaskList(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('actions/discounts-task')->post('/list', $payload);
    }

    /**
     * Универсальный метод для actions API v2.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v2('actions')->request($path, $payload, $method, $query);
    }
}
