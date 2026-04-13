<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductUpdateOfferIdResponseError implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $message,
        public ?string $offerId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            message: OzonDtoValue::string($payload['message'] ?? null),
            offerId: OzonDtoValue::string($payload['offer_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['message', 'offer_id']),
        );
    }
}
