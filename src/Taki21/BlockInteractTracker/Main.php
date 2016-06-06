<?php

namespace Taki21\BlockInteractTracker;

use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\block\Block;
use pocketmine\utils\TextFormat as C;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(C::AQUA."BlockInteractTracker".C::GOLD." Enabled!");
	}

	public function onPlace(BlockPlaceEvent $bpe){
		$pl = $bpe->getPlayer();
		$name = $pl->getName();
		$bl = $bpe->getBlock();
		$blname = $bl->getName();
		$lvl = $pl->getLevel()->getName();
		$x = $pl->getX();
		$y = $pl->getY();
		$z = $pl->getZ();
		$this->getLogger()->info(C::YELLOW."$name".C::DARK_AQUA." Placed/tried to Place (a)".C::YELLOW." $blname".C::DARK_AQUA." in World:".C::YELLOW." $lvl".C::DARK_AQUA." at Position:".C::YELLOW." $x, $y, $z");
	}
	public function onBreak(BlockBreakEvent $bbe){
		$pl = $bbe->getPlayer();
		$name = $pl->getName();
		$bl = $bbe->getBlock();
		$blname = $bl->getName();
		$lvl = $pl->getLevel()->getName();
		$x = $pl->getX();
		$y = $pl->getY();
		$z = $pl->getZ();
		$this->getLogger()->info(C::YELLOW."$name".C::DARK_AQUA." Destroyed/tried to Destroy (a)".C::YELLOW." $blname".C::DARK_AQUA." in World:".C::YELLOW." $lvl".C::DARK_AQUA." at Position:".C::YELLOW." $x, $y, $z");		return;
	}
	public function onDisable(){
		$this->getLogger()->info(C::DARK_RED."X ----BlockInteractTracker Disabled! Is the Server Off?---- X");
	}
}
