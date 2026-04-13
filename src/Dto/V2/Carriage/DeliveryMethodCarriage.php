<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryMethodCarriage implements OzonDtoInterface
{
    /**
     * @param list<string> $availableActions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $allBlrTraceable,
        public array $availableActions,
        public ?float $carriageVolume,
        public ?int $id,
        public ?CarriagePickupFee $pickupFee,
        public ?int $postingsCount,
        public ?int $quantumCount,
        public ?string $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            allBlrTraceable: OzonDtoValue::bool($payload['all_blr_traceable'] ?? null),
            availableActions: OzonDtoValue::array($payload['available_actions'] ?? null),
            carriageVolume: OzonDtoValue::float($payload['carriage_volume'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            pickupFee: OzonDtoValue::object($payload['pickup_fee'] ?? null, CarriagePickupFee::class),
            postingsCount: OzonDtoValue::int($payload['postings_count'] ?? null),
            quantumCount: OzonDtoValue::int($payload['quantum_count'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            extra: OzonDtoValue::extra($payload, ['all_blr_traceable', 'available_actions', 'carriage_volume', 'id', 'pickup_fee', 'postings_count', 'quantum_count', 'status']),
        );
    }
}
