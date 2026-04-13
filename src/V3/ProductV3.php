<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\V3;

use InvalidArgumentException;
use PhpSoftBox\Collection\Collection;
use PhpSoftBox\Ozon\OzonApiClient;
use PhpSoftBox\Ozon\OzonApiResponse;
use stdClass;

use function count;
use function is_array;
use function is_string;
use function usleep;

final class ProductV3
{
    public function __construct(
        private readonly OzonApiClient $client,
    ) {
    }

    /**
     * Возвращает список товаров.
     *
     * @param array<string, mixed> $filter
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function list(array $filter = [], ?string $lastId = null, int $limit = 1000): OzonApiResponse
    {
        $resolvedFilter = Collection::from($filter)
            ->only(['offer_id', 'product_id', 'visibility'])
            ->all();

        $payload = [
            'filter' => $resolvedFilter !== [] ? $resolvedFilter : new stdClass(),
            'limit'  => $limit,
        ];
        if ($lastId !== null && $lastId !== '') {
            $payload['last_id'] = $lastId;
        }

        return $this->client->v3('product')->post('/list', $payload);
    }

    /**
     * Подсчитывает количество товаров в выдаче list() постранично.
     */
    public function listCount(array $filter = [], int $limit = 1000, int $pauseMicros = 0): int
    {
        $lastId = null;
        $total  = 0;

        while (true) {
            $response = $this->list($filter, $lastId, $limit);
            $result   = $response->get('result', []);
            $items    = is_array($result) && isset($result['items']) && is_array($result['items'])
                ? $result['items']
                : [];

            $total += count($items);
            $nextLastId = is_array($result) ? ($result['last_id'] ?? null) : null;
            if (!is_string($nextLastId) || $nextLastId === '' || count($items) < $limit) {
                break;
            }

            $lastId = $nextLastId;
            if ($pauseMicros > 0) {
                usleep($pauseMicros);
            }
        }

        return $total;
    }

    /**
     * Возвращает информацию о товарах по идентификаторам.
     *
     * @param array<string, mixed> $query
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function infoList(array $query): OzonApiResponse
    {
        $payload = Collection::from($query)
            ->only(['offer_id', 'product_id', 'sku'])
            ->all();
        if ($payload === []) {
            throw new InvalidArgumentException('At least one of [offer_id, product_id, sku] is required.');
        }

        return $this->client->v3('product')->post('/info/list', $payload);
    }

    /**
     * Создает или обновляет товары.
     *
     * @param list<array<string, mixed>> $items
     *
     * @return OzonApiResponse<string, mixed>
     */
    public function import(array $items): OzonApiResponse
    {
        if ($items === []) {
            throw new InvalidArgumentException('items must not be empty.');
        }

        return $this->client->v3('product')->post('/import', [
            'items' => $items,
        ]);
    }
}
