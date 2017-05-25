<?php

namespace Sven\EmoteCli\Commands;

use Sven\EmoteCli\RepositoryFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetEmote extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('get')
            ->setDescription('Get an emote by its name.')
            ->addArgument('emote', InputArgument::REQUIRED, 'The name of the emote to find.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $emotes = RepositoryFactory::make()->get(
            $input->getArgument('emote')
        );

        if (is_null($emotes)) {
            $output->writeln('<error>Oops, I don\'t know about that emote yet. ¯\_(⊙︿⊙)_/¯</error>');
        }

        $output->writeln($emotes);
    }
}
