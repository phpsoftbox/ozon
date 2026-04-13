<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesPresentRuleCargoCountPerType implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $count,
        public ?CargoesPresentRuleCargoCountPerTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            count: OzonDtoValue::int($payload['count'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, CargoesPresentRuleCargoCountPerTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['count', 'type']),
        );
    }
}
