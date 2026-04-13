<?php

declare(strict_types=1);

namespace PhpSoftBox\Ozon\Cli;

use PhpSoftBox\CliApp\Command\Command;
use PhpSoftBox\CliApp\Command\CommandRegistryInterface;
use PhpSoftBox\CliApp\Command\OptionDefinition;
use PhpSoftBox\CliApp\Loader\CommandProviderInterface;

final class OzonCommandProvider implements CommandProviderInterface
{
    public function register(CommandRegistryInterface $registry): void
    {
        $registry->register(Command::define(
            name: 'ozon:openapi:generate-dto',
            description: 'Сгенерировать DTO Ozon API из локального OpenAPI/Swagger файла',
            signature: [
                new OptionDefinition(
                    name: 'spec',
                    short: 's',
                    description: 'Путь к swagger.json',
                    required: false,
                    default: 'docs/swagger.json',
                    type: 'string',
                ),
                new OptionDefinition(
                    name: 'version',
                    short: 'v',
                    description: 'Версия API для генерации: all, v1 или v2,v3',
                    required: false,
                    default: 'all',
                    type: 'string',
                ),
                new OptionDefinition(
                    name: 'output',
                    short: 'o',
                    description: 'Базовая директория DTO',
                    required: false,
                    default: 'src/Dto',
                    type: 'string',
                ),
                new OptionDefinition(
                    name: 'map',
                    short: null,
                    description: 'Файл карты response DTO',
                    required: false,
                    default: 'src/Dto/OzonResponseDtoMap.php',
                    type: 'string',
                ),
                new OptionDefinition(
                    name: 'wrappers',
                    short: null,
                    description: 'Директория wrapper-классов для --update-wrappers или базовая директория src для batch-режима',
                    required: false,
                    default: null,
                    type: 'string',
                ),
                new OptionDefinition(
                    name: 'update-wrappers',
                    short: null,
                    description: 'Обновить wrapper-классы API, переводя mapped endpoint-ы на makeDto()',
                    flag: true,
                    required: false,
                    default: false,
                    type: 'bool',
                ),
                new OptionDefinition(
                    name: 'keep-existing-dto',
                    short: null,
                    description: 'Не очищать директорию DTO выбранной версии перед генерацией',
                    flag: true,
                    required: false,
                    default: false,
                    type: 'bool',
                ),
            ],
            handler: GenerateOpenApiDtoHandler::class,
        ));
    }
}
