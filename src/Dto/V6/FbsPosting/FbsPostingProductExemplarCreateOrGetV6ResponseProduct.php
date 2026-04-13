<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V6\FbsPosting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingProductExemplarCreateOrGetV6ResponseProduct implements OzonDtoInterface
{
    /**
     * @param list<ProductExemplar> $exemplars
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $exemplars,
        public ?bool $hasImei,
        public ?bool $isGtdNeeded,
        public ?bool $isJwUinNeeded,
        public ?bool $isMandatoryMarkNeeded,
        public ?bool $isMandatoryMarkPossible,
        public ?bool $isRnptNeeded,
        public ?int $productId,
        public ?int $quantity,
        public ?bool $isWeightNeeded,
        public ?float $weightMax,
        public ?float $weightMin,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            exemplars: OzonDtoValue::objectList($payload['exemplars'] ?? null, ProductExemplar::class),
            hasImei: OzonDtoValue::bool($payload['has_imei'] ?? null),
            isGtdNeeded: OzonDtoValue::bool($payload['is_gtd_needed'] ?? null),
            isJwUinNeeded: OzonDtoValue::bool($payload['is_jw_uin_needed'] ?? null),
            isMandatoryMarkNeeded: OzonDtoValue::bool($payload['is_mandatory_mark_needed'] ?? null),
            isMandatoryMarkPossible: OzonDtoValue::bool($payload['is_mandatory_mark_possible'] ?? null),
            isRnptNeeded: OzonDtoValue::bool($payload['is_rnpt_needed'] ?? null),
            productId: OzonDtoValue::int($payload['product_id'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            isWeightNeeded: OzonDtoValue::bool($payload['is_weight_needed'] ?? null),
            weightMax: OzonDtoValue::float($payload['weight_max'] ?? null),
            weightMin: OzonDtoValue::float($payload['weight_min'] ?? null),
            extra: OzonDtoValue::extra($payload, ['exemplars', 'has_imei', 'is_gtd_needed', 'is_jw_uin_needed', 'is_mandatory_mark_needed', 'is_mandatory_mark_possible', 'is_rnpt_needed', 'product_id', 'quantity', 'is_weight_needed', 'weight_max', 'weight_min']),
        );
    }
}
