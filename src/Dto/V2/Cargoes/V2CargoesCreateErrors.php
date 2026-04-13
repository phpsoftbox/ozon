<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2CargoesCreateErrors implements OzonDtoInterface
{
    /**
     * @param list<CargoesCreateErrorsReasonEnum> $errorReasons
     * @param list<CargoesCreateV2ErrorsItemValidation> $itemsValidation
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errorReasons,
        public array $itemsValidation,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorReasons: OzonDtoValue::objectList($payload['error_reasons'] ?? null, CargoesCreateErrorsReasonEnum::class),
            itemsValidation: OzonDtoValue::objectList($payload['items_validation'] ?? null, CargoesCreateV2ErrorsItemValidation::class),
            extra: OzonDtoValue::extra($payload, ['error_reasons', 'items_validation']),
        );
    }
}
