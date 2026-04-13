<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\FbpActFrom;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1FbpCheckActStateResponse implements OzonDtoInterface
{
    /**
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $cdnUrl,
        public ?FbpCheckActStateResponseErrorReason $error,
        public ?V1FbpCheckActStateResponseStatus $status,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            cdnUrl: OzonDtoValue::string($payload['cdn_url'] ?? null),
            error: OzonDtoValue::object($payload['error'] ?? null, FbpCheckActStateResponseErrorReason::class),
            status: OzonDtoValue::object($payload['status'] ?? null, V1FbpCheckActStateResponseStatus::class),
            extra: OzonDtoValue::extra($payload, ['cdn_url', 'error', 'status']),
        );
    }
}
