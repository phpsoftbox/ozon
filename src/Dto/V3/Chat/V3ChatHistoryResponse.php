<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\Chat;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3ChatHistoryResponse implements OzonDtoInterface
{
    /**
     * @param list<V3ChatMessage> $messages
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $hasNext,
        public array $messages,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            hasNext: OzonDtoValue::bool($payload['has_next'] ?? null),
            messages: OzonDtoValue::objectList($payload['messages'] ?? null, V3ChatMessage::class),
            extra: OzonDtoValue::extra($payload, ['has_next', 'messages']),
        );
    }
}
