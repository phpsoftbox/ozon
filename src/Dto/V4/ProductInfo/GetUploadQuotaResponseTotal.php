<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetUploadQuotaResponseTotal implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $limit,
        public ?int $usage,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            limit: OzonDtoValue::int($payload['limit'] ?? null),
            usage: OzonDtoValue::int($payload['usage'] ?? null),
            extra: OzonDtoValue::extra($payload, ['limit', 'usage']),
        );
    }
}
