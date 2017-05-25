<?php

namespace Sven\EmoteCli;

class EmoteRepository
{
    /**
     * @var array
     */
    protected $emotes;

    /**
     * EmoteRepository constructor.
     *
     * @param array $emotes
     */
    public function __construct($emotes)
    {
        $this->emotes = $emotes;
    }

    /**
     * @param string $name
     *
     * @return array|null
     */
    public function get($name)
    {
        $emotes = array_reverse($this->emotes);

        return $emotes[strtolower($name)] ?? null;
    }
}
