<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ErrorData implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $code,
        public ?string $field,
        public ?string $message,
        public ?int $step,
        public ?string $value,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            code: OzonDtoValue::string($payload['code'] ?? null),
            field: OzonDtoValue::string($payload['field'] ?? null),
            message: OzonDtoValue::string($payload['message'] ?? null),
            step: OzonDtoValue::int($payload['step'] ?? null),
            value: OzonDtoValue::string($payload['value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['code', 'field', 'message', 'step', 'value']),
        );
    }
}
