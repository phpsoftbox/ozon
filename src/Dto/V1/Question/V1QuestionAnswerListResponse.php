<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Question;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1QuestionAnswerListResponse implements OzonDtoInterface
{
    /**
     * @param list<V1QuestionAnswerListResponseAnswers> $answers
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $answers,
        public ?string $lastId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            answers: OzonDtoValue::objectList($payload['answers'] ?? null, V1QuestionAnswerListResponseAnswers::class),
            lastId: OzonDtoValue::string($payload['last_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['answers', 'last_id']),
        );
    }
}
