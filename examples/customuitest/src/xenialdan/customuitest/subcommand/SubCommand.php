<?php

namespace xenialdan\customuitest\subcommand;

use pocketmine\command\CommandSender;
use xenialdan\customuitest\Loader;

abstract class SubCommand
{
    /** @var Loader */
    private Loader $plugin;

    /**
     * @param Loader $plugin
     */
    public function __construct(Loader $plugin)
    {
        $this->plugin = $plugin;
    }

    /**
     * @return Loader
     */
    public final function getPlugin(): Loader
    {
        return $this->plugin;
    }
    
    /**
     * @param CommandSender $sender
     * @return bool
     */
    public abstract function canUse(CommandSender $sender);

    /**
     * @return string
     */
    public abstract function getUsage();

    /**
     * @return string
     */
    public abstract function getName();

    /**
     * @return string
     */
    public abstract function getDescription();

    /**
     * @return string[]
     */
    public abstract function getAliases();

    /**
     * @param CommandSender $sender
     * @param string[] $args
     * @return bool
     */
    public abstract function execute(CommandSender $sender, array $args);
}
