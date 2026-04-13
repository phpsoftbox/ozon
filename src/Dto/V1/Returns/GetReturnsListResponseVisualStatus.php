<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetReturnsListResponseVisualStatus implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $id,
        public ?string $displayName,
        public ?string $sysName,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            id: OzonDtoValue::int($payload['id'] ?? null),
            displayName: OzonDtoValue::string($payload['display_name'] ?? null),
            sysName: OzonDtoValue::string($payload['sys_name'] ?? null),
            extra: OzonDtoValue::extra($payload, ['id', 'display_name', 'sys_name']),
        );
    }
}
