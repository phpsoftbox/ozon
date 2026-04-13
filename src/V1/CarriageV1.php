<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class CarriageV1
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
    public function actDiscrepancyPdf(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage/act-discrepancy')->post('/pdf', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function approve(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/approve', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function cancel(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/cancel', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function create(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function deliveryList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage/delivery')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function ettnStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage/ettn')->post('/status', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function get(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/get', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function passCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage/pass')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function passDelete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage/pass')->post('/delete', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function passUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage/pass')->post('/update', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function setPostings(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/set-postings', $payload);
    }

    /**
     * Добавить или обновить контактные данные продавца для курьера.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function courierContactSet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/courier-contact/set', $payload);
    }

    /**
     * Получить контактные данные продавца для курьера.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function courierContactGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/courier-contact/get', $payload);
    }

    /**
     * Создать грузоместо.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/create', $payload);
    }

    /**
     * Наполнить грузоместо отправлениями.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerFill(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/fill', $payload);
    }

    /**
     * Подтвердить состав грузоместа.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerApprove(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/approve', $payload);
    }

    /**
     * Разместить коробки на палете.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerPlaceInto(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/place-into', $payload);
    }

    /**
     * Убрать отправления из грузоместа.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerRemovePostings(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/remove-postings', $payload);
    }

    /**
     * Убрать коробки с палеты.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerRemoveFrom(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/remove-from', $payload);
    }

    /**
     * Отменить грузоместо.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerCancel(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/cancel', $payload);
    }

    /**
     * Получить список грузомест.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/list', $payload);
    }

    /**
     * Получить информацию о грузоместах.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/get', $payload);
    }

    /**
     * Получить статус грузомест FBS.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerStatusGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/status/get', $payload);
    }

    /**
     * Получить статус задачи грузового места.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerTaskInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/task/info', $payload);
    }

    /**
     * Получить документы по грузоместам — ТрН и лист отгрузки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerDocumentGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/document/get', $payload);
    }

    /**
     * Получить этикетку по грузоместам.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function containerLabelGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('carriage')->post('/container/label/get', $payload);
    }
}
