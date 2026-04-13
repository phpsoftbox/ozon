<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV1SupplyOrderActProductGetResponseSkusDefects implements OzonDtoInterface
{
    /**
     * @param list<string> $defectReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $defectReasons,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            defectReasons: OzonDtoValue::array($payload['defect_reasons'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['defect_reasons', 'sku']),
        );
    }
}
