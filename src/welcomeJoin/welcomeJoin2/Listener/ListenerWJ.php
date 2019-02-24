<?php
namespace welcomeJoin\welcomeJoin2\Listener;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\utils\TextFormat;
use welcomeJoin\welcomeJoin2\Main;

class ListenerWJ implements  Listener {

    public $plugin;

    public function __construct(Main $plugin) {
        $this->plugin = $plugin;
    }

    /**
     * @param PlayerJoinEvent $event
     */
    public function onJoin(PlayerJoinEvent $event): void {

        $event->setJoinMessage("[+]" . $event->getPlayer()->getName());

     $this->plugin->getServer()->broadcastMessage("Write here the message you want to dazzle when a player enters");

     //it is possible to put the colors / format through Textformat

    }
}