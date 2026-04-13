<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Delivery;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DeliveryCheckoutResponse implements OzonDtoInterface
{
    /**
     * @param list<DeliveryCheckoutResponseSplit> $splits
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $splits,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            splits: OzonDtoValue::objectList($payload['splits'] ?? null, DeliveryCheckoutResponseSplit::class),
            extra: OzonDtoValue::extra($payload, ['splits']),
        );
    }
}
