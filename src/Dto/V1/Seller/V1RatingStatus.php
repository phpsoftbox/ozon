<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Seller;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1RatingStatus implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $danger,
        public ?bool $premium,
        public ?bool $warning,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            danger: OzonDtoValue::bool($payload['danger'] ?? null),
            premium: OzonDtoValue::bool($payload['premium'] ?? null),
            warning: OzonDtoValue::bool($payload['warning'] ?? null),
            extra: OzonDtoValue::extra($payload, ['danger', 'premium', 'warning']),
        );
    }
}
