<?php
namespace skyss0fly\KindPleaseShush;

use pocketmine\Plugin\PluginBase;
use pocketmine\utils\TextFormat;

Class Main extends PluginBase():{
    public function onLoad(): void{
        $this->getLogger()info->('Kindly Ask someone to shut up using' ..FORMAT:MINECOIN_GOLD.. '/kindshush')
    
    }
    public function usecommand(): void {
        $this->getServer()->broadcastMessage(..TEXTFORMAT:RED.. ..$playerusecommand.. 'Has Kindly asked you to shush @' ..$playertarget..)
    }
}