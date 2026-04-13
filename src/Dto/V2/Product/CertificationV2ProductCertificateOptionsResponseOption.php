<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CertificationV2ProductCertificateOptionsResponseOption implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $name,
        public ?bool $required,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: OzonDtoValue::string($payload['name'] ?? null),
            required: OzonDtoValue::bool($payload['required'] ?? null),
            extra: OzonDtoValue::extra($payload, ['name', 'required']),
        );
    }
}
