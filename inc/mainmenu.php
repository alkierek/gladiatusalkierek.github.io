<div id="main">
<div id="main_inner" class="pngfix">
<div id="sidebar">
<div id="sidebar_inner">
<div id="mainmenu">
<a class="menuitem" href="overview.php" title="Visión general" target="_self">Visión general</a>
<a class="menuitem" href="quests.php" title="Panteón" target="_self">Panteón</a>
<!-- <a class="menuitem" href="guild.php" title="Alianza" target="_self">Alianza</a> -->
<a class="menuitem" href="highscore.php" title="Clasificación" target="_self">Clasificación</a>
<a class="menuitem" href="recruiting.php" title="Reclutamiento" target="_self">Reclutamiento</a>
<!-- <a class="premiummenuitem " href="premium.php" target="_self">Premium</a> -->



<?php
$loca1 = $_SERVER['REQUEST_URI'];
$loca2 = explode('?', $loca1);
$loca3 = $loca2['0'];
if ($loca3 == '/location.php') {
	$cityD = '';
	$countryD = 'style="display:none"';
}else{
	$cityD = 'style="display:none"';
	$countryD = '';
}
?>
<!-- -->
<div id="submenuhead1" <?php echo $countryD; ?>>
<div id="menutab_city"><a href="city.php" class="submenuswitch" target="_self">&nbsp;</a></div>
<div id="menutab_country" onmouseover="switchMenu(2)"><a href="country.php" class="submenuswitch" target="_self">&nbsp;</a></div>
</div>
<div id="submenu1" <?php echo $countryD; ?>>
<a href="training.php" class="submenuitem " target="_self">Entrenamiento</a>
<a href="hospital.php" class="submenuitem " target="_self">Hospital</a>
<a href="shop1.php" class="submenuitem " target="_self">Sell Items</a>
<a href="country.php" class="submenuitem " target="_self">Portal de la ciudad</a>
</div>

<!-- -->
<div id="submenuhead2" <?php echo $cityD; ?>>
<div id="menutab_city" onmouseover="switchMenu(1)"><a href="city.php" class="submenuswitch" target="_self">&nbsp;</a></div>
<div id="menutab_country"><a href="country.php" class="submenuswitch" target="_self">&nbsp;</a></div>
</div>
<div id="submenu2" <?php echo $cityD; ?>>
<a href="underground.php" class="submenuitem_aktive" target="_self">Ermitaño</a>
<a href="location.php?loc=0" class="submenuitem " target="_self">Bosque Sombrío</a>
<?php if ($userLEVEL >= 5) { ?>
<a href="location.php?loc=1" class="submenuitem " target="_self">Puerto Pirata</a>
<?php } else { ?>
<span id="location_inactive_1" class="submenuitem submenuitem_inactive"  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>a partir del nivel 5</td></tr></table>')">Puerto Pirata</span>
<?php } if ($userLEVEL >= 10) { ?>
<a href="location.php?loc=2" class="submenuitem " target="_self">Montañas Nubladas</a>
<?php } else { ?>
<span id="location_inactive_2" class="submenuitem submenuitem_inactive"  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>a partir del nivel 10</td></tr></table>')">Montañas Nubladas</span>
<?php } ?>
<span id="location_inactive_3" class="submenuitem submenuitem_inactive"  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>a partir del nivel 15</td></tr></table>')">Cueva del Lobo</span>
<span id="location_inactive_4" class="submenuitem submenuitem_inactive"  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>a partir del nivel 60</td></tr></table>')">Templo Antiguo</span>
<span id="location_inactive_5" class="submenuitem submenuitem_inactive"  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>a partir del nivel 65</td></tr></table>')">Pueblo Bárbaro</span>
<span id="location_inactive_6" class="submenuitem submenuitem_inactive"  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>a partir del nivel 70</td></tr></table>')">Campamento Bandido</span>
<!-- <a href="location.php?loc=wild_farm" class="submenuitem glow eyecatcher" target="_self">Granja salvaje</a> -->
</div>

<!-- -->
<div id="submenufooter"></div>
</div>
</div>
<div id="sidebar_footer"></div>
</div>
<?php

?>