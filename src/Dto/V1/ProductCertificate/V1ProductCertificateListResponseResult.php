<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductCertificate;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductCertificateListResponseResult implements OzonDtoInterface
{
    /**
     * @param list<V1Certificate> $certificates
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $certificates,
        public ?int $pageCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            certificates: OzonDtoValue::objectList($payload['certificates'] ?? null, V1Certificate::class),
            pageCount: OzonDtoValue::int($payload['page_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['certificates', 'page_count']),
        );
    }
}
