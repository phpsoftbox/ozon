<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesDeleteResponseErrorsCargoErrorReasons implements OzonDtoInterface
{
    /**
     * @param list<CargoesV2CargoesDeleteResponseErrorsCargoErrorReasonsErrorReasonsEnum> $errorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $cargoId,
        public array $errorReasons,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cargoId: OzonDtoValue::int($payload['cargo_id'] ?? null),
            errorReasons: OzonDtoValue::scalarObjectList($payload['error_reasons'] ?? null, CargoesV2CargoesDeleteResponseErrorsCargoErrorReasonsErrorReasonsEnum::class),
            extra: OzonDtoValue::extra($payload, ['cargo_id', 'error_reasons']),
        );
    }
}
