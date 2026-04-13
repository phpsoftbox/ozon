<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DeliveryPointInfoResponsePoint implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?DeliveryPointInfoResponsePointDeliveryMethod $deliveryMethod,
        public ?bool $enabled,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            deliveryMethod: OzonDtoValue::object($payload['delivery_method'] ?? null, DeliveryPointInfoResponsePointDeliveryMethod::class),
            enabled: OzonDtoValue::bool($payload['enabled'] ?? null),
            extra: OzonDtoValue::extra($payload, ['delivery_method', 'enabled']),
        );
    }
}
