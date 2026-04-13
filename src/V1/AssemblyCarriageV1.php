<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class AssemblyCarriageV1
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
    public function postingList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('assembly/carriage/posting')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('assembly/carriage/product')->post('/list', $payload);
    }
}
