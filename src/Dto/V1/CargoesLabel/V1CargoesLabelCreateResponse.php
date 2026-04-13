<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\CargoesLabel;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CargoesLabelCreateResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $operationId,
        public ?V1CargoesLabelCreateErrors $errors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            operationId: OzonDtoValue::string($payload['operation_id'] ?? null),
            errors: OzonDtoValue::object($payload['errors'] ?? null, V1CargoesLabelCreateErrors::class),
            extra: OzonDtoValue::extra($payload, ['operation_id', 'errors']),
        );
    }
}
