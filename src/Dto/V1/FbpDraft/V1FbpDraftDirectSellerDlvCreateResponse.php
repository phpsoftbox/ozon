<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpDraftDirectSellerDlvCreateResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $draftId,
        public ?int $rowVersion,
        public ?string $supplyId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            draftId: OzonDtoValue::int($payload['draft_id'] ?? null),
            rowVersion: OzonDtoValue::int($payload['row_version'] ?? null),
            supplyId: OzonDtoValue::string($payload['supply_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['draft_id', 'row_version', 'supply_id']),
        );
    }
}
