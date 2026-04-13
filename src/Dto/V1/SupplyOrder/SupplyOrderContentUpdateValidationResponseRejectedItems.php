<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderContentUpdateValidationResponseRejectedItems implements OzonDtoInterface
{
    /**
     * @param list<RejectedItemsRejectionReasonEnum> $rejectionReason
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $barcode,
        public ?string $name,
        public ?string $offerId,
        public ?int $originQuantity,
        public ?float $originTotalVolumeInLitres,
        public ?int $quantity,
        public array $rejectionReason,
        public ?RejectedItemsRestrictions $restrictions,
        public ?int $sku,
        public ?float $totalVolumeInLitres,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            barcode: OzonDtoValue::string($payload['barcode'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            originQuantity: OzonDtoValue::int($payload['origin_quantity'] ?? null),
            originTotalVolumeInLitres: OzonDtoValue::float($payload['origin_total_volume_in_litres'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            rejectionReason: OzonDtoValue::objectList($payload['rejection_reason'] ?? null, RejectedItemsRejectionReasonEnum::class),
            restrictions: OzonDtoValue::object($payload['restrictions'] ?? null, RejectedItemsRestrictions::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            totalVolumeInLitres: OzonDtoValue::float($payload['total_volume_in_litres'] ?? null),
            extra: OzonDtoValue::extra($payload, ['barcode', 'name', 'offer_id', 'origin_quantity', 'origin_total_volume_in_litres', 'quantity', 'rejection_reason', 'restrictions', 'sku', 'total_volume_in_litres']),
        );
    }
}
