<?php

namespace Sven\EmoteCli;

class RepositoryFactory
{
    /**
     * @return \Sven\EmoteCli\EmoteRepository
     */
    public static function make()
    {
        $emotes = json_decode(
            file_get_contents(__DIR__.'/../data/emotes.json')
        );

        return new EmoteRepository((array) $emotes);
    }
}
