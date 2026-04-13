<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V2;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class CargoesV2
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
    public function createInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('cargoes/create')->post('/info', $payload);
    }

    /**
     * Получить информацию о грузоместах.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function get(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('cargoes')->post('/get', $payload);
    }

    /**
     * Удалить грузоместа и транспортные грузоместа в заявке на поставку.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function delete(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('cargoes')->post('/delete', $payload);
    }

    /**
     * Получить информацию о статусе удаления грузомест и транспортных грузомест.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function deleteStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('cargoes')->post('/delete/status', $payload);
    }
}
