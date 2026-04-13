<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductV4GetUploadQuotaResponseOperationLimits implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $limit,
        public ?ProductV4GetUploadQuotaResponseOperationLimitsLimitTypeEnum $limitType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            limit: OzonDtoValue::int($payload['limit'] ?? null),
            limitType: OzonDtoValue::scalarObject($payload['limit_type'] ?? null, ProductV4GetUploadQuotaResponseOperationLimitsLimitTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['limit', 'limit_type']),
        );
    }
}
