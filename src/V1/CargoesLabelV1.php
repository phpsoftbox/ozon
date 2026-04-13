<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class CargoesLabelV1
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
    public function create(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes-label')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function get(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes-label')->post('/get', $payload);
    }

    /**
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function file(string $fileGuid, array $query = []): OzonApiResponse
    {
        return $this->client->v1('cargoes-label/file')->get('/' . $fileGuid, $query);
    }
}
