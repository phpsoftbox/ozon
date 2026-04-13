<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V2;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class SupplyOrderV2
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Получить список доступных интервалов поставки.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function timeslotList(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('supply-order')->post('/timeslot/list', $payload);
    }
}
