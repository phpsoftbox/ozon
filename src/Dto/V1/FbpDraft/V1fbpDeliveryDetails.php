<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;
use PhpSoftBox\Ozon\Dto\V1\FbpArchive\DeliveryDetailsDropOffPointDetails;
use PhpSoftBox\Ozon\Dto\V1\FbpArchive\DeliveryDetailsSupplyType;
use PhpSoftBox\Ozon\Dto\V1\FbpArchive\V1DeliveryDetailsDirectDetails;
use PhpSoftBox\Ozon\Dto\V1\FbpArchive\V1DeliveryDetailsPickUpDetails;

final readonly class V1fbpDeliveryDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1DeliveryDetailsDirectDetails $directDetails,
        public ?DeliveryDetailsDropOffPointDetails $dropOffPoint,
        public ?V1DeliveryDetailsPickUpDetails $pickupDetails,
        public ?DeliveryDetailsSupplyType $supplyType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            directDetails: OzonDtoValue::object($payload['direct_details'] ?? null, V1DeliveryDetailsDirectDetails::class),
            dropOffPoint: OzonDtoValue::object($payload['drop_off_point'] ?? null, DeliveryDetailsDropOffPointDetails::class),
            pickupDetails: OzonDtoValue::object($payload['pickup_details'] ?? null, V1DeliveryDetailsPickUpDetails::class),
            supplyType: OzonDtoValue::object($payload['supply_type'] ?? null, DeliveryDetailsSupplyType::class),
            extra: OzonDtoValue::extra($payload, ['direct_details', 'drop_off_point', 'pickup_details', 'supply_type']),
        );
    }
}
