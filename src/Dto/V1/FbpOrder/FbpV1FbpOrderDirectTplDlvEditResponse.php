<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbpV1FbpOrderDirectTplDlvEditResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?FbpV1OrderValidationError $error,
        public ?bool $isError,
        public ?int $rowVersion,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            error: OzonDtoValue::object($payload['error'] ?? null, FbpV1OrderValidationError::class),
            isError: OzonDtoValue::bool($payload['is_error'] ?? null),
            rowVersion: OzonDtoValue::int($payload['row_version'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error', 'is_error', 'row_version']),
        );
    }
}
