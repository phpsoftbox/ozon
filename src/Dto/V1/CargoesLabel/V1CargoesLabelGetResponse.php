<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\CargoesLabel;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CargoesLabelGetResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1CargoesLabelGetResponseResult $result,
        public ?V1CargoesLabelGetResponseStatus $status,
        public ?V1CargoesLabelCreateErrors $errors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: OzonDtoValue::object($payload['result'] ?? null, V1CargoesLabelGetResponseResult::class),
            status: OzonDtoValue::object($payload['status'] ?? null, V1CargoesLabelGetResponseStatus::class),
            errors: OzonDtoValue::object($payload['errors'] ?? null, V1CargoesLabelCreateErrors::class),
            extra: OzonDtoValue::extra($payload, ['result', 'status', 'errors']),
        );
    }
}
