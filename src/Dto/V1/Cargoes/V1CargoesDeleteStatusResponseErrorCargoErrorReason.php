<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CargoesDeleteStatusResponseErrorCargoErrorReason implements OzonDtoInterface
{
    /**
     * @param list<V1CargoesDeleteStatusResponseErrorCargoErrorReasonErrorReasonEnum> $errorReasons
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
            errorReasons: OzonDtoValue::objectList($payload['error_reasons'] ?? null, V1CargoesDeleteStatusResponseErrorCargoErrorReasonErrorReasonEnum::class),
            extra: OzonDtoValue::extra($payload, ['cargo_id', 'error_reasons']),
        );
    }
}
