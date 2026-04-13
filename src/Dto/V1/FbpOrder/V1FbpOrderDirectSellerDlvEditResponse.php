<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpOrderDirectSellerDlvEditResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V1OrderValidationError $error,
        public ?bool $isError,
        public ?int $rowVersion,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            error: OzonDtoValue::object($payload['error'] ?? null, V1OrderValidationError::class),
            isError: OzonDtoValue::bool($payload['is_error'] ?? null),
            rowVersion: OzonDtoValue::int($payload['row_version'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error', 'is_error', 'row_version']),
        );
    }
}
