<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV4PostingFbsUnfulfilledListResponsePostingsContainer implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PostingV4PostingFbsUnfulfilledListResponsePostingsContainerCargoTypeEnum $cargoType,
        public ?string $containerDate,
        public ?int $containerId,
        public ?int $containerNumber,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cargoType: OzonDtoValue::scalarObject($payload['cargo_type'] ?? null, PostingV4PostingFbsUnfulfilledListResponsePostingsContainerCargoTypeEnum::class),
            containerDate: OzonDtoValue::string($payload['container_date'] ?? null),
            containerId: OzonDtoValue::int($payload['container_id'] ?? null),
            containerNumber: OzonDtoValue::int($payload['container_number'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cargo_type', 'container_date', 'container_id', 'container_number']),
        );
    }
}
