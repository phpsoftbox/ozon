<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CargoesDeleteStatusResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1CargoesDeleteStatusResponseError $errors,
        public ?CargoesDeleteStatusResponseStatusEnum $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::object($payload['errors'] ?? null, V1CargoesDeleteStatusResponseError::class),
            status: OzonDtoValue::object($payload['status'] ?? null, CargoesDeleteStatusResponseStatusEnum::class),
            extra: OzonDtoValue::extra($payload, ['errors', 'status']),
        );
    }
}
