                <div id="content">
                                <script type="text/javascript" src="8501/js/mootools-forge.js"></script>


<script type="text/javascript">
    var activeFighters = new Array();
    activeFighters['attacker'] = 1;
    activeFighters['defender'] = 11;

    function toggleFighterStat(fighterId, type, mainId)
    {
        $(type + 'Avatar' + activeFighters[type]).style.display = 'none';
        $(type + 'CharStats' + activeFighters[type]).style.display = 'none';
        if (activeFighters[type] != mainId)
        {
            $(type + 'FighterImage' + activeFighters[type]).style.zIndex = '';
            $(type + 'FighterImage' + activeFighters[type]).style.paddingBottom = '';
        }

        if (fighterId == activeFighters[type])
        {
            fighterId = mainId;
        }

        if (fighterId != mainId)
        {
            $(type + 'FighterImage' + fighterId).style.paddingBottom = '5px';
            $(type + 'FighterImage' + fighterId).style.zIndex = '501';
        }
        $(type + 'Avatar' + fighterId).style.display = 'block';
        $(type + 'CharStats' + fighterId).style.display = 'block';

        var oppositeType = (type == 'attacker' ? 'defender' : 'attacker');

        // set blockchance
        setStatField('blockchanceFighter', activeFighters[type] + '_' + activeFighters[oppositeType], fighterId + '_' + activeFighters[oppositeType]);

        // set hitchance
        setStatField('hitchanceFighter', activeFighters[type] + '_' + activeFighters[oppositeType], fighterId + '_' + activeFighters[oppositeType]);

        // set doublehit
        setStatField('doublehitchanceFighter', activeFighters[type] + '_' + activeFighters[oppositeType], fighterId + '_' + activeFighters[oppositeType]);

        // set enemy hitchance
        setStatField('hitchanceFighter', activeFighters[oppositeType] + '_' + activeFighters[type], activeFighters[oppositeType] + '_' + fighterId);

        // set enemy doublehit
        setStatField('doublehitchanceFighter', activeFighters[oppositeType] + '_' + activeFighters[type], activeFighters[oppositeType] + '_' + fighterId);

        // set enemy blockchance
        setStatField('blockchanceFighter', activeFighters[oppositeType] + '_' + activeFighters[type], activeFighters[oppositeType] + '_' + fighterId);

        activeFighters[type] = fighterId;
    }

    function setStatField(fieldName, suffixHide, suffixShow)
    {
        // set enemy doublehit
        var current = $(fieldName + suffixHide);
        if (current != null)
            current.style.display = 'none';
        var newValue = $(fieldName + suffixShow);
        if (newValue != null)
            newValue.style.display = 'block';
    }

</script>

<div id="reportHeader" class="reportWin">
    <table cellspacing="0" cellpadding="0" width="100%" style="border-spacing:0px" border = "0">
        <tr>
            <td valign="center" width="40">
                            </td>
            <td>Ganador: ibobiixd</td>
            <td valign="center" width="40">
                            </td>
        </tr>
    </table>
</div>



<div class="report_reward">
	<div class="title_box">
	    <div class="title_inner">
		    Recompensa	    </div>
    </div>
    <div class="title2_box">
        <div class="title2_inner">
            <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                    <td>

                                            <p>
                            <a href="index.php?mod=player&p=21759&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">ibobiixd</a> conseguiste:
                                                        54 <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" />                                                                                                             </p>
                    
                                                                <p>
                        <a href="index.php?mod=player&p=21759&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">ibobiixd</a> ha recibido 1 puntos de experiencia                                                                        </p>
                    
                    
                    
                                            <p><a href="index.php?mod=player&p=21759&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">ibobiixd</a> recibio 2 puntos de fama.</p>
                    
                                        </td>
                                    <td>
                                                    <div class="reportReward">
                                <div style="background-image:url(8501/img/shop/shop_zelle.gif); width:32px; height: 32;float:left;" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Huevo turquesa</td></tr><tr><td style=\'color:#DDD;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Usándose: Cura 205 de vida</td></tr><tr><td style=\'color:#DDD;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Por Inteligencia: +55 punto(s) de vida</td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>Usándose: Se salta el tiempo de espera para expediciones.</div></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Nivel 10</td></tr><tr><td style=\'color:#DDD;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Valor 54 <img src=\'8501/img/res2d.gif\' alt=\'Oro\' title=\'Oro\' align=\'absmiddle\' border=\'0\' /></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Consejo: Usar un artículo</td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Arrastralo por encima de la imagen de caracteres en la pantalla general.</td></tr></table>')"><img style="bottom:0px" src="8501/img/item/7_26.gif"/></div>                            </div>
                                                                                                                                                                        <div style="clear: left;"></div>
                    </td>
                                </tr>
                <tr>
                    <td colspan="2">
                                            </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<table width="100%" cellpadding="0" cellspacing="2" style="margin-bottom:20px; border-collapse:collapse">
    <tr>
        <td>
            <div style="text-align:center">
                <div style="position:relative; width:168px; height:254px; margin-left:auto; margin-right:auto;">
                                                                                    <div id="attackerAvatar1" style="display:block">
                    <div class="player_name_bg pngfix">
            <div class="playername">ibobiixd</div>
        </div>
<div class="player_picture"
     >
        <div class="avatar" style="background-image:url(8501/img/faces/gladiator_10_m.jpg)"></div>        </div>

                    </div>
                                                                    <div id="attackerAvatar2" style="display:none">
                    <div class="player_name_bg pngfix">
            <div class="playername">Medicus</div>
        </div>
<div class="player_picture"
     >
        <div class="avatar" style="background-image:url(8501/img/npc/merc/2.jpg)"></div>
        </div>

                    </div>
                                                                
                    <div style="position:absolute; left:5%; bottom:5%; width:90%; z-index: 200;">
                                                                                                                                                <img id="attackerFighterImage2"
                             onclick="toggleFighterStat(2, 'attacker', 1)"
                             src="8501/img/npc/merc/2.jpg"
                             style="padding-left: 2px; bottom:0px; width:20%; cursor: pointer;"
                        />
                                                                                                    </div>
                </div>
            </div>
        </td>
        <td width="8%" align="center" valign="middle" style="font-weight:bold;border-left:none;">
            <center>VS</center>
        </td>
        <td>
            <div style="text-align:center">
                <div style="position:relative; width:168px; height:254px; margin-left:auto; margin-right:auto;">
                                                                                                                                                    <div id="defenderAvatar11" style="display:block">
                                            <div class="player_name_bg pngfix">
                            <div class="playername">Asesino Loco</div>
                        </div>
                        <div style="background-image:url(8501/img/npc/0/1_15.jpg);width:168px;height:194px;margin-left:auto;margin-right:auto">
                        </div>
                                        </div>
                                
                    <div style="position:absolute; left:5%; bottom:5%; width:90%; z-index: 200;">
                                                                                                                                                                                                        </div>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <table cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;width:100%">
                <tr>
                    <td style="vertical-align:top">
                                                                                                        <div id="attackerCharStats1" style="display:block">
                        <div id="charstatsCombat" class="charstats_nomargin">
    <div style="background-image:url(8501/img/char_status_kopf_b.jpg);width:262px;height:5px;overflow:hidden"></div>
    <div class="charstats_bg2">
        <span class="charstats_value22">10</span>
        <span class="charstats_value21">Nivel</span>
    </div>
    <div class="charstats_bg2">
        <span class="charstats_text">Puntos de vida</span>
        <div class="charstats_balken">
            <div class="charstats_balken_leben" style="width:100%"></div>
        </div>
                <span class="charstats_value3">475 / 475</span>
    </div>
            <div class="charstats_bg2" id="char_f0_tt">
            <span class="charstats_text">Fuerza</span>
            <div class="charstats_balken">
                <div class="charstats_balken_misc" id="charbalken_f0" style="width:50%"></div>
            </div>
            <span id="char_f0" class="charstats_value3">13</span>
        </div>
            <div class="charstats_bg2" id="char_f1_tt">
            <span class="charstats_text">Habilidad</span>
            <div class="charstats_balken">
                <div class="charstats_balken_misc" id="charbalken_f1" style="width:60%"></div>
            </div>
            <span id="char_f1" class="charstats_value3">29</span>
        </div>
            <div class="charstats_bg2" id="char_f2_tt">
            <span class="charstats_text">Agilidad</span>
            <div class="charstats_balken">
                <div class="charstats_balken_misc" id="charbalken_f2" style="width:86%"></div>
            </div>
            <span id="char_f2" class="charstats_value3">40</span>
        </div>
            <div class="charstats_bg2" id="char_f3_tt">
            <span class="charstats_text">Constitución</span>
            <div class="charstats_balken">
                <div class="charstats_balken_misc" id="charbalken_f3" style="width:43%"></div>
            </div>
            <span id="char_f3" class="charstats_value3">11</span>
        </div>
            <div class="charstats_bg2" id="char_f4_tt">
            <span class="charstats_text">Carisma</span>
            <div class="charstats_balken">
                <div class="charstats_balken_misc" id="charbalken_f4" style="width:80%"></div>
            </div>
            <span id="char_f4" class="charstats_value3">35</span>
        </div>
            <div class="charstats_bg2" id="char_f5_tt">
            <span class="charstats_text">Inteligencia</span>
            <div class="charstats_balken">
                <div class="charstats_balken_misc" id="charbalken_f5" style="width:43%"></div>
            </div>
            <span id="char_f5" class="charstats_value3">11</span>
        </div>
        <div class="charstats_bg2">
        <span class="charstats_value21">Armadura</span>
        <span class="charstats_value3">585 (7 - 8)</span>
    </div>

    <div class="charstats_bg2">
        <span class="charstats_value21">Daño</span>
        <span class="charstats_value22">22 - 26</span>
    </div>

        <div class="charstats_bg2">
        <span class="charstats_value21">Probabilidad de golpe</span>
        <span class="charstats_value22">
                            <span id="hitchanceFighter1_11" style="display: block;">52 %</span>
                    </span>
    </div>
    
        <div class="charstats_bg2">
        <span class="charstats_value21">Doble golpe</span>
        <span class="charstats_value22">
                    <span id="doublehitchanceFighter1_11" style="display: block;">11 %</span>
                </span>
    </div>
    
    <div class="charstats_bg2">
        <span class="charstats_value21">Posibilidad de daño critico</span>
        <span class="charstats_value22">10 %</span>
    </div>    

    <div class="charstats_bg2">
        <span class="charstats_value21">Oportunidad de bloquear un golpe</span>
        <span class="charstats_value22">
                    <span id="blockchanceFighter1_11" style="display: block;">41 %</span>
                </span>
    </div>

    <div class="charstats_bg2">
        <span class="charstats_value21">Oportunidad de esquivar golpes criticos</span>
        <span class="charstats_value22">25 %</span>
    </div>

        <div class="charstats_bg2">
        <span class="charstats_value21">Amenaza</span>
        <span class="charstats_value22">40</span>
    </div>
        

    <div class="charstats_bg2" style="display:none">
        <span class="charstats_value21">Curandose</span>
        <span class="charstats_value22">8</span>
    </div>

    <div class="charstats_bg2" style="display:none">
        <span class="charstats_value21">Valor critico de cura</span>
        <span class="charstats_value22">7 %</span>
    </div>

    <div style="clear:both;background-image:url(8501/img/char_status_abschluss_b.jpg);width:262px;height:5px;overflow:hidden"></div>
</div>                        
                        </div>
                                                                                    <div id="attackerCharStats2" style="display:none">
                        <div id="charstatsCombat" class="charstats_nomargin">
    <div style="background-image:url(8501/img/char_status_kopf_b.jpg);width:262px;height:5px;overflow:hidden"></div>
    <div class="charstats_bg2">
        <span class="charstats_value22">11</span>
        <span class="charstats_value21">Nivel</span>
    </div>
    <div class="charstats_bg2">
        <span class="charstats_text">Puntos de vida</span>
        <div class="charstats_balken">
            <div class="charstats_balken_leben" style="width:100%"></div>
        </div>
                <span class="charstats_value3">530 / 530</span>
    </div>
            <div class="charstats_bg2" id="char_f0_tt">
            <span class="charstats_text">Fuerza</span>
            <div class="charstats_balken">
                <div class="charstats_balken_misc" id="charbalken_f0" style="width:46%"></div>
            </div>
            <span id="char_f0" class="charstats_value3">15</span>
        </div>
            <div class="charstats_bg2" id="char_f1_tt">
            <span class="charstats_text">Habilidad</span>
            <div class="charstats_balken">
                <div class="charstats_balken_misc" id="charbalken_f1" style="width:46%"></div>
            </div>
            <span id="char_f1" class="charstats_value3">15</span>
        </div>
            <div class="charstats_bg2" id="char_f2_tt">
            <span class="charstats_text">Agilidad</span>
            <div class="charstats_balken">
                <div class="charstats_balken_misc" id="charbalken_f2" style="width:46%"></div>
            </div>
            <span id="char_f2" class="charstats_value3">15</span>
        </div>
            <div class="charstats_bg2" id="char_f3_tt">
            <span class="charstats_text">Constitución</span>
            <div class="charstats_balken">
                <div class="charstats_balken_misc" id="charbalken_f3" style="width:48%"></div>
            </div>
            <span id="char_f3" class="charstats_value3">17</span>
        </div>
            <div class="charstats_bg2" id="char_f4_tt">
            <span class="charstats_text">Carisma</span>
            <div class="charstats_balken">
                <div class="charstats_balken_misc" id="charbalken_f4" style="width:48%"></div>
            </div>
            <span id="char_f4" class="charstats_value3">17</span>
        </div>
            <div class="charstats_bg2" id="char_f5_tt">
            <span class="charstats_text">Inteligencia</span>
            <div class="charstats_balken">
                <div class="charstats_balken_misc" id="charbalken_f5" style="width:56%"></div>
            </div>
            <span id="char_f5" class="charstats_value3">35</span>
        </div>
        <div class="charstats_bg2">
        <span class="charstats_value21">Armadura</span>
        <span class="charstats_value3">260 (2 - 3)</span>
    </div>

    <div class="charstats_bg2">
        <span class="charstats_value21">Daño</span>
        <span class="charstats_value22">14 - 19</span>
    </div>

        <div class="charstats_bg2">
        <span class="charstats_value21">Probabilidad de golpe</span>
        <span class="charstats_value22">
                            <span id="hitchanceFighter2_11" style="display: block;">36 %</span>
                    </span>
    </div>
    
        <div class="charstats_bg2">
        <span class="charstats_value21">Doble golpe</span>
        <span class="charstats_value22">
                    <span id="doublehitchanceFighter2_11" style="display: block;">0 %</span>
                </span>
    </div>
    
    <div class="charstats_bg2">
        <span class="charstats_value21">Posibilidad de daño critico</span>
        <span class="charstats_value22">5 %</span>
    </div>    

    <div class="charstats_bg2">
        <span class="charstats_value21">Oportunidad de bloquear un golpe</span>
        <span class="charstats_value22">
                    <span id="blockchanceFighter2_11" style="display: block;">8 %</span>
                </span>
    </div>

    <div class="charstats_bg2">
        <span class="charstats_value21">Oportunidad de esquivar golpes criticos</span>
        <span class="charstats_value22">7 %</span>
    </div>

        <div class="charstats_bg2">
        <span class="charstats_value21">Amenaza</span>
        <span class="charstats_value22">11</span>
    </div>
        

    <div class="charstats_bg2">
        <span class="charstats_value21">Curandose</span>
        <span class="charstats_value22">108</span>
    </div>

    <div class="charstats_bg2">
        <span class="charstats_value21">Valor critico de cura</span>
        <span class="charstats_value22">50 %</span>
    </div>

    <div style="clear:both;background-image:url(8501/img/char_status_abschluss_b.jpg);width:262px;height:5px;overflow:hidden"></div>
</div>                        
                        </div>
                                                                                                    </td>
                    <td style="vertical-align:top;">
                                                                                                                                                                                        <div id="defenderCharStats11" style="display:block">
                        <div id="charstatsCombat" class="charstats_nomargin">
    <div style="background-image:url(8501/img/char_status_kopf_b.jpg);width:262px;height:5px;overflow:hidden"></div>
    <div class="charstats_bg2">
        <span class="charstats_value22_mirrored">9</span>
        <span class="charstats_value21_mirrored">Nivel</span>
    </div>
    <div class="charstats_bg2">
        <span class="charstats_text_mirrored">Puntos de vida</span>
        <div class="charstats_balken_mirrored">
            <div class="charstats_balken_leben_mirrored" style="width:1%"></div>
        </div>
                <span class="charstats_value3_mirrored">1 / 453</span>
    </div>
            <div class="charstats_bg2" id="char_f0_tt">
            <span class="charstats_text_mirrored">Fuerza</span>
            <div class="charstats_balken_mirrored">
                <div class="charstats_balken_misc_mirrored" id="charbalken_f0" style="width:100%"></div>
            </div>
            <span id="char_f0" class="charstats_value3_mirrored">27</span>
        </div>
            <div class="charstats_bg2" id="char_f1_tt">
            <span class="charstats_text_mirrored">Habilidad</span>
            <div class="charstats_balken_mirrored">
                <div class="charstats_balken_misc_mirrored" id="charbalken_f1" style="width:100%"></div>
            </div>
            <span id="char_f1" class="charstats_value3_mirrored">24</span>
        </div>
            <div class="charstats_bg2" id="char_f2_tt">
            <span class="charstats_text_mirrored">Agilidad</span>
            <div class="charstats_balken_mirrored">
                <div class="charstats_balken_misc_mirrored" id="charbalken_f2" style="width:100%"></div>
            </div>
            <span id="char_f2" class="charstats_value3_mirrored">26</span>
        </div>
            <div class="charstats_bg2" id="char_f3_tt">
            <span class="charstats_text_mirrored">Constitución</span>
            <div class="charstats_balken_mirrored">
                <div class="charstats_balken_misc_mirrored" id="charbalken_f3" style="width:100%"></div>
            </div>
            <span id="char_f3" class="charstats_value3_mirrored">15</span>
        </div>
            <div class="charstats_bg2" id="char_f4_tt">
            <span class="charstats_text_mirrored">Carisma</span>
            <div class="charstats_balken_mirrored">
                <div class="charstats_balken_misc_mirrored" id="charbalken_f4" style="width:100%"></div>
            </div>
            <span id="char_f4" class="charstats_value3_mirrored">24</span>
        </div>
            <div class="charstats_bg2" id="char_f5_tt">
            <span class="charstats_text_mirrored">Inteligencia</span>
            <div class="charstats_balken_mirrored">
                <div class="charstats_balken_misc_mirrored" id="charbalken_f5" style="width:100%"></div>
            </div>
            <span id="char_f5" class="charstats_value3_mirrored">6</span>
        </div>
        <div class="charstats_bg2">
        <span class="charstats_value21_mirrored">Armadura</span>
        <span class="charstats_value3_mirrored">482 (6 - 7)</span>
    </div>

    <div class="charstats_bg2">
        <span class="charstats_value21_mirrored">Daño</span>
        <span class="charstats_value22_mirrored">70 - 77</span>
    </div>

        <div class="charstats_bg2">
        <span class="charstats_value21_mirrored">Probabilidad de golpe</span>
        <span class="charstats_value22_mirrored">
                            <span id="hitchanceFighter11_2" style="display: none;">61 %</span>
                            <span id="hitchanceFighter11_1" style="display: block;">37 %</span>
                    </span>
    </div>
    
        <div class="charstats_bg2">
        <span class="charstats_value21_mirrored">Doble golpe</span>
        <span class="charstats_value22_mirrored">
                    <span id="doublehitchanceFighter11_2" style="display: none;">7 %</span>
                    <span id="doublehitchanceFighter11_1" style="display: block;">0 %</span>
                </span>
    </div>
    
    <div class="charstats_bg2">
        <span class="charstats_value21_mirrored">Posibilidad de daño critico</span>
        <span class="charstats_value22_mirrored">11 %</span>
    </div>    

    <div class="charstats_bg2">
        <span class="charstats_value21_mirrored">Oportunidad de bloquear un golpe</span>
        <span class="charstats_value22_mirrored">
                    <span id="blockchanceFighter11_2" style="display: none;">7 %</span>
                    <span id="blockchanceFighter11_1" style="display: block;">7 %</span>
                </span>
    </div>

    <div class="charstats_bg2">
        <span class="charstats_value21_mirrored">Oportunidad de esquivar golpes criticos</span>
        <span class="charstats_value22_mirrored">9 %</span>
    </div>

        <div class="charstats_bg2">
        <span class="charstats_value21_mirrored">Amenaza</span>
        <span class="charstats_value22_mirrored">50</span>
    </div>
        

    <div class="charstats_bg2" style="display:none">
        <span class="charstats_value21_mirrored">Curandose</span>
        <span class="charstats_value22_mirrored">150</span>
    </div>

    <div class="charstats_bg2" style="display:none">
        <span class="charstats_value21_mirrored">Valor critico de cura</span>
        <span class="charstats_value22_mirrored">4 %</span>
    </div>

    <div style="clear:both;background-image:url(8501/img/char_status_abschluss_b.jpg);width:262px;height:5px;overflow:hidden"></div>
</div>                        
                        </div>
                                                            </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<div style="clear:both">
        <div class="dungeon_report_statistic">
        <div class="title_box">
            <div class="title_inner">
            Estadisticas            </div>
        </div>
        <div class="title2_box">
            <div class="title2_inner">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <th rowspan="2" class="table_border_bottom">&nbsp;</th>
                        <th colspan="2">Daño</th>
                        <th colspan="2">Curarse</th>
                        <th rowspan="2" class="table_border_bottom">Amenaza</th>
                    </tr>
                    <tr>
                        <th class="table_border_bottom">Hecho</th>
                        <th class="table_border_bottom">Obtener</th>
                        <th class="table_border_bottom">Hecho</th>
                        <th class="table_border_bottom">Obtener</th>
                    </tr>
                                                                                                                                    <tr>
                        <th >
                                                            <a href="index.php?mod=player&p=21759&sh=acc8a7e22ab9cb4e2fb94e2f55f05660">ibobiixd</a>                                                    </th>
                                                <td style="text-align:center;">
                            368                        </td>
                                                <td style="text-align:center;">
                            646                        </td>
                                                <td style="text-align:center;">
                            0                        </td>
                                                <td style="text-align:center;">
                            646                        </td>
                                                <td style="text-align:center;">
                            2128                        </td>
                                            </tr>
                                                                                    <tr>
                        <th class="table_border_top">
                                                            Medicus                                                    </th>
                                                <td style="text-align:center;">
                            84                        </td>
                                                <td style="text-align:center;">
                            0                        </td>
                                                <td style="text-align:center;">
                            646                        </td>
                                                <td style="text-align:center;">
                            0                        </td>
                                                <td style="text-align:center;">
                            252                        </td>
                                            </tr>
                                                                                    <tr>
                        <th class="table_border_top">
                                                            Asesino Loco                                                    </th>
                                                <td style="text-align:center;" class="table_border_top">
                            646                        </td>
                                                <td style="text-align:center;" class="table_border_top">
                            452                        </td>
                                                <td style="text-align:center;" class="table_border_top">
                            0                        </td>
                                                <td style="text-align:center;" class="table_border_top">
                            0                        </td>
                                                <td style="text-align:center;" class="table_border_top">
                            1196                        </td>
                                            </tr>
                                                </table>
            </div>
        </div>
    </div>
    </div>


<div style="margin-top:10px; clear:both" class="dungeon_report_statistic">
    <div class="title_box">
        <div class="title_inner">
        Reporte de batalla        </div>
    </div>
    <div class="title2_box">
        <div class="title2_inner" style="padding-left: 0px; margin: 0px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="3" class="table_border_bottom">
                            <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 1</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 2</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;"><font color="dimgray">ibobiixd recibé 28 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus cura a ibobiixd.</td>
                    <td style="text-align:center;"><font color="green"><b>*ibobiixd recibe 28 puntos de curación*</b></font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 16 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 3</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="dimgray">Asesino Loco recibé 5 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 4</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 17 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 5</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 15 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 6</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 19 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 7</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 8</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;"><font color="red">ibobiixd recibé 69 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus cura a ibobiixd.</td>
                    <td style="text-align:center;"><font color="green"><b>*ibobiixd recibe 69 puntos de curación*</b></font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 9</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 10</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 15 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 11</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 15 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 12</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 13 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 13</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;"><font color="red">ibobiixd recibé 70 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus cura a ibobiixd.</td>
                    <td style="text-align:center;"><font color="green">ibobiixd recibe 70 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 14</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 16 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 15</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 17 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 16</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 17</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 18</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;"><font color="red">ibobiixd recibé 63 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus cura a ibobiixd.</td>
                    <td style="text-align:center;"><font color="green"><b>*ibobiixd recibe 63 puntos de curación*</b></font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 19</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 20</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red"><b>*Asesino Loco recibe 39 de daño*</b></font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 21</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;"><font color="red">ibobiixd recibé 65 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus cura a ibobiixd.</td>
                    <td style="text-align:center;"><font color="green">ibobiixd recibe 65 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 22</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;"><font color="red">ibobiixd recibé 63 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus cura a ibobiixd.</td>
                    <td style="text-align:center;"><font color="green"><b>*ibobiixd recibe 63 puntos de curación*</b></font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 23</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 9 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 24</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 17 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 10 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 25</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="dimgray">bloqueado</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 26</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 11 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 16 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 27</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 12 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 28</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;"><font color="red">ibobiixd recibé 67 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus cura a ibobiixd.</td>
                    <td style="text-align:center;"><font color="green">ibobiixd recibe 67 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 17 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 29</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 30</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;"><font color="red">ibobiixd recibé 66 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus cura a ibobiixd.</td>
                    <td style="text-align:center;"><font color="green">ibobiixd recibe 66 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 31</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 9 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 32</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 18 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 33</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 12 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 15 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 20 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 34</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 8 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 16 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 35</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;"><font color="red">ibobiixd recibé 66 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 17 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus cura a ibobiixd.</td>
                    <td style="text-align:center;"><font color="green">ibobiixd recibe 66 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 36</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 15 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 37</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;"><font color="dimgray">ibobiixd recibé 27 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 17 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus cura a ibobiixd.</td>
                    <td style="text-align:center;"><font color="green">ibobiixd recibe 27 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 38</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 19 puntos de daño</font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 39</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;"><font color="red">ibobiixd recibé 62 puntos de daño</font></td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus cura a ibobiixd.</td>
                    <td style="text-align:center;"><font color="green"><b>*ibobiixd recibe 62 puntos de curación*</b></font></td>
                                    </tr>
                                        <tr style="background-color: #B5AB83;">
                    <th colspan="2" class="table_border_bottom">Ronda 40</th>
                </tr>
                                <tr style="background-color:#CFC7A3;">
                                        <td width="50%">Asesino Loco golpea a ibobiixd.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">Medicus golpea a Asesino Loco.</td>
                    <td style="text-align:center;">erró</td>
                                    </tr>
                            <tr>
                                        <td width="50%">ibobiixd golpea a Asesino Loco.</td>
                    <td style="text-align:center;"><font color="red">Asesino Loco recibé 7 puntos de daño</font><br /><b>*Asesino Loco muere*</b></td>
                                    </tr>
                                    </table>
        </div>
    </div>
</div>
    <script type="text/javascript">
        var tutorialData = {"forge":{"settingsTitle":"Mostrar tutorial de forja","steps":[{"settingsName":"Selecciona el objeto","text":"<br>\u00a1Te doy la bienvenida a la Herrer\u00eda! Me alegro de que est\u00e9s aqu\u00ed.<br><br>Si quieres, puedes crear tu propio equipamiento. Elige el objeto que prefieras, selecciona un prefijo o un sufijo y adelante. <br><br>Ten en cuenta que solo puedes forjar prefijos y sufijos que hayas aprendido previamente. Para ello puedes completar \"expediciones\" y buscar \"pergaminos\". <br><br>Reconocer\u00e1s el prefijo o sufijo que te otorga un pergamino a trav\u00e9s de su nombre: <br>As\u00ed, el \"Pergamino de Tinuviel\" te permite aprender el prefijo \"Tinuviel\", y el \"Pergamino del amor\" desbloquea el sufijo \"del amor\". <br><br>Una vez seleccionado el objeto deseado, el cuadro a la derecha te aportar\u00e1 toda la informaci\u00f3n necesaria, como por ejemplo la duraci\u00f3n de la forja, los recursos necesarios o la probabilidad de \u00e9xito del proceso. <br><br>Tras cerrar el acuerdo de alquiler recibir\u00e1s un dep\u00f3sito de forja en el que puedes ir almacenando poco a poco todos los recursos que necesites para el objeto. <br><br>Atenci\u00f3n: Si cambias de idea y deseas cancelar la forja, recuperar\u00e1s la mayor parte de tus recursos, \u00a1pero el coste de alquiler no se te reembolsar\u00e1!<br><br>","visibility":true},{"settingsName":"Cazadores y coleccionistas","text":"<br>Este es el dep\u00f3sito de forja. Puedes dejar aqu\u00ed todos los recursos que necesites para el objeto de tu elecci\u00f3n. Arrastra los recursos al inventario del dep\u00f3sito y se guardar\u00e1n de forma autom\u00e1tica. La probabilidad de \u00e9xito y el nivel de calidad del objeto depende, obviamente, de los recursos que utilices para crearlo. <br><br>El secreto es muy simple: cuanto mejores sean los recursos que utilices, \u00a1mejor ser\u00e1 el resultado! <br><br>Una vez hayas reunido todo lo necesario, no tienes m\u00e1s que hacer clic sobre \"Forjar\" para iniciar el proceso.<br><br>","visibility":true},{"settingsName":"\u00a1EUREKA!","text":"<br>\u00a1Enhorabuena! Acabas de forjar un objeto. Arr\u00e1stralo de la Herrer\u00eda a tu inventario.<br><br>","visibility":true},{"settingsName":"\u00a1Qu\u00e9 desastre!","text":"<br>Vaya, ha surgido un grave error durante la forja. Est\u00e1s ante los restos que han sobrevivido al proceso. <br><br>Sin embargo, recuperas parte de los recursos que hab\u00edas utilizado y puedes decidir qu\u00e9 es lo que quieres hacer con ellos: <br>Podemos empaquetarlos y envi\u00e1rtelos, o tambi\u00e9n tienes la posibilidad de almacenarlos en un nuevo dep\u00f3sito de forja a cambio de una peque\u00f1a tasa. En este \u00faltimo caso, podr\u00e1s reutilizarlos para repetir el proceso y volver a forjar el mismo objeto.<br><br>","visibility":true}]}};

        function updateTutorialState(category, step, visibility) {
            return function() {
                var option               = new Array();
                option['spinnerVisible'] = false;
                sendAjax(
                    jQuery(this), 
                    'ajax.php', 
                    'mod=settings&submod=updateTutorialState&category=' + category + '&step=' + step + '&visibility=' + !jQuery('#tutorialDoNotShowAgain').prop('checked'), 
                    null, 
                    null, 
                    option
                );
                
                tutorialData[category].steps[step].visibility = !jQuery('#tutorialDoNotShowAgain').prop('checked');
            }
        }
        
        function showTutorial(data)
        {
            if (tutorialData[data.category] !== undefined && 
                tutorialData[data.category].steps[data.step] !== undefined && 
                tutorialData[data.category].steps[data.step].visibility === true
            ) {
                var tutorialContainer = jQuery('.tutorial');
                var content           = tutorialData[data.category].steps[data.step];
                
                tutorialContainer.find('.title').html(content.settingsName);
                tutorialContainer.find('.text').html(content.text);
                
                tutorialContainer.fadeIn("normal");
                jQuery('#tutorialDoNotShowAgain').on('click', updateTutorialState(data.category, data.step, jQuery(this)));
            }
        }
        
        jQuery(document).ready(function() {
            jQuery('.tutorial .awesome-button').on('click', function(){
                jQuery('.tutorial').fadeOut('normal');
            })
        });
    </script>
    <div class="tutorial" style="display: none;">
        <div class="title">
        </div>
        <div class="text">
        </div>
        <div class="footer">
            <input type="checkbox" name="tutorialDoNotShowAgain" id="tutorialDoNotShowAgain"  />
            <label for="tutorialDoNotShowAgain">No mostrar más este paso del tutorial</label>
            <br />
            <div class="awesome-button">Cerrado</div>
        </div>
    </div>

<script type='text/javascript'>var tickerArray = new Array();function pad(n, width, z) {
  z = z || "0";
  n = n + "";
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}function doTicker(){
                                    n=new Date();
                                    if (tickerArray.length > 0)
                                    {
                                        for (i = 0; i < tickerArray.length; i++)
                                        {
                                            if (isNaN(document.getElementById(tickerArray[i]["id"])))
                                            {
                                                var e = document.getElementById(tickerArray[i]["id"]);
                                                s = tickerArray[i]["sek"];
                                                seconds = tickerArray[i]["sek"];
                                                m = 0;
                                                h = 0;
                                                d = 0;
                                                if (s < 0)
                                                    e.innerHTML = "---";
                                                else
                                                {
                                                    var timeTXT = s + " s";
                                                    if (s > 59)
                                                    {
                                                        m = Math.ceil(s / 60);
                                                        s = s-m * 60;
                                                        timeTXT = m + " m";
                                                    }
                                                    if (m > 59)
                                                    {
                                                        h = Math.ceil(m / 60);
                                                        m = m - h * 60;
                                                        timeTXT = h + " h";
                                                    }
                                                    if (h > 24)
                                                    {
                                                        d = Math.ceil(h / 24);
                                                        h = h-d * 24;
                                                        timeTXT = d + " d";
                                                    }

                                                    e.innerHTML = timeTXT;
var numdays    = Math.floor(seconds / 86400);
var numhours   = pad(Math.floor((seconds % 86400) / 3600), 2);
var numminutes = pad(Math.floor(((seconds % 86400) % 3600) / 60), 2);
var numseconds = pad(((seconds % 86400) % 3600) % 60, 2);

e.innerHTML = (numdays ? numdays + " d " : "") + numhours + ":" + numminutes + ":" + numseconds + "";
                                                    tickerArray[i]["sek"]--;
                                                }
                                            }
                                        }
                                    window.setTimeout("doTicker();",999);
                                }
                            }doTicker();</script>                        </div>
                    </div>
                </div>
