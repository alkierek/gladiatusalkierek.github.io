
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

<td><a href="guildBankingHouse.php" class="awesome-tabs current">Banco</a></td>
<td><a href="showDonationLog.php" class="awesome-tabs">Libro de Donaciones<div class="navBG"></div></a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">
<?php
if (isset($_POST['doDonation'])) {
	$amount = (int)($_POST['donation']);
	if ($userGOLD >= $amount) {
		mysql_query("INSERT INTO guilds_banks SET gbk_guildID = '".$guserID."', gbk_userID = '".$userID."', gbk_amount = '".$amount."' ");
		mysql_query("UPDATE users SET user_gold = user_gold - '".$amount."' WHERE user_id = '".$userID."' ");
		mysql_query("UPDATE guilds_data SET gd_gold = gd_gold + '".$amount."' WHERE gd_id = '".$guserID."' ");
		mysql_query("UPDATE guilds_members SET gmb_donate = '".$amount."' WHERE gmb_userID = '".$userID."' ");
		echo "<body><script type='text/javascript'>window.location='guildBankingHouse.php?submod=suses';</script></body>";
	}
}
?>
<?php include ('guild/bank1.php'); ?>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>