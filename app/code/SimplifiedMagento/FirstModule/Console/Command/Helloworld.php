<?php

namespace SimplifiedMagento\FirstModule\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
    /**
     * Configure
     * 
     * @return void
     */
    public function configure()
    {
        $this->setName('training:hello_world')
            ->setDescription('the command prints out hello world')
            ->setAliases(['hw'])
            ->setDefinition([
                new InputArgument('name', InputArgument::OPTIONAL, 'the name of the person', null, null)
            ]);
    }

    /**
     * Execute
     * 
     * @param InputInterface  $input  input
     * @param OutputInterface $output output
     * 
     * @return void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello word, ' . $input->getArgument('name'));
    }
}