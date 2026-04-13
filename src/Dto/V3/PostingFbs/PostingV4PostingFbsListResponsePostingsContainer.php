<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV4PostingFbsListResponsePostingsContainer implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PostingV3FbsPostingContainerCargoTypeEnum $cargoType,
        public ?string $containerDate,
        public ?int $containerId,
        public ?int $containerNumber,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cargoType: OzonDtoValue::scalarObject($payload['cargo_type'] ?? null, PostingV3FbsPostingContainerCargoTypeEnum::class),
            containerDate: OzonDtoValue::string($payload['container_date'] ?? null),
            containerId: OzonDtoValue::int($payload['container_id'] ?? null),
            containerNumber: OzonDtoValue::int($payload['container_number'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cargo_type', 'container_date', 'container_id', 'container_number']),
        );
    }
}
