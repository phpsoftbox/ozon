<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2ReturnsRfbsListResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?ReturnsRfbsListResponseReturns $returns,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            returns: OzonDtoValue::object($payload['returns'] ?? null, ReturnsRfbsListResponseReturns::class),
            extra: OzonDtoValue::extra($payload, ['returns']),
        );
    }
}
