<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1UploadPostingCodesResponse implements OzonDtoInterface
{
    /**
     * @param list<UploadPostingCodesResponsePostingExemplarInfo> $exemplarsBySku
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $exemplarsBySku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            exemplarsBySku: OzonDtoValue::objectList($payload['exemplars_by_sku'] ?? null, UploadPostingCodesResponsePostingExemplarInfo::class),
            extra: OzonDtoValue::extra($payload, ['exemplars_by_sku']),
        );
    }
}
