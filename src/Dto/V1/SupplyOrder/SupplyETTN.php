<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyETTN implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $containsValid,
        public ?bool $isRequired,
        public ?bool $isUploaded,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            containsValid: OzonDtoValue::bool($payload['contains_valid'] ?? null),
            isRequired: OzonDtoValue::bool($payload['is_required'] ?? null),
            isUploaded: OzonDtoValue::bool($payload['is_uploaded'] ?? null),
            extra: OzonDtoValue::extra($payload, ['contains_valid', 'is_required', 'is_uploaded']),
        );
    }
}
