<?php
function addItemsToSShop1($playerID)
{
	// CONNECT TO MYSQL
	mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
	// SELECT DATABASE
	mysql_select_db(MYSQL_SERVER_DB);
	// MAKE A QUERY
	$result = mysql_query("SELECT * FROM sshop1 WHERE id=". $playerID ."");
	
	$row = '';
	if (mysql_num_rows($result) > 0)
		$row = mysql_fetch_array($result, MYSQL_NUM);
	
	$id = 1;
	$script = '';
	for ($y = 1; $y <= 6; $y++)
	{
		for ($x = 1; $x <= 8; $x++, $id++)
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
			$script .= "AddCharDiv(\"p274_". $y ."_". $x ."\", ". (($y - 1) * 32) .", ". (($x - 1) * 32) .", ". $type .", ". $size .", ". $bsize .", 16777215, ". $iid .", ". $price .", ". $rubies .", ". $premium .", 0, 0, ". $bound .", ". $level .", 0, \"". $item_description_html_layout ."\", [ ]);\n";
		}
	}
	mysql_close();
	
	return $script;
}


// HTML CREATOR USED TO ADD ALL ITEM IMAGES TO INVENTORY
function addItemImagesToSShop1($playerID)
{
	if (is_numeric($playerID) == false)
		return;

	// CONNECT TO MYSQL
	mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
	// SELECT DATABASE
	mysql_select_db(MYSQL_SERVER_DB);
	// MAKE A QUERY
	$result = mysql_query("SELECT * FROM sshop1 WHERE id=". $playerID ."");
	
	$row = '';
	if (mysql_num_rows($result) > 0)
		$row = mysql_fetch_array($result, MYSQL_NUM);
	
	$html = ''; $id = 1; $zIndex = 62;
	for ($y = 1; $y <= 6; $y++)
	{
		for ($x = 1; $x <= 8; $x++, $id++, $zIndex++)
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
			$html .= "<div id=\"p274_". $y ."_". $x ."\" style=\"position: absolute; width: ". (($y == 1 && $x == 1)? 64 : 32) ."px; height: ". (($y == 1 && $x == 1)? 64 : 32) ."px; top: ". (($y - 1) * 32) ."px; left: ". (($y - 1) * 32) ."px; z-index: ". $zIndex ."; cursor: move; visibility: visible;\" onmouseover=\"return escape(dd.elements.p274_". $y ."_". $x .".tooltip)\">". $image ."</div>\n";
		}
	}
	mysql_close();
	
	return $html;
}
// MYSQL UPDATE FUNCTIONS USED IN AJAX.PHP SCRIPT
function updateUserItemSS1($userID, $old, $new)
{
	// CONNECT TO MYSQL
	mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
	// SELECT DATABASE
	mysql_select_db(MYSQL_SERVER_DB);
	
	// MAKE A QUERY AND SELECT CURRENT PLAYERS INVENTORY
	$result = mysql_query("SELECT * FROM ". ((substr($old, 0, 4) == "p512")? "inventory" : "sshop1") ." WHERE id = '". $userID ."'") or die(mysql_error());
	if (mysql_num_rows($result) > 0)
	{
		$array = mysql_fetch_array($result); 
		if ($array[$old] != null)
		{
			// UPDATE DATABASE SET OLD ITEM PLACE TO NULL AND NEW TO ITEM ID
			if (substr($old, 0, 4) == "p512" && substr($new, 0, 4) == "p512")
			{
				mysql_query("UPDATE inventory SET ". $old ." = NULL, ". $new ." = '". $array[$old] ."' WHERE id = '". $userID ."'");
			}
			else if (substr($old, 0, 4) != "p512" && substr($new, 0, 4) == "p512")
			{
				mysql_query("UPDATE inventory SET ". $new ." = '". $array[$old] ."' WHERE id = '". $userID ."'");
				mysql_query("UPDATE sshop1 SET ". $old ." = NULL WHERE id = '". $userID ."'");
				$item = getItemByID($array[$old]);
				if ($item != null)	$goldo = $item['value'];
				mysql_query("UPDATE users SET user_gold = user_gold - '".$goldo."' WHERE user_id = '".$userID."'");
			}
			else if (substr($old, 0, 4) == "p512" && substr($new, 0, 4) != "p512")
			{
				mysql_query("UPDATE sshop1 SET ". $new ." = '". $array[$old] ."' WHERE id = '". $userID ."'");
				mysql_query("UPDATE inventory SET ". $old ." = NULL WHERE id = '". $userID ."'");
				$item = getItemByID($array[$old]);
				if ($item != null)	$goldo = $item['value'];
				mysql_query("UPDATE users SET user_gold = user_gold + $goldo WHERE user_id = '".$userID."'");
			}
			else
			{
				mysql_query("UPDATE sshop1 SET ". $old ." = NULL, ". $new ." = '". $array[$old] ."' WHERE id = '". $userID ."'");
			}
		}
	}
}

?>