<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class OperationService implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $name,
        public ?float $price,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: OzonDtoValue::string($payload['name'] ?? null),
            price: OzonDtoValue::float($payload['price'] ?? null),
            extra: OzonDtoValue::extra($payload, ['name', 'price']),
        );
    }
}
