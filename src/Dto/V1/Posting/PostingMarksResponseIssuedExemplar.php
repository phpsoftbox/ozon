<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingMarksResponseIssuedExemplar implements OzonDtoInterface
{
    /**
     * @param list<string> $mandatoryMarks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $exemplarId,
        public array $mandatoryMarks,
        public ?string $postingNumber,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            exemplarId: OzonDtoValue::int($payload['exemplar_id'] ?? null),
            mandatoryMarks: OzonDtoValue::array($payload['mandatory_marks'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['exemplar_id', 'mandatory_marks', 'posting_number', 'sku']),
        );
    }
}
