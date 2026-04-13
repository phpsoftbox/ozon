<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\SellerActions;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class SellerActionsListResponseAction implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?int $actionId,
        public ?ActionParameter $actionParameters,
        public ?bool $allowDelete,
        public ?string $highlightUrl,
        public ?bool $isEditable,
        public ?bool $isParticipated,
        public ?bool $isTurnOn,
        public ?int $skuCount,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actionId: OzonDtoValue::int($payload['action_id'] ?? null),
            actionParameters: OzonDtoValue::object($payload['action_parameters'] ?? null, ActionParameter::class),
            allowDelete: OzonDtoValue::bool($payload['allow_delete'] ?? null),
            highlightUrl: OzonDtoValue::string($payload['highlight_url'] ?? null),
            isEditable: OzonDtoValue::bool($payload['is_editable'] ?? null),
            isParticipated: OzonDtoValue::bool($payload['is_participated'] ?? null),
            isTurnOn: OzonDtoValue::bool($payload['is_turn_on'] ?? null),
            skuCount: OzonDtoValue::int($payload['sku_count'] ?? null),
            extra: OzonDtoValue::extra($payload, ['action_id', 'action_parameters', 'allow_delete', 'highlight_url', 'is_editable', 'is_participated', 'is_turn_on', 'sku_count']),
        );
    }
}
