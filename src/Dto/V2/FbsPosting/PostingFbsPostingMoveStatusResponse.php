<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\FbsPosting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingFbsPostingMoveStatusResponse implements OzonDtoInterface
{
    /**
     * @param list<FbsPostingMoveStatusResponseMoveStatus> $result
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: OzonDtoValue::objectList($payload['result'] ?? null, FbsPostingMoveStatusResponseMoveStatus::class),
            extra: OzonDtoValue::extra($payload, ['result']),
        );
    }
}
