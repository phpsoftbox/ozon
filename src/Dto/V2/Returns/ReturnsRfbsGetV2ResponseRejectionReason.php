<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReturnsRfbsGetV2ResponseRejectionReason implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $hint,
        public ?int $id,
        public ?bool $isCommentRequired,
        public ?string $name,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hint: OzonDtoValue::string($payload['hint'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            isCommentRequired: OzonDtoValue::bool($payload['is_comment_required'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['hint', 'id', 'is_comment_required', 'name']),
        );
    }
}
