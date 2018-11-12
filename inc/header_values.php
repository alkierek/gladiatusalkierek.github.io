<div id="header_values_ressources" class="header_box">
    <div>
        <div class="headericon_small" id="icon_gold" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Oro</td></tr></table>')"></div>
        <div class="headervalue_small" id="sstat_gold_val"><?php echo $userGOLD1; ?></div>
    </div>
    <br class="clearfloat" />
    <div id="sstat_highscore">
        <div id="icon_highscore" class="headericon_small" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Posición</td></tr><tr><td style=\'text-align:left; color:white; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Honor:</td><td style=\'padding-left:20px;text-align:right; color:white; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'><?php echo $userHONOR; ?></td></tr><tr><td style=\'text-align:left; color:white; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Fama:</td><td style=\'padding-left:20px;text-align:right; color:white; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'><?php echo $userFAME; ?></td></tr></table>');"></div>
        <div id="highscorePlace" class="headervalue_small"><?php echo $userRANKING; ?></div>
    </div>
    <br class="clearfloat" />
</div>

<div id="header_values_hp">
    <div id="header_values_hp_bar" class="header_values_bar" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left; color:#BA9700; font-weight: bold; font-size:9pt\' nowrap=\'nowrap\'>Puntos de vida:</td><td style=\'padding-left:20px;text-align:right; color:#BA9700; font-weight: bold; font-size:9pt\' nowrap=\'nowrap\'><?php echo $userLIFE; ?> / <?php echo $userLIFEmax; ?></td></tr><tr><td style=\'text-align:left; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Vida en nivel <?php echo $userLEVEL; ?>: </td><td style=\'padding-left:20px;text-align:right; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'><?php echo $userLIFEbyLevel; ?></td></tr><tr><td style=\'text-align:left; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Mediante objetos:</td><td style=\'padding-left:20px;text-align:right; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'><?php echo $userLIFEbyItems; ?></td></tr><tr><td style=\'text-align:left; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Por subida:</td><td style=\'padding-left:20px;text-align:right; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>0</td></tr><tr><td style=\'text-align:left; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Bonificación mediante Constitución:</td><td style=\'padding-left:20px;text-align:right; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>+<?php echo $userLIFEbyConstitution; ?></td></tr><tr><td style=\'text-align:left; color:#BA9700; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>Regeneración:</td><td style=\'padding-left:20px;text-align:right; color:#BA9700; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'><?php echo $userREG; ?></td></tr><tr><td style=\'text-align:left; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Por Constitución:</td><td style=\'padding-left:20px;text-align:right; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>+<?php echo $userREGbyConstitution; ?></td></tr><tr><td style=\'text-align:left; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Por nivel:</td><td style=\'padding-left:20px;text-align:right; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>+<?php echo $userREGbyLevel; ?></td></tr><tr><td style=\'text-align:left; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Por alianza:</td><td style=\'padding-left:20px;text-align:right; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>0</td></tr><tr><td style=\'text-align:left; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;A través de Pacto:</td><td style=\'padding-left:20px;text-align:right; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>0</td></tr></table>');">
        <div id="header_values_hp_bar_fill" style="width:<?php echo $userLIFEper; ?>%"></div>
    </div>
    <div id="header_values_hp_percent" class="header_values_bar_percent"><?php echo $userLIFEper; ?>%</div>
</div>

<div id="header_values_xp">
    <div id="header_values_xp_bar" class="header_values_bar" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'text-align:left; color:#BA9700; font-weight: bold; font-size:9pt\' nowrap=\'nowrap\'>Experiencia:</td><td style=\'padding-left:20px;text-align:right; color:#BA9700; font-weight: bold; font-size:9pt\' nowrap=\'nowrap\'><?php echo $userEXP; ?> / <?php echo $userEXPmax; ?></td></tr><tr><td style=\'text-align:left; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'>&nbsp;&nbsp;Necesaria para nivel <?php echo $userLEVELnext; ?>:</td><td style=\'padding-left:20px;text-align:right; color:#DDD; font-weight: bold; font-size:8pt\' nowrap=\'nowrap\'><?php echo $userEXPneed; ?></td></tr></table>');">
        <div id="header_values_xp_bar_fill" style="width:<?php echo $userEXPper; ?>%"></div>
    </div>
    <div id="header_values_xp_percent" class="header_values_bar_percent"><?php echo $userEXPper; ?>%</div>
</div>

<div id="header_values_general" class="header_box">
    <div>
        <a href="premium.php">
            <div class="headericon_small" id="icon_rubies" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Rubies</td></tr></table>')"></div>
        </a>
        <div class="headervalue_small" id="sstat_ruby_val"><?php echo $accCASH; ?></div>
    </div>
    <br  class="clearfloat" />
    <div>
        <div class="headericon_small" id="icon_level" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Nivel</td></tr></table>')"></div>
        <div id="header_values_level" class="headervalue_small"><?php echo $userLEVEL; ?></div>
    </div>
    <br  class="clearfloat" />
</div>

<div id="header_values_pve" class="header_box_big">
    <div>
                <div class="headericon_big" id="icon_expeditionpoints" onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Puntos de expedición</td></tr><tr><td style=\'color:#FFFFFF;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Regeneración de Puntos de expedición un 0% más rápida</td></tr></table>')" ></div>
        <div class="headervalue_big" id="expeditionpoints_value"><span id="expeditionpoints_value_point">12</span> / <span id="expeditionpoints_value_pointmax">12</span></div>
    </div>
    <br  class="clearfloat" />
    <div>
        <div class="headericon_big" id="icon_dungeonpoints"    onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Puntos de calabozo</td></tr><tr><td style=\'color:#FFFFFF;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Regeneración de Puntos de mazmorra un 0% más rápida</td></tr></table>')" ></div>
        <div class="headervalue_big" id="dungeonpoints_value"><span id="dungeonpoints_value_point">12</span> / <span id="dungeonpoints_value_pointmax">12</span></div>
    </div>
</div>

<div id="header_values_pvp" class="header_box_big">
    <div>
        <div class="headericon_big" id="icon_arena" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Arena</td></tr></table>')"></div>
        <div id="arenaPlace" class="headervalue_big">-</div>
    </div>
    <br  class="clearfloat" />
    <div>
        <div class="headericon_big" id="icon_grouparena" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Circo Turma</td></tr></table>')"></div>
        <div id="grouparenaPlace" class="headervalue_big">-</div>
    </div>
</div>