<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpActTo;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpCheckConsignmentNoteStateResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $errorMessage,
        public ?string $labelUrl,
        public ?FbpCheckConsignmentNoteStateResponseStateType $state,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errorMessage: OzonDtoValue::string($payload['error_message'] ?? null),
            labelUrl: OzonDtoValue::string($payload['label_url'] ?? null),
            state: OzonDtoValue::object($payload['state'] ?? null, FbpCheckConsignmentNoteStateResponseStateType::class),
            extra: OzonDtoValue::extra($payload, ['error_message', 'label_url', 'state']),
        );
    }
}
