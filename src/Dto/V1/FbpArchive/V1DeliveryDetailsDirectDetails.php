<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpArchive;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DeliveryDetailsDirectDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DirectDetailsBySellerDetails $bySellerDetails,
        public ?DirectDetailsByTplDetails $byTplDetails,
        public ?DirectDetailsTimeslotDetails $timeslotDetails,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            bySellerDetails: OzonDtoValue::object($payload['by_seller_details'] ?? null, DirectDetailsBySellerDetails::class),
            byTplDetails: OzonDtoValue::object($payload['by_tpl_details'] ?? null, DirectDetailsByTplDetails::class),
            timeslotDetails: OzonDtoValue::object($payload['timeslot_details'] ?? null, DirectDetailsTimeslotDetails::class),
            extra: OzonDtoValue::extra($payload, ['by_seller_details', 'by_tpl_details', 'timeslot_details']),
        );
    }
}
