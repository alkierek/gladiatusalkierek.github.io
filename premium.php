
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
$modp = 1;
if (isset($_GET['mod'])) {
	$modp = (int)($_GET['mod']);
	if ($modp < 1 || $modp > 4) {
		$modp = 1;
	}
}
?>
<?php if ($modp == 1) {
	?>
	<td><a href="premium.php" class="awesome-tabs current">Joyero</a></td>
	<td><a href="premium.php?mod=2" class="awesome-tabs">Inventario<div class="navBG"></div></a></td>
	<td><a href="premium.php?mod=3" class="awesome-tabs">Centurión<div class="navBG"></div></a></td>
	<td><a href="premium.php?mod=4" class="awesome-tabs">Pactos<div class="navBG"></div></a></td>
	<?php
} elseif ($modp == 2) {
	?>
	<td><a href="premium.php" class="awesome-tabs">Joyero<div class="navBG"></div></a></td>
	<td><a href="premium.php?mod=2" class="awesome-tabs current">Inventario</a></td>
	<td><a href="premium.php?mod=3" class="awesome-tabs">Centurión<div class="navBG"></div></a></td>
	<td><a href="premium.php?mod=4" class="awesome-tabs">Pactos<div class="navBG"></div></a></td>
	<?php
} elseif ($modp == 3) {
	?>
	<td><a href="premium.php" class="awesome-tabs">Joyero<div class="navBG"></div></a></td>
	<td><a href="premium.php?mod=2" class="awesome-tabs">Inventario<div class="navBG"></div></a></td>
	<td><a href="premium.php?mod=3" class="awesome-tabs current">Centurión</a></td>
	<td><a href="premium.php?mod=4" class="awesome-tabs">Pactos<div class="navBG"></div></a></td>
	<?php
} elseif ($modp == 4) {
	?>
	<td><a href="premium.php" class="awesome-tabs">Joyero<div class="navBG"></div></a></td>
	<td><a href="premium.php?mod=2" class="awesome-tabs">Inventario<div class="navBG"></div></a></td>
	<td><a href="premium.php?mod=3" class="awesome-tabs">Centurión<div class="navBG"></div></a></td>
	<td><a href="premium.php?mod=4" class="awesome-tabs current">Pactos</a></td>
	<?php
} ?>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<?php
if ($modp == 1) {
	include ('premium/1.php');
} elseif ($modp == 2) {
	include ('premium/2.php');
} elseif ($modp == 3) {
	include ('premium/3.php');
} elseif ($modp == 4) {
	include ('premium/4.php');
}
?>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>