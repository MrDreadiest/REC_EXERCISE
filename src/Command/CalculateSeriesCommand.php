<?php

namespace App\Command;

use App\Entity\Calculation;
use RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class CalculateSeriesCommand extends Command
{
    protected static $defaultName = 'app:calculate-series';

    protected function configure()
    {
        $this
            ->setDescription('Command to calculate the largest number in a series.')
            ->setHelp('Type command and enter values one by one.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper = $this->getHelper('question');
        $question = new Question('Input :', false);

        $question->setValidator(function ($answer) {
            if (($answer > 99999 || $answer < 1) && $answer != null) {
                throw new RuntimeException(
                    'The input value should be grater or equal 1 and less or equal than 99 999'
                );
            }
            return $answer;
        });

        for ($i = 0; $i < 10; $i++) {
            $answer = $helper->ask($input, $output, $question);
            if (!$answer) break;

            $calculation = new Calculation($answer);
            $calculation->calculate();

            $output->writeln('Output :' . $calculation->getMaxOccurrence());
        }

        return 0;
    }
}
