<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class RowItemCommission implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $amount,
        public ?float $bonus,
        public ?float $commission,
        public ?float $compensation,
        public ?float $pricePerInstance,
        public ?int $quantity,
        public ?float $standardFee,
        public ?float $bankCoinvestment,
        public ?float $stars,
        public ?float $pickUpPointCoinvestment,
        public ?float $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            amount: OzonDtoValue::float($payload['amount'] ?? null),
            bonus: OzonDtoValue::float($payload['bonus'] ?? null),
            commission: OzonDtoValue::float($payload['commission'] ?? null),
            compensation: OzonDtoValue::float($payload['compensation'] ?? null),
            pricePerInstance: OzonDtoValue::float($payload['price_per_instance'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            standardFee: OzonDtoValue::float($payload['standard_fee'] ?? null),
            bankCoinvestment: OzonDtoValue::float($payload['bank_coinvestment'] ?? null),
            stars: OzonDtoValue::float($payload['stars'] ?? null),
            pickUpPointCoinvestment: OzonDtoValue::float($payload['pick_up_point_coinvestment'] ?? null),
            total: OzonDtoValue::float($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['amount', 'bonus', 'commission', 'compensation', 'price_per_instance', 'quantity', 'standard_fee', 'bank_coinvestment', 'stars', 'pick_up_point_coinvestment', 'total']),
        );
    }
}
