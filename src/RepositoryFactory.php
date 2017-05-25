<?php

namespace Sven\EmojiCli;

class RepositoryFactory
{
    /**
     * @return \Sven\EmojiCli\EmojiRepository
     */
    public static function make()
    {
        $emoji = json_decode(
            file_get_contents(__DIR__.'/../data/emoji.json')
        );

        return new EmojiRepository((array) $emoji);
    }
}
