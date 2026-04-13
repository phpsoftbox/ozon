<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryMethodHolidays implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $begin,
        public ?string $end,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            begin: OzonDtoValue::string($payload['begin'] ?? null),
            end: OzonDtoValue::string($payload['end'] ?? null),
            extra: OzonDtoValue::extra($payload, ['begin', 'end']),
        );
    }
}
