<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V2\DeliveryMethod;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class DeliveryMethodListV2ResponseDeliveryMethod implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $createdAt,
        public ?string $cutoff,
        public ?int $id,
        public ?bool $isExpress,
        public ?string $name,
        public ?int $providerId,
        public ?int $slaCutIn,
        public ?string $status,
        public ?int $templateId,
        public ?string $tplIntegrationType,
        public ?string $updatedAt,
        public ?int $warehouseId,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            createdAt: OzonDtoValue::string($payload['created_at'] ?? null),
            cutoff: OzonDtoValue::string($payload['cutoff'] ?? null),
            id: OzonDtoValue::int($payload['id'] ?? null),
            isExpress: OzonDtoValue::bool($payload['is_express'] ?? null),
            name: OzonDtoValue::string($payload['name'] ?? null),
            providerId: OzonDtoValue::int($payload['provider_id'] ?? null),
            slaCutIn: OzonDtoValue::int($payload['sla_cut_in'] ?? null),
            status: OzonDtoValue::string($payload['status'] ?? null),
            templateId: OzonDtoValue::int($payload['template_id'] ?? null),
            tplIntegrationType: OzonDtoValue::string($payload['tpl_integration_type'] ?? null),
            updatedAt: OzonDtoValue::string($payload['updated_at'] ?? null),
            warehouseId: OzonDtoValue::int($payload['warehouse_id'] ?? null),
            extra: OzonDtoValue::extra($payload, ['created_at', 'cutoff', 'id', 'is_express', 'name', 'provider_id', 'sla_cut_in', 'status', 'template_id', 'tpl_integration_type', 'updated_at', 'warehouse_id']),
        );
    }
}
