
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
<td>
<a href="overview.php" class="awesome-tabs current">Vision general</a>
</td>
<td>
<a href="stats.php" class="awesome-tabs">Estadisticas<div class="navBG"></div></a>
</td>
<td>
<a href="achievements.php" class="awesome-tabs">Victorias<div class="navBG"></div></a>
</td>
<td>
<a href="buddylist.php" class="awesome-tabs">Familia<div class="navBG"></div></a>
</td>
</tr></table></li></ul></div>

<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<?php

if(isset($_GET['dollH'])){
$_GET['dollH'] = (int)($_GET['dollH']);
$dollH = $_GET['dollH'];
$dh1 = mysql_query("SELECT * FROM mercy_user WHERE mu_userID = '".$userID."' AND mu_pos = '".$dollH."' ");
}else{
$dollH = 0;
}

?>

<link rel="stylesheet" type="text/css" media="screen" href="8501/css/menuLateral.css" />
<link rel="stylesheet" type="text/css" media="screen" href="8501/css/menuStyle.css" />
<link rel="stylesheet" type="text/css" media="screen" href="8501/css/menu2.css" />


<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>
<script type="text/javascript" src="8501/js/overview2.js"></script>
<script type="text/javascript" src="8501/js/mootools-forge.js"></script>


<?php
include ('inc/userBless.php');
?>



<!--<div style="position: relative; height: 37px;">-->
<?php
include ('blackoutdialog/soulItem.php');
include ('blackoutdialog/changeMercName.php');
?>
<input type="hidden" id="doll" value="1" />
<table width="100%">
<tr>

<?php
include ('overview/doll.php');
?>

<td valign="top">

<?php
include ('inc/invN.php');
include ('inc/equip.php');
?>


<input id="plDoll" type="hidden" name="doll" value="1" />
<div id="char" style="background-image:url(8501/img/inv/doll.jpg)">
   
<!-- Ausrüstung -->

<?php
include ('inc/data-menuE.php');
include ('inc/menuE.php');
?>



<div class="charmercsel charmercsel_aktive" style="top:5px" onClick="selectDoll('overview.php?doll=1')">
<div class="charmercpic" style="background-image:url(8501/img/interface/doll1_active.gif)" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Batalla Estandard</td></tr></table>')"></div>
</div>
<div class="charmercsel charmercsel_inaktive" style="top:50px" onClick="selectDoll('overview.php?doll=2')">
<div class="charmercpic" style="background-image:url(8501/img/interface/doll2_inactive.gif)" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Batalla en los Calabozos<br /><font style=font-size:smaller;color:#DDDDDD>Misión: Curá a los miembros de tu grupo</font></td></tr></table>')"></div>
</div>
<div class="charmercsel charmercsel_inaktive" style="top:95px" onClick="selectDoll('overview.php?doll=3')">
<div class="charmercpic" style="background-image:url(8501/img/interface/doll3_inactive.gif)" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Samnit<br /><font style=font-size:smaller;color:#DDDDDD>Misión: Distribuí el daño</font></td></tr></table>')"></div>
</div>
<div class="charmercsel charmercsel_inaktive" style="top:140px" onClick="selectDoll('overview.php?doll=4')">
<div class="charmercpic" style="background-image:url(8501/img/interface/doll4_inactive.gif)" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Samnit<br /><font style=font-size:smaller;color:#DDDDDD>Misión: Ocupate de vos mismo</font></td></tr></table>')"></div>
</div>
<div class="charmercsel charmercsel_inaktive" style="top:185px" onClick="selectDoll('overview.php?doll=5')">
<div class="charmercpic" style="background-image:url(8501/img/interface/doll5_inactive.gif)" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Samnit<br /><font style=font-size:smaller;color:#DDDDDD>Misión: Distribuí el daño</font></td></tr></table>')"></div>
</div>
<div class="charmercsel charmercsel_inaktive" style="top:230px" onClick="selectDoll('overview.php?doll=6')">
<div class="charmercpic" style="background-image:url(8501/img/interface/doll6_inactive.gif)" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Portador de Lanza Elite<br /><font style=font-size:smaller;color:#DDDDDD>Misión: Ocupate de vos mismo</font></td></tr></table>')"></div>
</div>



</div>
<!-- Inventar -->
<?php
include ('blackoutdialog/buyInvBag.php');
?>


<div class="contentItem" style="margin-bottom: 0px; margin-top: 5px; width: 100%;">
<div class="inventoryBox" style="position: relative;">
<div id="inventory_nav">
<a class="awesome-tabs<?php echo $current1; ?>" href="overview.php?inv=1">&#x2160;</a>
<a class="awesome-tabs<?php echo $current2; ?>" href="overview.php?inv=2">&#x2161;</a>
<a class="awesome-tabs<?php echo $current3; ?>" href="overview.php?inv=3">&#x2162;</a>
<a class="awesome-tabs<?php echo $current4; ?>" href="overview.php?inv=4">&#x2163;</a>
<a class="awesome-tabs<?php echo $current5; ?>" href="overview.php?inv=5">&#x2164;</a>
<a class="awesome-tabs<?php echo $current6; ?>" href="overview.php?inv=6">&#x2165;</a>
<a class="awesome-tabs<?php echo $current7; ?>" href="overview.php?inv=7">&#x2166;</a>
<a class="awesome-tabs<?php echo $current8; ?>" href="overview.php?inv=8">&#x2167;</a>
<a class="awesome-tabs<?php echo $current9; ?>" href="overview.php?inv=9<?php if($dollH != 0){ ?>&dollH=<?php echo $dollH; ?><?php } ?>">E</a>
</div>
<div id="inv" class="inventory_box " style="background-none: #4F371E; width: 256px; height: 160px;">


<!-- Menue -->


<?php
if($invN <= 8){
include ('inc/itemH.php');
}elseif($invN == 9){
include ('inc/itemE.php');
}else{

}
?>



</div>
</div>
</div>
<div style="clear: both;"></div></td>
</tr>
</table>

<div class="contentItem" style="margin-top: 20px;">
<h3>Vínculo a tu perfil</h3>
<div class="contentItem_content">
<p>Envía este enlace a tus amigos para mostrarles tu perfil de gladiador:</p>
<p></p><b>player.php?p=</b></p>
</div>
</div>


<?php
include ('inc/dragdrop2.php');
?>
<?php
include ('inc/tutorialForge.php');
?>
<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>