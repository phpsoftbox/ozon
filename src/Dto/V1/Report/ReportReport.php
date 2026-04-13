<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Report;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ReportReport implements OzonDtoInterface
{
    /**
     * @param array<array-key, mixed> $params
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $code,
        public ?string $createdAt,
        public ?string $error,
        public ?string $expiresAt,
        public ?string $file,
        public array $params,
        public ?string $reportType,
        public ?string $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            code: OzonDtoValue::string($payload['code'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            error: OzonDtoValue::string($payload['error'] ?? null),
            expiresAt: OzonDtoValue::string($payload['expires_at'] ?? null),
            file: OzonDtoValue::string($payload['file'] ?? null),
            params: OzonDtoValue::array($payload['params'] ?? null),
            reportType: OzonDtoValue::string($payload['report_type'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            extra: OzonDtoValue::extra($payload, ['code', 'created_at', 'error', 'expires_at', 'file', 'params', 'report_type', 'status']),
        );
    }
}
