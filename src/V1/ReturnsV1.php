<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class ReturnsV1
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
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('returns')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function companyFbsInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('returns/company/fbs')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function settingsUtilizationHistory(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('returns/settings/utilization')->post('/history', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function settingsUtilizationInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('returns/settings/utilization')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function settingsUtilizationUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('returns/settings/utilization')->post('/update', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function rfbsActionSet(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('returns/rfbs/action')->post('/set', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function giveoutIsEnabled(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('return/giveout')->post('/is-enabled', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function giveoutList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('return/giveout')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function giveoutInfo(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('return/giveout')->post('/info', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function giveoutBarcode(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('return/giveout')->post('/barcode', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function giveoutGetPdf(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('return/giveout')->post('/get-pdf', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function giveoutGetPng(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('return/giveout')->post('/get-png', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function giveoutBarcodeReset(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('return/giveout')->post('/barcode-reset', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function passCreate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('return/pass')->post('/create', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function passUpdate(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('return/pass')->post('/update', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function passDelete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('return/pass')->post('/delete', $payload);
    }

    /**
     * Универсальный метод для returns API v1.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v1('returns')->request($path, $payload, $method, $query);
    }
}
