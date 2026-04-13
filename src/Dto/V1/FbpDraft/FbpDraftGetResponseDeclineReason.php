<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class FbpDraftGetResponseDeclineReason implements OzonDtoInterface
{
    /**
     * @param list<string> $failedSkuIds
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $failedSkuIds,
        public ?string $message,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            failedSkuIds: OzonDtoValue::array($payload['failed_sku_ids'] ?? null),
            message: OzonDtoValue::string($payload['message'] ?? null),
            extra: OzonDtoValue::extra($payload, ['failed_sku_ids', 'message']),
        );
    }
}
