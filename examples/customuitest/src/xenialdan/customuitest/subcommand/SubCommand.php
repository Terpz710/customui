<?php

namespace xenialdan\customuitest\subcommand;

use pocketmine\command\CommandSender;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginOwned;
use xenialdan\customuitest\Loader;

abstract class SubCommand implements PluginOwned
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
     * @return Plugin|Loader
     */
    public function getOwningPlugin(): Plugin {
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
