<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Carriage;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1CarriageCourierContactGetResponse implements OzonDtoInterface
{
    /**
     * @param list<V1CarriageCourierContactGetResponseContact> $contact
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $contact,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            contact: OzonDtoValue::objectList($payload['contact'] ?? null, V1CarriageCourierContactGetResponseContact::class),
            extra: OzonDtoValue::extra($payload, ['contact']),
        );
    }
}
