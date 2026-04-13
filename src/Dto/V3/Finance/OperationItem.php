<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class OperationItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $name,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: OzonDtoValue::string($payload['name'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['name', 'sku']),
        );
    }
}
