<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesCreateErrorsItemValidation implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $barcode,
        public ?string $cargoKey,
        public ?int $quant,
        public ?ItemValidationErrorType $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            barcode: OzonDtoValue::string($payload['barcode'] ?? null),
            cargoKey: OzonDtoValue::string($payload['cargo_key'] ?? null),
            quant: OzonDtoValue::int($payload['quant'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, ItemValidationErrorType::class),
            extra: OzonDtoValue::extra($payload, ['barcode', 'cargo_key', 'quant', 'type']),
        );
    }
}
