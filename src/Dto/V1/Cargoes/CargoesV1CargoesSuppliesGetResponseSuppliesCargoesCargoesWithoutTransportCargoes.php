<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV1CargoesSuppliesGetResponseSuppliesCargoesCargoesWithoutTransportCargoes implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $barcode,
        public ?string $bundleId,
        public ?int $cargoId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            barcode: OzonDtoValue::string($payload['barcode'] ?? null),
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            cargoId: OzonDtoValue::int($payload['cargo_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['barcode', 'bundle_id', 'cargo_id']),
        );
    }
}
