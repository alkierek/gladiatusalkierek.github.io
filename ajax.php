<?php
if ($uinv == 1) {
	include_once("engine/functions.php");
	include_once("engine/functions4.php");
} elseif ($uinv == 2) {
	include_once("engine/functions3.php");
	include_once("engine/functions5.php");
}
include_once("engine/functions2.php");
include_once("db/root.php");
include_once("db/user.php");

// PLAYER ID
$id = $userID;

// RESPONSIBLE FOR RECEIVING AND SENDING INFO ABOUT ANY CHANGE IN GAME
// EXAMPLE: ITEM IN INVENTORY WAS MOVED UPDATE DATABASE WITH NEW ITEM LOCATION
if (isset($_GET['old']) && isset($_GET['new']) && empty($_GET['shopPage'])) {
	updateUserItem($id, $_GET['old'], $_GET['new']);
} elseif (isset($_GET['pid']) && isset($_GET['new'])) {
	dropPackageToInvetory($id, $_GET['pid'], $_GET['new']);
} elseif (isset($_GET['shopPage'])) {
	updateUserItemSS1($id, $_GET['old'], $_GET['new']);
}
?>