<?php

namespace welcomeJoin\welcomeJoin2;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use welcomeJoin\welcomeJoin2\Listener\ListenerWJ;

class Main extends PluginBase {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents(new ListenerWJ($this), $this);
        $this->getLogger()->info(str_repeat("=", 40));
        $this->getLogger()->info(TextFormat::WHITE . "welcomeJoin2 " . TextFormat::GREEN . "Ã¨ stato abilitato con successo");
        $this->getLogger()->info(TextFormat::YELLOW . "Devealoper: " . TextFormat::AQUA . "Roci");
        $this->getLogger()->info(str_repeat("=", 40));
    }

    public function onDisable() {
        $this->getLogger()->info(str_repeat("=", 40));
        $this->getLogger()->info(TextFormat::WHITE . "welcomeJoin2 " . TextFormat::DARK_RED . "Ã¨ stato disabilitato con successo");
        $this->getLogger()->info(TextFormat::YELLOW . "Devealoper: " . TextFormat::AQUA . "Roci");
        $this->getLogger()->info(str_repeat("=", 40));
    }
}
