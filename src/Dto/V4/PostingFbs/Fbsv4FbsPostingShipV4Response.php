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
     * @param list<FbsPostingShipV4ResponseShipAdditionalData> $additionalData
     * @param list<string> $result
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
            additionalData: OzonDtoValue::objectList($payload['additional_data'] ?? null, FbsPostingShipV4ResponseShipAdditionalData::class),
            result: OzonDtoValue::array($payload['result'] ?? null),
            extra: OzonDtoValue::extra($payload, ['additional_data', 'result']),
        );
    }
}
