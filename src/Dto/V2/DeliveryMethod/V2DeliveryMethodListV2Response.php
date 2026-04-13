<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\DeliveryMethod;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2DeliveryMethodListV2Response implements OzonDtoInterface
{
    /**
     * @param list<DeliveryMethodListV2ResponseDeliveryMethod> $deliveryMethods
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public ?bool $hasNext,
        public array $deliveryMethods,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            deliveryMethods: OzonDtoValue::objectList($payload['delivery_methods'] ?? null, DeliveryMethodListV2ResponseDeliveryMethod::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'has_next', 'delivery_methods']),
        );
    }
}
