<?php
namespace skyss0fly\KindPleaseShush;

use pocketmine\Plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\player\Player;
use command\Command;
Class Main extends PluginBase():{
    public function onLoad(): void{
        $this->getLogger()info->('Kindly Ask someone to shut up using' ..FORMAT:MINECOIN_GOLD.. '/kindshush')
    public function onEnable(): void{
        self::$instance = $this;
		$this->getServer()->getCommandMap()->register("kindshush", new Command());
	}
    }
    }
    public function usecommand(): void {
        $this->getServer()->broadcastMessage(..TEXTFORMAT:RED.. ..$playerusecommand.. 'Has Kindly asked you to shush @' ..$playertarget..)
    }
}

