<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderCancelStatusResponseCancelSupplyResults implements OzonDtoInterface
{
    /**
     * @param list<CancelSupplyResultsCancelSupplyError> $errorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorReasons,
        public ?bool $isSupplyCancelled,
        public ?int $supplyId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorReasons: OzonDtoValue::objectList($payload['error_reasons'] ?? null, CancelSupplyResultsCancelSupplyError::class),
            isSupplyCancelled: OzonDtoValue::bool($payload['is_supply_cancelled'] ?? null),
            supplyId: OzonDtoValue::int($payload['supply_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error_reasons', 'is_supply_cancelled', 'supply_id']),
        );
    }
}
