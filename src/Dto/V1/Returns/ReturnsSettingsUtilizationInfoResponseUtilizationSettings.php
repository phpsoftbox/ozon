<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReturnsSettingsUtilizationInfoResponseUtilizationSettings implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?UtilizationMoney $utilizationPrice,
        public ?UtilizationDefectsMoney $utilizationPriceDefects,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            utilizationPrice: OzonDtoValue::object($payload['utilization_price'] ?? null, UtilizationMoney::class),
            utilizationPriceDefects: OzonDtoValue::object($payload['utilization_price_defects'] ?? null, UtilizationDefectsMoney::class),
            extra: OzonDtoValue::extra($payload, ['utilization_price', 'utilization_price_defects']),
        );
    }
}
