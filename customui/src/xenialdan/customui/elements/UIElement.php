<?php

namespace xenialdan\customui\elements;

use pocketmine\player\Player;

abstract class UIElement implements \JsonSerializable
{

    protected $text = '';

    /**
     * Returns an array of item stack properties that can be serialized to json.
     *
     * @return array
     */
    public function jsonSerialize(): mixed
    {
        return [];
    }

    /**
     * @param $value
     * @param Player $player
     * @return mixed
     */
    abstract public function handle($value, Player $player);

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

}
