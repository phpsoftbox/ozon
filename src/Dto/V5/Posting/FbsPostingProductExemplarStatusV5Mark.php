<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbsPostingProductExemplarStatusV5Mark implements OzonDtoInterface
{
    /**
     * @param list<string> $errorCodes
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $checkStatus,
        public array $errorCodes,
        public ?string $mark,
        public ?string $markType,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            checkStatus: OzonDtoValue::string($payload['check_status'] ?? null),
            errorCodes: OzonDtoValue::stringList($payload['error_codes'] ?? null),
            mark: OzonDtoValue::string($payload['mark'] ?? null),
            markType: OzonDtoValue::string($payload['mark_type'] ?? null),
            extra: OzonDtoValue::extra($payload, ['check_status', 'error_codes', 'mark', 'mark_type']),
        );
    }
}
