<?php

declare(strict_types=1);

/**
 * @generated Ozon OpenAPI DTO
 */

namespace PhpSoftBox\Ozon\Dto\V1\Roles;

use PhpSoftBox\Ozon\Dto\OzonDtoInterface;
use PhpSoftBox\Ozon\Dto\OzonDtoValue;

final readonly class V1RolesByTokenResponse implements OzonDtoInterface
{
    /**
     * @param list<RolesByTokenResponseRoles> $roles
     * @param array<string, mixed> $extra
     */
    public function __construct(
        public ?string $expiresAt,
        public array $roles,
        public array $extra = [],
    ) {
    }

    public static function fromArray(array $payload): static
    {
        return new self(
            expiresAt: OzonDtoValue::string($payload['expires_at'] ?? null),
            roles: OzonDtoValue::objectList($payload['roles'] ?? null, RolesByTokenResponseRoles::class),
            extra: OzonDtoValue::extra($payload, ['expires_at', 'roles']),
        );
    }
}
