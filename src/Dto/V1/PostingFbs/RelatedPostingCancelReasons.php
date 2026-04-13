<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class RelatedPostingCancelReasons implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $title,
        public ?string $typeId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::int($payload['id'] ?? null),
            title: OzonDtoValue::string($payload['title'] ?? null),
            typeId: OzonDtoValue::string($payload['type_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['id', 'title', 'type_id']),
        );
    }
}
