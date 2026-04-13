<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotChangeForbidden implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotChangeForbiddenErrorReasonsEnum> $errorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorReasons,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorReasons: OzonDtoValue::scalarObjectList($payload['error_reasons'] ?? null, SupplyOrderV2SupplyOrderTimeslotListResponseTimeslotChangeForbiddenErrorReasonsEnum::class),
            extra: OzonDtoValue::extra($payload, ['error_reasons']),
        );
    }
}
