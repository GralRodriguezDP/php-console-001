<?php

declare(strict_types=1);

namespace Application\Controller\Factory;

use Exception;
//use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class ConsoleControllerFactory implements FactoryInterface 
{

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        if(!class_exists($requestedName))
        {
            throw new Exception('Exception');
        }


        $controller = new $requestedName();

        return $controller;
    }
}