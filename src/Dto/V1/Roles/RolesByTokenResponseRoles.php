<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Roles;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class RolesByTokenResponseRoles implements OzonDtoInterface
{
    /**
     * @param list<string> $methods
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $name,
        public array $methods,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            name: OzonDtoValue::string($payload['name'] ?? null),
            methods: OzonDtoValue::array($payload['methods'] ?? null),
            extra: OzonDtoValue::extra($payload, ['name', 'methods']),
        );
    }
}
