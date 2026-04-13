<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\PostingFbs;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class PostingV4PostingFbsListResponsePostingsCustomer implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?PostingV4PostingFbsListResponsePostingsCustomerAddress $address,
        public ?string $customerEmail,
        public ?int $customerId,
        public ?string $name,
        public ?string $phone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::object($payload['address'] ?? null, PostingV4PostingFbsListResponsePostingsCustomerAddress::class),
            customerEmail: OzonDtoValue::string($payload['customer_email'] ?? null),
            customerId: OzonDtoValue::int($payload['customer_id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            phone: OzonDtoValue::string($payload['phone'] ?? null),
            extra: OzonDtoValue::extra($payload, ['address', 'customer_email', 'customer_id', 'name', 'phone']),
        );
    }
}
