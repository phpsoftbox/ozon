<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpOrder;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbpV1OrderValidationError implements OzonDtoInterface
{
    /**
     * @param list<FbpV1OrderValidationErrorErrorType> $orderErrors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $orderErrors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            orderErrors: OzonDtoValue::scalarObjectList($payload['order_errors'] ?? null, FbpV1OrderValidationErrorErrorType::class),
            extra: OzonDtoValue::extra($payload, ['order_errors']),
        );
    }
}
