<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\ProductCertificate;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class CertificationV2ProductCertificateCreateResponse implements OzonDtoInterface
{
    /**
     * @param list<CertificationV2ProductCertificateCreateResponseParam> $params
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $certificateId,
        public array $params,
        public ?CertificationV2ProductCertificateCreateResponseStatusEnum $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            certificateId: OzonDtoValue::int($payload['certificate_id'] ?? null),
            params: OzonDtoValue::objectList($payload['params'] ?? null, CertificationV2ProductCertificateCreateResponseParam::class),
            status: OzonDtoValue::scalarObject($payload['status'] ?? null, CertificationV2ProductCertificateCreateResponseStatusEnum::class),
            extra: OzonDtoValue::extra($payload, ['certificate_id', 'params', 'status']),
        );
    }
}
