
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
<a href="location.php" class="awesome-tabs current"><?php echo $locNAME; ?></a>
</td>
<td>
<a href="dungeon.php" class="awesome-tabs">Calabozo<div class="navBG"></div></a>
</td>
</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">
<script type="text/javascript" src="8501/js/expedition.js"></script>

<div id="errorExpedition" style="display:none;margin:10px;">
<div class="title_box">
<div class="title_inner">
<span>
<strong id="errorText"></strong>
</span>
</div>
</div>
</div>

<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>
<div id="blackoutDialogbuyBonus" class="cancel_confirm">
<div class="blackoutDialog_header pngfix">
<div id="header_buyBonus" style="font-size:large;text-align:center">Aprender bonus</div>
</div>
<div class="blackoutDialog_body pngfix">
<div class="blackoutDialog_icon">
<img src="8501/img/ui/blackoutDialog/icon_question.jpg"/>
</div>
<div id="dialogTxtbuyBonus" class="blackoutDialog_text"><p></p></div>
<br class="clearfloat" />
<table class="blackoutDialog_buttons" cellspacing="0" cellpadding="0">
<tr>
<td id="buttonleftbuyBonus" style="width:50%">
<div class="al" style="padding:5px">
<input type="submit" class="awesome-button big" value="Aprender bonus" onclick="doDragDrop()" id="linkbuyBonus" />
</div>
</td>
<td id="buttonrightbuyBonus" style="width:50%">
<div class="ar" style="padding:5px">
<input type="submit" class="awesome-button big" value="Cancelar" onclick="blackoutDialog(false)" id="linkcancelbuyBonus" />
</div>
</td>
</tr>
</table>
</div>
<div class="blackoutDialog_footer pngfix">
</div>
</div>


<div style="padding: 5px;">

<?php

if ($loc == 0) {
$Mid1 = 1;
$Mid2 = 2;
$Mid3 = 3;
$Mid4 = 4;
$valido = 1;
} elseif ($loc == 1) {
$Mid1 = 5;
$Mid2 = 6;
$Mid3 = 7;
$Mid4 = 8;
$valido = 1;
} elseif ($loc == 2) {
$Mid1 = 9;
$Mid2 = 10;
$Mid3 = 11;
$Mid4 = 12;
$valido = 1;
} elseif ($loc == 3) {
$Mid1 = 13;
$Mid2 = 14;
$Mid3 = 15;
$Mid4 = 16;
$valido = 1;
} else {
$Mid1 = 1;
$Mid2 = 2;
$Mid3 = 3;
$Mid4 = 4;
$valido = 1;
}
include ('monsters/1.php');

?>

</div>

<br class="clearfloat" />
<div style="margin:5px; margin-top: 20px;">
<div class="title_box">
<div class="title_inner">Descripción</div>
</div>
<div class="title2_box">
<div class="title2_inner">
Si queres creerle a los ancianos, ahi vivió un rey muy popular en aquellos bosques de nombre olvidado que ahora se conocen como los Bosques Oscuros. Las leyendas relatan que este rey hizo un pacto con poderes malignos para reinar por siempre. Sin embargo, los Bosques Oscuros son misteriosos, llenos de animales salvajes y de maleza impenetrable. Muchos cazadores y leñadores que se adentraron en los bosques nunca volvieron. Se dice que el viejo rey los tomó y que ellos lo serviran para siempre...</div>
</div>
</div>
<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>