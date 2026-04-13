<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpArchive;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1DeliveryDetailsPickUpDetails implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $address,
        public ?string $comment,
        public ?string $date,
        public ?string $senderName,
        public ?string $senderPhone,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            address: OzonDtoValue::string($payload['address'] ?? null),
            comment: OzonDtoValue::string($payload['comment'] ?? null),
            date: OzonDtoValue::string($payload['date'] ?? null),
            senderName: OzonDtoValue::string($payload['sender_name'] ?? null),
            senderPhone: OzonDtoValue::string($payload['sender_phone'] ?? null),
            extra: OzonDtoValue::extra($payload, ['address', 'comment', 'date', 'sender_name', 'sender_phone']),
        );
    }
}
