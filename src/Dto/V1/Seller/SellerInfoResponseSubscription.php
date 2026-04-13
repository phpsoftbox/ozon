<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Seller;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SellerInfoResponseSubscription implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isPremium,
        public ?SellerInfoResponseSubscriptionTypeEnum $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isPremium: OzonDtoValue::bool($payload['is_premium'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, SellerInfoResponseSubscriptionTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['is_premium', 'type']),
        );
    }
}
