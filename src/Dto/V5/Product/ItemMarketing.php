<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto\V5\Product;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class ItemMarketing implements OzonDtoInterface
{
    /**
     * @param list<MarketingAction> $actions
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $actions,
        public ?string $currentPeriodFrom,
        public ?string $currentPeriodTo,
        public ?bool $ozonActionsExist,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            actions: OzonDtoValue::objectList($payload['actions'] ?? null, MarketingAction::class),
            currentPeriodFrom: OzonDtoValue::string($payload['current_period_from'] ?? null),
            currentPeriodTo: OzonDtoValue::string($payload['current_period_to'] ?? null),
            ozonActionsExist: OzonDtoValue::bool($payload['ozon_actions_exist'] ?? null),
            extra: OzonDtoValue::extra($payload, [
                'actions',
                'current_period_from',
                'current_period_to',
                'ozon_actions_exist',
            ]),
        );
    }
}
