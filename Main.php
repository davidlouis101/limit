<?php

declare(strict_types=1);

namespace Aleondev\Al;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

	public function onEnable() : void{
		$this->getLogger()->info("Hello World!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "limit":
                $sender->sendMessage("§e[GG]§7[§4Limit§7] §cGeneriert..");
                $sender->sendMessage("§e[GG]§7[§4Limit§7] §cGeneriert...");
                $sender->sendMessage("§e[GG]§7[§4Limit§7] §cGeneriert....");
                $sender->sendMessage("§e[GG]§7[§4Limit§7] §cGeneriert.....");
                $sender->sendMessage("§e[GG]§7[§4Limit§7] §cGeneriert......");
                $sender->sendMessage("§e[GG]§7[§4Limit§7] §cGeneriert.......");
                $sender->sendMessage("§e[GG]§7[§4Limit§7]§cDas Limit liegt bei");
                $sender->sendMessage("§e[GG]§7[§4Limit§7] §e" .rand(1, 100000). "§e GC");

				return true;
			default:
				return false;
		}
	}

	public function onDisable() : void{
		$this->getLogger()->info("Bye");
	}
}