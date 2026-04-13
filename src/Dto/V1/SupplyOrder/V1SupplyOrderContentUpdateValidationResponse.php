<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SupplyOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SupplyOrderContentUpdateValidationResponse implements OzonDtoInterface
{
    /**
     * @param list<SupplyOrderContentUpdateValidationResponseEditingErrorEnum> $editingErrors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $editingErrors,
        public ?SupplyOrderContentUpdateValidationResponseValidatedAssortment $validatedAssortment,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            editingErrors: OzonDtoValue::objectList($payload['editing_errors'] ?? null, SupplyOrderContentUpdateValidationResponseEditingErrorEnum::class),
            validatedAssortment: OzonDtoValue::object($payload['validated_assortment'] ?? null, SupplyOrderContentUpdateValidationResponseValidatedAssortment::class),
            extra: OzonDtoValue::extra($payload, ['editing_errors', 'validated_assortment']),
        );
    }
}
