<?php

declare(strict_types=1);

namespace Application;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'laminas-cli' => $this->getCliConfig(),
            'dependencies' => $this->getDependencyConfig()
        ];
    }

    public function getCliConfig(): array
    {
        return [
            'commands' => [
                'application:first' => Command\FirstCommand::class,
            ],
        ];
    }

    public function getDependencyConfig(): array
    {
        return [
            'factories' => [
                Command\FirstCommand::class => Command\Factory\CommandFactory::class
            ]
        ];
    }
}