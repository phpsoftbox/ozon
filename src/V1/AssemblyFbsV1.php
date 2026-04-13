<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class AssemblyFbsV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Список отправлений сборочного задания FBS.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function postingList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('assembly/fbs/posting')->post('/list', $payload);
    }

    /**
     * Список товаров сборочного задания FBS.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('assembly/fbs/product')->post('/list', $payload);
    }
}
