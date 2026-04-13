<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetUploadQuotaResponseDailyUpdate implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $limit,
        public ?string $resetAt,
        public ?int $usage,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            limit: OzonDtoValue::int($payload['limit'] ?? null),
            resetAt: OzonDtoValue::string($payload['reset_at'] ?? null),
            usage: OzonDtoValue::int($payload['usage'] ?? null),
            extra: OzonDtoValue::extra($payload, ['limit', 'reset_at', 'usage']),
        );
    }
}
