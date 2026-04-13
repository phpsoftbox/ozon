<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Question;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1QuestionAnswerListResponseAnswers implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $publishedAt
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $authorName,
        public ?string $id,
        public array $publishedAt,
        public ?string $questionId,
        public ?int $sku,
        public ?QuestionV1QuestionAnswerListResponseAnswerStatusPublicationEnum $statusPublication,
        public ?string $text,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            authorName: OzonDtoValue::string($payload['author_name'] ?? null),
            id: OzonDtoValue::string($payload['id'] ?? null),
            publishedAt: OzonDtoValue::array($payload['published_at'] ?? null),
            questionId: OzonDtoValue::string($payload['question_id'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            statusPublication: OzonDtoValue::scalarObject($payload['status_publication'] ?? null, QuestionV1QuestionAnswerListResponseAnswerStatusPublicationEnum::class),
            text: OzonDtoValue::string($payload['text'] ?? null),
            extra: OzonDtoValue::extra($payload, ['author_name', 'id', 'published_at', 'question_id', 'sku', 'status_publication', 'text']),
        );
    }
}
