<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Cargoes;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2CargoesCreateInfoV2Response implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V2CargoesCreateErrors $errors,
        public ?CargoesCreateInfoV2ResponseResult $result,
        public ?CargoesCreateInfoV2ResponseStatusEnum $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::object($payload['errors'] ?? null, V2CargoesCreateErrors::class),
            result: OzonDtoValue::object($payload['result'] ?? null, CargoesCreateInfoV2ResponseResult::class),
            status: OzonDtoValue::object($payload['status'] ?? null, CargoesCreateInfoV2ResponseStatusEnum::class),
            extra: OzonDtoValue::extra($payload, ['errors', 'result', 'status']),
        );
    }
}
