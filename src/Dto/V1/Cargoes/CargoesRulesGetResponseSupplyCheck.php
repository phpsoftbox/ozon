<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesRulesGetResponseSupplyCheck implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SupplyCheckCargoesPresentRule $cargoesPresentsRule,
        public ?SupplyCheckEditDeadlineExpireRule $editDeadlineExpireRule,
        public ?SupplyCheckExpireDatePresentedRule $expireDatesPresentedRule,
        public ?SupplyCheckIsValidDistributionRule $isValidDistributionRule,
        public ?SupplyCheckPackageUnitWithDistributionRule $packageUnitsWithDistributionRule,
        public ?SupplyCheckPlacementZoneRule $placementZonesRule,
        public ?int $supplyId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cargoesPresentsRule: OzonDtoValue::object($payload['cargoes_presents_rule'] ?? null, SupplyCheckCargoesPresentRule::class),
            editDeadlineExpireRule: OzonDtoValue::object($payload['edit_deadline_expire_rule'] ?? null, SupplyCheckEditDeadlineExpireRule::class),
            expireDatesPresentedRule: OzonDtoValue::object($payload['expire_dates_presented_rule'] ?? null, SupplyCheckExpireDatePresentedRule::class),
            isValidDistributionRule: OzonDtoValue::object($payload['is_valid_distribution_rule'] ?? null, SupplyCheckIsValidDistributionRule::class),
            packageUnitsWithDistributionRule: OzonDtoValue::object($payload['package_units_with_distribution_rule'] ?? null, SupplyCheckPackageUnitWithDistributionRule::class),
            placementZonesRule: OzonDtoValue::object($payload['placement_zones_rule'] ?? null, SupplyCheckPlacementZoneRule::class),
            supplyId: OzonDtoValue::int($payload['supply_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['cargoes_presents_rule', 'edit_deadline_expire_rule', 'expire_dates_presented_rule', 'is_valid_distribution_rule', 'package_units_with_distribution_rule', 'placement_zones_rule', 'supply_id']),
        );
    }
}
