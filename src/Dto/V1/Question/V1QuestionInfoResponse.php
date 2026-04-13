<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Question;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1QuestionInfoResponse implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $publishedAt
     * @param array<array-key, mixed> $status
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $answersCount,
        public ?string $authorName,
        public ?string $id,
        public ?string $productUrl,
        public array $publishedAt,
        public ?string $questionLink,
        public ?int $sku,
        public array $status,
        public ?string $text,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            answersCount: OzonDtoValue::int($payload['answers_count'] ?? null),
            authorName: OzonDtoValue::string($payload['author_name'] ?? null),
            id: OzonDtoValue::string($payload['id'] ?? null),
            productUrl: OzonDtoValue::string($payload['product_url'] ?? null),
            publishedAt: OzonDtoValue::array($payload['published_at'] ?? null),
            questionLink: OzonDtoValue::string($payload['question_link'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            status: OzonDtoValue::array($payload['status'] ?? null),
            text: OzonDtoValue::string($payload['text'] ?? null),
            extra: OzonDtoValue::extra($payload, ['answers_count', 'author_name', 'id', 'product_url', 'published_at', 'question_link', 'sku', 'status', 'text']),
        );
    }
}
