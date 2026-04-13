<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpDraftDropOffPointListResponse implements OzonDtoInterface
{
    /**
     * @param list<FbpDraftDropOffPointListResponseDropOffPoint> $dropOffPoints
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $dropOffPoints,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dropOffPoints: OzonDtoValue::objectList($payload['drop_off_points'] ?? null, FbpDraftDropOffPointListResponseDropOffPoint::class),
            extra: OzonDtoValue::extra($payload, ['drop_off_points']),
        );
    }
}
