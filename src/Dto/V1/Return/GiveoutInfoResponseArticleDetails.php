<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Return;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GiveoutInfoResponseArticleDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $approved,
        public ?V1GiveoutDeliverySchema $deliverySchema,
        public ?string $name,
        public ?int $sellerId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            approved: OzonDtoValue::bool($payload['approved'] ?? null),
            deliverySchema: OzonDtoValue::object($payload['delivery_schema'] ?? null, V1GiveoutDeliverySchema::class),
            name: OzonDtoValue::string($payload['name'] ?? null),
            sellerId: OzonDtoValue::int($payload['seller_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['approved', 'delivery_schema', 'name', 'seller_id']),
        );
    }
}
