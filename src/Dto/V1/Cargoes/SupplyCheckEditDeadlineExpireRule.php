<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyCheckEditDeadlineExpireRule implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isApplicable,
        public ?bool $isRequired,
        public ?bool $satisfied,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isApplicable: OzonDtoValue::bool($payload['is_applicable'] ?? null),
            isRequired: OzonDtoValue::bool($payload['is_required'] ?? null),
            satisfied: OzonDtoValue::bool($payload['satisfied'] ?? null),
            extra: OzonDtoValue::extra($payload, ['is_applicable', 'is_required', 'satisfied']),
        );
    }
}
