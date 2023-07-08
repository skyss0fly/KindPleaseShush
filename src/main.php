<?php
namespace skyss0fly\KindPleaseShush;

use pocketmine\Plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\player\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

Class Main extends PluginBase{
    
    public function onLoad(): void{
        $this->getLogger()->info('Kindly Ask someone to shut up using /kindshush')
    }
    public function onEnable(): void{
        self::$instance = $this;
		$this->getServer()->getCommandMap()->register("kindshush", new Command());
	}
    
   public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch ($command->getName()) {
            case "kindshush":
       if (count($args) === 0) {
                $sender->sendMessage("Usage: /kindshush <player>");
                return true;
            }

            $targetPlayer = $this->getServer()->getPlayerExact($args[0]);
            if (!$targetPlayer instanceof Player) {
                $sender->sendMessage("Player not found.");
                return true;
            }
		$this->getServer()->broadcastMessage($sender . "is kindly asking " . $targetPlayer . " to shut up. if you were wise, you would shush!");

}
   }
    }

