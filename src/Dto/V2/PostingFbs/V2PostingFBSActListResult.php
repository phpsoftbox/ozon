<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2PostingFBSActListResult implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $id
     * @param array<array-key, mixed> $deliveryMethodId
     * @param array<array-key, mixed> $containersCount
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $id,
        public array $deliveryMethodId,
        public ?string $deliveryMethodName,
        public ?string $integrationType,
        public array $containersCount,
        public ?string $status,
        public ?string $departureDate,
        public ?string $createdAt,
        public ?string $updatedAt,
        public ?string $actType,
        public ?bool $isPartial,
        public ?bool $hasPostingsForNextCarriage,
        public ?int $partialNum,
        public ?V2PostingFBSActListRelatedDocs $relatedDocs,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::array($payload['id'] ?? null),
            deliveryMethodId: OzonDtoValue::array($payload['delivery_method_id'] ?? null),
            deliveryMethodName: OzonDtoValue::string($payload['delivery_method_name'] ?? null),
            integrationType: OzonDtoValue::string($payload['integration_type'] ?? null),
            containersCount: OzonDtoValue::array($payload['containers_count'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            departureDate: OzonDtoValue::string($payload['departure_date'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            actType: OzonDtoValue::string($payload['act_type'] ?? null),
            isPartial: OzonDtoValue::bool($payload['is_partial'] ?? null),
            hasPostingsForNextCarriage: OzonDtoValue::bool($payload['has_postings_for_next_carriage'] ?? null),
            partialNum: OzonDtoValue::int($payload['partial_num'] ?? null),
            relatedDocs: OzonDtoValue::object($payload['related_docs'] ?? null, V2PostingFBSActListRelatedDocs::class),
            extra: OzonDtoValue::extra($payload, ['id', 'delivery_method_id', 'delivery_method_name', 'integration_type', 'containers_count', 'status', 'departure_date', 'created_at', 'updated_at', 'act_type', 'is_partial', 'has_postings_for_next_carriage', 'partial_num', 'related_docs']),
        );
    }
}
