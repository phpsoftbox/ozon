<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V2;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ActionsV2
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Список заявок на скидки (v2).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function discountsTaskList(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('actions/discounts-task')->post('/list', $payload);
    }

    /**
     * Товары, которые могут участвовать в акции (v2).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function candidates(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('actions')->post('/candidates', $payload);
    }

    /**
     * Товары, которые участвуют в акции (v2).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function products(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('actions')->post('/products', $payload);
    }

    /**
     * Удаление товаров из акции «Промокоды» (v2).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsDeactivate(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('actions/products')->post('/deactivate', $payload);
    }

    /**
     * Товары из автодобавления в акцию (v2).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function autoAddProductsList(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('actions')->post('/auto-add/products/list', $payload);
    }

    /**
     * Товары, доступные для автодобавления в акцию (v2).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function autoAddProductsCandidates(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('actions')->post('/auto-add/products/candidates', $payload);
    }

    /**
     * Удаление товаров из автодобавления в акцию (v2).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function autoAddProductsDelete(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('actions')->post('/auto-add/products/delete', $payload);
    }

    /**
     * Добавление или обновление товаров в автодобавлении в акцию (v2).
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function autoAddProductsUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('actions')->post('/auto-add/products/update', $payload);
    }

    /**
     * Универсальный метод для actions API v2.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v2('actions')->request($path, $payload, $method, $query);
    }
}
