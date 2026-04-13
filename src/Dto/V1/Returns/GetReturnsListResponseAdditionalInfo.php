<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class GetReturnsListResponseAdditionalInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isOpened,
        public ?bool $isSuperEconom,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isOpened: OzonDtoValue::bool($payload['is_opened'] ?? null),
            isSuperEconom: OzonDtoValue::bool($payload['is_super_econom'] ?? null),
            extra: OzonDtoValue::extra($payload, ['is_opened', 'is_super_econom']),
        );
    }
}
