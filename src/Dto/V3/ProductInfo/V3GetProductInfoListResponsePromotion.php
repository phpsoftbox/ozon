<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3GetProductInfoListResponsePromotion implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isEnabled,
        public ?V3GetProductInfoListResponsePromotionType $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isEnabled: OzonDtoValue::bool($payload['is_enabled'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, V3GetProductInfoListResponsePromotionType::class),
            extra: OzonDtoValue::extra($payload, ['is_enabled', 'type']),
        );
    }
}
