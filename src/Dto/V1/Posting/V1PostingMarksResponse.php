<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1PostingMarksResponse implements OzonDtoInterface
{
    /**
     * @param list<string> $invalidPostings
     * @param list<PostingMarksResponseIssuedExemplar> $issuedExemplars
     * @param list<PostingMarksResponseNonIssuedExemplar> $nonIssuedExemplars
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $invalidPostings,
        public array $issuedExemplars,
        public array $nonIssuedExemplars,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            invalidPostings: OzonDtoValue::array($payload['invalid_postings'] ?? null),
            issuedExemplars: OzonDtoValue::objectList($payload['issued_exemplars'] ?? null, PostingMarksResponseIssuedExemplar::class),
            nonIssuedExemplars: OzonDtoValue::objectList($payload['non_issued_exemplars'] ?? null, PostingMarksResponseNonIssuedExemplar::class),
            extra: OzonDtoValue::extra($payload, ['invalid_postings', 'issued_exemplars', 'non_issued_exemplars']),
        );
    }
}
