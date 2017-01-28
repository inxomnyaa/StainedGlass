<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____  
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \ 
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/ 
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_| 
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 * 
 *
*/

namespace xenialdan\StainedGlass;

use pocketmine\block\Block;
use pocketmine\block\Glass;
use pocketmine\item\Item;
use pocketmine\level\particle\GenericParticle;
use pocketmine\network\protocol\LevelEventPacket;
use pocketmine\Player;
use pocketmine\level\particle\DustParticle;
use pocketmine\block\Transparent;

class StainedGlass extends Transparent {

	protected $id = Block::STAINED_GLASS;

	public function __construct($meta = 0) {
		$this->meta = $meta;
	}

	public function getName(): string {
		static $names = [
			0 => "White Stained Glass",
			1 => "Orange Stained Glass",
			2 => "Magenta Stained Glass",
			3 => "Light Blue Stained Glass",
			4 => "Yellow Stained Glass",
			5 => "Lime Stained Glass",
			6 => "Pink Stained Glass",
			7 => "Gray Stained Glass",
			8 => "Light Gray Stained Glass",
			9 => "Cyan Stained Glass",
			10 => "Purple Stained Glass",
			11 => "Blue Stained Glass",
			12 => "Brown Stained Glass",
			13 => "Green Stained Glass",
			14 => "Red Stained Glass",
			15 => "Black Stained Glass",
		];
		return $names[$this->meta]??"Unknown";
	}
}