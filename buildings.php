
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

<td><a href="guild.php" class="awesome-tabs">Alianza<div class="navBG"></div></a></td>
<td><a href="forumGladiatorius.php" class="awesome-tabs">Foro de Gladiadores<div class="navBG"></div></a></td>
<td><a href="admin.php" class="awesome-tabs">Administracion<div class="navBG"></div></a></td>
<td><a href="buildings.php" class="awesome-tabs current">Edificio</a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<?php
$gid = $guserID;
$gb = mysql_query("SELECT * FROM guilds WHERE g_id = '".$gid."' ");
$gbe = mysql_num_rows($gb);
if (empty($gbe)) {
	echo "<body><script type='text/javascript'>window.location='guild.php';</script></body>";
} else {
	$gbl = mysql_fetch_array($gb);
	$gforum = $gbl['g_forum'];
	$gbank = $gbl['g_bank'];
	$gbibly = $gbl['g_bibly'];
	$gbath = $gbl['g_bath'];
	$ghall = $gbl['g_hall'];
	$gmarket = $gbl['g_market'];
	$gdepos = $gbl['g_depos'];
	$gcamp = $gbl['g_camp'];
	$gmedici = $gbl['g_medici'];
	$gtemplum = $gbl['g_templum'];
	$gnx = $gbl['g_nx'];
}

include ('db/buildingsGuild.php');
include ('guild/buildings.php');
?>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>