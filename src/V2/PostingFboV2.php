<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V2;

use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;

final class PostingFboV2
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Список отправлений FBO.
     *
     * @param array<string, mixed> $payload
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $payload = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbo')->post('/list', $payload);
    }

    /**
     * Детали отправления FBO.
     *
     * @param array<string, mixed> $with
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function get(string $postingNumber, array $with = []): OzonApiResponse
    {
        $payload = [
            'posting_number' => $postingNumber,
        ];
        if ($with !== []) {
            $payload['with'] = $with;
        }

        return $this->client->v2('posting/fbo')->post('/get', $payload);
    }

    /**
     * Универсальный метод для FBO posting API v2.
     *
     * @param array<string, mixed> $payload
     * @param array<string, scalar|array<array-key, scalar|null>|null> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function request(string $path, array $payload = [], string $method = 'POST', array $query = []): OzonApiResponse
    {
        return $this->client->v2('posting/fbo')->request($path, $payload, $method, $query);
    }
}
