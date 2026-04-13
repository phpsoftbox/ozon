<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemItemInfo implements OzonDtoInterface
{
    /**
     * @param list<AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemItemInfoDeliverySchemaEnum> $deliverySchemas
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $deliverySchemas,
        public ?string $image,
        public ?string $name,
        public ?string $offerId,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliverySchemas: OzonDtoValue::scalarObjectList($payload['delivery_schemas'] ?? null, AnalyticsV1AnalyticsLocalSaleClustersItemsInfoResponseItemItemInfoDeliverySchemaEnum::class),
            image: OzonDtoValue::string($payload['image'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['delivery_schemas', 'image', 'name', 'offer_id', 'sku']),
        );
    }
}
