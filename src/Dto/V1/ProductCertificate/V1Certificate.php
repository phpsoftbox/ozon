<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductCertificate;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1Certificate implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $certificateId,
        public ?string $certificateNumber,
        public ?string $certificateName,
        public ?string $typeCode,
        public ?string $statusCode,
        public ?string $accordanceTypeCode,
        public ?string $rejectionReasonCode,
        public ?string $verificationComment,
        public ?string $issueDate,
        public ?string $expireDate,
        public ?int $productsCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            certificateId: OzonDtoValue::int($payload['certificate_id'] ?? null),
            certificateNumber: OzonDtoValue::string($payload['certificate_number'] ?? null),
            certificateName: OzonDtoValue::string($payload['certificate_name'] ?? null),
            typeCode: OzonDtoValue::string($payload['type_code'] ?? null),
            statusCode: OzonDtoValue::string($payload['status_code'] ?? null),
            accordanceTypeCode: OzonDtoValue::string($payload['accordance_type_code'] ?? null),
            rejectionReasonCode: OzonDtoValue::string($payload['rejection_reason_code'] ?? null),
            verificationComment: OzonDtoValue::string($payload['verification_comment'] ?? null),
            issueDate: OzonDtoValue::string($payload['issue_date'] ?? null),
            expireDate: OzonDtoValue::string($payload['expire_date'] ?? null),
            productsCount: OzonDtoValue::int($payload['products_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['certificate_id', 'certificate_number', 'certificate_name', 'type_code', 'status_code', 'accordance_type_code', 'rejection_reason_code', 'verification_comment', 'issue_date', 'expire_date', 'products_count']),
        );
    }
}
