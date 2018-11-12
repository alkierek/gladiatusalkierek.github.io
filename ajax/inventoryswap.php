<?php
include_once("functions.php");
include_once("functions2.php");
include_once("db/root.php");
include_once("db/user.php");

// PLAYER ID
$id = $userID;

// RESPONSIBLE FOR RECEIVING AND SENDING INFO ABOUT ANY CHANGE IN GAME
// EXAMPLE: ITEM IN INVENTORY WAS MOVED UPDATE DATABASE WITH NEW ITEM LOCATION
if (isset($_GET['old']) && isset($_GET['new']))
{
	updateUserItem($id, $_GET['old'], $_GET['new']);
}
?>