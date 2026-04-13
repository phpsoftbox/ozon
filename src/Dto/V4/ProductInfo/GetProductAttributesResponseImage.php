<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetProductAttributesResponseImage implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $default,
        public ?string $fileName,
        public ?int $index,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            default: OzonDtoValue::bool($payload['default'] ?? null),
            fileName: OzonDtoValue::string($payload['file_name'] ?? null),
            index: OzonDtoValue::int($payload['index'] ?? null),
            extra: OzonDtoValue::extra($payload, ['default', 'file_name', 'index']),
        );
    }
}
