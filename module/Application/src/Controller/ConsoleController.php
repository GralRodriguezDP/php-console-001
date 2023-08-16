<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Console\Console;
use Laminas\Console\ColorInterface;

/**
 * @author Giovanni Rodriguez <hector.ramos@dportenis.com.mx>
 */
class ConsoleController extends AbstractController
{
    public function indexAction()
    {
        $rows = 1000000000;
        $staff = 4000;
        $offset = 0;
        $console = Console::getInstance();
        $message = 'Pruebas ' . date('Y-m-d H:i:s');
        $console->writeLine($message, ColorInterface::LIGHT_GREEN);
        // 

    }
}
