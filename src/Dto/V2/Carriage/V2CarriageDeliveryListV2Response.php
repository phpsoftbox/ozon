<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2CarriageDeliveryListV2Response implements OzonDtoInterface
{
    /**
     * @param list<CarriageDeliveryListV2ResponseDeliveryMethod> $methods
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cursor,
        public ?bool $hasNext,
        public array $methods,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            methods: OzonDtoValue::objectList($payload['methods'] ?? null, CarriageDeliveryListV2ResponseDeliveryMethod::class),
            extra: OzonDtoValue::extra($payload, ['cursor', 'has_next', 'methods']),
        );
    }
}
