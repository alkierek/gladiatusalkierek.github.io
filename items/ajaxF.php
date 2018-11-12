<?php
function updateUserItem($userID, $old, $new)
{
	
	// MAKE A QUERY AND SELECT CURRENT PLAYERS INVENTORY
	$result = mysql_query("SELECT * FROM items_user WHERE iu_userID = '". $userID ."' AND iu_pos = '".$old."' ") or die(mysql_error());
	$result2 = mysql_query("SELECT * FROM items_user WHERE iu_userID = '". $userID ."' AND iu_pos = '".$old."' ") or die(mysql_error());
	if (mysql_num_rows($result) > 0)
	{
		$array = mysql_fetch_array($result); 
		$array2 = mysql_fetch_array($result2);
		if ($array[$old] != null && $array2[$new] == null)
		{
			// UPDATE DATABASE SET OLD ITEM PLACE TO NULL AND NEW TO ITEM ID
			if (substr($old, 0, 4) == "p512" && substr($new, 0, 4) == "p512")
			{
				mysql_query("UPDATE item_user SET ". $old ." = NULL, ". $new ." = '". $array[$old] ."' WHERE id = '". $userID ."'");
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
		}
	}
}
?>