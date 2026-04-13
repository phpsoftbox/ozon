<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ReturnsCompanyFbsInfoResponse implements OzonDtoInterface
{
    /**
     * @param list<ReturnsCompanyFbsInfoResponseDropOffPoints> $dropOffPoints
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $dropOffPoints,
        public ?bool $hasNext,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dropOffPoints: OzonDtoValue::objectList($payload['drop_off_points'] ?? null, ReturnsCompanyFbsInfoResponseDropOffPoints::class),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            extra: OzonDtoValue::extra($payload, ['drop_off_points', 'has_next']),
        );
    }
}
