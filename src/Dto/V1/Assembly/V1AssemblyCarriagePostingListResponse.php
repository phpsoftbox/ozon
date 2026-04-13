<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Assembly;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1AssemblyCarriagePostingListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1AssemblyCarriagePostingListResponsePosting> $postings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $canPrintMassLabel,
        public ?string $cursor,
        public array $postings,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            canPrintMassLabel: OzonDtoValue::bool($payload['can_print_mass_label'] ?? null),
            cursor: OzonDtoValue::string($payload['cursor'] ?? null),
            postings: OzonDtoValue::objectList($payload['postings'] ?? null, V1AssemblyCarriagePostingListResponsePosting::class),
            extra: OzonDtoValue::extra($payload, ['can_print_mass_label', 'cursor', 'postings']),
        );
    }
}
