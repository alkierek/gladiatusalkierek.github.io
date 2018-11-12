
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

<td><a href="guild.php<?php if (isset($_GET['g'])) { ?>?g=<?php echo $_GET['g']; } else { ?> <?php } ?>" class="awesome-tabs">Alianza<div class="navBG"></div></a></td>
<?php
if ($guser == 0) {
    
} elseif ($guser == 1) {
    ?>
    <?php if (isset($_GET['g'])) { ?>
<td><a href="forumGladiatorius.php?g=<?php echo $_GET['g']; ?>" class="awesome-tabs current">Foro de Gladiadores</a></td>    	
    <?php } else { ?>
<td><a href="forumGladiatorius.php" class="awesome-tabs current">Foro de Gladiadores</a></td>
<td><a href="admin.php" class="awesome-tabs">Administracion<div class="navBG"></div></a></td>
<td><a href="buildings.php" class="awesome-tabs">Edificio<div class="navBG"></div></a></td>
    <?php
	}
}
?>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<?php
if ($guser == 0) {
	$gid = 1;
} else if ($guser == 1) {
	$gid = $guserID;
}
if (isset($_GET['g'])) {
	$gid = $_GET['g'];
}

$datos1 = mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$gid."' ");
$datos3 = mysql_num_rows($datos1);
if (empty($datos3)) {
	echo "<body><script type='text/javascript'>window.location='forumGladiatorius.php';</script></body>";
} else {
	$datos2 = mysql_fetch_array($datos1);
	$gname = $datos2['gd_name'];
	$gtag = $datos2['gd_tag'];
}
?>

<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>
<div id="blackoutDialogLeave" class="cancel_confirm">
<div class="blackoutDialog_header pngfix">
<div id="header_Leave" style="font-size:large;text-align:center">Abandonar la alianza</div>
</div>
<div class="blackoutDialog_body pngfix">
<div class="blackoutDialog_icon">
<img src="8501/img/ui/blackoutDialog/icon_question.jpg"/>
</div>
<div id="dialogTxtLeave" class="blackoutDialog_text"><p>¿Realmente quieres abandonar la Alianza?</p></div>
<br class="clearfloat" />
<table class="blackoutDialog_buttons" cellspacing="0" cellpadding="0">
<tr>
<td id="buttonleftLeave" style="width:50%">
<div class="al" style="padding:5px">
<input type="submit" class="awesome-button big" value="Abandonar la alianza" onclick="window.location.href = 'leaveGuild.php'" id="linkLeave" />
</div>
</td>
<td id="buttonrightLeave" style="width:50%">
<div class="ar" style="padding:5px">
<input type="submit" class="awesome-button big" value="Cancelar" onclick="blackoutDialog(false)" id="linkcancelLeave" />
</div>
</td>
</tr>
</table>
</div>
<div class="blackoutDialog_footer pngfix">
</div>
</div>


<div id="mainbox">
<table width="100%">
<tr>
<?php

$gfac1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$gid."' "));
$gf1 = $gfac1['gd_flag'];
$gc1 = $gfac1['gd_color'];

?>
<?php if (isset($_GET['g'])) { ?>
<td rowspan="10" valign="top"><img src="8501/img/logo/0/tmp/<?php echo $gc1; ?>-<?php echo $gf1; ?>.png" border="0" /></td>
<?php } else if ($gid == $guserID && $guserRANK != 98 && $guserRANK != 99) { ?>
<td rowspan="10" valign="top"><img src="8501/img/logo/0/tmp/<?php echo $gc1; ?>-<?php echo $gf1; ?>.png" border="0" /></td>
<?php } else if ($gid == $guserID && ($guserRANK == 98 || $guserRANK == 99) ) { ?>
<td rowspan="10" valign="top"><a href="admin.php?mod=adminLogo"><img src="8501/img/logo/0/tmp/<?php echo $gc1; ?>-<?php echo $gf1; ?>.png" border="0" /></a></td>
<?php } else { ?>
<td rowspan="10" valign="top"><img src="8501/img/logo/0/tmp/<?php echo $gc1; ?>-<?php echo $gf1; ?>.png" border="0" /></td>
<?php } ?>
</tr>
<tr>
<td>Nombre</td>
<?php
$gname1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$gid."' "));
$gname2 = $gname1['gd_name'];
?>
<th><div style="width:200px;overflow:hidden;max-width:200px;word-wrap:break-word"><?php echo $gname2; ?></div></th>
</tr>
<tr>
<td>Página de inicio</td>
<?php
$glink1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$gid."' "));
$glink2 = $gname1['gd_link'];
if (empty($glink2)) {
	$glink2 = 'No hay pagina de alianza disponible';
	$gplinki = '';
	$gplinkd = '';
} else {
	$gplinki = '<a href="'.$glink2.'">';
	$gplinkd = '</a>';
}
?>
<th><div style="width:200px;overflow:hidden;max-width:200px;word-wrap:break-word"><?php echo "$gplinki $glink2 $gplinkd"; ?></div></th>
</tr>
<tr>
<td>Honor total</td>
<?php
$gHONOR = 0;
$gLEVEL = 0;
$ghonor1 = mysql_query("SELECT * FROM guilds_members WHERE gmb_guildID = '".$gid."' ");
$ghonor2 = mysql_num_rows($ghonor1);
$ghc = 1;
while ($ghc <= $ghonor2) {
	$ghc++;
	$ghonor3 = mysql_fetch_array($ghonor1);
	$mmbid1 = $ghonor3['gmb_userID'];
	$mmbid2 = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE user_id = '".$mmbid1."' "));
	$mmbid3 = $mmbid2['user_honor'];
	$gHONOR += $mmbid3;
}
$pHONOR1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$gid."' "));
$pHONOR2 = $pHONOR1['gd_honor'];
if ($pHONOR2 != $gHONOR) {
	mysql_query("UPDATE guilds_data SET gd_honor = '".$gHONOR."' ");
	echo "<body><script type='text/javascript'>window.location='';</script></body>";
}
$gHONOR1 = number_format($gHONOR, 0, ",", ".");
?>
<th><?php echo $gHONOR1; ?></th>
</tr>
<tr>
<td>Posición</td>
<?php
$gpos1 = mysql_query("SELECT * FROM guilds_data ORDER BY gd_honor DESC ");
$gpos2 = 1;
$gpos3 = 0;
while ($gpos3 != 1) {
	$gpos4 = mysql_fetch_array($gpos1);
	$gpos5 = $gpos4['gd_id'];
	if ($gpos5 == $gid) {
		$gpos3 = 1;
	} else {
		$gpos2++;
	}	
}
?>
<th><?php echo $gpos2; ?></th>
</tr>
<tr>
<td>Miembros</td>
<?php

$gms1 = mysql_query("SELECT * FROM guilds_members WHERE gmb_guildID = '".$gid."' ");
$gms2 = mysql_num_rows($gms1);

$gfl1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds WHERE g_id = '".$gid."' "));
$gfl2 = $gfl1['g_forum'];
$maxMg = $gfl2*3;

?>
<th><a href="memberList.php<?php if (isset($_GET['g'])){ ?>?g=<?php echo $gid; } ?>"><?php echo $gms2; ?> / <?php echo $maxMg; ?> Miembro</a></th>
</tr>
<tr>
<td>Nivel &#0216;</td>
<?php
$gLEVEL = 0;
$glevel1 = mysql_query("SELECT * FROM guilds_members WHERE gmb_guildID = '".$gid."' ");
$glevel2 = mysql_num_rows($glevel1);
$glc = 1;
while ($glc <= $glevel2) {
	$glc++;
	$glevel3 = mysql_fetch_array($glevel1);
	$mmbid1 = $glevel3['gmb_userID'];
	$mmbid2 = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE user_id = '".$mmbid1."' "));
	$mmbid3 = $mmbid2['user_level'];
	$gLEVEL += $mmbid3;
}
$gLEVEL = (int)($gLEVEL/$glevel2);
?>
<th><?php echo $gLEVEL; ?></th>
</tr>
<tr>
<td>Fortuna</td>
<?php

$gGOLD = 0;
$ggold1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$gid."' "));
$ggold2 = $ggold1['gd_gold'];
$ggold3 = number_format($ggold2, 0, ",", ".");

?>
<th><?php echo $ggold3; ?><img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></th>
</tr>
<?php if(isset($_GET['g'])) { } else { if ($gid == $guserID) {?>
<tr>
<td>Tu estado</td>
<th><?php echo $guserRANKn; ?></th>
</tr>
<tr><th colspan="2"><a href="javascript:blackoutDialog(true, 'blackoutDialogLeave', 350)">Abandonar la alianza</a></th></tr>
<?php } } ?>
</table>
<div class="title_box">
<div class="title_inner">Descripción de la Alianza</div>
</div>
<div class="title2_box">
<div class="title2_inner">
<?php
$gdesc1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$gid."' "));
$gdesc2 = $gname1['gd_desc'];
if (empty($gdesc2)) {
	$gdesc2 = 'ninguna descripción';
}
?>
<p class="bbcode_area" style="text-align:center"><?php echo $gdesc2; ?></p>
</div>
</div>
</div>



<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>