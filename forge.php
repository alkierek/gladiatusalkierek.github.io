
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
<a href="alchemist.php" class="awesome-tabs">Alquimista<div class="navBG"></div></a>
</td>
<td>
<a href="forge.php" class="awesome-tabs current">Herreria</a>
</td>
<td>
<a href="mercys.php" class="awesome-tabs">Domador<div class="navBG"></div></a>
</td>
<td>
<a href="pets.php" class="awesome-tabs">Mascotas<div class="navBG"></div></a>
</td>
</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">
<?php
include ('db/forge.php');
?>
<p class="buildingDesc">
<img src="8501/img/shop/forging.png" />
Forja increibles armas! Demuestra que tu habilidad de ser herrero es grandiosa!<br><br>
Forjar objetos no es nada facil. A medidas que vayas forjando tu habilidad de herrero mejorara.<br><br>
</p>
<p style="margin-left:20px">
<?php


$forgeEXPper = (int)(($forgeEXP*100)/$forgeEXPmax);
$forgeNextLVL = $forgeLEVEL+1;
$forgeEXPneed = $forgeEXPmax - $forgeEXP;

?>
<br>
<br>

<div class="title2_box" style="margin:10px">
<div class="title2_inner">
<p>
<span class="description_span_left">
<!-- -->
<center>
<div style="width:200px;text-align:center">
<div id="charstats" style="width:173px">
<!-- -->
<div style="background-image:url(8501/img/char_status_kopf.jpg);width:173px;height:5px;overflow:hidden"></div>
<!-- -->
<div class="charstats_bg" id="forge_panzer_tt">
<span class="charstats_value21">Nivel de Herrero</span>
<span id="char_level" class="charstats_value22"><?php echo $forgeLEVEL; ?></span>
</div>
<!-- -->
<div class="charstats_bg" id="forge_exp_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Experiencia:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $forgeEXP; ?> / <?php echo $forgeEXPmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Necesaria para nivel <?php echo $forgeNextLVL; ?>:</td><td style=\'padding-left:20px;text-align:right;color:#DDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $forgeEXPneed; ?></td></tr></table>')">
<span class="charstats_text">Experiencia</span>
<div class="charstats_balken"><div class="charstats_balken_xp" style="width:<?php echo $forgeEXPper; ?>%"></div></div>
<span id="char_exp" class="charstats_value"><?php echo $forgeEXPper; ?> %</span>
</div>
<!-- -->
<div class="charstats_bg" id="forge_f1_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Chance de generar objetos normales:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $weaponChanceF1; ?>%</td></tr></table>')">
<span class="charstats_text">Normal Item Rate</span>
<div class="charstats_balken"><div class="charstats_balken_xp" style="width:<?php echo $weaponChanceF1; ?>%"></div></div>
<span id="char_exp" class="charstats_value"><?php echo $weaponChanceF1; ?> %</span>
</div>
<!-- -->
<div class="charstats_bg" id="forge_f2_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Chance de generar objetos normales:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $weaponChanceF2; ?>%</td></tr></table>')">
<span class="charstats_text">Rare Item Rate</span>
<div class="charstats_balken"><div class="charstats_balken_xp" style="width:<?php echo $weaponChanceF2; ?>%"></div></div>
<span id="char_exp" class="charstats_value"><?php echo $weaponChanceF2; ?> %</span>
</div>
<!-- -->
<div class="charstats_bg" id="forge_f3_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Chance de generar objetos normales:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $weaponChanceF3; ?>%</td></tr></table>')">
<span class="charstats_text">Legendary Item Rate</span>
<div class="charstats_balken"><div class="charstats_balken_xp" style="width:<?php echo $weaponChanceF3; ?>%"></div></div>
<span id="char_exp" class="charstats_value"><?php echo $weaponChanceF3; ?> %</span>
</div>
<!-- -->
<div class="charstats_bg" id="forge_points_tt">
<span class="charstats_value21">Puntos para Forgar</span>
<span id="char_level" class="charstats_value22"><?php echo $forgePOINTS; ?></span>
</div>
<!-- -->
<div style="background-image:url(8501/img/char_status_abschluss.jpg);width:173px;height:5px;overflow:hidden"></div>
<!-- -->
</div>
</div>
</center>
<!-- -->
</span>
</p>
<!-- -->
</div>
</div>
<a href="forge.php?forgeT=1"><button class="expedition_button awesome-button "  type="button" value="">Generar <b>ARMA</b></button></a>
<a href="forge.php?forgeT=2"><button class="expedition_button awesome-button "  type="button" value="">Generar <b>ESCUDO</b></button></a>
<a href="forge.php?forgeT=3"><button class="expedition_button awesome-button "  type="button" value="">Generar <b>ARMADURA</b></button></a>
<a href="forge.php?forgeT=4"><button class="expedition_button awesome-button "  type="button" value="">Generar <b>CASCO</b></button></a><br>
<a href="forge.php?forgeT=5"><button class="expedition_button awesome-button "  type="button" value="">Generar <b>GUANTES</b></button></a>
<a href="forge.php?forgeT=6"><button class="expedition_button awesome-button "  type="button" value="">Generar <b>ANILLO</b></button></a>
<a href="forge.php?forgeT=8"><button class="expedition_button awesome-button "  type="button" value="">Generar <b>BOTAS</b></button></a>
<a href="forge.php?forgeT=9"><button class="expedition_button awesome-button "  type="button" value="">Generar <b>COLLAR</b></button></a><br>

<?php
if (isset($_GET['forgeT'])) {
	$_GET['forgeT'] = (int)($_GET['forgeT']);
	$it = $_GET['forgeT'];
	if ($forgePOINTS > 0) {
		if ($it == 1) {
			## ARMAS
			if ($forgeLEVEL <= 2) {
				$ci = rand(1,7);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			} else if ($forgeLEVEL <= 5) {
				$ci = rand(1,14);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			} else if ($forgeLEVEL <= 8) {
				$ci = rand(1,20);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			}
		} elseif ($it == 2) {
			if ($forgeLEVEL <= 2) {
				$ci = rand(21,23);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			} else if ($forgeLEVEL <= 5) {
				$ci = rand(21,27);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			} else if ($forgeLEVEL <= 8) {
				$ci = rand(21,32);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			}
		} elseif ($it == 3) {
			if ($forgeLEVEL <= 2) {
				$ci = rand(33,36);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			} else if ($forgeLEVEL <= 5) {
				$ci = rand(33,40);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			} else if ($forgeLEVEL <= 8) {
				$ci = rand(33,44);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			}
		} elseif ($it == 4) {
			if ($forgeLEVEL <= 2) {
				$ci = rand(45,49);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			} else if ($forgeLEVEL <= 5) {
				$ci = rand(45,52);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			} else if ($forgeLEVEL <= 8) {
				$ci = rand(45,57);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			}
		} elseif ($it == 5) {
			if ($forgeLEVEL <= 2) {
				$ci = rand(58,60);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			} else if ($forgeLEVEL <= 5) {
				$ci = rand(58,63);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			} else if ($forgeLEVEL <= 8) {
				$ci = rand(58,67);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			}
		} elseif ($it == 6) {

		} elseif ($it == 8) {
			if ($forgeLEVEL <= 2) {
				$ci = rand(68,70);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			} else if ($forgeLEVEL <= 5) {
				$ci = rand(68,73);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			} else if ($forgeLEVEL <= 8) {
				$ci = rand(68,77);
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$ci."' ");
				mysql_query("UPDATE forge SET forge_exp = forge_exp + 1, forge_points = forge_points - 1 WHERE forge_userID = '".$userID."' ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='forge.php';</script></body>";
			}
		} elseif ($it == 9) {

		}
	}
}
?>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>