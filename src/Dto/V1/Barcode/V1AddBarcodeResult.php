<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Barcode;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AddBarcodeResult implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $code,
        public ?string $error,
        public ?string $barcode,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            code: OzonDtoValue::string($payload['code'] ?? null),
            error: OzonDtoValue::string($payload['error'] ?? null),
            barcode: OzonDtoValue::string($payload['barcode'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['code', 'error', 'barcode', 'sku']),
        );
    }
}
