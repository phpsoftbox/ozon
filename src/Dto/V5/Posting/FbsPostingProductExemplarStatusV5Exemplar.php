<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingProductExemplarStatusV5Exemplar implements OzonDtoInterface
{
    /**
     * @param list<string> $gtdErrorCodes
     * @param list<FbsPostingProductExemplarStatusV5Mark> $marks
     * @param list<string> $rnptErrorCodes
     * @param list<string> $weightErrorCodes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $exemplarId,
        public ?string $gtd,
        public ?string $gtdCheckStatus,
        public array $gtdErrorCodes,
        public ?bool $isGtdAbsent,
        public ?bool $isRnptAbsent,
        public array $marks,
        public ?string $rnpt,
        public ?string $rnptCheckStatus,
        public array $rnptErrorCodes,
        public ?float $weight,
        public ?string $weightCheckStatus,
        public array $weightErrorCodes,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            exemplarId: OzonDtoValue::int($payload['exemplar_id'] ?? null),
            gtd: OzonDtoValue::string($payload['gtd'] ?? null),
            gtdCheckStatus: OzonDtoValue::string($payload['gtd_check_status'] ?? null),
            gtdErrorCodes: OzonDtoValue::stringList($payload['gtd_error_codes'] ?? null),
            isGtdAbsent: OzonDtoValue::bool($payload['is_gtd_absent'] ?? null),
            isRnptAbsent: OzonDtoValue::bool($payload['is_rnpt_absent'] ?? null),
            marks: OzonDtoValue::objectList($payload['marks'] ?? null, FbsPostingProductExemplarStatusV5Mark::class),
            rnpt: OzonDtoValue::string($payload['rnpt'] ?? null),
            rnptCheckStatus: OzonDtoValue::string($payload['rnpt_check_status'] ?? null),
            rnptErrorCodes: OzonDtoValue::stringList($payload['rnpt_error_codes'] ?? null),
            weight: OzonDtoValue::float($payload['weight'] ?? null),
            weightCheckStatus: OzonDtoValue::string($payload['weight_check_status'] ?? null),
            weightErrorCodes: OzonDtoValue::stringList($payload['weight_error_codes'] ?? null),
            extra: OzonDtoValue::extra($payload, [
                'exemplar_id',
                'gtd',
                'gtd_check_status',
                'gtd_error_codes',
                'is_gtd_absent',
                'is_rnpt_absent',
                'marks',
                'rnpt',
                'rnpt_check_status',
                'rnpt_error_codes',
                'weight',
                'weight_check_status',
                'weight_error_codes',
            ]),
        );
    }
}
