
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]><html class="ie7"> <![endif]-->
<!--[if IE 8 ]><html class="ie8"> <![endif]-->
<!--[if IE 9 ]><html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<?php
include ('db/root.php');
include ('inc/head.php');
include ('db/user.php');
?>
<body id="undergroundPage">
<?php
include ('inc/intervalPremium.php');
?>
<div>
<?php
include ('inc/netbar.php');
?>
<div id="wrapper_game">
<div id="container_game">
<?php
include ('inc/buffbar.php');
include ('inc/banner_top.php');
include ('inc/header_game.php');
include ('inc/header_values.php');
include ('inc/cooldown_bar.php');
?>
<ul id="mainnav"><li><table style="top: -23px; position: relative; height: 60px;"><tr style="vertical-align: bottom;">

<td><a href="quests.php" class="awesome-tabs">Misiones<div class="navBG"></div></a></td>
<td><a href="missions.php" class="awesome-tabs current">Objetivos</a></td>
<td><a href="gods.php" class="awesome-tabs">Dioses<div class="navBG"></div></a></td>
<td><a href="mysterybox.php" class="awesome-tabs">Cámara misteriosa<div class="navBG"></div></a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">
<?php

if (isset($_GET['finishTask']) && isset($_GET['missionId'])) {
	if ($_GET['missionId'] == 'reach_level') {
		if ($mision1c == 1) {
			mysql_query("UPDATE gods SET gods_1c = gods_1c + 10, gods_2c = gods_2c + 10, gods_3c = gods_3c + 10, gods_4c = gods_4c + 10, gods_5c = gods_5c + 10, gods_6c = gods_6c + 10 WHERE gods_userID = '".$userID."'  ");
			mysql_query("UPDATE missions SET ms_1 = ms_1 + 1 WHERE ms_userID = '".$userID."' ");
		}
	} elseif ($_GET['missionId'] == 'skills_train_all') {
		if ($mision2c == 1) {
			mysql_query("UPDATE gods SET gods_1c = gods_1c + 6, gods_2c = gods_2c + 6, gods_3c = gods_3c + 6, gods_4c = gods_4c + 6, gods_5c = gods_5c + 6, gods_6c = gods_6c + 6 WHERE gods_userID = '".$userID."'  ");
			mysql_query("UPDATE missions SET ms_2 = ms_2 + 1 WHERE ms_userID = '".$userID."' ");
		}
	} elseif ($_GET['missionId'] == 'expedition_mob_complete') {
		if ($mision3c == 1) {
			mysql_query("UPDATE gods SET gods_2c = gods_2c + 5, gods_4c = gods_4c + 2 WHERE gods_userID = '".$userID."'  ");
			mysql_query("UPDATE missions SET ms_3 = ms_3 + 1 WHERE ms_userID = '".$userID."' ");
		}
	} elseif ($_GET['missionId'] == 'expedition_boss') {
		if ($mision4c == 1) {
			mysql_query("UPDATE gods SET gods_2c = gods_2c + 3, gods_5c = gods_5c + 12 WHERE gods_userID = '".$userID."'  ");
			mysql_query("UPDATE missions SET ms_4 = ms_4 + 1 WHERE ms_userID = '".$userID."' ");
		}
	} elseif ($_GET['missionId'] == 'arena_wins') {
		if ($mision5c == 1) {
			mysql_query("UPDATE gods SET gods_1c = gods_1c + 3, gods_6c = gods_6c + 4 WHERE gods_userID = '".$userID."'  ");
			mysql_query("UPDATE missions SET ms_5 = ms_5 + 1 WHERE ms_userID = '".$userID."' ");
		}
	} elseif ($_GET['missionId'] == 'arena_ranking') {
		if ($mision6c == 1) {
			mysql_query("UPDATE gods SET gods_1c = gods_1c + 3, gods_6c = gods_6c + 4 WHERE gods_userID = '".$userID."'  ");
			mysql_query("UPDATE missions SET ms_6 = ms_6 + 1 WHERE ms_userID = '".$userID."' ");
		}
	} elseif ($_GET['missionId'] == 'skills_damage') {
		if ($mision7c == 1) {
			mysql_query("UPDATE gods SET gods_1c = gods_1c + 3, gods_6c = gods_6c + 4 WHERE gods_userID = '".$userID."'  ");
			mysql_query("UPDATE missions SET ms_7 = ms_7 + 1 WHERE ms_userID = '".$userID."' ");
		}
	} elseif ($_GET['missionId'] == 'skills_armor') {
		if ($mision8c == 1) {
			mysql_query("UPDATE gods SET gods_4c = gods_4c + 3, gods_6c = gods_6c + 4 WHERE gods_userID = '".$userID."'  ");
			mysql_query("UPDATE missions SET ms_8 = ms_8 + 1 WHERE ms_userID = '".$userID."' ");
		}
	} elseif ($_GET['missionId'] == 'items_upgrade_permanent') {
		if ($mision9c == 1) {
			mysql_query("UPDATE gods SET gods_1c = gods_1c + 5, gods_6c = gods_6c + 8 WHERE gods_userID = '".$userID."'  ");
			mysql_query("UPDATE missions SET ms_9 = ms_9 + 1 WHERE ms_userID = '".$userID."' ");
		}
	} elseif ($_GET['missionId'] == 'quests') {
		if ($mision10c == 1) {
			mysql_query("UPDATE gods SET gods_1c = gods_1c + 6, gods_2c = gods_2c + 2 WHERE gods_userID = '".$userID."'  ");
			mysql_query("UPDATE missions SET ms_10 = ms_10 + 1 WHERE ms_userID = '".$userID."' ");
		}
	}
}

?>
<?php
include ('engine/objetivos.php');
?>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>