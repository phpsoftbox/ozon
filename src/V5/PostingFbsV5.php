<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V5;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class PostingFbsV5
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Статус и результат обработки данных экземпляров.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productExemplarStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v5('fbs/posting/product/exemplar')->post('/status', $payload);
    }

    /**
     * Проверка валидности данных экземпляров.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productExemplarValidate(array $payload = []): OzonApiResponse
    {
        return $this->client->v5('fbs/posting/product/exemplar')->post('/validate', $payload);
    }
}
