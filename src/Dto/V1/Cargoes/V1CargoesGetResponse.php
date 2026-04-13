<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CargoesGetResponse implements OzonDtoInterface
{
    /**
     * @param list<CargoesGetResponseSupply> $supply
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $supply,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            supply: OzonDtoValue::objectList($payload['supply'] ?? null, CargoesGetResponseSupply::class),
            extra: OzonDtoValue::extra($payload, ['supply']),
        );
    }
}
