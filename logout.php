<?php
include ('db/root.php');
$_SESSION = array();
session_destroy();
$ip = $_SERVER['REMOTE_ADDR'];
mysql_query("DELETE FROM session WHERE session_ip = '".$ip."' ");
header('Location: index.php');
?>