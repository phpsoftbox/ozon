<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\ProductCertificate;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ProductCertificateDeleteResponseResult implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?bool $isDelete,
        public ?string $errorMessage,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            isDelete: OzonDtoValue::bool($payload['is_delete'] ?? null),
            errorMessage: OzonDtoValue::string($payload['error_message'] ?? null),
            extra: OzonDtoValue::extra($payload, ['is_delete', 'error_message']),
        );
    }
}
