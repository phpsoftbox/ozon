<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V6\FbsPosting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ExemplarMark implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $mark,
        public ?string $markType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            mark: OzonDtoValue::string($payload['mark'] ?? null),
            markType: OzonDtoValue::string($payload['mark_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['mark', 'mark_type']),
        );
    }
}
