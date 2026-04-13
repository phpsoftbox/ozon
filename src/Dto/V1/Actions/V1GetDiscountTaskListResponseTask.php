<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetDiscountTaskListResponseTask implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $createdAt,
        public ?string $endAt,
        public ?string $editedTill,
        public ?string $status,
        public ?string $customerName,
        public ?int $sku,
        public ?string $userComment,
        public ?string $sellerComment,
        public ?float $requestedPrice,
        public ?float $approvedPrice,
        public ?float $originalPrice,
        public ?float $discount,
        public ?float $discountPercent,
        public ?float $basePrice,
        public ?float $minAutoPrice,
        public ?int $prevTaskId,
        public ?bool $isDamaged,
        public ?string $moderatedAt,
        public ?float $approvedDiscount,
        public ?float $approvedDiscountPercent,
        public ?bool $isPurchased,
        public ?bool $isAutoModerated,
        public ?string $offerId,
        public ?string $email,
        public ?string $lastName,
        public ?string $firstName,
        public ?string $patronymic,
        public ?int $approvedQuantityMin,
        public ?int $approvedQuantityMax,
        public ?int $requestedQuantityMin,
        public ?int $requestedQuantityMax,
        public ?float $requestedPriceWithFee,
        public ?float $approvedPriceWithFee,
        public ?float $approvedPriceFeePercent,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::int($payload['id'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            endAt: OzonDtoValue::string($payload['end_at'] ?? null),
            editedTill: OzonDtoValue::string($payload['edited_till'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            customerName: OzonDtoValue::string($payload['customer_name'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            userComment: OzonDtoValue::string($payload['user_comment'] ?? null),
            sellerComment: OzonDtoValue::string($payload['seller_comment'] ?? null),
            requestedPrice: OzonDtoValue::float($payload['requested_price'] ?? null),
            approvedPrice: OzonDtoValue::float($payload['approved_price'] ?? null),
            originalPrice: OzonDtoValue::float($payload['original_price'] ?? null),
            discount: OzonDtoValue::float($payload['discount'] ?? null),
            discountPercent: OzonDtoValue::float($payload['discount_percent'] ?? null),
            basePrice: OzonDtoValue::float($payload['base_price'] ?? null),
            minAutoPrice: OzonDtoValue::float($payload['min_auto_price'] ?? null),
            prevTaskId: OzonDtoValue::int($payload['prev_task_id'] ?? null),
            isDamaged: OzonDtoValue::bool($payload['is_damaged'] ?? null),
            moderatedAt: OzonDtoValue::string($payload['moderated_at'] ?? null),
            approvedDiscount: OzonDtoValue::float($payload['approved_discount'] ?? null),
            approvedDiscountPercent: OzonDtoValue::float($payload['approved_discount_percent'] ?? null),
            isPurchased: OzonDtoValue::bool($payload['is_purchased'] ?? null),
            isAutoModerated: OzonDtoValue::bool($payload['is_auto_moderated'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            email: OzonDtoValue::string($payload['email'] ?? null),
            lastName: OzonDtoValue::string($payload['last_name'] ?? null),
            firstName: OzonDtoValue::string($payload['first_name'] ?? null),
            patronymic: OzonDtoValue::string($payload['patronymic'] ?? null),
            approvedQuantityMin: OzonDtoValue::int($payload['approved_quantity_min'] ?? null),
            approvedQuantityMax: OzonDtoValue::int($payload['approved_quantity_max'] ?? null),
            requestedQuantityMin: OzonDtoValue::int($payload['requested_quantity_min'] ?? null),
            requestedQuantityMax: OzonDtoValue::int($payload['requested_quantity_max'] ?? null),
            requestedPriceWithFee: OzonDtoValue::float($payload['requested_price_with_fee'] ?? null),
            approvedPriceWithFee: OzonDtoValue::float($payload['approved_price_with_fee'] ?? null),
            approvedPriceFeePercent: OzonDtoValue::float($payload['approved_price_fee_percent'] ?? null),
            extra: OzonDtoValue::extra($payload, ['id', 'created_at', 'end_at', 'edited_till', 'status', 'customer_name', 'sku', 'user_comment', 'seller_comment', 'requested_price', 'approved_price', 'original_price', 'discount', 'discount_percent', 'base_price', 'min_auto_price', 'prev_task_id', 'is_damaged', 'moderated_at', 'approved_discount', 'approved_discount_percent', 'is_purchased', 'is_auto_moderated', 'offer_id', 'email', 'last_name', 'first_name', 'patronymic', 'approved_quantity_min', 'approved_quantity_max', 'requested_quantity_min', 'requested_quantity_max', 'requested_price_with_fee', 'approved_price_with_fee', 'approved_price_fee_percent']),
        );
    }
}
