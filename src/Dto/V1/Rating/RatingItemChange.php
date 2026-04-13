<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Rating;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class RatingItemChange implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $direction,
        public ?string $meaning,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            direction: OzonDtoValue::string($payload['direction'] ?? null),
            meaning: OzonDtoValue::string($payload['meaning'] ?? null),
            extra: OzonDtoValue::extra($payload, ['direction', 'meaning']),
        );
    }
}
