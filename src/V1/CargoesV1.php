<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class CargoesV1
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
        return $this->client->v1('cargoes')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function delete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/delete', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function deleteStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes/delete')->post('/status', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function get(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/get', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function rulesGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes/rules')->post('/get', $payload);
    }

    /**
     * Включить или отключить транспортные грузоместа в поставке.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function transportActivate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/transport/activate', $payload);
    }

    /**
     * Получить статус включения или отключения транспортных грузомест.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function transportActivateStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/transport/activate/status', $payload);
    }

    /**
     * Создать транспортное грузоместо.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function transportCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/transport/create', $payload);
    }

    /**
     * Получить статус создания транспортного грузоместа.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function transportCreateStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/transport/create/status', $payload);
    }

    /**
     * Связать или отвязать грузоместа и транспортные грузоместа.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function transportBind(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/transport/bind', $payload);
    }

    /**
     * Получить статус связывания или отвязывания грузомест и транспортных грузомест.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function transportBindStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/transport/bind/status', $payload);
    }

    /**
     * Получить информацию о грузоместах в поставках.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function suppliesGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/supplies/get', $payload);
    }

    /**
     * Сгенерировать этикетки для транспортных грузомест по идентификатору поставки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function labelTransportByOrderCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/label/transport-by-order/create', $payload);
    }

    /**
     * Получить статус генерации этикеток для транспортных грузомеcт по идентификатору поставки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function labelTransportByOrderStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/label/transport-by-order/status', $payload);
    }

    /**
     * Сгенерировать этикетки транспортных грузомест по идентификатору грузоместа.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function labelTransportCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/label/transport/create', $payload);
    }

    /**
     * Получить статус генерации этикеток транспортных грузомест по идентификатору грузоместа.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function labelTransportStatus(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('cargoes')->post('/label/transport/status', $payload);
    }
}
