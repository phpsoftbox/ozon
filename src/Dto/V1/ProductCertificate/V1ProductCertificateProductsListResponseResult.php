<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductCertificate;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductCertificateProductsListResponseResult implements OzonDtoInterface
{
    /**
     * @param list<ProductCertificateProductsListResponseProduct> $items
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $items,
        public ?int $count,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            items: OzonDtoValue::objectList($payload['items'] ?? null, ProductCertificateProductsListResponseProduct::class),
            count: OzonDtoValue::int($payload['count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['items', 'count']),
        );
    }
}
