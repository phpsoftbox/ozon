<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoInfoTrackingInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $date,
        public ?CargoInfoTrackingInfoStatusEnum $status,
        public ?CargoInfoTrackingInfoTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            date: OzonDtoValue::string($payload['date'] ?? null),
            status: OzonDtoValue::object($payload['status'] ?? null, CargoInfoTrackingInfoStatusEnum::class),
            type: OzonDtoValue::object($payload['type'] ?? null, CargoInfoTrackingInfoTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['date', 'status', 'type']),
        );
    }
}
