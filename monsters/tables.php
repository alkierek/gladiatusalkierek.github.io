<?php

$monsterLIFEtxt = '?';
$monsterLEVELtxt = '?';
$monsterSTRENGHTtxt = '?';
$monsterSKILLtxt = '?';
$monsterAGILITYtxt = '?';
$monsterCONSTITUTIONtxt = '?';
$monsterCHARISMAtxt = '?';
$monsterINTELLIGENCEtxt = '?';
$monsterARMORtxt = '?';
$monsterDAMAGEtxt = '?';
$conocer1 = mysql_fetch_array(mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' "));
$peleas = $conocer1['clu_fights'];
if($peleas >= 1){
	$monsterNAME = $monsterNAME;
	$monsterLEVELtxt = "$monsterLEVEL1 - $monsterLEVEL2";
}else{
	$monsterNAME = '???';
}

if($peleas >= 2){
	$monsterCONSTITUTIONtxt = $monsterCONSTITUTION;
}
if($peleas >= 3){
	$monsterSTRENGHTtxt = $monsterSTRENGHT;
}
if($peleas >= 4){
	$monsterSKILLtxt = $monsterSKILL;
}
if($peleas >= 5){
	$monsterAGILITYtxt = $monsterAGILITY;
}
if($peleas >= 6){
	$monsterARMORtxt = $monsterARMOR;
}
if($peleas >= 7){
	$monsterINTELLIGENCEtxt = $monsterINTELLIGENCE;
}
if($peleas >= 8){
	$monsterDAMAGEtxt = $monsterDAMAGE;
}
if($peleas >= 9){
	$monsterCHARISMAtxt = $monsterCHARISMA;
}
if($peleas >= 10){
	$monsterLIFEtxt = "$monsterLIFE1 - $monsterLIFE2";
}

$Mtable = "<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'>";
$Mtable .= "<tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>$monsterNAME</td></tr>";
$Mtable .= "<tr><td style=\'text-align:left;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Nivel</td>";
$Mtable .= "<td style=\'padding-left:20px;text-align:right;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>$monsterLEVELtxt</td></tr>";
$Mtable .= "<tr><td style=\'text-align:left;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Puntos de vida</td>";
$Mtable .= "<td style=\'padding-left:20px;text-align:right;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>$monsterLIFEtxt</td></tr>";
$Mtable .= "<tr><td style=\'text-align:left;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Fuerza</td>";
$Mtable .= "<td style=\'padding-left:20px;text-align:right;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>$monsterSTRENGHTtxt</td></tr>";
$Mtable .= "<tr><td style=\'text-align:left;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Habilidad</td>";
$Mtable .= "<td style=\'padding-left:20px;text-align:right;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>$monsterSKILLtxt</td></tr>";
$Mtable .= "<tr><td style=\'text-align:left;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Agilidad</td>";
$Mtable .= "<td style=\'padding-left:20px;text-align:right;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>$monsterAGILITYtxt</td></tr>";
$Mtable .= "<tr><td style=\'text-align:left;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Constitución</td>";
$Mtable .= "<td style=\'padding-left:20px;text-align:right;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>$monsterCONSTITUTIONtxt</td></tr>";
$Mtable .= "<tr><td style=\'text-align:left;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Carisma</td>";
$Mtable .= "<td style=\'padding-left:20px;text-align:right;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>$monsterCHARISMAtxt</td></tr>";
$Mtable .= "<tr><td style=\'text-align:left;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Inteligencia</td>";
$Mtable .= "<td style=\'padding-left:20px;text-align:right;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>$monsterINTELLIGENCEtxt</td></tr>";
$Mtable .= "<tr><td style=\'text-align:left;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Armadura</td>";
$Mtable .= "<td style=\'padding-left:20px;text-align:right;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>$monsterARMORtxt</td></tr>";
$Mtable .= "<tr><td style=\'text-align:left;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>Daño</td>";
$Mtable .= "<td style=\'padding-left:20px;text-align:right;color:white;font-weight:bold;font-size:8pt\' nowrap=\'nowrap\'>$monsterDAMAGEtxt</td></tr>";
$Mtable .= "</table>";
?> 