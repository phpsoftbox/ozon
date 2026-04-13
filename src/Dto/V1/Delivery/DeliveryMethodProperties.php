<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryMethodProperties implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $enabled,
        public ?string $name,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            enabled: OzonDtoValue::bool($payload['enabled'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['enabled', 'name']),
        );
    }
}
