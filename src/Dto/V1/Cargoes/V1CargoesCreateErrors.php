<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CargoesCreateErrors implements OzonDtoInterface
{
    /**
     * @param list<CargoesCreateErrorsErrorReason> $errorReasons
     * @param list<CargoesCreateErrorsItemValidation> $itemsValidation
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
            errorReasons: OzonDtoValue::objectList($payload['error_reasons'] ?? null, CargoesCreateErrorsErrorReason::class),
            itemsValidation: OzonDtoValue::objectList($payload['items_validation'] ?? null, CargoesCreateErrorsItemValidation::class),
            extra: OzonDtoValue::extra($payload, ['error_reasons', 'items_validation']),
        );
    }
}
