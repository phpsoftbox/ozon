<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetReturnsListResponseReturnsItem implements OzonDtoInterface
{
    /**
     * @param list<GetReturnsListResponseExemplar> $exemplars
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $exemplars,
        public ?int $id,
        public ?int $companyId,
        public ?string $returnReasonName,
        public ?string $type,
        public ?string $schema,
        public ?int $orderId,
        public ?string $orderNumber,
        public ?GetReturnsListResponsePlaceNow $place,
        public ?GetReturnsListResponsePlaceTarget $targetPlace,
        public ?GetReturnsListResponseStorage $storage,
        public ?GetReturnsListResponseProduct $product,
        public ?GetReturnsListResponseLogistic $logistic,
        public ?GetReturnsListResponseVisual $visual,
        public ?GetReturnsListResponseAdditionalInfo $additionalInfo,
        public ?int $sourceId,
        public ?string $postingNumber,
        public ?int $clearingId,
        public ?int $returnClearingId,
        public ?GetReturnsListResponseCompensation $compensationStatus,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            exemplars: OzonDtoValue::objectList($payload['exemplars'] ?? null, GetReturnsListResponseExemplar::class),
            id: OzonDtoValue::int($payload['id'] ?? null),
            companyId: OzonDtoValue::int($payload['company_id'] ?? null),
            returnReasonName: OzonDtoValue::string($payload['return_reason_name'] ?? null),
            type: OzonDtoValue::string($payload['type'] ?? null),
            schema: OzonDtoValue::string($payload['schema'] ?? null),
            orderId: OzonDtoValue::int($payload['order_id'] ?? null),
            orderNumber: OzonDtoValue::string($payload['order_number'] ?? null),
            place: OzonDtoValue::object($payload['place'] ?? null, GetReturnsListResponsePlaceNow::class),
            targetPlace: OzonDtoValue::object($payload['target_place'] ?? null, GetReturnsListResponsePlaceTarget::class),
            storage: OzonDtoValue::object($payload['storage'] ?? null, GetReturnsListResponseStorage::class),
            product: OzonDtoValue::object($payload['product'] ?? null, GetReturnsListResponseProduct::class),
            logistic: OzonDtoValue::object($payload['logistic'] ?? null, GetReturnsListResponseLogistic::class),
            visual: OzonDtoValue::object($payload['visual'] ?? null, GetReturnsListResponseVisual::class),
            additionalInfo: OzonDtoValue::object($payload['additional_info'] ?? null, GetReturnsListResponseAdditionalInfo::class),
            sourceId: OzonDtoValue::int($payload['source_id'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            clearingId: OzonDtoValue::int($payload['clearing_id'] ?? null),
            returnClearingId: OzonDtoValue::int($payload['return_clearing_id'] ?? null),
            compensationStatus: OzonDtoValue::object($payload['compensation_status'] ?? null, GetReturnsListResponseCompensation::class),
            extra: OzonDtoValue::extra($payload, ['exemplars', 'id', 'company_id', 'return_reason_name', 'type', 'schema', 'order_id', 'order_number', 'place', 'target_place', 'storage', 'product', 'logistic', 'visual', 'additional_info', 'source_id', 'posting_number', 'clearing_id', 'return_clearing_id', 'compensation_status']),
        );
    }
}
