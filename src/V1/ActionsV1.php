<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ActionsV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Список акций Ozon.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $query = []): OzonApiResponse
    {
        return $this->client->v1('actions')->get('', $query);
    }

    /**
     * Товары-кандидаты для акции.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function candidates(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('actions')->post('/candidates', $payload);
    }

    /**
     * Список товаров акции.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function products(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('actions')->post('/products', $payload);
    }

    /**
     * Добавить товары в акцию.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsActivate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('actions/products')->post('/activate', $payload);
    }

    /**
     * Удалить товары из акции.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsDeactivate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('actions/products')->post('/deactivate', $payload);
    }

    /**
     * Список заявок на скидки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function discountsTaskList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('actions/discounts-task')->post('/list', $payload);
    }

    /**
     * Подтвердить заявку на скидку.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function discountsTaskApprove(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('actions/discounts-task')->post('/approve', $payload);
    }

    /**
     * Отклонить заявку на скидку.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function discountsTaskDecline(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('actions/discounts-task')->post('/decline', $payload);
    }

    /**
     * Универсальный метод для actions API v1.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v1('actions')->request($path, $payload, $method, $query);
    }
}
