<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3PostingProductDetail implements OzonDtoInterface
{
    /**
     * @param list<string> $mandatoryMark
     * @param array<array-key, mixed> $jwUin
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?V3Dimensions $dimensions,
        public array $mandatoryMark,
        public ?string $name,
        public ?string $offerId,
        public ?string $price,
        public array $jwUin,
        public ?string $currencyCode,
        public ?bool $isBlrTraceable,
        public ?bool $isMarketplaceBuyout,
        public ?int $quantity,
        public ?int $sku,
        public ?bool $isWeightNeeded,
        public ?float $weightMax,
        public ?float $weightMin,
        public ?bool $hasImei,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dimensions: OzonDtoValue::object($payload['dimensions'] ?? null, V3Dimensions::class),
            mandatoryMark: OzonDtoValue::array($payload['mandatory_mark'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            price: OzonDtoValue::string($payload['price'] ?? null),
            jwUin: OzonDtoValue::array($payload['jw_uin'] ?? null),
            currencyCode: OzonDtoValue::string($payload['currency_code'] ?? null),
            isBlrTraceable: OzonDtoValue::bool($payload['is_blr_traceable'] ?? null),
            isMarketplaceBuyout: OzonDtoValue::bool($payload['is_marketplace_buyout'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            isWeightNeeded: OzonDtoValue::bool($payload['is_weight_needed'] ?? null),
            weightMax: OzonDtoValue::float($payload['weight_max'] ?? null),
            weightMin: OzonDtoValue::float($payload['weight_min'] ?? null),
            hasImei: OzonDtoValue::bool($payload['has_imei'] ?? null),
            extra: OzonDtoValue::extra($payload, ['dimensions', 'mandatory_mark', 'name', 'offer_id', 'price', 'jw_uin', 'currency_code', 'is_blr_traceable', 'is_marketplace_buyout', 'quantity', 'sku', 'is_weight_needed', 'weight_max', 'weight_min', 'has_imei']),
        );
    }
}
