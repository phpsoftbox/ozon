<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V4\ProductInfo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V4GetUploadQuotaResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?GetUploadQuotaResponseDailyCreate $dailyCreate,
        public ?GetUploadQuotaResponseDailyUpdate $dailyUpdate,
        public ?GetUploadQuotaResponseTotal $total,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            dailyCreate: OzonDtoValue::object($payload['daily_create'] ?? null, GetUploadQuotaResponseDailyCreate::class),
            dailyUpdate: OzonDtoValue::object($payload['daily_update'] ?? null, GetUploadQuotaResponseDailyUpdate::class),
            total: OzonDtoValue::object($payload['total'] ?? null, GetUploadQuotaResponseTotal::class),
            extra: OzonDtoValue::extra($payload, ['daily_create', 'daily_update', 'total']),
        );
    }
}
