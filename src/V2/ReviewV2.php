<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V2;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ReviewV2
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Удалить комментарий на отзыв.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function commentDelete(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('review')->post('/comment/delete', $payload);
    }

    /**
     * Изменить статус отзывов.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function changeStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('review')->post('/change-status', $payload);
    }

    /**
     * Получить количество отзывов по статусам.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function count(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('review')->post('/count', $payload);
    }

    /**
     * Получить информацию по отзыву.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function info(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('review')->post('/info', $payload);
    }

    /**
     * Получить список отзывов.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('review')->post('/list', $payload);
    }
}
