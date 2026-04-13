<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Finance;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DetailsRfbsDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $total,
        public ?float $transferDelivery,
        public ?float $transferDeliveryReturn,
        public ?float $compensationDeliveryReturn,
        public ?float $partialCompensation,
        public ?float $partialCompensationReturn,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            total: OzonDtoValue::float($payload['total'] ?? null),
            transferDelivery: OzonDtoValue::float($payload['transfer_delivery'] ?? null),
            transferDeliveryReturn: OzonDtoValue::float($payload['transfer_delivery_return'] ?? null),
            compensationDeliveryReturn: OzonDtoValue::float($payload['compensation_delivery_return'] ?? null),
            partialCompensation: OzonDtoValue::float($payload['partial_compensation'] ?? null),
            partialCompensationReturn: OzonDtoValue::float($payload['partial_compensation_return'] ?? null),
            extra: OzonDtoValue::extra($payload, ['total', 'transfer_delivery', 'transfer_delivery_return', 'compensation_delivery_return', 'partial_compensation', 'partial_compensation_return']),
        );
    }
}
