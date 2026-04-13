<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Barcode;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GenerateBarcodeResponse implements OzonDtoInterface
{
    /**
     * @param list<V1GenerateBarcodeResult> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, V1GenerateBarcodeResult::class),
            extra: OzonDtoValue::extra($payload, ['errors']),
        );
    }
}
