<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V6;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class PostingFbsV6
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Создание или получение данных экземпляров.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productExemplarCreateOrGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v6('fbs/posting/product/exemplar')->post('/create-or-get', $payload);
    }

    /**
     * Сохранение данных экземпляров.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productExemplarSet(array $payload = []): OzonApiResponse
    {
        return $this->client->v6('fbs/posting/product/exemplar')->post('/set', $payload);
    }
}
