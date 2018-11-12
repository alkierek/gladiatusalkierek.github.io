
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

<td><a href="news.php" class="awesome-tabs">Novedades<div class="navBG"></div></a></td>
<td><a href="serverEvents.php" class="awesome-tabs current">Eventos</a></td>
<td><a href="surveys.php" class="awesome-tabs">Encuentas<div class="navBG"></div></a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<script type="text/javascript" src="8501/js/mootools-forge.js"></script>
<div class="contentboard_start">
<?php
mysql_query("UPDATE users SET user_seN = 0 WHERE user_id = '".$userID."' ");
if ($seC > 0) {
	echo "<body><script type='text/javascript'>window.location='';</script></body>";
}

$se1 = mysql_query("SELECT * FROM serverEvents ORDER BY se_id DESC LIMIT 10 ");
$se2 = mysql_num_rows($se1);
if (!empty($se2)) {
	$se4 = 1;
	while ($se4 <= $se2) {
		$se4++;
		$se3 = mysql_fetch_array($se1);
		$seIMAGE = $se3['se_image'];
		$seTITLE = $se3['se_title'];
		$seDATE = $se3['se_date'];
		$seTEXT = $se3['se_text'];
?>
<?php
if ($se4 == 2) {
?>
<div class="contentboard_header_short"></div>
<?php
}
?>
<div class="contentboard_inner"></div>
<div class="contentboard_paper_top contentboard_paper_active_top"></div>
<div class="contentboard_paper_repeat contentboard_paper_active_repeat"><div>
<img src="8501/img/<?php echo $seIMAGE; ?>" class="serverevent_picture" />
<div class="serverevent_content">
<div class="serverevent_title"><?php echo $seTITLE; ?></div>
<div class="serverevent_date"><?php echo $seDATE; ?></div>
<div class="serverevent_description"><?php echo $seTEXT; ?></div>
</div>
<div class="clearfloat"></div>
</div>
</div><div class="contentboard_paper_bottom contentboard_paper_active_bottom"></div><div class="contentboard_spacer"></div>
<?php
	}
}
?>
</div>
<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>