<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CertificationV2ProductCertificateOptionsResponse implements OzonDtoInterface
{
    /**
     * @param list<CertificationV2ProductCertificateOptionsResponseOption> $option
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $option,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            option: OzonDtoValue::objectList($payload['option'] ?? null, CertificationV2ProductCertificateOptionsResponseOption::class),
            extra: OzonDtoValue::extra($payload, ['option']),
        );
    }
}
