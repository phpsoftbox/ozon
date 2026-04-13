<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpDraftDropOffProductValidateResponse implements OzonDtoInterface
{
    /**
     * @param list<V1FbpDraftDropOffProductValidateResponseApprovedItem> $approvedItems
     * @param list<V1FbpDraftDropOffProductValidateResponseRejectedItem> $rejectedItems
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $approvedItems,
        public ?bool $bundleGenerated,
        public ?string $bundleId,
        public array $rejectedItems,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            approvedItems: OzonDtoValue::objectList($payload['approved_items'] ?? null, V1FbpDraftDropOffProductValidateResponseApprovedItem::class),
            bundleGenerated: OzonDtoValue::bool($payload['bundle_generated'] ?? null),
            bundleId: OzonDtoValue::string($payload['bundle_id'] ?? null),
            rejectedItems: OzonDtoValue::objectList($payload['rejected_items'] ?? null, V1FbpDraftDropOffProductValidateResponseRejectedItem::class),
            extra: OzonDtoValue::extra($payload, ['approved_items', 'bundle_generated', 'bundle_id', 'rejected_items']),
        );
    }
}
