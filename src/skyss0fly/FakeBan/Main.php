<?php

namespace skyss0fly\FakeBan;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class Main extends PluginBase {

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch ($command->getName()) {
            case "fakeban":
                if (count($args) < 1) {
                    $sender->sendMessage("Usage: /fakeban <player>");
                    return false;
                }
                if (count($args) < 2) {

                $player = $sender->getServer()->getPlayerExact($args[0]);
                if ($player === null) {
                    $sender->sendMessage("Player not found");
                    return false;
                } else {
                    $sender->sendMessage("You have Fake Banned " . $player->getName());
                    $player->kick("Kicked by An Admin: You Are Banned!");
                }
                return true; // Make sure to return true to indicate command success
        }
                else {
  $player = $sender->getServer()->getPlayerExact($args[0]);
                if ($player === null) {
                    $sender->sendMessage("Player not found");
                    return false;
                } else {
                    $sender->sendMessage("You have Fake Banned " . $player->getName());
                    $player->kick("Banned for: " . $args[1]);
                }
                return true; // Make sure to return true to indicate command success
                }
        }
        return false; // If the command is not recognized, return false
    }
}
