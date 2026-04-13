<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Returns;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1ReturnsSettingsUtilizationHistoryResponse implements OzonDtoInterface
{
    /**
     * @param list<ReturnsSettingsUtilizationHistoryResponseHistory> $history
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $history,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            history: OzonDtoValue::objectList($payload['history'] ?? null, ReturnsSettingsUtilizationHistoryResponseHistory::class),
            extra: OzonDtoValue::extra($payload, ['history']),
        );
    }
}
