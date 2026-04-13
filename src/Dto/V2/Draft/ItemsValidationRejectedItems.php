<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ItemsValidationRejectedItems implements OzonDtoInterface
{
    /**
     * @param list<RejectedItemsReasonEnum> $reasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $reasons,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            reasons: OzonDtoValue::objectList($payload['reasons'] ?? null, RejectedItemsReasonEnum::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['reasons', 'sku']),
        );
    }
}
