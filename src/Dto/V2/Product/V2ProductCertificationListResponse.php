<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2ProductCertificationListResponse implements OzonDtoInterface
{
    /**
     * @param list<ProductCertificationListResponseCertificationv2> $certification
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
            certification: OzonDtoValue::objectList($payload['certification'] ?? null, ProductCertificationListResponseCertificationv2::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['certification', 'total']),
        );
    }
}
