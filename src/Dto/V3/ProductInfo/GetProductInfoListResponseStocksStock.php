<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductInfoListResponseStocksStock implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $present,
        public ?int $reserved,
        public ?int $sku,
        public ?string $source,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            present: OzonDtoValue::int($payload['present'] ?? null),
            reserved: OzonDtoValue::int($payload['reserved'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            source: OzonDtoValue::string($payload['source'] ?? null),
            extra: OzonDtoValue::extra($payload, ['present', 'reserved', 'sku', 'source']),
        );
    }
}
