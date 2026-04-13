<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PricingStrategy;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetStrategyIDsByItemIDsResponseResult implements OzonDtoInterface
{
    /**
     * @param list<GetStrategyIDsByItemIDsResponseProductInfo> $productsInfo
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $productsInfo,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productsInfo: OzonDtoValue::objectList($payload['products_info'] ?? null, GetStrategyIDsByItemIDsResponseProductInfo::class),
            extra: OzonDtoValue::extra($payload, ['products_info']),
        );
    }
}
