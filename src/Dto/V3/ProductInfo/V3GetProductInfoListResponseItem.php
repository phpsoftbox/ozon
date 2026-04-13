<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3GetProductInfoListResponseItem implements OzonDtoInterface
{
    /**
     * @param list<GetProductInfoListResponseAvailability> $availabilities
     * @param list<string> $barcodes
     * @param list<string> $colorImage
     * @param list<GetProductInfoListResponseCommission> $commissions
     * @param list<GetProductInfoListResponseError> $errors
     * @param list<string> $images
     * @param list<string> $images360
     * @param list<string> $primaryImage
     * @param list<V3GetProductInfoListResponsePromotion> $promotions
     * @param list<GetProductInfoListResponseSource> $sources
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $availabilities,
        public array $barcodes,
        public array $colorImage,
        public array $commissions,
        public ?string $createdAt,
        public ?string $currencyCode,
        public ?int $descriptionCategoryId,
        public ?int $discountedFboStocks,
        public array $errors,
        public ?bool $hasDiscountedFboItem,
        public ?int $id,
        public array $images,
        public array $images360,
        public ?bool $isArchived,
        public ?bool $isAutoarchived,
        public ?bool $isDiscounted,
        public ?bool $isKgt,
        public ?bool $isPrepaymentAllowed,
        public ?bool $isSuper,
        public ?string $minPrice,
        public ?GetProductInfoListResponseModelInfo $modelInfo,
        public ?string $name,
        public ?string $offerId,
        public ?string $oldPrice,
        public ?string $price,
        public ?GetProductInfoListResponsePriceIndexes $priceIndexes,
        public array $primaryImage,
        public array $promotions,
        public ?int $sku,
        public array $sources,
        public ?GetProductInfoListResponseStatuses $statuses,
        public ?GetProductInfoListResponseStocks $stocks,
        public ?int $typeId,
        public ?string $updatedAt,
        public ?string $vat,
        public ?GetProductInfoListResponseVisibilityDetails $visibilityDetails,
        public ?float $volumeWeight,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            availabilities: OzonDtoValue::objectList($payload['availabilities'] ?? null, GetProductInfoListResponseAvailability::class),
            barcodes: OzonDtoValue::array($payload['barcodes'] ?? null),
            colorImage: OzonDtoValue::array($payload['color_image'] ?? null),
            commissions: OzonDtoValue::objectList($payload['commissions'] ?? null, GetProductInfoListResponseCommission::class),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            currencyCode: OzonDtoValue::string($payload['currency_code'] ?? null),
            descriptionCategoryId: OzonDtoValue::int($payload['description_category_id'] ?? null),
            discountedFboStocks: OzonDtoValue::int($payload['discounted_fbo_stocks'] ?? null),
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, GetProductInfoListResponseError::class),
            hasDiscountedFboItem: OzonDtoValue::bool($payload['has_discounted_fbo_item'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            images: OzonDtoValue::array($payload['images'] ?? null),
            images360: OzonDtoValue::array($payload['images360'] ?? null),
            isArchived: OzonDtoValue::bool($payload['is_archived'] ?? null),
            isAutoarchived: OzonDtoValue::bool($payload['is_autoarchived'] ?? null),
            isDiscounted: OzonDtoValue::bool($payload['is_discounted'] ?? null),
            isKgt: OzonDtoValue::bool($payload['is_kgt'] ?? null),
            isPrepaymentAllowed: OzonDtoValue::bool($payload['is_prepayment_allowed'] ?? null),
            isSuper: OzonDtoValue::bool($payload['is_super'] ?? null),
            minPrice: OzonDtoValue::string($payload['min_price'] ?? null),
            modelInfo: OzonDtoValue::object($payload['model_info'] ?? null, GetProductInfoListResponseModelInfo::class),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            oldPrice: OzonDtoValue::string($payload['old_price'] ?? null),
            price: OzonDtoValue::string($payload['price'] ?? null),
            priceIndexes: OzonDtoValue::object($payload['price_indexes'] ?? null, GetProductInfoListResponsePriceIndexes::class),
            primaryImage: OzonDtoValue::array($payload['primary_image'] ?? null),
            promotions: OzonDtoValue::objectList($payload['promotions'] ?? null, V3GetProductInfoListResponsePromotion::class),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            sources: OzonDtoValue::objectList($payload['sources'] ?? null, GetProductInfoListResponseSource::class),
            statuses: OzonDtoValue::object($payload['statuses'] ?? null, GetProductInfoListResponseStatuses::class),
            stocks: OzonDtoValue::object($payload['stocks'] ?? null, GetProductInfoListResponseStocks::class),
            typeId: OzonDtoValue::int($payload['type_id'] ?? null),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            vat: OzonDtoValue::string($payload['vat'] ?? null),
            visibilityDetails: OzonDtoValue::object($payload['visibility_details'] ?? null, GetProductInfoListResponseVisibilityDetails::class),
            volumeWeight: OzonDtoValue::float($payload['volume_weight'] ?? null),
            extra: OzonDtoValue::extra($payload, ['availabilities', 'barcodes', 'color_image', 'commissions', 'created_at', 'currency_code', 'description_category_id', 'discounted_fbo_stocks', 'errors', 'has_discounted_fbo_item', 'id', 'images', 'images360', 'is_archived', 'is_autoarchived', 'is_discounted', 'is_kgt', 'is_prepayment_allowed', 'is_super', 'min_price', 'model_info', 'name', 'offer_id', 'old_price', 'price', 'price_indexes', 'primary_image', 'promotions', 'sku', 'sources', 'statuses', 'stocks', 'type_id', 'updated_at', 'vat', 'visibility_details', 'volume_weight']),
        );
    }
}
