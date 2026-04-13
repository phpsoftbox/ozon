<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReturnsSettingsUtilizationHistoryResponseHistory implements OzonDtoInterface
{
    /**
     * @param list<string> $descriptions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $descriptions,
        public ?string $updatedAt,
        public ?string $userName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            descriptions: OzonDtoValue::array($payload['descriptions'] ?? null),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            userName: OzonDtoValue::string($payload['user_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['descriptions', 'updated_at', 'user_name']),
        );
    }
}
