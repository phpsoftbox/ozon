<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpArchive;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ArchiveSkuSummary implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $roundedTotalVolumeInLitres,
        public ?int $totalItemsCount,
        public ?int $totalQuantity,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            roundedTotalVolumeInLitres: OzonDtoValue::float($payload['rounded_total_volume_in_litres'] ?? null),
            totalItemsCount: OzonDtoValue::int($payload['total_items_count'] ?? null),
            totalQuantity: OzonDtoValue::int($payload['total_quantity'] ?? null),
            extra: OzonDtoValue::extra($payload, ['rounded_total_volume_in_litres', 'total_items_count', 'total_quantity']),
        );
    }
}
