<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReturnsCompanyFbsInfoResponsePassInfo implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $count,
        public ?bool $isRequired,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            count: OzonDtoValue::int($payload['count'] ?? null),
            isRequired: OzonDtoValue::bool($payload['is_required'] ?? null),
            extra: OzonDtoValue::extra($payload, ['count', 'is_required']),
        );
    }
}
