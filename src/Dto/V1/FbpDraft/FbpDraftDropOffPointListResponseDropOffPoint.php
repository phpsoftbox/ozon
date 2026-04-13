<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbpDraftDropOffPointListResponseDropOffPoint implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $city,
        public ?int $dropOffPointId,
        public ?string $nearestDropOffDate,
        public ?string $pointAddress,
        public ?string $provinceUuid,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            city: OzonDtoValue::string($payload['city'] ?? null),
            dropOffPointId: OzonDtoValue::int($payload['drop_off_point_id'] ?? null),
            nearestDropOffDate: OzonDtoValue::string($payload['nearest_drop_off_date'] ?? null),
            pointAddress: OzonDtoValue::string($payload['point_address'] ?? null),
            provinceUuid: OzonDtoValue::string($payload['province_uuid'] ?? null),
            extra: OzonDtoValue::extra($payload, ['city', 'drop_off_point_id', 'nearest_drop_off_date', 'point_address', 'province_uuid']),
        );
    }
}
