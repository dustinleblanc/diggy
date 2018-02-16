<?php

namespace Diggy\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class DiggyCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('get:records')

            // the short description shown while running "php bin/console list"
            ->setDescription('Fetches A and AAAA records.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command with allow for getting cool records for a Pantheon domain...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        $question = new Question('Enter the PLATFORM domain you need records for');

        $answer = $helper->ask($input, $output, $question);

        $aRecord = shell_exec("dig ${answer} +short")
    }
}
