<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Return;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GiveoutListResponseGiveoutDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $approvedArticlesCount,
        public ?string $createdAt,
        public ?int $giveoutId,
        public ?V1GiveoutStatus $giveoutStatus,
        public ?int $totalArticlesCount,
        public ?string $warehouseAddress,
        public ?int $warehouseId,
        public ?string $warehouseName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            approvedArticlesCount: OzonDtoValue::int($payload['approved_articles_count'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            giveoutId: OzonDtoValue::int($payload['giveout_id'] ?? null),
            giveoutStatus: OzonDtoValue::object($payload['giveout_status'] ?? null, V1GiveoutStatus::class),
            totalArticlesCount: OzonDtoValue::int($payload['total_articles_count'] ?? null),
            warehouseAddress: OzonDtoValue::string($payload['warehouse_address'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            warehouseName: OzonDtoValue::string($payload['warehouse_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['approved_articles_count', 'created_at', 'giveout_id', 'giveout_status', 'total_articles_count', 'warehouse_address', 'warehouse_id', 'warehouse_name']),
        );
    }
}
