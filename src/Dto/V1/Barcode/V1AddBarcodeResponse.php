<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Barcode;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AddBarcodeResponse implements OzonDtoInterface
{
    /**
     * @param list<V1AddBarcodeResult> $errors
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
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, V1AddBarcodeResult::class),
            extra: OzonDtoValue::extra($payload, ['errors']),
        );
    }
}
