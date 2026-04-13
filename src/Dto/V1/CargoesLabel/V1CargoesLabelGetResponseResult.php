<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\CargoesLabel;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CargoesLabelGetResponseResult implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $fileGuid,
        public ?string $fileUrl,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            fileGuid: OzonDtoValue::string($payload['file_guid'] ?? null),
            fileUrl: OzonDtoValue::string($payload['file_url'] ?? null),
            extra: OzonDtoValue::extra($payload, ['file_guid', 'file_url']),
        );
    }
}
