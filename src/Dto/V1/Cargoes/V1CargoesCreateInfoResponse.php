<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CargoesCreateInfoResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?CargoesCreateInfoResponseResult $result,
        public ?V1CargoesCreateInfoResponseStatus $status,
        public ?V1CargoesCreateErrors $errors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: OzonDtoValue::object($payload['result'] ?? null, CargoesCreateInfoResponseResult::class),
            status: OzonDtoValue::object($payload['status'] ?? null, V1CargoesCreateInfoResponseStatus::class),
            errors: OzonDtoValue::object($payload['errors'] ?? null, V1CargoesCreateErrors::class),
            extra: OzonDtoValue::extra($payload, ['result', 'status', 'errors']),
        );
    }
}
