<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpArchive;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryDetailsDropOffPointDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $provinceUuid,
        public ?V1fbpTimeslot $timeslot,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::int($payload['id'] ?? null),
            provinceUuid: OzonDtoValue::string($payload['province_uuid'] ?? null),
            timeslot: OzonDtoValue::object($payload['timeslot'] ?? null, V1fbpTimeslot::class),
            extra: OzonDtoValue::extra($payload, ['id', 'province_uuid', 'timeslot']),
        );
    }
}
