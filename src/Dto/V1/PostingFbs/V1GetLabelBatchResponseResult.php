<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1GetLabelBatchResponseResult implements OzonDtoInterface
{
    /**
     * @param list<ResultUnprintedPosting> $unprintedPostings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $error,
        public ?string $fileUrl,
        public ?int $printedPostingsCount,
        public ?string $status,
        public array $unprintedPostings,
        public ?int $unprintedPostingsCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            error: OzonDtoValue::string($payload['error'] ?? null),
            fileUrl: OzonDtoValue::string($payload['file_url'] ?? null),
            printedPostingsCount: OzonDtoValue::int($payload['printed_postings_count'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            unprintedPostings: OzonDtoValue::objectList($payload['unprinted_postings'] ?? null, ResultUnprintedPosting::class),
            unprintedPostingsCount: OzonDtoValue::int($payload['unprinted_postings_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['error', 'file_url', 'printed_postings_count', 'status', 'unprinted_postings', 'unprinted_postings_count']),
        );
    }
}
