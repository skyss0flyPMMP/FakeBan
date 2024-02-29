<?php

namespace skyss0fly\FakeOP;

use pocketmine{plugin\PluginBase, command\Command, command\CommandSender};

class Main extends PluginBase {

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch ($command->getName()) {
            case "fakeop":
                if(count($args) < 1) {
                    $sender->sendMessage("Usage: /fakeop <player>");
                    return false;
                }

                $player = $this->getServer()->getPlayer($args[0]);
                if($player === null) {
                    $sender->sendMessage("Player not found");
                    return false;
                }
                else {
                $sender->sendMessage("You Have FakeOP'd " . $player->getName());
                $player->sendMessage("[" . $sender->getName(); . "] Opped " . $player->getName(); ".");
                }

                }
                }
                }
                




             
