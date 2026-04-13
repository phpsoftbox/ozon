<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesGetResponseSuppliesLimits implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $maxBoxCount,
        public ?int $maxBoxSkuCount,
        public ?int $maxPalletCount,
        public ?int $maxTransportPalletCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            maxBoxCount: OzonDtoValue::int($payload['max_box_count'] ?? null),
            maxBoxSkuCount: OzonDtoValue::int($payload['max_box_sku_count'] ?? null),
            maxPalletCount: OzonDtoValue::int($payload['max_pallet_count'] ?? null),
            maxTransportPalletCount: OzonDtoValue::int($payload['max_transport_pallet_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['max_box_count', 'max_box_sku_count', 'max_pallet_count', 'max_transport_pallet_count']),
        );
    }
}
