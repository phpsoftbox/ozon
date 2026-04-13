<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class SupplyOrderV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Создание поставки-бандла.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function bundle(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order')->post('/bundle', $payload);
    }

    /**
     * Отмена поставки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function cancel(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order')->post('/cancel', $payload);
    }

    /**
     * Статус отмены поставки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function cancelStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order')->post('/cancel/status', $payload);
    }

    /**
     * Обновление содержимого поставки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function contentUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order')->post('/content/update', $payload);
    }

    /**
     * Статус обновления содержимого поставки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function contentUpdateStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order')->post('/content/update/status', $payload);
    }

    /**
     * Валидация содержимого поставки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function contentUpdateValidation(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order')->post('/content/update/validation', $payload);
    }

    /**
     * Детали поставки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function details(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order')->post('/details', $payload);
    }

    /**
     * Создание пропуска.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function passCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order/pass')->post('/create', $payload);
    }

    /**
     * Статус пропуска.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function passStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order/pass')->post('/status', $payload);
    }

    /**
     * Счетчик поставок по статусам.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function statusCounter(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order/status')->post('/counter', $payload);
    }

    /**
     * Доступные таймслоты.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function timeslotGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order/timeslot')->post('/get', $payload);
    }

    /**
     * Статус запроса смены таймслота.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function timeslotStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order/timeslot')->post('/status', $payload);
    }

    /**
     * Запрос смены таймслота.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function timeslotUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('supply-order/timeslot')->post('/update', $payload);
    }
}
