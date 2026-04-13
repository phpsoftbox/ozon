<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Draft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DraftCreateCommonResponse implements OzonDtoInterface
{
    /**
     * @param list<DraftCreateCommonResponseError> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $draftId,
        public array $errors,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            draftId: OzonDtoValue::int($payload['draft_id'] ?? null),
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, DraftCreateCommonResponseError::class),
            extra: OzonDtoValue::extra($payload, ['draft_id', 'errors']),
        );
    }
}
