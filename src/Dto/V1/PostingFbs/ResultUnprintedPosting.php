<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ResultUnprintedPosting implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $msg,
        public ?string $postingNumber,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            msg: OzonDtoValue::string($payload['msg'] ?? null),
            postingNumber: OzonDtoValue::string($payload['posting_number'] ?? null),
            extra: OzonDtoValue::extra($payload, ['msg', 'posting_number']),
        );
    }
}
