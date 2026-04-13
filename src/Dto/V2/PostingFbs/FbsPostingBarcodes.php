<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingBarcodes implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $lowerBarcode,
        public ?string $upperBarcode,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            lowerBarcode: OzonDtoValue::string($payload['lower_barcode'] ?? null),
            upperBarcode: OzonDtoValue::string($payload['upper_barcode'] ?? null),
            extra: OzonDtoValue::extra($payload, ['lower_barcode', 'upper_barcode']),
        );
    }
}
