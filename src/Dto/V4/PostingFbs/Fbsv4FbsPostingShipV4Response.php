<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class Fbsv4FbsPostingShipV4Response implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $additionalData
     * @param array<array-key, mixed> $result
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $additionalData,
        public array $result,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            additionalData: OzonDtoValue::array($payload['additional_data'] ?? null),
            result: OzonDtoValue::array($payload['result'] ?? null),
            extra: OzonDtoValue::extra($payload, ['additional_data', 'result']),
        );
    }
}
