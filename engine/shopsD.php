<?php

else if (substr($old, 0, 4) == "p512" && substr($new, 2) == "_1_1")
{
	mysql_query("UPDATE doll SET ". $new ." = '". $array[$old] ."' WHERE id = '". $userID ."'");
	mysql_query("UPDATE inventory SET ". $old ." = NULL WHERE id = '". $userID ."'");
}

?>