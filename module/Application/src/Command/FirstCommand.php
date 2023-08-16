<?php

namespace Application\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FirstCommand extends Command
{
    protected static $defaultName = 'first-command';
    //protected static $defaultDescription = 'Crear un nuevo usuario';

    protected function configure(): void
    {
        $this->setName(self::$defaultName);
        $this->addOption('name', null, InputOption::VALUE_REQUIRED, 'Module name');
        $this->setHelp('Help para el comando en especifico');
    }    

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('First command: ' .$input->getOption('name'));
        return Command::SUCCESS;
    }
}