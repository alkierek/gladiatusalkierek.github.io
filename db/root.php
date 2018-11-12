<?php

$host = 'localhost';
$username = 'root';
$password = 'pass';
$database = 'gladb';

$conexion = mysql_connect($host, $username, $password) or die('No se pudo conectar: ' . mysql_error());
mysql_select_db($database, $conexion) or die('No se pudo conectar: ' . mysql_error());

session_start();

include ('db/config.php');


if ($serverLENGUAGE == 'EN') {
	include ('lng/EN.php');
} elseif ($serverLENGUAGE == 'EN') {
	include ('lng/en.php');
}

$mysql1 = mysql_query("SELECT * FROM server WHERE server_id = ".$serverCHOOSE." ");
if(empty($mysql1)){
	echo "Error";
}else{
	$mysql2 = mysql_fetch_array($mysql1);
	$serverID = $mysql2['server_id'];
	$serverNAME = $mysql2['BestGladiatus'];
	$serverCOUNTRY = $mysql2['server_country'];
	$serverONLINE = $mysql2['server_maintenance'];
}

define("localhost", $host);
define("id7818753_alkierek", $username);
define("id7818753_database", $password);
define("28iRJM00", $database);
?>