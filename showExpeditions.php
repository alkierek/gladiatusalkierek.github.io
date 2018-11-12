
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

<td><a href="showExpeditions.php" class="awesome-tabs current">Expedición</a></td>
<td><a href="showArena.php" class="awesome-tabs">Arena<div class="navBG"></div></a></td>
<td><a href="showCircusTurma.php" class="awesome-tabs">Circo Turna<div class="navBG"></div></a></td>
<td><a href="showDungeons.php" class="awesome-tabs">Calabozo<div class="navBG"></div></a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<div style="margin:10px;">
<div class="title_box">
<div class="title_inner">
Reportes de batalla</div>
</div>
<div>
<div class="title_box" style="margin:0px; margin-top:0px;">
<div class="title_inner" style="padding-left:0px;">
<div class="report_statistic">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
<th>Fecha</th>
<th>Nombre</th>
<th colspan="2">Botín</th>
<th></th>
</tr>
<?php
$peleas1 = mysql_query("SELECT * FROM mob_reports WHERE mr_userID = '".$userID."' ORDER BY mr_id DESC ");
$peleas2 = mysql_num_rows($peleas1);
if (empty($peleas2)) {
	echo "No tienes peleas para mostrar.";
} else {
	$cpeleas = 1;
	while ($cpeleas <= $peleas2) {
		$peleas3 = mysql_fetch_array($peleas1);
		$pid = $peleas3['mr_id'];
		$fecha = $peleas3['mr_date'];
		$ganador = $peleas3['mr_ww'];
		if ($ganador == 1) {
			$color = '247F2A';
			$oro = 1;
			$oroganado = $peleas3['mr_gold'];
			$itemganado = $peleas3['mr_item'];
		} elseif ($ganador == 2) {
			$color = 'F3071E';
			$oro = 0;
			$oroganado = 0;
			$itemganado = 0;
		} else {
			$color = 'DF7401';
			$oro = 0;
			$oroganado = 0;
			$itemganado = 0;
		}
		$enemigoid = $peleas3['mr_mobID'];
		if ($enemigoid == 1) {
			$enombre = 'Rata';
			$emapa = 'Bosque Sombrío';
		} elseif ($enemigoid == 2) {
			$enombre = 'Lince';
			$emapa = 'Bosque Sombrío';
		} elseif ($enemigoid == 3) {
			$enombre = 'Lobo';
			$emapa = 'Bosque Sombrío';
		} elseif ($enemigoid == 4) {
			$enombre = 'Oso';
			$emapa = 'Bosque Sombrío';
		} elseif ($enemigoid == 5) {
			$enombre = 'Esclabo Fugitivo';
			$emapa = 'Puerto Pirata';
		} elseif ($enemigoid == 6) {
			$enombre = 'Soldado Corrupto';
			$emapa = 'Puerto Pirata';
		} elseif ($enemigoid == 7) {
			$enombre = 'Asesino';
			$emapa = 'Puerto Pirata';
		} elseif ($enemigoid == 8) {
			$enombre = 'Capitan';
			$emapa = 'Puerto Pirata';
		} elseif ($enemigoid == 9) {
			$enombre = 'Recluta Fugitivo';
			$emapa = 'Montañas Nubladas';
		} elseif ($enemigoid == 10) {
			$enombre = 'Arpía';
			$emapa = 'Montañas Nubladas';
		} elseif ($enemigoid == 11) {
			$enombre = 'Cerbero';
			$emapa = 'Montañas Nubladas';
		} elseif ($enemigoid == 12) {
			$enombre = 'Medusa';
			$emapa = 'Montañas Nubladas';
		}
?>
<tr>
<td style="min-width: 90px;"><?php echo $fecha; ?></td>
<td style="color: #<?php echo $color; ?>"><?php echo "$emapa - $enombre"; ?></td>
<td><?php if ($oro == 1) { ?><?php echo $oroganado; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /><?php } ?></td>
<td><?php if ($itemganado >= 1) { ?><img src="8501/img/interface/package.gif" title="Objeto ganado" align="absmiddle" border="0" /><?php } ?></td>
<td><a href="showCombatReport.php?t=0&reportId=<?php echo $pid; ?>">Detalles</a></td>
</tr>
<?php
	$cpeleas++;
	}
}
?>



</table>
</div>
</div>
</div>
</div>
</div>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>