
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
<?php
if (isset($_GET['mod'])) {
	$mod = $_GET['mod'];
} else {
	$mod = 'bath';
}
?>
<?php if ($mod == 'bath'): ?>
<td><a href="guild_bath.php" class="awesome-tabs current">Baños Publicos</a></td>
<td><a href="guild_bath.php?mod=shoutbox" class="awesome-tabs">Vox Logus<div class="navBG"></div></a></td>
<td><a href="guild_bath.php?mod=rights" class="awesome-tabs">Administracion<div class="navBG"></div></a></td>	
<?php endif ?>
<?php if ($mod == 'shoutbox'): ?>
<td><a href="guild_bath.php" class="awesome-tabs">Baños Publicos<div class="navBG"></div></a></td>
<td><a href="guild_bath.php?mod=shoutbox" class="awesome-tabs current">Vox Logus</a></td>
<td><a href="guild_bath.php?mod=rights" class="awesome-tabs">Administracion<div class="navBG"></div></a></td>
<?php endif ?>
<?php if ($mod == 'rights'): ?>
<td><a href="guild_bath.php" class="awesome-tabs">Baños Publicos<div class="navBG"></div></a></td>
<td><a href="guild_bath.php?mod=shoutbox" class="awesome-tabs">Vox Logus<div class="navBG"></div></a></td>
<td><a href="guild_bath.php?mod=rights" class="awesome-tabs current">Administracion</a></td>
<?php endif ?>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<?php

if (isset($_POST['sendMessage'])) {
	$text = $_POST['message'];
	if ($guserCV2 == 1) {
		mysql_query("INSERT INTO guilds_baths SET gbr_guildID = '".$guserID."', gbr_userID = '".$userID."', gbr_text = '".$text."' ");
		echo "<body><script type='text/javascript'>window.location='guild_bath.php?mod=shoutbox&submod=suses';</script></body>";
	}
}

if (isset($_GET['saveRights'])) {
	$rankEDIT1 = $_GET['saveRights'];
	$rankEDIT2 = explode("-", $rankEDIT1);
	$rankID = $rankEDIT2[0];
	$rankP = $rankEDIT2[1];
	$rankA = $rankEDIT2[2];
	if ($guserRANK == 98 || $guserRANK == 99) {
		if ($rankP == 1) {
			mysql_query("UPDATE guilds_ranks SET gr_pVox1 = '".$rankA."' WHERE gr_id = '".$rankID."' ");
		} elseif ($rankP == 2) {
			mysql_query("UPDATE guilds_ranks SET gr_pVox2 = '".$rankA."' WHERE gr_id = '".$rankID."' ");
		} elseif ($rankP == 3) {
			mysql_query("UPDATE guilds_ranks SET gr_pVox3 = '".$rankA."' WHERE gr_id = '".$rankID."' ");
		}
		echo "<body><script type='text/javascript'>window.location='guild_bath.php?mod=rights&submod=suses';</script></body>";
	} else {
		echo "<body><script type='text/javascript'>window.location='guild_bath.php?mod=rights&submod=lowl';</script></body>";
	}
}

include ('guild/'.$mod.'.php');

?>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>