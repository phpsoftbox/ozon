<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V3;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class FinanceV3
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
    public function transactionList(array $payload = []): OzonApiResponse
    {
        return $this->client->v3('finance/transaction')->post('/list', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function transactionTotals(array $payload = []): OzonApiResponse
    {
        return $this->client->v3('finance/transaction')->post('/totals', $payload);
    }
}
