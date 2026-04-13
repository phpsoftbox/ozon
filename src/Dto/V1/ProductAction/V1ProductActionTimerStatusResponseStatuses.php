<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductAction;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductActionTimerStatusResponseStatuses implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $expiredAt,
        public ?bool $minPriceForAutoActionsEnabled,
        public ?int $productId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            expiredAt: OzonDtoValue::string($payload['expired_at'] ?? null),
            minPriceForAutoActionsEnabled: OzonDtoValue::bool($payload['min_price_for_auto_actions_enabled'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['expired_at', 'min_price_for_auto_actions_enabled', 'product_id']),
        );
    }
}
