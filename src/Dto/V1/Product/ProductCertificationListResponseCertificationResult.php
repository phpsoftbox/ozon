<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductCertificationListResponseCertificationResult implements OzonDtoInterface
{
    /**
     * @param list<ProductCertificationListResponseCertification> $certification
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $certification,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            certification: OzonDtoValue::objectList($payload['certification'] ?? null, ProductCertificationListResponseCertification::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['certification', 'total']),
        );
    }
}
