<?php
namespace skyss0fly/KindPleaseShush;

use pocketmine\Plugin\PluginBase;


Class Main extends PluginBase():{
    public function onLoad(): void{
        $this->getLogger()info->('Kindly Ask someone to shut up using' ..TEXTCOLOR:MINECOIN_GOLD.. '/kindshush')
    
    }
    public function usecommand(): void {
        $this->getServer()->broadcastMessage($playerusecommand 'Has Kindly asked you to shush @' $playertarget)
    }
}