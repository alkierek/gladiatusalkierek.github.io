<?php
// INCLUDE CONFIG FILE
include_once("db/root.php");

// GETTER USED TO RECEIVE ITEMS FROM ARRAY BY ID
function getItemByID($id)
{
	include ("item_database.php");
	
	// CHECK IF $id IS NUMERIC IF THAN THAN PROCEED, ELSE RETURN
	if (is_numeric($id) == false)
		return;

	// CHECK IF ID IS BIGGER THAN NEGATIVE AND SMALLER OR EQUAL TO ARRAY SIZE
	// THIS SOLVES UNWANTED ERRORS WITH ARRAYS
	if ($id >= 0 && $id < sizeof($items))
	{
		// RETURN FETCHED ITEM DATA
		return $items[$id];
	}
	return null;
}

// GETTER USED TO RECEIVE ITEMS FROM ARRAY BY ID
function getItemByName($name)
{
	include ("item_database.php");
	
	// GOES TROUGHT ALL ITEM DATABASE AND CHECKS IF ITEM EXISTS WITH NAME $name
	// IF IT EXISTS RETURN ITEM DATA
	foreach ($items as $key => $value)
	{
		if ($value['name'] == $name)
		{
			// RETURN FETCHED ITEM DATA
			return $value;
		}
	}
	return null;
}

function itemDescriptionIdentifier($key, $value)
{
	$html = '';
	switch ($key)
	{
		case "name":
			$html = "<tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>". $value ."</td></tr>";
		break;
		case "name_gold":
			$html = "<tr><td style=\'color:#FFFF00; text-shadow: 0 0 2px #000, 0 0 4px #FFFF00; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>". $value ."</td></tr>";
		break;
		case "name_red":
			$html = "<tr><td style=\'color:#FF0000; text-shadow: 0 0 2px #000, 0 0 4px #FF0000; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>". $value ."</td></tr>";
		break;
		case "name_orange":
			$html = "<tr><td style=\'color:#FF8000; text-shadow: 0 0 2px #000, 0 0 4px #FF8000; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>". $value ."</td></tr>";
		break;
		case "name_purple":
			$html = "<tr><td style=\'color:#E303E0; text-shadow: 0 0 2px #000, 0 0 4px #E303E0; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>". $value ."</td></tr>";
		break;
		case "name_green":
			$html = "<tr><td style=\'color:lime; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>". $value ."</td></tr>";
		break;
		case "name_blue":
			$html = "<tr><td style=\'color:#5159F7; text-shadow: 0 0 2px #000, 0 0 2px #5159F7;; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>". $value ."</td></tr>";
		break;
		case "soul-bound":
			if ($value == true)
				$html = "";
		break;
		case "armour":
			$value = number_format($value, 0, ",", ".");
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Armour +". $value ."</td></tr>";
		break;
		case "armour_add_green":
			$value = number_format($value, 0, ",", ".");
			$html = "<tr><td style=\'color:#00B712; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>". $value ." Armour </td></tr>";
		break;
		case "life":
			$value = number_format($value, 0, ",", ".");
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Life +". $value ."</td></tr>";
		break;
		case "life_add_green":
			$value = number_format($value, 0, ",", ".");
			$html = "<tr><td style=\'color:#00B712; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>". $value ." Life </td></tr>";
		break;
		case "damage":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Damage ". $value ."</td></tr>";;
		break;
		case "damage_add_green":
			$html = "<tr><td style=\'color:#00B712; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>+". $value ." Damage </td></tr>";
		break;
		case "damage_+":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Damage +". $value ."</td></tr>";
		break;
		case "strength":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Strength +". $value ."</td></tr>";;
		break;
		case "strength_%":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Strength +". $value ."%</td></tr>";
		break;
		case "strength_add_green":
			$html = "<tr><td style=\'color:#00B712; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>+". $value ." Strength </td></tr>";
		break;
		case "charisma":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Charisma +". $value ."</td></tr>";;
		break;
		case "charisma_%":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Charisma +". $value ."%</td></tr>";
		break;
		case "charisma_add_green":
			$html = "<tr><td style=\'color:#00B712; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>+". $value ." Charisma </td></tr>";
		break;
		case "dexterity":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Dexterity +". $value ."</td></tr>";
		break;
		case "dexterity_%":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Dexterity +". $value ."%</td></tr>";
		break;
		case "dexterity_add_green":
			$html = "<tr><td style=\'color:#00B712; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>+". $value ." Dexterity </td></tr>";
		break;
		case "agility_%":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Agility +". $value ."%</td></tr>";
		break;
		case "agility_add_green":
			$html = "<tr><td style=\'color:#00B712; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>+". $value ." Agility </td></tr>";
		break;
		case "crit_attack":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Critical attack value +". $value ."%</td></tr>";
		break;
		case "block":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Block value +". $value ."</td></tr>";
		break;
		case "hardening":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Hardening value +". $value ."</td></tr>";
		break;
		case "threat":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Threat +". $value ."</td></tr>";
		break;
		case "level":
			$html = "<tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Level ". $value ."</td></tr>";
		break;
		case "health":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Health +". $value ."</td></tr>";
		break;
		case "value":
			$value = number_format($value, 0, ",", ".");
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Value ". $value ." <img src=\'8501/img/res2d.gif\' alt=\'Gold\' title=\'Gold\' align=\'absmiddle\' border=\'0\' /></td></tr>";
		break;
		case "heal":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Using: Heals +". $value ." of life</td></tr>";
		break;
		case "from_intelligence":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>From intelligence: +". $value ." vitality point(s)</td></tr>";
		break;
		case "combined":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Combined with: ". $value ."</td></tr>";
		break;
		case "max_item_level":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Max. level of the item: ". $value ."</td></tr>";
		break;
		case "constitution":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Constitution +". $value ."</td></tr>";
		break;
		case "constitution_%":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Constitution +". $value ."%</td></tr>";
		break;
		case "constitution_add_green":
			$html = "<tr><td style=\'color:#00B712; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>+". $value ." Constitution </td></tr>";
		break;
		case "intelligence":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Intelligence +". $value ."</td></tr>";
		break;
		case "intelligence_%":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Intelligence +". $value ."%</td></tr>";
		break;
		case "intelligence_add_green":
			$html = "<tr><td style=\'color:#00B712; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>+". $value ." Intelligence </td></tr>";
		break;
		case "healing":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Healing +". $value ."</td></tr>";
		break;
		case "crit_heal":
			$html = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Critical healing value +". $value ."</td></tr>";
		break;
	}
	return $html;
}

// SCRIPT WRITTER USED TO WRITE ITEMS TO INVENTORY
function addItemsToInventory($playerID)
{
	// CONNECT TO MYSQL
	mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
	// SELECT DATABASE
	mysql_select_db(MYSQL_SERVER_DB);
	// MAKE A QUERY
	$result = mysql_query("SELECT * FROM inventory WHERE id=". $playerID ."");
	
	$row = '';
	if (mysql_num_rows($result) > 0)
		$row = mysql_fetch_array($result, MYSQL_NUM);
	
	$id = 1;
	$script = '';
	for ($y = 1; $y <= 8; $y++)
	{
		for ($x = 1; $x <= 5; $x++, $id++)
		{
			$type = 0; $size = 0; $bsize = 0; $iid = 0; $level = 0; $price = 0; $rubies = 0; $bound = 0; $premium = 0; $item_description_html_layout = '';
			if ($row != null)
			{
				if ($row[$id] != null)
				{
					$item = getItemByID($row[$id]);
					if ($item != null)
					{
						$item_description_html_layout = "<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'>";
						foreach ($item as $key => $value)
						{
							// ITEM DESCRIPTION (VISIBLE TO USER)
							$item_description_html_layout .= itemDescriptionIdentifier($key, $value);
							
							// BASE STATS (INVISIBLE FOR USER)
							if ($key == "type")
								$type = $value;
							else if ($key == "size")
								$size = $value;
							else if ($key == "bsize")
								$bsize = $value;	
							else if ($key == "level")
								$level = $value;
							else if ($key == "value")
								$price = $value;
							else if ($key == "rubies")
								$rubies = $value;
							else if ($key == "soul-bound" && $value == true)
								$bound = 1;
							
							// UNABLE TO BUY WITHOUT RUBIES
							if ($rubies > 0)
								$premium = 1;
							$iid = $id;
						}
						$item_description_html_layout .= "</table>";
					}
				}
			}
			$script .= "AddCharDiv(\"p512_". $y ."_". $x ."\", ". (($y - 1) * 32) .", ". (($x - 1) * 32) .", ". $type .", ". $size .", ". $bsize .", 16777215, ". $iid .", ". $price .", ". $rubies .", ". $premium .", 0, 0, ". $bound .", ". $level .", 0, \"". $item_description_html_layout ."\", [ ]);\n";
		}
	}
	mysql_close();
	
	return $script;
}

function addItemsToDoll($playerID)
{
	// CONNECT TO MYSQL
	mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
	// SELECT DATABASE
	mysql_select_db(MYSQL_SERVER_DB);
	// MAKE A QUERY
	$result = mysql_query("SELECT * FROM doll WHERE id=". $playerID ."");
	
	$row = '';
	if (mysql_num_rows($result) > 0)
		$row = mysql_fetch_array($result, MYSQL_NUM);
		
	$script = ''; $id = 1;
	for ($i = 2; $i <= 11; $i++, $id++)
	{
		if ($i == 8)
			continue;
			
		// BASIC VALUE VARIABLES
		$level = 0; $price = 0; $rubies = 0; $premium = 0; $bound = 0; $offset = 0; $type = 0; $size2 = 0; $bsize2 = 0;
		
		// WRITE ITEM DESCRIPTION
		$item_description_html_layout = "";
		if (!empty($row))
		{
			if ($row[$id] != null)
			{
				// GET ITEM DATA ARRAY
				$item = getItemByID($row[$id]);
			
				$item_description_html_layout = "<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'>";
				foreach($item as $key => $value)
				{
					// ITEM DESCRIPTION (VISIBLE TO USER)
					$item_description_html_layout .= itemDescriptionIdentifier($key, $value);
					
					// SET BASE STATS
					if ($key == "level")
						$level = $value;
					else if ($key == "value")
						$price = $value;
					else if ($key == "rubies")
						$rubies = $value;
					else if ($key == "soul-bound" && $value == true)
						$bound = 1;
					else if ($key == "type")
						$type = $value;
					else if ($key == "size")
						$size2 = $value;
					else if ($key == "bsize")
						$bsize2 = $value;
				}
				$item_description_html_layout .= "</table>";
				
				// CHECK IF ITEM IS PREMIUM
				if ($rubies > 0)
					$premium = 1;
			}
		}
		
		// CALCULATE PIXELS, DEFAULT SIZE, TACCEPT ETC.
		$x = 100; $y = 18; $size = 16; $bsize = 16; $taccept = 1;
		if ($i == 3 || $i == 9)
		{
			$x = 21;
			if ($i == 3)
			{
				$y = 89;
				$size = 32;
				$bsize = 32;
				$taccept = 2;
			}
			else if ($i == 9)
			{
				$y = 199;
				$size = 16;
				$bsize = 16;
				$taccept = 256;
			}
		}
		else if ($i == 4 || $i == 6 || $i == 11)
		{
			$x = 181;
			if ($i == 4)
			{
				$y = 89;
				$size = 32;
				$bsize = 32;
				$taccept = 4;
			}
			else if ($i == 6)
			{
				$y = 199;
				$size = 1;
				$bsize = 1;
				$taccept = 48;
			}
			else if ($i == 11)
			{
				$y = 50;
				$size = 1;
				$bsize = 1;
				$taccept = 1024;
			}
		}
		else if ($i == 7 || $i == 5 || $i == 10)
		{
			if ($i == 7)
			{
				$x = 213;
				$y = 199;
				$size = 1;
				$bsize = 1;
				$taccept = 48;
			}
			else if ($i == 5)
			{
				$y = 89;
				$size = 32;
				$bsize = 32;
				$taccept = 8;
			}
			else if ($i == 10)
			{
				$y = 199;
				$size = 16;
				$bsize = 16;
				$taccept = 512;
			}
		}
		
		// CALCULATE SIZE BY ITEM
		switch ($type)
		{
			case 2:
				if ($size2 != 1 && $size2 < 32)
				{
					$size = $size2;
				}
			break;
			case 4:
				if ($bsize2 == 16 || $size2 == 16)
				{
					$size = 16;
				}
			break;
			case 8:
				if ($size2 == 8)
				{
					$size = 32;
				}
				else if ($bsize2 == 16)
				{
					$size = $bsize2;
				}
			break;
		}
		
		// CALCULATE OFFSET
		switch ($type)
		{
			case 2:
				if ($size == 2 && $bsize == 32)
				{
					$x += 16;
					$y += 16;
				}
				else if ($size == 8 && $bsize == 32)
				{
					$x += 16;
				}
			break;
			case 4:
				if ($size == 16)
				{
					$y += 16;
				}
			break;
		}
		//name,x,y,typ,size,bsize,taccept,iid,preis,preis2,premium,quest,enchtype,unique,level,quality,tooltip, diff
		$script .= "AddCharDiv(\"p". $i ."_1_1\", ". $x  .", ". $y .", ". $type .", ". $size .", ". $bsize .", ". $taccept .", 0, ". $price .", ". $rubies .", ". $premium .", 0, 0, ". $bound .", ". $level .", 0, \"". $item_description_html_layout ."\", [ ]);\n"; 
	}
	return $script;
}

function addItemsToPackages($playerID)
{
	// CONNECT TO MYSQL
	mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
	// SELECT DATABASE
	mysql_select_db(MYSQL_SERVER_DB);
	// MAKE A QUERY
	$result = mysql_query("SELECT * FROM packages WHERE pack_userID=". $playerID ." ORDER BY pack_id DESC ");
	
	$row = '';
	if (mysql_num_rows($result) > 0)
		$row = mysql_num_rows($result);
	
	$id = 1;
	$script = '';
	$y = 1;
	while ($y <= $row)
	{
			$type = 0; $size = 0; $bsize = 0; $iid = 0; $level = 0; $price = 0; $rubies = 0; $bound = 0; $premium = 0; $item_description_html_layout = '';
					$result2 = mysql_fetch_array($result);
					$piid = $result2['pack_itemID'];
					$pid = $result2['pack_id'];
					$item = getItemByID($piid);
					if ($item != null)
					{
						$item_description_html_layout = "<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'>";
						foreach ($item as $key => $value)
						{
							// ITEM DESCRIPTION (VISIBLE TO USER)
							$item_description_html_layout .= itemDescriptionIdentifier($key, $value);
							
							// BASE STATS (INVISIBLE FOR USER)
							if ($key == "type")
								$type = $value;
							else if ($key == "size")
								$size = $value;
							else if ($key == "bsize")
								$bsize = $value;	
							else if ($key == "level")
								$level = $value;
							else if ($key == "value")
								$price = number_format($value, 0, ",", ".");
							else if ($key == "rubies")
								$rubies = $value;
							else if ($key == "soul-bound" && $value == true)
								$bound = 1;
							
							// UNABLE TO BUY WITHOUT RUBIES
							if ($rubies > 0)
								$premium = 1;
							$iid = $id;
						}
						$item_description_html_layout .= "</table>";
			$script .= "AddCharDiv(\"paket_". $pid ."\", 0, 0, ". $type .", ". $size .", ". $bsize .", 0, ". $pid .", 0, 0, 0, 0, 0, 0, 0, 0, \"". $item_description_html_layout ."\", [ ]);\n";
		}
		$y++;
	}
	mysql_close();
	
	return $script;
}

// HTML CREATOR USED TO ADD ALL ITEM IMAGES TO INVENTORY
function addItemImagesToInventory($playerID)
{
	if (is_numeric($playerID) == false)
		return;

	// CONNECT TO MYSQL
	mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
	// SELECT DATABASE
	mysql_select_db(MYSQL_SERVER_DB);
	// MAKE A QUERY
	$result = mysql_query("SELECT * FROM inventory WHERE id=". $playerID ."");
	
	$row = '';
	if (mysql_num_rows($result) > 0)
		$row = mysql_fetch_array($result, MYSQL_NUM);
	
	$html = ''; $id = 1; $zIndex = 62;
	for ($y = 1; $y <= 8; $y++)
	{
		for ($x = 1; $x <= 5; $x++, $id++, $zIndex++)
		{
			$image = '';
			if ($row != null)
			{
				if ($row[$id] != null)
				{
					$item = getItemByID($row[$id]);
					if ($item != null)
						$image = "<img style=\"bottom:0px\" src=\"8501/img/item/". $item['image'] .".gif\">";
				}
			}
			$html .= "<div id=\"p512_". $y ."_". $x ."\" style=\"position: absolute; width: ". (($y == 1 && $x == 1)? 64 : 32) ."px; height: ". (($y == 1 && $x == 1)? 64 : 32) ."px; top: ". (($y - 1) * 32) ."px; left: ". (($y - 1) * 32) ."px; z-index: ". $zIndex ."; cursor: move; visibility: visible;\" onmouseover=\"return escape(dd.elements.p512_". $y ."_". $x .".tooltip)\">". $image ."</div>\n";
		}
	}
	mysql_close();
	
	return $html;
}

// HTML CREATOR USED TO ADD ALL ITEM IMAGES TO DOLL
function addItemImagesToDoll($playerID)
{
	if (is_numeric($playerID) == false)
		return;

	// CONNECT TO MYSQL
	mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
	// SELECT DATABASE
	mysql_select_db(MYSQL_SERVER_DB);
	// MAKE A QUERY
	$result = mysql_query("SELECT * FROM doll WHERE id=". $playerID ."");
	
	$row = '';
	if (mysql_num_rows($result) > 0)
		$row = mysql_fetch_array($result, MYSQL_NUM);
		
	$html = ''; $id = 1;
	for ($i = 2; $i <= 11; $i++, $id++)
	{
		if ($i == 8)
			continue;
	
		$image = ''; $offset = 0;
		if (!empty($row))
		{
			if ($row[$id] != null)
			{
				$item = getItemByID($row[$id]);
				$image = "<img style=\"bottom:0px\" src=\"8501/img/item/". $item['image'] .".gif\">";
			}
		}
		
		$width = 64; $height = 64;
		if ($i == 3 || $i == 4 || $i == 5)
		{
			$height = 96;
		}
		else if ($i == 6 || $i == 7 || $i == 11)
		{
			$width = 32;
			$height = 32;
		}
		
		$html .= "<div id=\"p". $i ."_1_1\" style=\"position: absolute; width: ". $width ."px; height: ". $height ."\" onmouseover=\"return escape(dd.elements.p". $i ."_1_1.tooltip)\">". $image ."</div>\n";  
	}
	
	return $html;
}

// MYSQL UPDATE FUNCTIONS USED IN AJAX.PHP SCRIPT
function updateUserItem($userID, $old, $new)
{
	// CONNECT TO MYSQL
	mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
	// SELECT DATABASE
	mysql_select_db(MYSQL_SERVER_DB);
	
	// MAKE A QUERY AND SELECT CURRENT PLAYERS INVENTORY
	$result = mysql_query("SELECT * FROM ". ((substr($old, 0, 4) == "p512")? "inventory" : "doll") ." WHERE id = '". $userID ."'") or die(mysql_error());
	$result2 = mysql_query("SELECT * FROM ". ((substr($new, 0, 4) == "p512")? "inventory" : "doll") ." WHERE id = '". $userID ."'") or die(mysql_error());
	if (mysql_num_rows($result) > 0)
	{
		$array = mysql_fetch_array($result); 
		$array2 = mysql_fetch_array($result2);
		if ($array[$old] != null && $array2[$new] == null)
		{
			// UPDATE DATABASE SET OLD ITEM PLACE TO NULL AND NEW TO ITEM ID
			if (substr($old, 0, 4) == "p512" && substr($new, 0, 4) == "p512")
			{
				mysql_query("UPDATE inventory SET ". $old ." = NULL, ". $new ." = '". $array[$old] ."' WHERE id = '". $userID ."'");
			}
			else if (substr($old, 0, 4) != "p512" && substr($new, 0, 4) == "p512")
			{
				mysql_query("UPDATE inventory SET ". $new ." = '". $array[$old] ."' WHERE id = '". $userID ."'");
				mysql_query("UPDATE doll SET ". $old ." = NULL WHERE id = '". $userID ."'");
			}
			else if (substr($old, 0, 4) == "p512" && substr($new, 0, 4) != "p512")
			{
				mysql_query("UPDATE doll SET ". $new ." = '". $array[$old] ."' WHERE id = '". $userID ."'");
				mysql_query("UPDATE inventory SET ". $old ." = NULL WHERE id = '". $userID ."'");
			}
			else
			{
				mysql_query("UPDATE doll SET ". $old ." = NULL, ". $new ." = '". $array[$old] ."' WHERE id = '". $userID ."'");
			}
			Actvreload();
		}
	}
}

function dropPackageToInvetory($userID, $pid, $new)
{
	// CONNECT TO MYSQL
	mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
	// SELECT DATABASE
	mysql_select_db(MYSQL_SERVER_DB);
	
	// MAKE A QUERY AND SELECT CURRENT PLAYERS INVENTORY
	$result = mysql_query("SELECT * FROM packages WHERE pack_id = '". $pid ."'") or die(mysql_error());
	$result2 = mysql_query("SELECT * FROM inventory WHERE id = '". $userID ."'") or die(mysql_error());
	if (mysql_num_rows($result) > 0)
	{
		$array = mysql_fetch_array($result); 
		$array2 = mysql_fetch_array($result2);
		if ($array2[$new] == null)
		{
			$piid = $array['pack_itemID'];
			mysql_query("UPDATE inventory SET ". $new ." = " . $piid . " WHERE id = '". $userID ."'");
			mysql_query("DELETE FROM packages WHERE pack_id = '".$pid."' ");
		}
		Actvreload();
	}
}
?>