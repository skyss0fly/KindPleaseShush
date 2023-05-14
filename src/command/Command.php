<?php

namespace skyss0fly\command\Command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\permission\DefaultPermissions;
use pocketmine\player\Player;
use pocketmine\plugin\PluginOwned;
use pocketmine\utils\TextFormat;
use skyss0fly\KindPleaseShush\Main;

class kindshush extends Command implements PluginOwned {
    
    public function __construct() {
        parent::__construct("KindShush", "Kindly shush someone");
		$this->setAliases(["ks"]);
        $this->setPermission(DefaultPermissions::ROOT_USER);
    }
    
    public function execute(CommandSender $sender, string $commandLabel, array $args): bool {
        if (!$sender instanceof Player) {
            $sender->sendMessage(TextFormat::RED . "You must use this command in-game!");
            return true;
        }
        if (count($args) === 0) {
            $kindshush = KindPleaseShush::getInstance()->usecommand($sender);
            $sender->sendMessage(TextFormat::GREEN . "Shushing player");
            return true;
        }
        $player = $sender->getServer()->getPlayerExact($args[0]);
        if (!$player instanceof Player) {
            $sender->sendMessage(TextFormat::RED . "Could not find player " . $args[0]);
            return true;
        }
        $kindshush = $this->getOwningPlugin()->usecommand($player);
        $sender->sendMessage(TextFormat::GREEN . $player->getName() . "Shushed: " . TextFormat::RED . $$playertarget);
        return true;
    }

	public function getOwningPlugin() : KindPleaseShush {
		return KindPleaseShush::getInstance();
	}
}