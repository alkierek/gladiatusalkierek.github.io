<?php
// PRIVATE MULTI-DIMENSIONAL ARRAY THAT HOLDS ALL ITEM DATA THAT CAN BE ACCESED OR CHANGED
$items = array(
	## BASIC SHIELD
	0 => array("name" => "Wooden shield", "soul-bound" => true, "armour" => 40, "level" => 2, "value" => 36, "image" => "2_2", "type" => 4, "size" => 16, "bsize" => 1),

	## WEAPON
	1 => array("name" => "Espada", "soul-bound" => true, "damage" => "2 - 2", "level" => 1, "value" => 55, "image" => "1_2", "type" => 2, "size" => 8, "bsize" => 1),
	2 => array("name_orange" => "Espada Legendaria", "soul-bound" => true, "damage" => "31 - 45", "level" => 25, "value" => 13771, "image" => "1_2_sp", "type" => 2, "size" => 8, "bsize" => 1),

	10000 => array("name" => "Wooden shield", "soul-bound" => true, "armour" => 40, "level" => 2, "value" => 36, "image" => "2_2", "type" => 4, "size" => 16, "bsize" => 1)
);

## name/name_green/name_blue/name_purple/name_orange/name_red/name_gold, soul-bound (every true), 
## damage, damage_+, armour, life, 
## strenght, dexterity, agility, constitution, charisma, intelligence, 
## X_%,
## crit_attack, block, hardening, 
## threat, healing, crit_heal, 
## X_add_green, 
## level, value, image, type, size, bsize
## -- ##
## helmet: 1
## weapon: 2
## shell: 4
## chest: 8
## ring: 48
## gloves: 256
## boots: 512
## amulet: 1024
## -- ##
## 2x3 = 32
## 2x2 = 16
## 1x3 = 8
## 1x2 = 4
## 1x1 = 2 o 1





?>