<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CargoesV2CargoesDeleteStatusResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CargoesV2CargoesDeleteStatusResponseErrors $errors,
        public ?CargoesV2CargoesDeleteStatusResponseStatusEnum $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::object($payload['errors'] ?? null, CargoesV2CargoesDeleteStatusResponseErrors::class),
            status: OzonDtoValue::scalarObject($payload['status'] ?? null, CargoesV2CargoesDeleteStatusResponseStatusEnum::class),
            extra: OzonDtoValue::extra($payload, ['errors', 'status']),
        );
    }
}
