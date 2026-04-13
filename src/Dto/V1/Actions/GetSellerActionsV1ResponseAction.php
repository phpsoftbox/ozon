<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetSellerActionsV1ResponseAction implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $id,
        public ?string $title,
        public ?string $actionType,
        public ?string $description,
        public ?string $dateStart,
        public ?string $dateEnd,
        public ?string $freezeDate,
        public ?float $potentialProductsCount,
        public ?float $participatingProductsCount,
        public ?bool $isParticipating,
        public ?bool $isVoucherAction,
        public ?float $bannedProductsCount,
        public ?bool $withTargeting,
        public ?float $orderAmount,
        public ?string $discountType,
        public ?float $discountValue,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::float($payload['id'] ?? null),
            title: OzonDtoValue::string($payload['title'] ?? null),
            actionType: OzonDtoValue::string($payload['action_type'] ?? null),
            description: OzonDtoValue::string($payload['description'] ?? null),
            dateStart: OzonDtoValue::string($payload['date_start'] ?? null),
            dateEnd: OzonDtoValue::string($payload['date_end'] ?? null),
            freezeDate: OzonDtoValue::string($payload['freeze_date'] ?? null),
            potentialProductsCount: OzonDtoValue::float($payload['potential_products_count'] ?? null),
            participatingProductsCount: OzonDtoValue::float($payload['participating_products_count'] ?? null),
            isParticipating: OzonDtoValue::bool($payload['is_participating'] ?? null),
            isVoucherAction: OzonDtoValue::bool($payload['is_voucher_action'] ?? null),
            bannedProductsCount: OzonDtoValue::float($payload['banned_products_count'] ?? null),
            withTargeting: OzonDtoValue::bool($payload['with_targeting'] ?? null),
            orderAmount: OzonDtoValue::float($payload['order_amount'] ?? null),
            discountType: OzonDtoValue::string($payload['discount_type'] ?? null),
            discountValue: OzonDtoValue::float($payload['discount_value'] ?? null),
            extra: OzonDtoValue::extra($payload, ['id', 'title', 'action_type', 'description', 'date_start', 'date_end', 'freeze_date', 'potential_products_count', 'participating_products_count', 'is_participating', 'is_voucher_action', 'banned_products_count', 'with_targeting', 'order_amount', 'discount_type', 'discount_value']),
        );
    }
}
