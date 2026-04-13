<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductCertificate;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductCertificateUnbindResponse implements OzonDtoInterface
{
    /**
     * @param list<ProductCertificateUnbindResponseItem> $result
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: OzonDtoValue::objectList($payload['result'] ?? null, ProductCertificateUnbindResponseItem::class),
            extra: OzonDtoValue::extra($payload, ['result']),
        );
    }
}
