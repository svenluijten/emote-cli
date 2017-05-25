<?php

namespace Sven\EmojiCli;

class EmojiRepository
{
    /**
     * @var array
     */
    protected $emoji;

    /**
     * EmojiRepository constructor.
     *
     * @param array $emoji
     */
    public function __construct($emoji)
    {
        $this->emoji = $emoji;
    }

    /**
     * @param string $name
     *
     * @return array|null
     */
    public function get($name)
    {
        $emoji = array_reverse($this->emoji);

        return $emoji[strtolower($name)] ?? null;
    }
}
