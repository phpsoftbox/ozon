<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class AvailabilityReason implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ReasonHumanText $humanText,
        public ?int $id,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            humanText: OzonDtoValue::object($payload['human_text'] ?? null, ReasonHumanText::class),
            id: OzonDtoValue::int($payload['id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['human_text', 'id']),
        );
    }
}
