<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\ProductPictures;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2ProductInfoPicturesResponseError implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $message,
        public ?string $url,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            message: OzonDtoValue::string($payload['message'] ?? null),
            url: OzonDtoValue::string($payload['url'] ?? null),
            extra: OzonDtoValue::extra($payload, ['message', 'url']),
        );
    }
}
