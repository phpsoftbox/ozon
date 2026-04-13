<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesDeleteResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CargoesV2CargoesDeleteResponseErrors $errors,
        public ?string $operationId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::object($payload['errors'] ?? null, CargoesV2CargoesDeleteResponseErrors::class),
            operationId: OzonDtoValue::string($payload['operation_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['errors', 'operation_id']),
        );
    }
}
