<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\ProductCertificate;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V2ProductCertificateAccordanceTypesResponseResult implements OzonDtoInterface
{
    /**
     * @param list<V2ProductCertificateAccordanceTypesResponseType> $base
     * @param list<V2ProductCertificateAccordanceTypesResponseType> $hazard
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $base,
        public array $hazard,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            base: OzonDtoValue::objectList($payload['base'] ?? null, V2ProductCertificateAccordanceTypesResponseType::class),
            hazard: OzonDtoValue::objectList($payload['hazard'] ?? null, V2ProductCertificateAccordanceTypesResponseType::class),
            extra: OzonDtoValue::extra($payload, ['base', 'hazard']),
        );
    }
}
