<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AnalyticsTurnoverStocksResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $ads,
        public ?int $currentStock,
        public ?float $idc,
        public ?string $idcGrade,
        public ?string $name,
        public ?string $offerId,
        public ?int $sku,
        public ?float $turnover,
        public ?string $turnoverGrade,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            ads: OzonDtoValue::float($payload['ads'] ?? null),
            currentStock: OzonDtoValue::int($payload['current_stock'] ?? null),
            idc: OzonDtoValue::float($payload['idc'] ?? null),
            idcGrade: OzonDtoValue::string($payload['idc_grade'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            turnover: OzonDtoValue::float($payload['turnover'] ?? null),
            turnoverGrade: OzonDtoValue::string($payload['turnover_grade'] ?? null),
            extra: OzonDtoValue::extra($payload, ['ads', 'current_stock', 'idc', 'idc_grade', 'name', 'offer_id', 'sku', 'turnover', 'turnover_grade']),
        );
    }
}
