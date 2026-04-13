<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetProductStairwayDiscountByQuantityResponseStairways implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $enabled,
        public ?int $sku,
        public ?V1GetProductStairwayDiscountByQuantityResponseStairwaysStairway $stairway,
        public ?StatusEnum $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            enabled: OzonDtoValue::bool($payload['enabled'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            stairway: OzonDtoValue::object($payload['stairway'] ?? null, V1GetProductStairwayDiscountByQuantityResponseStairwaysStairway::class),
            status: OzonDtoValue::object($payload['status'] ?? null, StatusEnum::class),
            extra: OzonDtoValue::extra($payload, ['enabled', 'sku', 'stairway', 'status']),
        );
    }
}
