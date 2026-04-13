<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class FinanceV1
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
    public function cashFlowStatementList(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('finance/cash-flow-statement')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function realizationPosting(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('finance/realization')->post('/posting', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function documentB2bSales(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('finance')->post('/document-b2b-sales', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function documentB2bSalesJson(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('finance/document-b2b-sales')->post('/json', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function mutualSettlement(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('finance')->post('/mutual-settlement', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function productsBuyout(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('finance/products')->post('/buyout', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function compensation(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('finance')->post('/compensation', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function decompensation(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('finance')->post('/decompensation', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function balance(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('finance')->post('/balance', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function realizationByDay(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('finance/realization')->post('/by-day', $payload);
    }
}
