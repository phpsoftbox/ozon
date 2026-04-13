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
     * @param array<array-key, mixed> $questions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $questions,
        public ?string $lastId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            questions: OzonDtoValue::array($payload['questions'] ?? null),
            lastId: OzonDtoValue::string($payload['last_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['questions', 'last_id']),
        );
    }
}
