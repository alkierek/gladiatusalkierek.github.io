<?php

$host = 'localhost';
$username = 'root';
$password = 'usbw';
$database = 'glad';

$conexion = mysql_connect($host, $username, $password) or die('No se pudo conectar: ' . mysql_error());
mysql_select_db($database, $conexion) or die('No se pudo conectar: ' . mysql_error());

error_reporting(E_ALL ^ E_NOTICE);  

session_start();

include ('db/config.php');


if ($serverLENGUAGE == 'ES') {
	include ('lng/es.php');
} elseif ($serverLENGUAGE == 'EN') {
	include ('lng/en.php');
}

$mysql1 = mysql_query("SELECT * FROM server WHERE server_id = ".$serverCHOOSE." ");
if(empty($mysql1)){
	echo "Error servidor no encontrado";
}else{
	$mysql2 = mysql_fetch_array($mysql1);
	$serverID = $mysql2['server_id'];
	$serverNAME = $mysql2['server_name'];
	$serverCOUNTRY = $mysql2['server_country'];
	$serverONLINE = $mysql2['server_maintenance'];
}

define("MYSQL_SERVER_HOST", $host);
define("MYSQL_SERVER_USER", $username);
define("MYSQL_SERVER_PASS", $password);
define("MYSQL_SERVER_DB", $database);
?>