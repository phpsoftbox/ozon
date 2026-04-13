<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Posting;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class UploadPostingCodesResponsePostingExemplarInfo implements OzonDtoInterface
{
    /**
     * @param list<PostingExemplarInfoExemplarError> $failedExemplars
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $failedExemplars,
        public ?int $receivedQty,
        public ?int $rejectedQty,
        public ?int $sku,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            failedExemplars: OzonDtoValue::objectList($payload['failed_exemplars'] ?? null, PostingExemplarInfoExemplarError::class),
            receivedQty: OzonDtoValue::int($payload['received_qty'] ?? null),
            rejectedQty: OzonDtoValue::int($payload['rejected_qty'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            extra: OzonDtoValue::extra($payload, ['failed_exemplars', 'received_qty', 'rejected_qty', 'sku']),
        );
    }
}
