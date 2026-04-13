<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesCreateV2ErrorsItemValidation implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cargoKey,
        public ?string $item,
        public ?int $quant,
        public ?ItemValidationErrorType $type,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cargoKey: OzonDtoValue::string($payload['cargo_key'] ?? null),
            item: OzonDtoValue::string($payload['item'] ?? null),
            quant: OzonDtoValue::int($payload['quant'] ?? null),
            type: OzonDtoValue::object($payload['type'] ?? null, ItemValidationErrorType::class),
            extra: OzonDtoValue::extra($payload, ['cargo_key', 'item', 'quant', 'type']),
        );
    }
}
