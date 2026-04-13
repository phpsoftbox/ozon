<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\ProductCertificate;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CertificationV2ProductCertificateCreateResponseParam implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $error,
        public ?string $name,
        public ?CertificationV2ProductCertificateCreateResponseParamStateEnum $state,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            error: OzonDtoValue::string($payload['error'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            state: OzonDtoValue::scalarObject($payload['state'] ?? null, CertificationV2ProductCertificateCreateResponseParamStateEnum::class),
            extra: OzonDtoValue::extra($payload, ['error', 'name', 'state']),
        );
    }
}
