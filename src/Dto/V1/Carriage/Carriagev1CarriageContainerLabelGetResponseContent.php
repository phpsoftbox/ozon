<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Carriagev1CarriageContainerLabelGetResponseContent implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $contentType,
        public ?string $fileContent,
        public ?string $fileName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            contentType: OzonDtoValue::string($payload['content_type'] ?? null),
            fileContent: OzonDtoValue::string($payload['file_content'] ?? null),
            fileName: OzonDtoValue::string($payload['file_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['content_type', 'file_content', 'file_name']),
        );
    }
}
