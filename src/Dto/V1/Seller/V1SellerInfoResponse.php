<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Seller;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1SellerInfoResponse implements OzonDtoInterface
{
    /**
     * @param list<SellerInfoResponseRating> $ratings
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?SellerInfoResponseCompany $company,
        public array $ratings,
        public ?SellerInfoResponseSubscription $subscription,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            company: OzonDtoValue::object($payload['company'] ?? null, SellerInfoResponseCompany::class),
            ratings: OzonDtoValue::objectList($payload['ratings'] ?? null, SellerInfoResponseRating::class),
            subscription: OzonDtoValue::object($payload['subscription'] ?? null, SellerInfoResponseSubscription::class),
            extra: OzonDtoValue::extra($payload, ['company', 'ratings', 'subscription']),
        );
    }
}
