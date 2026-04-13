<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpDraft;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpDraftPickUpProductValidateResponseApprovedItem implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $barcode,
        public ?string $iconName,
        public ?string $name,
        public ?string $offerId,
        public ?int $quantity,
        public ?int $sku,
        public ?float $volume,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            barcode: OzonDtoValue::string($payload['barcode'] ?? null),
            iconName: OzonDtoValue::string($payload['icon_name'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            quantity: OzonDtoValue::int($payload['quantity'] ?? null),
            sku: OzonDtoValue::int($payload['sku'] ?? null),
            volume: OzonDtoValue::float($payload['volume'] ?? null),
            extra: OzonDtoValue::extra($payload, ['barcode', 'icon_name', 'name', 'offer_id', 'quantity', 'sku', 'volume']),
        );
    }
}
