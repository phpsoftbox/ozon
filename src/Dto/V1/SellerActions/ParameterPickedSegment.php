<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SellerActions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ParameterPickedSegment implements OzonDtoInterface
{
    /**
     * @param list<PickedSegmentSegment> $segments
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $segments,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            segments: OzonDtoValue::objectList($payload['segments'] ?? null, PickedSegmentSegment::class),
            extra: OzonDtoValue::extra($payload, ['segments']),
        );
    }
}
