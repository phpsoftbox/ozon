<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpDraftDropOffProvinceListResponse implements OzonDtoInterface
{
    /**
     * @param list<FbpDraftDropOffProvinceListResponseProvince> $provinces
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $provinces,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            provinces: OzonDtoValue::objectList($payload['provinces'] ?? null, FbpDraftDropOffProvinceListResponseProvince::class),
            extra: OzonDtoValue::extra($payload, ['provinces']),
        );
    }
}
