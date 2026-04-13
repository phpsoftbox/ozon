<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoListResponseAvailability implements OzonDtoInterface
{
    /**
     * @param list<AvailabilityReason> $reasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $availability,
        public array $reasons,
        public ?int $sku,
        public ?string $source,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availability: OzonDtoValue::string($payload['availability'] ?? null),
            reasons: OzonDtoValue::objectList($payload['reasons'] ?? null, AvailabilityReason::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            source: OzonDtoValue::string($payload['source'] ?? null),
            extra: OzonDtoValue::extra($payload, ['availability', 'reasons', 'sku', 'source']),
        );
    }
}
