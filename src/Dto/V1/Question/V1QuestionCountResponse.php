<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Question;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1QuestionCountResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $all,
        public ?int $new,
        public ?int $processed,
        public ?int $unprocessed,
        public ?int $viewed,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            all: OzonDtoValue::int($payload['all'] ?? null),
            new: OzonDtoValue::int($payload['new'] ?? null),
            processed: OzonDtoValue::int($payload['processed'] ?? null),
            unprocessed: OzonDtoValue::int($payload['unprocessed'] ?? null),
            viewed: OzonDtoValue::int($payload['viewed'] ?? null),
            extra: OzonDtoValue::extra($payload, ['all', 'new', 'processed', 'unprocessed', 'viewed']),
        );
    }
}
