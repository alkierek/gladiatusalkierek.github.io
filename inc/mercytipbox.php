<?php
$mercy1 = mysql_query("SELECT * FROM mercy WHERE mercy_id = '".$mercyID."' ");
$mercy2 = mysql_num_rows($mercy1);
if($mercy2 == 0){

}else{
	$mercy3 = mysql_fetch_array($mercy1);
	$mercyID = $mercy3['mercy_id'];
	$mercyNAME = $mercy3['mercy_name'];
	$mercyCOLOR = $mercy3['mercy_color'];
	$mercyLEVEL = $mercy3['mercy_level'];
	$mercyCOST = $mercy3['mercy_cost'];
	$mercyCOSTsell = (int)($mercy3['mercy_cost']/4);
	$mercyTIP = $mercy3['mercy_tip'];
	$mercyTYPE = $mercy3['mercy_type'];
	if($mercyTYPE == 1){
		$itemIMAGE = '15_1';
	}elseif($mercyTYPE == 2){
		$itemIMAGE = '15_3';
	}elseif($mercyTYPE == 3){
		$itemIMAGE = '15_3';
	}
	$mercyIMAGE = $mercy3['mercy_image'];
	$mercy4 = mysql_query("SELECT * FROM mercy_stats WHERE ms_mercyID = '".$mercyID."' ");
	$mercy5 = mysql_fetch_array($mercy4);
	$mercyLIFE = $mercy5['ms_life'];
	$mercySTRENGHT = $mercy5['ms_strenght'];
	$mercySKILL = $mercy5['ms_skill'];
	$mercyAGILITY = $mercy5['ms_agility'];
	$mercyCONSTITUTION = $mercy5['ms_constitution'];
	$mercyCHARISMA = $mercy5['ms_charisma'];
	$mercyINTELLIGENCE = $mercy5['ms_intelligence'];
}

$table1 = "<table>";
$table1 .= "<tr><td><img src=\'8501/img/npc/$mercyIMAGE.jpg\' align=\'absmiddle\' border=\'0\' /></td><td valign=\'top\'>";
$table1 .= "<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'>";
$table1 .= "<tr><td style=\'color:$mercyCOLOR;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>$mercyNAME</td></tr>";
$table1 .= "<tr><td style=\'color:#BA9700;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Puntos de vida: $mercyLIFE</td></tr>";
$table1 .= "<tr><td style=\'color:#BA9700;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Fuerza: $mercySTRENGHT</td></tr>";
$table1 .= "<tr><td style=\'color:#BA9700;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Habilidad: $mercySKILL</td></tr>";
$table1 .= "<tr><td style=\'color:#BA9700;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Agilidad: $mercyAGILITY</td></tr>";
$table1 .= "<tr><td style=\'color:#BA9700;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Constitución: $mercyCONSTITUTION</td></tr>";
$table1 .= "<tr><td style=\'color:#BA9700;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Carisma: $mercyCHARISMA</td></tr>";
$table1 .= "<tr><td style=\'color:#BA9700;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Inteligencia: $mercyINTELLIGENCE</td></tr>";
$table1 .= "<tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Nivel $mercyLEVEL</td></tr>";
$table1 .= "<tr><td style=\'color:#DDD;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Valor $mercyCOSTsell <img src=\'8501/img/res2d.gif\' alt=\'Oro\' title=\'Oro\' align=\'absmiddle\' border=\'0\' /></td></tr>";
$table1 .= "<tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>$mercyTIP</div></td></tr>";
$table1 .= "</table>";
$table1 .= "</td></tr>";
$table1 .= "</table>";
$tableC = $table1;
?>