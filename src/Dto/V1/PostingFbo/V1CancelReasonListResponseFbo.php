<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\PostingFbo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CancelReasonListResponseFbo implements OzonDtoInterface
{
    /**
     * @param list<V1CancelReasonListByOrderResponseReasonFbo> $reasons
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $reasons,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            reasons: OzonDtoValue::objectList($payload['reasons'] ?? null, V1CancelReasonListByOrderResponseReasonFbo::class),
            extra: OzonDtoValue::extra($payload, ['reasons']),
        );
    }
}
