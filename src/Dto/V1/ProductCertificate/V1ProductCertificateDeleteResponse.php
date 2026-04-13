<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductCertificate;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductCertificateDeleteResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1ProductCertificateDeleteResponseResult $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: OzonDtoValue::object($payload['result'] ?? null, V1ProductCertificateDeleteResponseResult::class),
            extra: OzonDtoValue::extra($payload, ['result']),
        );
    }
}
