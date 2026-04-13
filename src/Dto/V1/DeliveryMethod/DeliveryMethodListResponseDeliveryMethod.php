<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\DeliveryMethod;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryMethodListResponseDeliveryMethod implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $companyId,
        public ?string $createdAt,
        public ?string $cutoff,
        public ?int $id,
        public ?string $name,
        public ?int $providerId,
        public ?int $slaCutIn,
        public ?string $status,
        public ?int $templateId,
        public ?string $updatedAt,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            companyId: OzonDtoValue::int($payload['company_id'] ?? null),
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            cutoff: OzonDtoValue::string($payload['cutoff'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            providerId: OzonDtoValue::int($payload['provider_id'] ?? null),
            slaCutIn: OzonDtoValue::int($payload['sla_cut_in'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            templateId: OzonDtoValue::int($payload['template_id'] ?? null),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['company_id', 'created_at', 'cutoff', 'id', 'name', 'provider_id', 'sla_cut_in', 'status', 'template_id', 'updated_at', 'warehouse_id']),
        );
    }
}
