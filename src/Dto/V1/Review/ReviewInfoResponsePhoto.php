<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Review;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReviewInfoResponsePhoto implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $height,
        public ?string $url,
        public ?int $width,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            height: OzonDtoValue::int($payload['height'] ?? null),
            url: OzonDtoValue::string($payload['url'] ?? null),
            width: OzonDtoValue::int($payload['width'] ?? null),
            extra: OzonDtoValue::extra($payload, ['height', 'url', 'width']),
        );
    }
}
