<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Actions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetDiscountTaskListV2ResponseTask implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?float $approvedDiscount,
        public ?float $approvedPrice,
        public ?int $approvedQuantityMax,
        public ?TaskAutoModeratedInfo $autoModeratedInfo,
        public ?string $createdAt,
        public ?string $editedTill,
        public ?int $editedTillDuration,
        public ?string $email,
        public ?string $endAt,
        public ?int $endAtDuration,
        public ?string $firstName,
        public ?int $id,
        public ?bool $isAutoModerated,
        public ?string $lastName,
        public ?float $minAutoPrice,
        public ?string $moderatedAt,
        public ?string $name,
        public ?float $originalPrice,
        public ?string $patronymic,
        public ?float $reductionFactor,
        public ?float $requestedDiscount,
        public ?float $requestedPrice,
        public ?int $requestedQuantityMax,
        public ?int $sku,
        public ?GetDiscountTaskListV2ResponseTaskDiscountTaskStatusEnum $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            approvedDiscount: OzonDtoValue::float($payload['approved_discount'] ?? null),
            approvedPrice: OzonDtoValue::float($payload['approved_price'] ?? null),
            approvedQuantityMax: OzonDtoValue::int($payload['approved_quantity_max'] ?? null),
            autoModeratedInfo: OzonDtoValue::object($payload['auto_moderated_info'] ?? null, TaskAutoModeratedInfo::class),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            editedTill: OzonDtoValue::string($payload['edited_till'] ?? null),
            editedTillDuration: OzonDtoValue::int($payload['edited_till_duration'] ?? null),
            email: OzonDtoValue::string($payload['email'] ?? null),
            endAt: OzonDtoValue::string($payload['end_at'] ?? null),
            endAtDuration: OzonDtoValue::int($payload['end_at_duration'] ?? null),
            firstName: OzonDtoValue::string($payload['first_name'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            isAutoModerated: OzonDtoValue::bool($payload['is_auto_moderated'] ?? null),
            lastName: OzonDtoValue::string($payload['last_name'] ?? null),
            minAutoPrice: OzonDtoValue::float($payload['min_auto_price'] ?? null),
            moderatedAt: OzonDtoValue::string($payload['moderated_at'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            originalPrice: OzonDtoValue::float($payload['original_price'] ?? null),
            patronymic: OzonDtoValue::string($payload['patronymic'] ?? null),
            reductionFactor: OzonDtoValue::float($payload['reduction_factor'] ?? null),
            requestedDiscount: OzonDtoValue::float($payload['requested_discount'] ?? null),
            requestedPrice: OzonDtoValue::float($payload['requested_price'] ?? null),
            requestedQuantityMax: OzonDtoValue::int($payload['requested_quantity_max'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            status: OzonDtoValue::object($payload['status'] ?? null, GetDiscountTaskListV2ResponseTaskDiscountTaskStatusEnum::class),
            extra: OzonDtoValue::extra($payload, ['approved_discount', 'approved_price', 'approved_quantity_max', 'auto_moderated_info', 'created_at', 'edited_till', 'edited_till_duration', 'email', 'end_at', 'end_at_duration', 'first_name', 'id', 'is_auto_moderated', 'last_name', 'min_auto_price', 'moderated_at', 'name', 'original_price', 'patronymic', 'reduction_factor', 'requested_discount', 'requested_price', 'requested_quantity_max', 'sku', 'status']),
        );
    }
}
