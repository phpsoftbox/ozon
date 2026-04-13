<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2DraftSupplyCreateResponse implements OzonDtoInterface
{
    /**
     * @param list<V2DraftSupplyCreateResponseErrorReasonEnum> $errorReasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $draftId,
        public array $errorReasons,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            draftId: OzonDtoValue::int($payload['draft_id'] ?? null),
            errorReasons: OzonDtoValue::objectList($payload['error_reasons'] ?? null, V2DraftSupplyCreateResponseErrorReasonEnum::class),
            extra: OzonDtoValue::extra($payload, ['draft_id', 'error_reasons']),
        );
    }
}
