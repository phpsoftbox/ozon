<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V1;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class InvoiceV1
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
    public function fileUpload(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('invoice/file')->post('/upload', $payload);
    }

    /**
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function delete(array $payload = []): OzonApiResponse
    {
        return $this->client->v1('invoice')->post('/delete', $payload);
    }
}
