<?php

declare(strict_types=1);

namespace Aleondev\Al;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

	public function onEnable() {
		$this->getLogger()->info("Aktiviert!");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "DC":
                $sender->sendMessage("§7Dc §cGeneriert.......");
                $sender->sendMessage("§7Dc §cGeneriert.......");
                $sender->sendMessage("§7Dc §cGeneriert.......");
                $sender->sendMessage("§7Dc §cGeneriert.......");
                $sender->sendMessage("§7Dc §cGeneriert.......");
                $sender->sendMessage("§7Dc §cGeneriert.......");
                $sender->sendMessage("§7Dc §cGeneriert.......");
                $sender->sendMessage("§7Dc §cGeneriert.......");
                $this->getServer()->broadcastMessage("Discord : https://discord.gg/rrf3gqh");

				return true;
			default:
				return false;
		}
	}

	public function onDisable() {
		$this->getLogger()->info("Aus");
	}
}
