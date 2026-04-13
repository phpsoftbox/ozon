<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Brand;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class BrandCompanyCertificationListResponseBrandCertificationResult implements OzonDtoInterface
{
    /**
     * @param list<BrandCompanyCertificationListResponseBrandCertification> $brandCertification
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $brandCertification,
        public ?int $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            brandCertification: OzonDtoValue::objectList($payload['brand_certification'] ?? null, BrandCompanyCertificationListResponseBrandCertification::class),
            total: OzonDtoValue::int($payload['total'] ?? null),
            extra: OzonDtoValue::extra($payload, ['brand_certification', 'total']),
        );
    }
}
