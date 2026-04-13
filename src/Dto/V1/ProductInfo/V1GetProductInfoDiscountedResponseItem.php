<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetProductInfoDiscountedResponseItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $commentReasonDamaged,
        public ?string $condition,
        public ?string $conditionEstimation,
        public ?string $defects,
        public ?int $discountedSku,
        public ?string $mechanicalDamage,
        public ?string $packageDamage,
        public ?string $packagingViolation,
        public ?string $reasonDamaged,
        public ?string $repair,
        public ?string $shortage,
        public ?int $sku,
        public ?string $warrantyType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            commentReasonDamaged: OzonDtoValue::string($payload['comment_reason_damaged'] ?? null),
            condition: OzonDtoValue::string($payload['condition'] ?? null),
            conditionEstimation: OzonDtoValue::string($payload['condition_estimation'] ?? null),
            defects: OzonDtoValue::string($payload['defects'] ?? null),
            discountedSku: OzonDtoValue::int($payload['discounted_sku'] ?? null),
            mechanicalDamage: OzonDtoValue::string($payload['mechanical_damage'] ?? null),
            packageDamage: OzonDtoValue::string($payload['package_damage'] ?? null),
            packagingViolation: OzonDtoValue::string($payload['packaging_violation'] ?? null),
            reasonDamaged: OzonDtoValue::string($payload['reason_damaged'] ?? null),
            repair: OzonDtoValue::string($payload['repair'] ?? null),
            shortage: OzonDtoValue::string($payload['shortage'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            warrantyType: OzonDtoValue::string($payload['warranty_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['comment_reason_damaged', 'condition', 'condition_estimation', 'defects', 'discounted_sku', 'mechanical_damage', 'package_damage', 'packaging_violation', 'reason_damaged', 'repair', 'shortage', 'sku', 'warranty_type']),
        );
    }
}
