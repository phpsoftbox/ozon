<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingProductExemplarValidateV5Mark implements OzonDtoInterface
{
    /**
     * @param list<string> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public ?string $mark,
        public ?string $markType,
        public ?bool $valid,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::stringList($payload['errors'] ?? null),
            mark: OzonDtoValue::string($payload['mark'] ?? null),
            markType: OzonDtoValue::string($payload['mark_type'] ?? null),
            valid: OzonDtoValue::bool($payload['valid'] ?? null),
            extra: OzonDtoValue::extra($payload, ['errors', 'mark', 'mark_type', 'valid']),
        );
    }
}
