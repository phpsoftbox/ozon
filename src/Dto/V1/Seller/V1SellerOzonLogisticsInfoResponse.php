<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Seller;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SellerOzonLogisticsInfoResponse implements OzonDtoInterface
{
    /**
     * @param list<SellerOzonLogisticsInfoResponseAvailableSchemasEnum> $availableSchemas
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $availableSchemas,
        public ?bool $ozonLogisticsEnabled,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availableSchemas: OzonDtoValue::objectList($payload['available_schemas'] ?? null, SellerOzonLogisticsInfoResponseAvailableSchemasEnum::class),
            ozonLogisticsEnabled: OzonDtoValue::bool($payload['ozon_logistics_enabled'] ?? null),
            extra: OzonDtoValue::extra($payload, ['available_schemas', 'ozon_logistics_enabled']),
        );
    }
}
