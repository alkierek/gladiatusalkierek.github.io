<?php

$bonusA1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$bonusA2 = mysql_fetch_array($bonusA1);
$ubg = $bonusA2['clu_bonusGold'];
$bonus1ac = '_inactive';
$bonus1on = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Desguazador</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>Gracias a tu experiencia encuentras todo lo que el enemigo tenía de valor y aumentas así tu ganancia de oro en 30%.</div></td></tr><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Probabilidad de aprendizaje en caso de victoria:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>15%</td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Hacer clic para aprender el bonus enseguida</td></tr></table>'";
if ($ubg == 1) {
	$bonus1ac = '';
	$bonus1on = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Desguazador</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>Gracias a tu experiencia encuentras todo lo que el enemigo tenía de valor y aumentas así tu ganancia de oro en 30%.</div></td></tr></table>'";
}
$ube = $bonusA2['clu_bonusExp'];
$bonus2ac = '_inactive';
$bonus2on = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Batalla analítica</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>Debido a un mejor análisis de tu enemigo consigues 30% más de experiencia en las batallas contra él.</div></td></tr><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Probabilidad de aprendizaje en caso de victoria:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>15%</td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Hacer clic para aprender el bonus enseguida</td></tr></table>'";
if ($ube == 1) {
	$bonus2ac = '';
	$bonus2on = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Batalla analítica</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>Debido a tu mejor análisis de tu enemigo consigues 30% más de experiencia en las batallas contra el.</div></td></tr></table>'";
}
$ubf = $bonusA2['clu_bonusDrop'];
$bonus3ac = '_inactive';
$bonus3on = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Olfato del Refugio</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>El conocimiento sobre las costumbres de tu enemigo aumenta la probabilidad de encontrar un objeto en un 10%</div></td></tr><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Probabilidad de aprendizaje en caso de victoria:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>15%</td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Hacer clic para aprender el bonus enseguida</td></tr></table>'";
if ($ubf == 1) {
	$bonus3ac = '';
	$bonus3on = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Olfato del Refugio</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>El conocimiento sobre las costumbre de tu enemigo aumentan la probabilidad de encontrar un objeto en un 10%.</div></td></tr></table>'";
}
$ubh = $bonusA2['clu_bonusHonor'];
$bonus4ac = '_inactive';
$bonus4on = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Narrador de historias</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>Tus historias sobre el enemigo derrotado aumentan tu Honor en un 20%</div></td></tr><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Probabilidad de aprendizaje en caso de victoria:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>15%</td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Hacer clic para aprender el bonus enseguida</td></tr></table>'";
if ($ubh == 1) {
	$bonus4ac = '';
	$bonus4on = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Narrador de historias</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>Tus historias sobre el enemigo derrotado aumentan tu Honor en un 20%.</div></td></tr></table>'";
}

?>
<div class="expedition_box">
<div id="expedition_info<?php echo $cuenta; ?>" onMouseOver="return escape('<?php echo $Mtable; ?>')">
<div class="expedition_name"><?php echo $monsterNAME; ?></div>
<div class="expedition_picture">
<img src="8501/img/npc/<?php echo $monsterIMG; ?>.jpg" witdh="123px"height="142px" />
<?php if($monsterTYPE == 'Boss'){ ?>
<div class="expedition_picture_boss pngfix"></div>
<?php } ?>
</div>
</div>
<div>
<a href="battleGenerate.php?mobID=<?php echo $monsterID; ?>"><button class="expedition_button awesome-button "  type="button" value="">Atacar</button></a>
<div class="expedition_cooldown_reduce">
(Costos: 1 <img src="8501/img/premium/token_small/7.png" title="" align="absmiddle" border="0" onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:300px\'>Reloj de arena divino</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:300px\'>Posees: 5</div></td></tr><tr><td style=\'color:white;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:300px\'>Con este reloj de arena puedes acortar el tiempo de espera de mazmorras, expediciones y nuevas tareas.</div></td></tr></table>')" />)
</div>
</div>
<div class="expedition_bonus_box">
<div class="expedition_bonus"
style="background-image:url(8501/img/expedition/bonus1<?php echo $bonus1ac ?>.jpg);cursor: pointer;"
onMouseOver="return escape(<?php echo $bonus1on; ?>)"
>
</div>
<div class="expedition_bonus"
style="background-image:url(8501/img/expedition/bonus2<?php echo $bonus2ac ?>.jpg);cursor: pointer;"
onMouseOver="return escape(<?php echo $bonus2on; ?>)"
>
</div>
<div class="expedition_bonus"
style="background-image:url(8501/img/expedition/bonus3<?php echo $bonus3ac ?>.jpg);cursor: pointer;"
onMouseOver="return escape(<?php echo $bonus3on; ?>)"
>
</div>
<div class="expedition_bonus"
style="background-image:url(8501/img/expedition/bonus4<?php echo $bonus4ac ?>.jpg);cursor: pointer;"
onMouseOver="return escape(<?php echo $bonus4on; ?>)"
>
</div>
</div>
</div>