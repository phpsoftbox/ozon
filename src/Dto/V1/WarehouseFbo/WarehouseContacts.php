<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\WarehouseFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseContacts implements OzonDtoInterface
{
    /**
     * @param list<string> $phoneNumbers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $phoneNumbers,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            phoneNumbers: OzonDtoValue::array($payload['phone_numbers'] ?? null),
            extra: OzonDtoValue::extra($payload, ['phone_numbers']),
        );
    }
}
