<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SellerActions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PickedSegmentSegment implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $description,
        public ?int $id,
        public ?string $name,
        public ?PickedSegmentSegmentTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            description: OzonDtoValue::string($payload['description'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, PickedSegmentSegmentTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['description', 'id', 'name', 'type']),
        );
    }
}
