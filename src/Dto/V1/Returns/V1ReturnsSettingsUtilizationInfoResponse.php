<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ReturnsSettingsUtilizationInfoResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?MinUtilizationMoney $minPrice,
        public ?ReturnsSettingsUtilizationInfoResponseUtilizationSettings $utilizationSettings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            minPrice: OzonDtoValue::object($payload['min_price'] ?? null, MinUtilizationMoney::class),
            utilizationSettings: OzonDtoValue::object($payload['utilization_settings'] ?? null, ReturnsSettingsUtilizationInfoResponseUtilizationSettings::class),
            extra: OzonDtoValue::extra($payload, ['min_price', 'utilization_settings']),
        );
    }
}
