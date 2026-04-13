<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingFBSActCheckStatusResponseStatus implements OzonDtoInterface
{
    /**
     * @param list<string> $addedToAct
     * @param list<string> $removedFromAct
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $actType,
        public array $addedToAct,
        public array $removedFromAct,
        public ?string $status,
        public ?bool $isPartial,
        public ?bool $hasPostingsForNextCarriage,
        public ?int $partialNum,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actType: OzonDtoValue::string($payload['act_type'] ?? null),
            addedToAct: OzonDtoValue::array($payload['added_to_act'] ?? null),
            removedFromAct: OzonDtoValue::array($payload['removed_from_act'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            isPartial: OzonDtoValue::bool($payload['is_partial'] ?? null),
            hasPostingsForNextCarriage: OzonDtoValue::bool($payload['has_postings_for_next_carriage'] ?? null),
            partialNum: OzonDtoValue::int($payload['partial_num'] ?? null),
            extra: OzonDtoValue::extra($payload, ['act_type', 'added_to_act', 'removed_from_act', 'status', 'is_partial', 'has_postings_for_next_carriage', 'partial_num']),
        );
    }
}
