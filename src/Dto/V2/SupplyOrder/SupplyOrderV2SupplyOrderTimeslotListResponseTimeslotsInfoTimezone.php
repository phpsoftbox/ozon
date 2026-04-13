<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotsInfoTimezone implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $ianaName,
        public ?int $offset,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            ianaName: OzonDtoValue::string($payload['iana_name'] ?? null),
            offset: OzonDtoValue::int($payload['offset'] ?? null),
            extra: OzonDtoValue::extra($payload, ['iana_name', 'offset']),
        );
    }
}
