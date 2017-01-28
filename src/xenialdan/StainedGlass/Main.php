<?php

/*
 * StainedGlass
 * A plugin by XenialDan aka thebigsmileXD
 * http://github.com/thebigsmileXD/StainedGlass
 * Adding Stained glass using BlockField particle
 */
namespace xenialdan\StainedGlass;

use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use pocketmine\block\Block;

class Main extends PluginBase {
	public function onEnable() {
		Block::$list[Block::STAINED_GLASS] = StainedGlass::class;
		Item::$list[Block::STAINED_GLASS] = StainedGlass::class;
		for ($i = 0; $i <= 15; $i++) {
			$item = Item::get(Block::STAINED_GLASS, $i);
			Item::addCreativeItem($item);
		}
	}
}