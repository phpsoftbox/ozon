<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoListResponseCommission implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $deliveryAmount,
        public ?float $percent,
        public ?float $returnAmount,
        public ?string $saleSchema,
        public ?float $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliveryAmount: OzonDtoValue::float($payload['delivery_amount'] ?? null),
            percent: OzonDtoValue::float($payload['percent'] ?? null),
            returnAmount: OzonDtoValue::float($payload['return_amount'] ?? null),
            saleSchema: OzonDtoValue::string($payload['sale_schema'] ?? null),
            value: OzonDtoValue::float($payload['value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['delivery_amount', 'percent', 'return_amount', 'sale_schema', 'value']),
        );
    }
}
