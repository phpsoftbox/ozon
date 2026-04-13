<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V6\FbsPosting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ProductExemplar implements OzonDtoInterface
{
    /**
     * @param list<ExemplarMark> $marks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $exemplarId,
        public ?string $gtd,
        public ?bool $isGtdAbsent,
        public ?bool $isRnptAbsent,
        public array $marks,
        public ?string $rnpt,
        public ?float $weight,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            exemplarId: OzonDtoValue::int($payload['exemplar_id'] ?? null),
            gtd: OzonDtoValue::string($payload['gtd'] ?? null),
            isGtdAbsent: OzonDtoValue::bool($payload['is_gtd_absent'] ?? null),
            isRnptAbsent: OzonDtoValue::bool($payload['is_rnpt_absent'] ?? null),
            marks: OzonDtoValue::objectList($payload['marks'] ?? null, ExemplarMark::class),
            rnpt: OzonDtoValue::string($payload['rnpt'] ?? null),
            weight: OzonDtoValue::float($payload['weight'] ?? null),
            extra: OzonDtoValue::extra($payload, ['exemplar_id', 'gtd', 'is_gtd_absent', 'is_rnpt_absent', 'marks', 'rnpt', 'weight']),
        );
    }
}
