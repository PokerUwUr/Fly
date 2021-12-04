<?php

namespace Fly;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\Player;

class Fly extends PluginBase implements Listener {

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool{
        switch($command->getName()){
        case "fly":

        if(!isset($args[0])){
            $sender->sendMessage("§cUse /fly on\off ");
            return true;
        }
        if($args[0] == "on"){
             $sender->setAllowFlight(true);
             $sender->sendMessage("§aActivaste El Fly");
             $sender->addTitle("§aUn Pericaso Pa Que Vuele");
         }
         if($args[0] == "off"){
            $sender->setAllowFlight(false);
            $sender->setFlying(false);
            $sender->sendMessage("§cEl Fly Esta Off");
            $sender->addTitle("§cJodaa Mani Se Apago");
        }
    }
    return true;
}
}
