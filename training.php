
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
<a href="training.php" class="awesome-tabs current">entrenamiento</a>
</td>
</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<?php
include ('db/costTrainings.php');
include ('inc/skillTotrain.php');
?>
<p class="buildingDesc">
<img src="8501/img/npc/0/0_2.jpg" />
Mientras entrás al área de entrenamiento, ves a varios gladiadores mejorando sus habilidades de lucha. Un veterano está entre ellos y de vez en cuando da algún consejo
<br> <br> Aquí podes entrenar tus habilidades como guerrero.</p>
<br class="clearfloat;" />

<div style="clear:both;margin:20px"><div id="training_box">

<div style="background-image:url(8501/img/ui/training/header.jpg);position:relative;width:500px;height:5px;overflow:hidden;"></div>


<!-- FUERZA -->
<div style="width:500px;position:relative">
<div class="training_inner" id="char_f0_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Fuerza:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSTRENGHT; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSTRENGHTbasic; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Máximo:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSTRENGHTmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php if($userSTRENGHTbyItem >= 1){ echo "+"; } echo $userSTRENGHTbyItem; ?> de <?php if($userSTRENGHTbyItem >= 1){ echo "+"; } echo $userSTRENGHTbyItemMAX; ?></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:280px\'>Aumenta tus daños a los enemigos y la posibilidad de bloquear golpes de tus adversarios.</div></td></tr></table>')">
<span class="charstats_text" style="top:1px;">Fuerza</span>
<div class="charstats_balken" style="top:4px;">
<div class="charstats_balken_misc" id="charbalken_f0" style="width:<?php echo $userSTRENGHTper; ?>%"></div>
</div>
<span id="char_f0" class="training_values">
<div class="training_value"><?php echo $userSTRENGHTbasic; ?></div>
<div class="training_operator">+</div>
<div class="training_value"><?php echo $userSTRENGHTbyItem; ?></div>
<div class="training_operator">+</div>
<div class="training_value">0</div>
<div class="training_operator">=</div>
<div class="training_value" style="color:#540400;"><?php echo $userSTRENGHT; ?></div>
</span>
</div>
<div class="training_link">
<div class="training_costs">
<?php echo $costoFuerza1; ?> <img src="8501/img/res2.gif" alt="Oro" align="absmiddle" border="0" />
</div>
<?php
if ($userGOLD >= $costoFuerza) {
    echo '<a class="training_button" target="_self" class="headlines" href="training.php?skillToTrain=1" title="entrenar"></a>';
}else{
    echo '<img src="8501/img/ui/training/button_disabled.jpg" style="width:25px;" title="¡No tenes suficiente oro!" align="absmiddle" border="0" />';
}
?>
</div>
</div>


<!-- HABILIDAD -->
<div style="width:500px;position:relative">
<div class="training_inner" id="char_f1_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Habilidad:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSKILL; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSKILLbasic; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Máximo:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSKILLmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php if($userSKILLbyItem >= 1){ echo "+"; } echo $userSKILLbyItem; ?> de <?php if($userSKILLbyItem >= 1){ echo "+"; } echo $userSKILLbyItemMAX; ?></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:280px\'>Aumenta tu probabilidad de golpe, así como la de dar a tu enemigo un golpe crítico.</div></td></tr></table>')">
<span class="charstats_text" style="top:1px;">Habilidad</span>
<div class="charstats_balken" style="top:4px;">
<div class="charstats_balken_misc" id="charbalken_f1" style="width:<?php echo $userSKILLper; ?>%"></div>
</div>
<span id="char_f1" class="training_values">
<div class="training_value"><?php echo $userSKILLbasic; ?></div>
<div class="training_operator">+</div>
<div class="training_value"><?php echo $userSKILLbyItem; ?></div>
<div class="training_operator">+</div>
<div class="training_value">0</div>
<div class="training_operator">=</div>
<div class="training_value" style="color:#540400;"><?php echo $userSKILL; ?></div>
</span>
</div>
<div class="training_link">
<div class="training_costs">
<?php echo $costoHabilidad1; ?> <img src="8501/img/res2.gif" alt="Oro" align="absmiddle" border="0" />
</div>
<?php
if ($userGOLD >= $costoHabilidad) {
    echo '<a class="training_button" target="_self" class="headlines" href="training.php?skillToTrain=2" title="entrenar"></a>';
}else{
    echo '<img src="8501/img/ui/training/button_disabled.jpg" style="width:25px;" title="¡No tenes suficiente oro!" align="absmiddle" border="0" />';
}
?>
</div>
</div>


<!-- AGILIDAD -->
<div style="width:500px;position:relative">
<div class="training_inner" id="char_f2_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Agilidad:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userAGILITY; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userAGILITYbasic; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Máximo:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userAGILITYmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php if($userAGILITYbyItem >= 1){ echo "+"; } echo $userAGILITYbyItem; ?> de <?php if($userAGILITYbyItem >= 1){ echo "+"; } echo $userAGILITYbyItemMAX; ?></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:280px\'>Reduce tu probabilidad de golpe del enemigo y la posibilidad de que dé un golpe crítico.</div></td></tr></table>')">
<span class="charstats_text" style="top:1px;">Agilidad</span>
<div class="charstats_balken" style="top:4px;">
<div class="charstats_balken_misc" id="charbalken_f2" style="width:<?php echo $userAGILITYper; ?>%"></div>
</div>
<span id="char_f2" class="training_values">
<div class="training_value"><?php echo $userAGILITYbasic; ?></div>
<div class="training_operator">+</div>
<div class="training_value"><?php echo $userAGILITYbyItem; ?></div>
<div class="training_operator">+</div>
<div class="training_value">0</div>
<div class="training_operator">=</div>
<div class="training_value" style="color:#540400;"><?php echo $userAGILITY; ?></div>
</span>
</div>
<div class="training_link">
<div class="training_costs">
<?php echo $costoAgilidad1; ?> <img src="8501/img/res2.gif" alt="Oro" align="absmiddle" border="0" />
</div>
<?php
if ($userGOLD >= $costoAgilidad) {
    echo '<a class="training_button" target="_self" class="headlines" href="training.php?skillToTrain=3" title="entrenar"></a>';
}else{
    echo '<img src="8501/img/ui/training/button_disabled.jpg" style="width:25px;" title="¡No tenes suficiente oro!" align="absmiddle" border="0" />';
}
?>
</div>
</div>


<!-- CONSTITUCION -->
<div style="width:500px;position:relative">
<div class="training_inner" id="char_f3_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Constitución:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCONSTITUTION; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCONSTITUTIONbasic; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Máximo:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCONSTITUTIONmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php if($userCONSTITUTIONbyItem >= 1){ echo "+"; } echo $userCONSTITUTIONbyItem; ?> de <?php if($userCONSTITUTIONbyItem >= 1){ echo "+"; } echo $userCONSTITUTIONbyItemMAX; ?></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:280px\'>Aumenta los puntos de vida máximos y la regeneración.</div></td></tr></table>')">
<span class="charstats_text" style="top:1px;">Constitución</span>
<div class="charstats_balken" style="top:4px;">
<div class="charstats_balken_misc" id="charbalken_f3" style="width:<?php echo $userCONSTITUTIONper; ?>%"></div>
</div>
<span id="char_f3" class="training_values">
<div class="training_value"><?php echo $userCONSTITUTIONbasic; ?></div>
<div class="training_operator">+</div>
<div class="training_value"><?php echo $userCONSTITUTIONbyItem; ?></div>
<div class="training_operator">+</div>
<div class="training_value">0</div>
<div class="training_operator">=</div>
<div class="training_value" style="color:#540400;"><?php echo $userCONSTITUTION; ?></div>
</span>
</div>
<div class="training_link">
<div class="training_costs">
<?php echo $costoConstitucion1; ?> <img src="8501/img/res2.gif" alt="Oro" align="absmiddle" border="0" />
</div>
<?php
if ($userGOLD >= $costoConstitucion) {
    echo '<a class="training_button" target="_self" class="headlines" href="training.php?skillToTrain=4" title="entrenar"></a>';
}else{
    echo '<img src="8501/img/ui/training/button_disabled.jpg" style="width:25px;" title="¡No tenes suficiente oro!" align="absmiddle" border="0" />';
}
?>
</div>
</div>


<!-- CARISMA-->
<div style="width:500px;position:relative">
<div class="training_inner" id="char_f4_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Carisma:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCHARISMA; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCHARISMAbasic; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Máximo:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCHARISMAmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php if($userCHARISMAbyItem >= 1){ echo "+"; } echo $userCHARISMAbyItem; ?> de <?php if($userCHARISMAbyItem >= 1){ echo "+"; } echo $userCHARISMAbyItemMAX; ?></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:280px\'>Aumenta tu probabilidad de doble golpeo, y además aumenta tu presencia en batallas de mazmorra.</div></td></tr></table>')">
<span class="charstats_text" style="top:1px;">Carisma</span>
<div class="charstats_balken" style="top:4px;">
<div class="charstats_balken_misc" id="charbalken_f4" style="width:<?php echo $userCHARISMAper; ?>%"></div>
</div>
<span id="char_f4" class="training_values">
<div class="training_value"><?php echo $userCHARISMAbasic; ?></div>
<div class="training_operator">+</div>
<div class="training_value"><?php echo $userCHARISMAbyItem; ?></div>
<div class="training_operator">+</div>
<div class="training_value">0</div>
<div class="training_operator">=</div>
<div class="training_value" style="color:#540400;"><?php echo $userCHARISMA; ?></div>
</span>
</div>
<div class="training_link">
<div class="training_costs">
<?php echo $costoCarisma1; ?> <img src="8501/img/res2.gif" alt="Oro" align="absmiddle" border="0" />
</div>
<?php
if ($userGOLD >= $costoCarisma) {
    echo '<a class="training_button" target="_self" class="headlines" href="training.php?skillToTrain=5" title="entrenar"></a>';
}else{
    echo '<img src="8501/img/ui/training/button_disabled.jpg" style="width:25px;" title="¡No tenes suficiente oro!" align="absmiddle" border="0" />';
}
?>
</div>
</div>


<!-- INTELIGENCIA -->
<div style="width:500px;position:relative">
<div class="training_inner" id="char_f5_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Inteligencia:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userINTELLIGENCE; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userINTELLIGENCEbasic; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Máximo:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userINTELLIGENCEmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php if($userINTELLIGENCEbyItem >= 1){ echo "+"; } echo $userINTELLIGENCEbyItem; ?> de <?php if($userINTELLIGENCEbyItem >= 1){ echo "+"; } echo $userINTELLIGENCEbyItemMAX; ?></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:280px\'>Aumenta la probabilidad de aprendizaje ante enemigos de expediciones. <br />Aumenta la curación y la probabilidad de curación crítica. <br />Aumenta el valor de curación mediante el alimento.</div></td></tr></table>')">
<span class="charstats_text" style="top:1px;">Inteligencia</span>
<div class="charstats_balken" style="top:4px;">
<div class="charstats_balken_misc" id="charbalken_f5" style="width:<?php echo $userINTELLIGENCEper; ?>%"></div>
</div>
<span id="char_f5" class="training_values">
<div class="training_value"><?php echo $userINTELLIGENCEbasic; ?></div>
<div class="training_operator">+</div>
<div class="training_value"><?php echo $userINTELLIGENCEbyItem; ?></div>
<div class="training_operator">+</div>
<div class="training_value">0</div>
<div class="training_operator">=</div>
<div class="training_value" style="color:#540400;"><?php echo $userINTELLIGENCE; ?></div>
</span>
</div>
<div class="training_link">
<div class="training_costs">
<?php echo $costoInteligencia1; ?> <img src="8501/img/res2.gif" alt="Oro" align="absmiddle" border="0" />
</div>
<?php
if ($userGOLD >= $costoInteligencia) {
    echo '<a class="training_button" target="_self" class="headlines" href="training.php?skillToTrain=6" title="entrenar"></a>';
}else{
    echo '<img src="8501/img/ui/training/button_disabled.jpg" style="width:25px;" title="¡No tenes suficiente oro!" align="absmiddle" border="0" />';
}
?>
</div>
</div>
<div style="background-image:url(8501/img/ui/training/footer.jpg);width:500px;height:5px;overflow:hidden"></div>

</div></div>

<?php include ('inc/trainx.php'); ?>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>