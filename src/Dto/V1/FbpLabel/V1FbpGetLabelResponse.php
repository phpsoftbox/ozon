<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpLabel;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpGetLabelResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $labelUrl,
        public ?FbpGetLabelResponseLabelCreationStateTypeEnum $state,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            labelUrl: OzonDtoValue::string($payload['label_url'] ?? null),
            state: OzonDtoValue::object($payload['state'] ?? null, FbpGetLabelResponseLabelCreationStateTypeEnum::class),
            extra: OzonDtoValue::extra($payload, ['label_url', 'state']),
        );
    }
}
