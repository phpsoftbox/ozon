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
}
