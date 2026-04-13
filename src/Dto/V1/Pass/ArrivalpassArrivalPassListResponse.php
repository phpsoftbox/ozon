<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Pass;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ArrivalpassArrivalPassListResponse implements OzonDtoInterface
{
    /**
     * @param list<ArrivalpassArrivalPassListResponseArrivalPass> $arrivalPasses
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $arrivalPasses,
        public ?string $cursor,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            arrivalPasses: OzonDtoValue::objectList($payload['arrival_passes'] ?? null, ArrivalpassArrivalPassListResponseArrivalPass::class),
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            extra: OzonDtoValue::extra($payload, ['arrival_passes', 'cursor']),
        );
    }
}
