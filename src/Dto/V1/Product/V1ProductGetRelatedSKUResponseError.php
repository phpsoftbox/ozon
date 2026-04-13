<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductGetRelatedSKUResponseError implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $code,
        public ?int $sku,
        public ?string $message,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            code: OzonDtoValue::string($payload['code'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            message: OzonDtoValue::string($payload['message'] ?? null),
            extra: OzonDtoValue::extra($payload, ['code', 'sku', 'message']),
        );
    }
}
