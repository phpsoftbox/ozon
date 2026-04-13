<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SupplyOrderTimeslot implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $from,
        public ?string $to,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            from: OzonDtoValue::string($payload['from'] ?? null),
            to: OzonDtoValue::string($payload['to'] ?? null),
            extra: OzonDtoValue::extra($payload, ['from', 'to']),
        );
    }
}
