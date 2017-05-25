<?php

namespace Sven\EmojiCli\Commands;

use Sven\EmojiCli\RepositoryFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetEmoji extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('get')
            ->setDescription('Get an emoji by its name.')
            ->addArgument('emoji', InputArgument::REQUIRED, 'The name of the emoji to find.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $emoji = RepositoryFactory::make()->get(
            $input->getArgument('emoji')
        );

        if (is_null($emoji)) {
            $output->writeln('<error>Oops, I don\'t know about that emoji yet. ¯\_(⊙︿⊙)_/¯</error>');
        }

        $output->writeln($emoji);
    }
}
