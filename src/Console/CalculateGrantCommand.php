<?php
declare(strict_types=1);

namespace Application\Console;

use Application\Model\JuniorDeveloper;
use Application\Model\SeniorDeveloper;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CalculateGrantCommand
 */
class CalculateGrantCommand extends Command
{
    /**
     * @return void
     */
    public function configure(): void
    {
        $this
            ->setName('grants')
            ->setDescription('Grants calculator')
        ;
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $junior = new JuniorDeveloper();
        $senior = new SeniorDeveloper();

        $output->writeln([
            '/*************************************/',
            '/********* Grant calculator **********/',
            '/*************************************/',
            '',
            'Junior: ' . $junior->calculateGrant(),
            'Senior: ' . $senior->calculateGrant(),
        ]);

        return 0;
    }
}