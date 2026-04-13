<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DeliveryMethod;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class WarehouseDeliveryMethodListResponse implements OzonDtoInterface
{
    /**
     * @param list<DeliveryMethodListResponseDeliveryMethod> $result
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasNext,
        public array $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            result: OzonDtoValue::objectList($payload['result'] ?? null, DeliveryMethodListResponseDeliveryMethod::class),
            extra: OzonDtoValue::extra($payload, ['has_next', 'result']),
        );
    }
}
