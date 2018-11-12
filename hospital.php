
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

<td><a href="hospital.php" class="awesome-tabs current">Hospital</a></td>
<td><a href="bank.php" class="awesome-tabs">Banco<div class="navBG"></div></a></td>
<td><a href="work.php" class="awesome-tabs">Trabajo<div class="navBG"></div></a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<?php
if (isset($_POST['healing'])) {
	mysql_query("UPDATE users SET user_life = '".$userLIFEmax."' WHERE user_id = '".$userID."' ");
	echo "<body><script type='text/javascript'>window.location='hospital.php';</script></body>";
}
?>

<p class="buildingDesc">
<img src="8501/img/npc/0/0_5.jpg" />
Ven a sanarte siempre que lo necesites.
<form method="POST" accept-charset="utf-8" action="hospital.php">
<input id="doWork" type="submit" value="Sanar!" class="button3" name="healing" />
</form>
</p>


<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>