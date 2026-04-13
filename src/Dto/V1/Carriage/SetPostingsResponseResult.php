<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SetPostingsResponseResult implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $error,
        public ?string $postingNumber,
        public ?bool $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            error: OzonDtoValue::string($payload['error'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            result: OzonDtoValue::bool($payload['result'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error', 'posting_number', 'result']),
        );
    }
}
