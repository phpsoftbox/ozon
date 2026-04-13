<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CargoesCreateResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $operationId,
        public ?V1CargoesCreateErrors $errors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            operationId: OzonDtoValue::string($payload['operation_id'] ?? null),
            errors: OzonDtoValue::object($payload['errors'] ?? null, V1CargoesCreateErrors::class),
            extra: OzonDtoValue::extra($payload, ['operation_id', 'errors']),
        );
    }
}
