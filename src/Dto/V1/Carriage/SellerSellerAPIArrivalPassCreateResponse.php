<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SellerSellerAPIArrivalPassCreateResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $arrivalPassIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $arrivalPassIds,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            arrivalPassIds: OzonDtoValue::array($payload['arrival_pass_ids'] ?? null),
            extra: OzonDtoValue::extra($payload, ['arrival_pass_ids']),
        );
    }
}
