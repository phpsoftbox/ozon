<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Brand;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class BrandCompanyCertificationListResponseBrandCertification implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $brandName,
        public ?bool $hasCertificate,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            brandName: OzonDtoValue::string($payload['brand_name'] ?? null),
            hasCertificate: OzonDtoValue::bool($payload['has_certificate'] ?? null),
            extra: OzonDtoValue::extra($payload, ['brand_name', 'has_certificate']),
        );
    }
}
