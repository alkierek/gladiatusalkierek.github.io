<?php

## CALCULAMOS CIERTAS CARACTERISTICAS
$userLIFEnPer = (int)($userLIFEn*100/$userLIFEmax);
$monsterLIFEnPer = (int)($monsterLIFEn*100/$monsterLIFE1);

$granVStable = '
<table width="100%" cellpadding="0" cellspacing="2" style="margin-bottom:20px; border-collapse:collapse"><tr>

<td><div style="text-align:center"><div style="position:relative; width:168px; height:254px; margin-left:auto; margin-right:auto;">
<div id="attackerAvatar1" style="display:block"><div class="player_name_bg pngfix"><div class="playername">'.$userNAME.'</div></div><div class="player_picture">
<div class="avatar" style="background-image:url(8501/img/faces/gladiator_'.$userAVATARlvl.'_'.$userGENDER.'.jpg)"></div></div></div>
<div style="position:absolute; left:5%; bottom:5%; width:90%; z-index: 200;"></div></div></div></td>

<td width="8%" align="center" valign="middle" style="font-weight:bold;border-left:none;"><center>VS</center></td>

<td><div style="text-align:center"><div style="position:relative; width:168px; height:254px; margin-left:auto; margin-right:auto;">
<div id="defenderAvatar11" style="display:block"><div class="player_name_bg pngfix"><div class="playername">'.$monsterNAME1.'</div>
</div><div style="background-image:url(8501/img/npc/'.$monsterIMG.'.jpg);width:168px;height:194px;margin-left:auto;margin-right:auto">
</div></div><div style="position:absolute; left:5%; bottom:5%; width:90%; z-index: 200;"></div></div></div></td></tr><tr><td colspan="3">

<table cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;width:100%"><tr>

<td style="vertical-align:top">
<div id="attackerCharStats1" style="display:block"><div id="charstatsCombat" class="charstats_nomargin">
<div style="background-image:url(8501/img/char_status_kopf_b.jpg);width:262px;height:5px;overflow:hidden"></div>
<div class="charstats_bg2"><span class="charstats_value22">'.$userLEVEL.'</span><span class="charstats_value21">Nivel</span></div>
<div class="charstats_bg2"><span class="charstats_text">Puntos de vida</span><div class="charstats_balken">
<div class="charstats_balken_leben" style="width:'.$userLIFEnPer.'%"></div></div>
<span class="charstats_value3">'.$userLIFEn.' / '.$userLIFEmax.'</span></div><div class="charstats_bg2" id="char_f0_tt">
<span class="charstats_text">Fuerza</span><div class="charstats_balken">
<div class="charstats_balken_misc" id="charbalken_f0" style="width:'.$userSTRENGHTper.'%"></div></div>
<span id="char_f0" class="charstats_value3">'.$userSTRENGHT.'</span></div><div class="charstats_bg2" id="char_f1_tt">
<span class="charstats_text">Habilidad</span><div class="charstats_balken">
<div class="charstats_balken_misc" id="charbalken_f1" style="width:'.$userSKILLper.'%"></div></div>
<span id="char_f1" class="charstats_value3">'.$userSKILL.'</span></div><div class="charstats_bg2" id="char_f2_tt">
<span class="charstats_text">Agilidad</span><div class="charstats_balken">
<div class="charstats_balken_misc" id="charbalken_f2" style="width:'.$userAGILITYper.'%"></div></div>
<span id="char_f2" class="charstats_value3">'.$userAGILITY.'</span></div><div class="charstats_bg2" id="char_f3_tt">
<span class="charstats_text">Constitución</span><div class="charstats_balken">
<div class="charstats_balken_misc" id="charbalken_f3" style="width:'.$userCONSTITUTIONper.'%"></div></div>
<span id="char_f3" class="charstats_value3">'.$userCONSTITUTION.'</span></div><div class="charstats_bg2" id="char_f4_tt">
<span class="charstats_text">Carisma</span><div class="charstats_balken">
<div class="charstats_balken_misc" id="charbalken_f4" style="width:'.$userCHARISMAper.'%"></div></div>
<span id="char_f4" class="charstats_value3">'.$userCHARISMA.'</span></div><div class="charstats_bg2" id="char_f5_tt">
<span class="charstats_text">Inteligencia</span><div class="charstats_balken">
<div class="charstats_balken_misc" id="charbalken_f5" style="width:'.$userINTELLIGENCEper.'%"></div>
</div><span id="char_f5" class="charstats_value3">'.$userINTELLIGENCE.'</span></div><div class="charstats_bg2">
<span class="charstats_value21">Armadura</span>
<span class="charstats_value3">'.$userARMOR.' ('.$userREDUCEdmg1.' - '.$userREDUCEdmg2.')</span>
</div><div class="charstats_bg2"><span class="charstats_value21">Daño</span>
<span class="charstats_value22">'.$userDAMAGEmin.' - '.$userDAMAGEmax.'</span></div>

<div class="charstats_bg2"><span class="charstats_value21">Probabilidad de golpe</span><span class="charstats_value22">
<span id="hitchanceFighter1_11" style="display: block;">'.$userHITrate1.' %</span></span></div>
<div class="charstats_bg2"><span class="charstats_value21">Doble golpe</span><span class="charstats_value22">
<span id="doublehitchanceFighter1_11" style="display: block;">'.$userDOUBLEhit1.' %</span></span></div>
<div class="charstats_bg2"><span class="charstats_value21">Posibilidad de daño critico</span>
<span class="charstats_value22">'.$userCRITrate1.' %</span></div>
<div class="charstats_bg2"><span class="charstats_value21">Oportunidad de bloquear un golpe</span><span class="charstats_value22">
<span id="blockchanceFighter1_11" style="display: block;">'.$userBLOCKrate1.' %</span></span></div>
<div class="charstats_bg2"><span class="charstats_value21">Oportunidad de esquivar golpes criticos</span>
<span class="charstats_value22">'.$userDODGErate1.' %</span></div>

<div class="charstats_bg2" style="display:none"><span class="charstats_value21">Curandose</span>
<span class="charstats_value22">0</span></div>
<div class="charstats_bg2" style="display:none"><span class="charstats_value21">Valor critico de cura</span>
<span class="charstats_value22">0 %</span></div>

<div style="clear:both;background-image:url(8501/img/char_status_abschluss_b.jpg);width:262px;height:5px;overflow:hidden"></div>
</div></div></td>


<td style="vertical-align:top;"><div id="defenderCharStats11" style="display:block"><div id="charstatsCombat" class="charstats_nomargin">
<div style="background-image:url(8501/img/char_status_kopf_b.jpg);width:262px;height:5px;overflow:hidden"></div>
<div class="charstats_bg2"><span class="charstats_value22_mirrored">'.$monsterLEVEL1.'</span><span class="charstats_value21_mirrored">Nivel</span>
</div><div class="charstats_bg2"><span class="charstats_text_mirrored">Puntos de vida</span><div class="charstats_balken_mirrored">
<div class="charstats_balken_leben_mirrored" style="width:'.$monsterLIFEnPer.'%"></div></div>
<span class="charstats_value3_mirrored">'.$monsterLIFEn.' / '.$monsterLIFE1.'</span></div><div class="charstats_bg2" id="char_f0_tt">
<span class="charstats_text_mirrored">Fuerza</span><div class="charstats_balken_mirrored">
<div class="charstats_balken_misc_mirrored" id="charbalken_f0" style="width:100%"></div></div>
<span id="char_f0" class="charstats_value3_mirrored">'.$monsterSTRENGHT1.'</span></div><div class="charstats_bg2" id="char_f1_tt">
<span class="charstats_text_mirrored">Habilidad</span><div class="charstats_balken_mirrored">
<div class="charstats_balken_misc_mirrored" id="charbalken_f1" style="width:100%"></div></div>
<span id="char_f1" class="charstats_value3_mirrored">'.$monsterSKILL1.'</span></div><div class="charstats_bg2" id="char_f2_tt">
<span class="charstats_text_mirrored">Agilidad</span><div class="charstats_balken_mirrored">
<div class="charstats_balken_misc_mirrored" id="charbalken_f2" style="width:100%"></div></div>
<span id="char_f2" class="charstats_value3_mirrored">'.$monsterAGILITY1.'</span></div><div class="charstats_bg2" id="char_f3_tt">
<span class="charstats_text_mirrored">Constitución</span><div class="charstats_balken_mirrored">
<div class="charstats_balken_misc_mirrored" id="charbalken_f3" style="width:100%"></div></div>
<span id="char_f3" class="charstats_value3_mirrored">'.$monsterCONSTITUTION1.'</span></div><div class="charstats_bg2" id="char_f4_tt">
<span class="charstats_text_mirrored">Carisma</span><div class="charstats_balken_mirrored">
<div class="charstats_balken_misc_mirrored" id="charbalken_f4" style="width:100%"></div></div>
<span id="char_f4" class="charstats_value3_mirrored">'.$monsterCHARISMA1.'</span></div><div class="charstats_bg2" id="char_f5_tt">
<span class="charstats_text_mirrored">Inteligencia</span><div class="charstats_balken_mirrored">
<div class="charstats_balken_misc_mirrored" id="charbalken_f5" style="width:100%"></div></div>
<span id="char_f5" class="charstats_value3_mirrored">'.$monsterINTELLIGENCE1.'</span></div><div class="charstats_bg2">
<span class="charstats_value21_mirrored">Armadura</span>
<span class="charstats_value3_mirrored">'.$monsterARMORf.' ('.$monsterREDUCEdmg1.' - '.$monsterREDUCEdmg2.')</span></div>
<div class="charstats_bg2"><span class="charstats_value21_mirrored">Daño</span>
<span class="charstats_value22_mirrored">'.$monsterDAMAGEmin.' - '.$monsterDAMAGEmax.'</span></div>

<div class="charstats_bg2"><span class="charstats_value21_mirrored">Probabilidad de golpe</span><span class="charstats_value22_mirrored">
<span id="hitchanceFighter11_1" style="display: block;">'.$enemyHITrate1.' %</span></span></div>
<div class="charstats_bg2"><span class="charstats_value21_mirrored">Doble golpe</span><span class="charstats_value22_mirrored">
<span id="doublehitchanceFighter11_1" style="display: block;">'.$enemyDOUBLEhit1.' %</span></span></div>
<div class="charstats_bg2"><span class="charstats_value21_mirrored">Posibilidad de daño critico</span>
<span class="charstats_value22_mirrored">'.$enemyCRITrate1.' %</span></div>
<div class="charstats_bg2"><span class="charstats_value21_mirrored">Oportunidad de bloquear un golpe</span><span class="charstats_value22_mirrored">
<span id="blockchanceFighter11_1" style="display: block;">'.$enemyBLOCKrate1.' %</span></span></div>
<div class="charstats_bg2"><span class="charstats_value21_mirrored">Oportunidad de esquivar golpes criticos</span>
<span class="charstats_value22_mirrored">'.$enemyDODGErate1.' %</span></div>

<div class="charstats_bg2" style="display:none"><span class="charstats_value21_mirrored">Curandose</span>
<span class="charstats_value22_mirrored">0</span></div>
<div class="charstats_bg2" style="display:none"><span class="charstats_value21_mirrored">Valor critico de cura</span>
<span class="charstats_value22_mirrored">0 %</span></div>

<div style="clear:both;background-image:url(8501/img/char_status_abschluss_b.jpg);width:262px;height:5px;overflow:hidden"></div>

</div></div></td></tr></table>

</td></tr></table>
';

$actualizarR10 = "UPDATE mob_reports SET mr_vs = '".$granVStable."' WHERE mr_codeP = '".$codeP."' ";
$actualizarR10q = mysql_query($actualizarR10);

?>