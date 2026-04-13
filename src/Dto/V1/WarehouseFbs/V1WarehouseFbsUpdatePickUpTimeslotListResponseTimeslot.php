<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1WarehouseFbsUpdatePickUpTimeslotListResponseTimeslot implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $from,
        public ?int $id,
        public ?string $to,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            from: OzonDtoValue::string($payload['from'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            to: OzonDtoValue::string($payload['to'] ?? null),
            extra: OzonDtoValue::extra($payload, ['from', 'id', 'to']),
        );
    }
}
