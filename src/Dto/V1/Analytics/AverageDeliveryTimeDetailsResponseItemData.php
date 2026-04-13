<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Analytics;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AverageDeliveryTimeDetailsResponseItemData implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?AverageDeliveryTimeDetailsResponseItemDataDeliverySchema $deliverySchema,
        public ?string $name,
        public ?string $offerId,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliverySchema: OzonDtoValue::object($payload['delivery_schema'] ?? null, AverageDeliveryTimeDetailsResponseItemDataDeliverySchema::class),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['delivery_schema', 'name', 'offer_id', 'sku']),
        );
    }
}
