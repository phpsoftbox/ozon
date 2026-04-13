<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Dto;

use InvalidArgumentException;

use function is_subclass_of;
use function sprintf;

final class OzonDtoHydrator
{
    /**
     * @template T of OzonDtoInterface
     *
     * @param class-string<T> $dtoClass
     * @param array<string, mixed> $payload
     *
     * @return T
     */
    public static function make(string $dtoClass, array $payload): OzonDtoInterface
    {
        if (!is_subclass_of($dtoClass, OzonDtoInterface::class)) {
            throw new InvalidArgumentException(sprintf(
                'Ozon DTO class "%s" must implement %s.',
                $dtoClass,
                OzonDtoInterface::class,
            ));
        }

        return $dtoClass::fromArray($payload);
    }
}
