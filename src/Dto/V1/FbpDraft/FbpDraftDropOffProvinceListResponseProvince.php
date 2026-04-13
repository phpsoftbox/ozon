<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbpDraftDropOffProvinceListResponseProvince implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $name,
        public ?int $pointsCount,
        public ?string $provinceUuid,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: OzonDtoValue::string($payload['name'] ?? null),
            pointsCount: OzonDtoValue::int($payload['points_count'] ?? null),
            provinceUuid: OzonDtoValue::string($payload['province_uuid'] ?? null),
            extra: OzonDtoValue::extra($payload, ['name', 'points_count', 'province_uuid']),
        );
    }
}
