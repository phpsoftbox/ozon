<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV4PostingFbsListResponsePostingsRequirements implements OzonDtoInterface
{
    /**
     * @param list<string> $productsRequiringChangeCountry
     * @param list<string> $productsRequiringCountry
     * @param list<string> $productsRequiringGtd
     * @param list<string> $productsRequiringImei
     * @param list<string> $productsRequiringJwUin
     * @param list<string> $productsRequiringMandatoryMark
     * @param list<string> $productsRequiringRnpt
     * @param list<string> $productsRequiringWeight
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $productsRequiringChangeCountry,
        public array $productsRequiringCountry,
        public array $productsRequiringGtd,
        public array $productsRequiringImei,
        public array $productsRequiringJwUin,
        public array $productsRequiringMandatoryMark,
        public array $productsRequiringRnpt,
        public array $productsRequiringWeight,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            productsRequiringChangeCountry: OzonDtoValue::array($payload['products_requiring_change_country'] ?? null),
            productsRequiringCountry: OzonDtoValue::array($payload['products_requiring_country'] ?? null),
            productsRequiringGtd: OzonDtoValue::array($payload['products_requiring_gtd'] ?? null),
            productsRequiringImei: OzonDtoValue::array($payload['products_requiring_imei'] ?? null),
            productsRequiringJwUin: OzonDtoValue::array($payload['products_requiring_jw_uin'] ?? null),
            productsRequiringMandatoryMark: OzonDtoValue::array($payload['products_requiring_mandatory_mark'] ?? null),
            productsRequiringRnpt: OzonDtoValue::array($payload['products_requiring_rnpt'] ?? null),
            productsRequiringWeight: OzonDtoValue::array($payload['products_requiring_weight'] ?? null),
            extra: OzonDtoValue::extra($payload, ['products_requiring_change_country', 'products_requiring_country', 'products_requiring_gtd', 'products_requiring_imei', 'products_requiring_jw_uin', 'products_requiring_mandatory_mark', 'products_requiring_rnpt', 'products_requiring_weight']),
        );
    }
}
