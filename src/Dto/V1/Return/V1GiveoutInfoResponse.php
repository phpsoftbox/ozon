<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Return;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GiveoutInfoResponse implements OzonDtoInterface
{
    /**
     * @param list<GiveoutInfoResponseArticleDetails> $articles
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $articles,
        public ?int $giveoutId,
        public ?V1GiveoutStatus $giveoutStatus,
        public ?string $warehouseAddress,
        public ?string $warehouseName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            articles: OzonDtoValue::objectList($payload['articles'] ?? null, GiveoutInfoResponseArticleDetails::class),
            giveoutId: OzonDtoValue::int($payload['giveout_id'] ?? null),
            giveoutStatus: OzonDtoValue::object($payload['giveout_status'] ?? null, V1GiveoutStatus::class),
            warehouseAddress: OzonDtoValue::string($payload['warehouse_address'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['articles', 'giveout_id', 'giveout_status', 'warehouse_address', 'warehouse_name']),
        );
    }
}
