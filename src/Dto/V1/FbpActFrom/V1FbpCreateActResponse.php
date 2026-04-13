<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpActFrom;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpCreateActResponse implements OzonDtoInterface
{
    /**
     * @param list<FbpCreateActResponseCreateActErrorReason> $errors
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public array $errors,
        public ?string $fileUuid,
        public ?bool $isSuccess,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            errors: OzonDtoValue::objectList($payload['errors'] ?? null, FbpCreateActResponseCreateActErrorReason::class),
            fileUuid: OzonDtoValue::string($payload['file_uuid'] ?? null),
            isSuccess: OzonDtoValue::bool($payload['is_success'] ?? null),
            extra: OzonDtoValue::extra($payload, ['errors', 'file_uuid', 'is_success']),
        );
    }
}
