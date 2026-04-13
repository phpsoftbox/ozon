<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ProductCertificateV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Типы соответствия требованиям.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function accordanceTypes(array $query = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate')->get('/accordance-types', $query);
    }

    /**
     * Типы сертификатов.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function types(array $query = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate')->get('/types', $query);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function create(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function bind(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate')->post('/bind', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function delete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate')->post('/delete', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function info(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productStatusList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate/product_status')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate/products')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function unbind(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate')->post('/unbind', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function rejectionReasonsList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate/rejection_reasons')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function statusList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate/status')->post('/list', $payload);
    }

    /**
     * Универсальный метод для product/certificate API v1.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v1('product/certificate')->request($path, $payload, $method, $query);
    }
}
