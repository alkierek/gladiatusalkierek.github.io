<td width="200" style="text-align:center">
<div class="player_name_bg pngfix">
<div class="playername"><?php echo $accNAME; ?></div>
</div>
<div class="player_picture">
<div class="avatar" style="background-image:url(8501/img/faces/gladiator_<?php echo $userAVATARlvl; ?>_<?php echo $userGENDER; ?>.jpg)"></div><div id="p8_1_1" style="width:168px;height:194px;position:absolute; left: 0px; top: 0px;">&nbsp;</div>
</div>

<div style="margin-top: 3px;">
<input type="button" class="button1 disabled"  disabled value="cambiar" onclick="document.location.href='index.php?mod=costumes&sh=acc8a7e22ab9cb4e2fb94e2f55f05660'" />
</div>
<div style="width:200px;text-align:center">
<div id="charstats" style="width:173px">
<div style="background-image:url(8501/img/char_status_kopf.jpg);width:173px;height:5px;overflow:hidden"></div>
<div class="charstats_bg" id="char_panzer_tt">
<span class="charstats_value21">Nivel</span>
<span id="char_level" class="charstats_value22"><?php echo $userLEVEL; ?></span>
</div>
<div class="charstats_bg" id="char_leben_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Puntos de vida:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userLIFE; ?> / <?php echo $userLIFEmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Vida en nivel 1: </td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userLIFEbyLevel; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userLIFEbyItems; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Por subida:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userLIFEbyUps; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Bonificación mediante Constitución:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>+<?php echo $userLIFEbyConstitution; ?></td></tr><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Regeneración:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userREG; ?> por hora</td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Por Constitución:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>+<?php echo $userREGbyConstitution; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Por nivel:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>+<?php echo $userREGbyLevel; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Por alianza:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>0</td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;A través de Pacto:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>0</td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Por disfraces:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>0</td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Por la bendición:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>0</td></tr></table>')">
<span class="charstats_text">Puntos de vida</span>
<div class="charstats_balken">
<div class="charstats_balken_leben" id="char_leben_balken" style="width:<?php echo $userLIFEper; ?>%"></div>
</div>
<span id="char_leben" class="charstats_value"><?php echo $userLIFEper; ?> %</span>
</div>
<div class="charstats_bg" id="char_exp_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Experiencia:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userEXP; ?> / <?php echo $userEXPmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Necesaria para nivel <?php echo $userLEVELnext; ?>:</td><td style=\'padding-left:20px;text-align:right;color:#DDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userEXPneed; ?></td></tr></table>')">
<span class="charstats_text">Experiencia</span>
<div class="charstats_balken">
<div class="charstats_balken_xp" style="width:<?php echo $userEXPper; ?>%"></div>
</div>
<span id="char_exp" class="charstats_value"><?php echo $userEXPper; ?> %</span>
</div>

<div class="charstats_bg" id="char_f0_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Fuerza:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSTRENGHT; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSTRENGHTbasic; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Máximo:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSTRENGHTmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSTRENGHTbyItem; ?> de <?php echo $userSTRENGHTbyItemMAX; ?></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:280px\'>Aumenta tus daños a los enemigos y la posibilidad de bloquear golpes de tus adversarios.</div></td></tr></table>')">
<span class="charstats_text">Fuerza</span>
<div class="charstats_balken">
<div class="charstats_balken_misc" id="charbalken_f0" style="width:<?php echo $userSTRENGHTper; ?>%"></div>
</div>
<span id="char_f0" class="charstats_value"><?php echo $userSTRENGHT; ?></span>
</div>
<div class="charstats_bg" id="char_f1_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Habilidad:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSKILL; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSKILLbasic; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Máximo:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSKILLmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userSKILLbyItem; ?> de <?php echo $userSKILLbyItemMAX; ?></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:280px\'>Aumenta tu probabilidad de golpe, así como la de dar a tu enemigo un golpe crítico.</div></td></tr></table>')">
<span class="charstats_text">Habilidad</span>
<div class="charstats_balken">
<div class="charstats_balken_misc" id="charbalken_f1" style="width:<?php echo $userSKILLper; ?>%"></div>
</div>
<span id="char_f1" class="charstats_value"><?php echo $userSKILL; ?></span>
</div>
<div class="charstats_bg" id="char_f2_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Agilidad:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userAGILITY; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userAGILITYbasic; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Máximo:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userAGILITYmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userAGILITYbyItem; ?> de <?php echo $userAGILITYbyItemMAX; ?></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:280px\'>Reduce tu probabilidad de golpe del enemigo y la posibilidad de que dé un golpe crítico.</div></td></tr></table>')">
<span class="charstats_text">Agilidad</span>
<div class="charstats_balken">
<div class="charstats_balken_misc" id="charbalken_f2" style="width:<?php echo $userAGILITYper; ?>%"></div>
</div>
<span id="char_f2" class="charstats_value"><?php echo $userAGILITY; ?></span>
</div>
<div class="charstats_bg" id="char_f3_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Constitución:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCONSTITUTION; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCONSTITUTIONbasic; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Máximo:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCONSTITUTIONmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCONSTITUTIONbyItem; ?> de <?php echo $userCONSTITUTIONbyItemMAX; ?></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:280px\'>Aumenta los puntos de vida máximos y la regeneración.</div></td></tr></table>')">
<span class="charstats_text">Constitución</span>
<div class="charstats_balken">
<div class="charstats_balken_misc" id="charbalken_f3" style="width:<?php echo $userCONSTITUTIONper; ?>%"></div>
</div>
<span id="char_f3" class="charstats_value"><?php echo $userCONSTITUTION; ?></span>
</div>
<div class="charstats_bg" id="char_f4_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Carisma:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCHARISMA; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCHARISMAbasic; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Máximo:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCHARISMAmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCHARISMAbyItem; ?> de <?php echo $userCHARISMAbyItemMAX; ?></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:280px\'>Aumenta tu probabilidad de doble golpeo, y además aumenta tu presencia en batallas de mazmorra.</div></td></tr></table>')">
<span class="charstats_text">Carisma</span>
<div class="charstats_balken">
<div class="charstats_balken_misc" id="charbalken_f4" style="width:<?php echo $userCHARISMAper; ?>%"></div>
</div>
<span id="char_f4" class="charstats_value"><?php echo $userCHARISMA; ?></span>
</div>
<div class="charstats_bg" id="char_f5_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Inteligencia:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userINTELLIGENCE; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userINTELLIGENCEbasic; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Máximo:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userINTELLIGENCEmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userINTELLIGENCEbyItem; ?> de <?php echo $userINTELLIGENCEbyItemMAX; ?></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:280px\'>Aumenta la probabilidad de aprendizaje ante enemigos de expediciones. <br />Aumenta la curación y la probabilidad de curación crítica. <br />Aumenta el valor de curación mediante el alimento.</div></td></tr></table>')">
<span class="charstats_text">Inteligencia</span>
<div class="charstats_balken">
<div class="charstats_balken_misc" id="charbalken_f5" style="width:<?php echo $userINTELLIGENCEper; ?>%"></div>
</div>
<span id="char_f5" class="charstats_value"><?php echo $userINTELLIGENCE; ?></span>
</div>

<div class="charstats_bg" id="char_panzer_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Armadura:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userARMOR; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Absorción de daño:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userREDUCEdmg1; ?> - <?php echo $userREDUCEdmg2; ?></td></tr><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Resistencia:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userRESISTENCE; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userRESISTENCEbyItems; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;A travez de la agilidad:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userRESISTENCEbyAgility; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Oportunidad de esquivar golpes criticos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userDODGEchance; ?> %</td></tr><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Valor de bloqueo:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userBLOCK; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userBLOCKbyItems; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante la fuerza:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userBLOCKbyStrenght; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Oportunidad de bloquear un golpe:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userBLOCKchance; ?> %</td></tr></table>')">
<span class="charstats_value21">Armadura</span>
<span id="char_panzer" class="charstats_value22"><?php echo $userARMOR; ?></span>
</div>
<div class="charstats_bg" id="char_schaden_tt" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Daño:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userDAMAGEmin; ?> - <?php echo $userDAMAGEmax; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Básico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userDAMAGEmin1; ?> - <?php echo $userDAMAGEmax1; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userDAMAGEbyItems; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante la fuerza:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userDAMAGEbyStrenght; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Por subida:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userDAMAGEbyUps; ?></td></tr><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Daño critico:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCRIT; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCRITbyItems; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Por destreza:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCRITbySkill; ?></td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Posibilidad de daño critico:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'><?php echo $userCRITchance; ?> %</td></tr></table>')">
<span class="charstats_value21">Daño</span>
<span id="char_schaden" class="charstats_value22"><?php echo $userDAMAGEmin; ?> - <?php echo $userDAMAGEmax; ?></span>
</div>


<div class="charstats_bg" id="char_healing_tt" style="display:none" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:9pt\' nowrap=\'nowrap\'>Curandose:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>4</td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>0</td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;A travez de la inteligencia:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>+4</td></tr><tr><td style=\'text-align:left;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Valor critico de cura:</td><td style=\'padding-left:20px;text-align:right;color:#BA9700;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>1</td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>0</td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;A travez de la inteligencia:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>+1</td></tr><tr><td style=\'text-align:left;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Posibilidad de una mejor curación:</td><td style=\'padding-left:20px;text-align:right;color:#DDDDDD;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>3 %</td></tr></table>')">
<span class="charstats_value21">Curandose</span>
<span id="char_healing" class="charstats_value22">4</span>
</div>
<div style="background-image:url(8501/img/char_status_abschluss.jpg);width:173px;height:5px;overflow:hidden"></div>
</div></div>
</td>