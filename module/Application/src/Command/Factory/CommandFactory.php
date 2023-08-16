<?php

declare(strict_types=1);

namespace Application\Command\Factory;

use Exception;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class CommandFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        
        if(!class_exists($requestedName)) {
            throw new Exception('Clase command no existe ' . $requestedName);
        }

        $command = new $requestedName();

        return $command;
    }
}