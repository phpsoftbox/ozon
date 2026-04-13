<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class SellerActionsV1
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
    public function createDiscount(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/create')->post('/discount', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function createDiscountWithCondition(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/create')->post('/discount-with-condition', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function createInstallment(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/create')->post('/installment', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function createMultiLevelDiscount(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/create')->post('/multi-level-discount', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function createOzonCardDiscount(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/create')->post('/ozon-card-discount', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function createVoucher(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/create')->post('/voucher', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function updateDiscount(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/update')->post('/discount', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function updateDiscountWithCondition(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/update')->post('/discount-with-condition', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function updateInstallment(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/update')->post('/installment', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function updateMultiLevelDiscount(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/update')->post('/multi-level-discount', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function updateOzonCardDiscount(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/update')->post('/ozon-card-discount', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function updateVoucher(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/update')->post('/voucher', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsAdd(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/products')->post('/add', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsCandidates(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/products')->post('/candidates', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsDelete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/products')->post('/delete', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/products')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function archive(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions')->post('/archive', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function changeActivity(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions')->post('/change-activity', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function voucherGet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions/voucher')->post('/get', $payload);
    }

    /**
     * Универсальный метод для seller-actions API v1.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v1('seller-actions')->request($path, $payload, $method, $query);
    }
}
