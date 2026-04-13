<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class PostingFbsV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Обновление данных по маркируемым экземплярам товаров.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productExemplarUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('fbs/posting/product/exemplar')->post('/update', $payload);
    }

    /**
     * Список доступных перевозок.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function carriageAvailableList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/carriage-available')->post('/list', $payload);
    }

    /**
     * Причины отмены отправлений FBS.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function cancelReason(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbs')->post('/cancel-reason', $payload);
    }

    /**
     * Постановка задачи на генерацию этикеток.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function packageLabelCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbs')->post('/package-label/create', $payload);
    }

    /**
     * Получение результата генерации этикеток.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function packageLabelGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbs')->post('/package-label/get', $payload);
    }

    /**
     * Проверка пикап-кода.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function pickUpCodeVerify(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbs')->post('/pick-up-code/verify', $payload);
    }

    /**
     * Получение атрибутов отслеживаемых товаров.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productTraceableAttribute(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbs')->post('/product/traceable/attribute', $payload);
    }

    /**
     * Ограничения по отправлениям FBS.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function restrictions(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbs')->post('/restrictions', $payload);
    }

    /**
     * Разделение отправления.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function split(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbs')->post('/split', $payload);
    }

    /**
     * Проверка ограничений смены таймслота.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function timeslotChangeRestrictions(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbs')->post('/timeslot/change-restrictions', $payload);
    }

    /**
     * Установка таймслота.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function timeslotSet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbs')->post('/timeslot/set', $payload);
    }

    /**
     * Разделение отправления с маркируемыми товарами.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function traceableSplit(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/fbs')->post('/traceable/split', $payload);
    }

    /**
     * Данные ETGB по отправлениям.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function globalEtgb(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('posting/global')->post('/etgb', $payload);
    }

    /**
     * Список отправлений для рейтинга FBS.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function ratingIndexPostingList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('rating/index/fbs/posting')->post('/list', $payload);
    }
}
