<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Review;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReviewInfoResponseVideo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $height,
        public ?string $previewUrl,
        public ?string $shortVideoPreviewUrl,
        public ?string $url,
        public ?int $width,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            height: OzonDtoValue::int($payload['height'] ?? null),
            previewUrl: OzonDtoValue::string($payload['preview_url'] ?? null),
            shortVideoPreviewUrl: OzonDtoValue::string($payload['short_video_preview_url'] ?? null),
            url: OzonDtoValue::string($payload['url'] ?? null),
            width: OzonDtoValue::int($payload['width'] ?? null),
            extra: OzonDtoValue::extra($payload, ['height', 'preview_url', 'short_video_preview_url', 'url', 'width']),
        );
    }
}
