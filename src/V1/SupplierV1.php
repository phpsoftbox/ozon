<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class SupplierV1
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Доступные склады поставки.
     *
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function availableWarehouses(array $query = []): OzonApiResponse
    {
        return $this->client->v1('supplier')->get('/available_warehouses', $query);
    }
}
