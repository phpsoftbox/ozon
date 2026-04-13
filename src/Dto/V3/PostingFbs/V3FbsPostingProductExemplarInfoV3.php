<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V3FbsPostingProductExemplarInfoV3 implements OzonDtoInterface
{
    /**
     * @param list<string> $imei
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $exemplarId,
        public ?string $mandatoryMark,
        public ?string $gtd,
        public ?bool $isGtdAbsent,
        public ?string $rnpt,
        public ?bool $isRnptAbsent,
        public ?float $weight,
        public array $imei,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            exemplarId: OzonDtoValue::int($payload['exemplar_id'] ?? null),
            mandatoryMark: OzonDtoValue::string($payload['mandatory_mark'] ?? null),
            gtd: OzonDtoValue::string($payload['gtd'] ?? null),
            isGtdAbsent: OzonDtoValue::bool($payload['is_gtd_absent'] ?? null),
            rnpt: OzonDtoValue::string($payload['rnpt'] ?? null),
            isRnptAbsent: OzonDtoValue::bool($payload['is_rnpt_absent'] ?? null),
            weight: OzonDtoValue::float($payload['weight'] ?? null),
            imei: OzonDtoValue::array($payload['imei'] ?? null),
            extra: OzonDtoValue::extra($payload, ['exemplar_id', 'mandatory_mark', 'gtd', 'is_gtd_absent', 'rnpt', 'is_rnpt_absent', 'weight', 'imei']),
        );
    }
}
