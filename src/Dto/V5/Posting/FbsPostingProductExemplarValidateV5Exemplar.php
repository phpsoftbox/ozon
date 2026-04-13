<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingProductExemplarValidateV5Exemplar implements OzonDtoInterface
{
    /**
     * @param list<string> $errors
     * @param list<FbsPostingProductExemplarValidateV5Mark> $marks
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public ?string $gtd,
        public array $marks,
        public ?string $rnpt,
        public ?bool $valid,
        public ?float $weight,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::stringList($payload['errors'] ?? null),
            gtd: OzonDtoValue::string($payload['gtd'] ?? null),
            marks: OzonDtoValue::objectList($payload['marks'] ?? null, FbsPostingProductExemplarValidateV5Mark::class),
            rnpt: OzonDtoValue::string($payload['rnpt'] ?? null),
            valid: OzonDtoValue::bool($payload['valid'] ?? null),
            weight: OzonDtoValue::float($payload['weight'] ?? null),
            extra: OzonDtoValue::extra($payload, ['errors', 'gtd', 'marks', 'rnpt', 'valid', 'weight']),
        );
    }
}
