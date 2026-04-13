<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Question;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1QuestionListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1QuestionListResponseQuestions> $questions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $questions,
        public ?string $lastId,
        public ?bool $hasNext,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            questions: OzonDtoValue::objectList($payload['questions'] ?? null, V1QuestionListResponseQuestions::class),
            lastId: OzonDtoValue::string($payload['last_id'] ?? null),
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            extra: OzonDtoValue::extra($payload, ['questions', 'last_id', 'has_next']),
        );
    }
}
