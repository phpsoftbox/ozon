<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3DeliveryMethod implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $name,
        public ?string $tplProvider,
        public ?int $tplProviderId,
        public ?string $warehouse,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::int($payload['id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            tplProvider: OzonDtoValue::string($payload['tpl_provider'] ?? null),
            tplProviderId: OzonDtoValue::int($payload['tpl_provider_id'] ?? null),
            warehouse: OzonDtoValue::string($payload['warehouse'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['id', 'name', 'tpl_provider', 'tpl_provider_id', 'warehouse', 'warehouse_id']),
        );
    }
}
