<?php
include ('db/root.php');
include ('db/user.php');
if ($guserRANK == 99) {
	# code...
} else {
	mysql_query("DELETE FROM guilds_members WHERE gmb_userID = '".$userID."' ");
	echo "<body><script type='text/javascript'>window.location='guild.php';</script></body>";
}
?>