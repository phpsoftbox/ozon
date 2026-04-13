<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CertificationV2ProductCertificateParamsResponse implements OzonDtoInterface
{
    /**
     * @param list<CertificationV2ProductCertificateParamsResponseParam> $params
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $params,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            params: OzonDtoValue::objectList($payload['params'] ?? null, CertificationV2ProductCertificateParamsResponseParam::class),
            extra: OzonDtoValue::extra($payload, ['params']),
        );
    }
}
