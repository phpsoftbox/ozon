<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V3\PostingMultiboxqty;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Postingv3PostingMultiBoxQtySetV3Response implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?Postingv3PostingMultiBoxQtySetV3ResponseResult $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            result: OzonDtoValue::object($payload['result'] ?? null, Postingv3PostingMultiBoxQtySetV3ResponseResult::class),
            extra: OzonDtoValue::extra($payload, ['result']),
        );
    }
}
