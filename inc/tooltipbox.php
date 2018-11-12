<?php

$item1 = mysql_query("SELECT * FROM items WHERE item_id = '".$itemID."' ");
$item2 = mysql_num_rows($item1);
if($item2 == 0){
	
}else{
	$item3 = mysql_fetch_array($item1);
	$itemNAME = $item3['item_name'];
	$itemCOLOR = $item3['item_color'];
	$itemDAMAGE0 = $item3['item_damage0'];
	$itemDAMAGE1 = $item3['item_damage1'];
	$itemDAMAGE2 = $item3['item_damage2'];
	$itemSTRENGHT = $item3['item_strenght'];
	$itemSTRENGHTper = $item3['item_strenghtPer'];
	$strenghtpBI = (int)($userSTRENGHTbasic*$itemSTRENGHTper/100);
	$itemSKILL = $item3['item_skill'];
	$itemSKILLper = $item3['item_skillPer'];
	$skillpBI = (int)($userSKILLbasic*$itemSKILLper/100);
	$itemAGILITY = $item3['item_agility'];
	$itemAGILITYper = $item3['item_agilityPer'];
	$agilitypBI = (int)($userAGILITYbasic*$itemAGILITYper/100);
	$itemCONSTITUTION = $item3['item_constitution'];
	$itemCONSTITUTIONper = $item3['item_constitutionPer'];
	$constitutionpBI = (int)($userCONSTITUTIONbasic*$itemCONSTITUTIONper/100);
	$itemCHARISMA = $item3['item_charisma'];
	$itemCHARISMAper = $item3['item_charismaPer'];
	$charismapBI = (int)($userCHARISMAbasic*$itemCHARISMAper/100);
	$itemINTELLIGENCE = $item3['item_intelligence'];
	$itemINTELLIGENCEper = $item3['item_intelligencePer'];
	$intelligencepBI = (int)($userINTELLIGENCEbasic*$itemINTELLIGENCEper/100);
	$itemDEFENSE = $item3['item_defense'];
	$itemCRIT = $item3['item_crit'];
	$itemBLOCK = $item3['item_block'];
	$itemRESISTENCE = $item3['item_resistence'];
	$itemTHREAT = $item3['item_threat'];
	$itemHEAL = $item3['item_heal'];
	$itemHEALcrit = $item3['item_healCrit'];
	$itemLIFE = $item3['item_life'];
	$itemBONUS = $item3['item_bonusID'];
	if($itemBONUS >= 1){
		$bonus1 = mysql_query("SELECT * FROM item_bonus WHERE bonus_id = '".$itemBONUS."' ");
		$bonus2 = mysql_num_rows($bonus1);
		if($bonus2 == 0){
			$itemBONUS = 0;
		}else{
			$bonus3 = mysql_fetch_array($bonus1);
			$bonusNAME = $bonus3['bonus_name'];
			$bonusTEXT = $bonus3['bonus_text'];
			$bonusDAMAGE = $bonus3['bonus_damage'];
			$bonusDAMAGEper = $bonus3['bonus_damagePer'];
			$bonusDEFENSE = $bonus3['bonus_defense'];
			$bonusDEFENSEper = $bonus3['bonus_defensePer'];
			$bonusLIFE = $bonus3['bonus_life'];
			$bonusLIFEper = $bonus3['bonus_lifePer'];
			$bonusREQUIEREsoul = $bonus3['bonus_requiereSoul'];
			$bonusREQUIEREmercy = $bonus3['bonus_requiereMercy'];
			$bonusMERCYid = $bonus3['bonus_mercyID'];
			$bonusREQUIERElevel = $bonus3['bonus_requiereLevel'];
			$bonusREQUIEREstrenght = $bonus3['bonus_requiereStrenght'];
			$bonusREQUIEREskill = $bonus3['bonus_requiereSkill'];
			$bonusREQUIEREagility = $bonus3['bonus_requiereAgility'];
			$bonusREQUIEREconstitution = $bonus3['bonus_requiereConstitution'];
			$bonusREQUIEREcharisma = $bonus3['bonus_requiereCharisma'];
			$bonusREQUIEREintelligence = $bonus3['bonus_requiereIntelligence'];
			if($bonusREQUIEREsoul == 1){
				if($itemSOUL != 1){
					$itemBONUS = 1;
				}elseif($itemSOUL == 1){
					$itemBONUS = 2;
				}
			}
			if($bonusMERCYid == 1){
				$requiereMERCYid1 = mysql_query("SELECT * FROM item_user WHERE iu_id = '".$itemIID."' AND iu_mercyID = '".$bonusMERCYid."' ");
				$requiereMERCYid2 = mysql_num_rows($requiereMERCYid1);
				if($requiereMERCYid2 != 0){
					$itemBONUS = 2;
				}else{
					$itemBONUS = 1;
				}
			}
			if($bonusREQUIEREmercy == 1){
				$requiereMERCY1 = mysql_query("SELECT * FROM item_user WHERE iu_mercyItem = '".$bonusREQUIEREmercy."' ");
				$requiereMERCY2 = mysql_num_rows($requiereMERCY1);
				if($requiereMERCY2 != 0){
					$itemBONUS = 2;
				}else{
					$itemBONUS = 1;
				}
			}
			if($bonusREQUIERElevel >= 1){
				if($userLEVEL >= $bonusREQUIERElevel){
					$itemBONUS = 2;
				}else{
					$itemBONUS = 1;
				}
			}
			if($bonusREQUIEREstrenght >= 1){
				if($userSTRENGHT >= $bonusREQUIEREstrenght){
					$itemBONUS = 2;
				}else{
					$itemBONUS = 1;
				}
			}
			if($bonusREQUIEREskill >= 1){
				if($userSKILL >= $bonusREQUIEREskill){
					$itemBONUS = 2;
				}else{
					$itemBONUS = 1;
				}
			}
			if($bonusREQUIEREagility >= 1){
				if($userAGILITY >= $bonusREQUIEREagility){
					$itemBONUS = 2;
				}else{
					$itemBONUS = 1;
				}
			}
			if($bonusREQUIEREconstitution >= 1){
				if($userCONSTITUTION >= $bonusREQUIEREconstitution){
					$itemBONUS = 2;
				}else{
					$itemBONUS = 1;
				}
			}
			if($bonusREQUIEREcharisma >= 1){
				if($userCHARISMA >= $bonusREQUIEREcharisma){
					$itemBONUS = 2;
				}else{
					$itemBONUS = 1;
				}
			}
			if($bonusREQUIEREintelligence >= 1){
				if($userINTELLIGENCE >= $bonusREQUIEREintelligence){
					$itemBONUS = 2;
				}else{
					$itemBONUS = 1;
				}
			}
		}
	}
	$itemTIP = $item3['item_tip'];
	$itemUSE = $item3['item_use'];
	$itemCOST = $item3['item_cost'];
	$itemCOSTsell = (int)($itemCOST/4);
	$itemLEVEL = $item3['item_level'];
	$itemTYPE = $item3['item_type'];
	$itemIMAGE = $item3['item_image'];
	$itemSPACES = $item3['item_spaces'];

	$tableOPEN = "<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'>";
	$tableNAME = "<tr><td style=\'color:$itemCOLOR; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>$itemNAME</td></tr>";
	if($itemSOUL == 1){
		$tableSOUL = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>(Vinculado al alma)</td></tr>";
	}else{
		$tableSOUL = "";
	}
	if($itemTYPE == 1){
		$tableDAMAGE = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Daño $itemDAMAGE1 - $itemDAMAGE2</td></tr>";
	}else{
		if($itemDAMAGE0 >= 1){
			$tableDAMAGE = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Daño +$itemDAMAGE0</td></tr>";
		}else{
			$tableDAMAGE = "";
		}
	}
	if($itemDEFENSE >= 1){
		$tableDEFENSE = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Armadura +$itemDEFENSE</td></tr>";
	}else{
		$tableDEFENSE = "";
	}
	if($itemLIFE >= 1){
		$tableLIFE = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Salud +$itemLIFE</td></tr>";
	}else{
		$tableLIFE = "";
	}
	if($itemSTRENGHT >= 1){
		$tableSTRENGHT = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Fuerza +$itemSTRENGHT</td></tr>";
	}else{
		$tableSTRENGHT = "";
	}
	if($itemSTRENGHTper >= 1){
		$tableSTRENGHTper = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Fuerza +$itemSTRENGHTper% (+$strenghtpBI)</td></tr>";
	}else{
		$tableSTRENGHTper = "";
	}
	##
	if($itemSKILL >= 1){
		$tableSKILL = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Habilidad +$itemSKILL</td></tr>";
	}else{
		$tableSKILL = "";
	}
	if($itemSKILLper >= 1){
		$tableSKILLper = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Habilidad +$itemSKILLper% (+$skillpBI)</td></tr>";
	}else{
		$tableSKILLper = "";
	}
	##
	if($itemAGILITY >= 1){
		$tableAGILITY = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Agilidad +$itemAGILITY</td></tr>";
	}else{
		$tableAGILITY = "";
	}
	if($itemAGILITYper >= 1){
		$tableAGILITYper = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Agilidad +$itemAGILITYper% (+$agilitypBI)</td></tr>";
	}else{
		$tableAGILITYper = "";
	}
	##
	if($itemCONSTITUTION >= 1){
		$tableCONSTITUTION = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Constitucion +$itemCONSTITUTION</td></tr>";
	}else{
		$tableCONSTITUTION = "";
	}
	if($itemCONSTITUTIONper >= 1){
		$tableCONSTITUTIONper = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Constitucion +$itemCONSTITUTIONper% (+$constitutionpBI)</td></tr>";
	}else{
		$tableCONSTITUTIONper = "";
	}
	##
	if($itemCHARISMA >= 1){
		$tableCHARISMA = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Carisma +$itemCHARISMA</td></tr>";
	}else{
		$tableCHARISMA = "";
	}
	if($itemCHARISMAper >= 1){
		$tableCHARISMAper = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Carisma +$itemCHARISMAper% (+$charismapBI)</td></tr>";
	}else{
		$tableCHARISMAper = "";
	}
	##
	if($itemINTELLIGENCE >= 1){
		$tableINTELLIGENCE = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Inteligencia +$itemINTELLIGENCE</td></tr>";
	}else{
		$tableINTELLIGENCE = "";
	}
	if($itemINTELLIGENCEper >= 1){
		$tableINTELLIGENCEper = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Inteligencia +$itemINTELLIGENCEper% (+$intelligencepBI)</td></tr>";
	}else{
		$tableINTELLIGENCEper = "";
	}
	if($itemCRIT >= 1){
		$tableCRIT = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Golpe Critico +$itemCRIT</td></tr>";
	}else{
		$tableCRIT = "";
	}
	if($itemBLOCK >= 1){
		$tableBLOCK = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Bloqueo +$itemBLOCK</td></tr>";
	}else{
		$tableBLOCK = "";
	}
	if($itemRESISTENCE >= 1){
		$tableRESISTENCE = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Resistencia +$itemRESISTENCE</td></tr>";
	}else{
		$tableRESISTENCE = "";
	}
	if($itemTHREAT >= 1){
		$tableTHREAT = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Amenaza +$itemTHREAT</td></tr>";
	}else{
		$tableTHREAT = "";
	}
	if($itemHEAL >= 1){
		$tableHEAL = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Curacion +$itemHEAL</td></tr>";
	}else{
		$tableHEAL = "";
	}
	if($itemHEALcrit >= 1){
		$tableHEALcrit = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Curacion Critica +$itemHEALcrit</td></tr>";
	}else{
		$tableHEALcrit = "";
	}

	if($itemBONUS == 2){
		$tableBONUS = "<tr><td style=\'color:#00B712; font-weight: bold; font-size:8pt\' colspan=\'2\' ><div style=\'width:250px;\'>$bonusNAME: $bonusTEXT</div></td></tr>";
	}elseif($itemBONUS == 1){
		$tableBONUS = "<tr><td style=\'color:#FF0000; font-weight: bold; font-size:8pt\' colspan=\'2\' ><div style=\'width:250px;\'>$bonusNAME: $bonusTEXT</div></td></tr>";
	}else{
		$tableBONUS = "";
	}

	$tableLEVEL = "<tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Nivel $itemLEVEL</td></tr>";
	$tableCOSTsell = "<tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Valor $itemCOSTsell <img src=\'8501/img/res2d.gif\' alt=\'Oro\' title=\'Oro\' align=\'absmiddle\' border=\'0\' /></td></tr>";
	if(!empty($itemTIP)){
		$tableTIP = "<tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>$itemTIP</td></tr>";
	}else{
		$tableTIP = "";
	}
	if(!empty($itemUSE)){
		$tableUSE = "<tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>$itemUSE</td></tr>";
	}else{
		$tableUSE = "";
	}
	$tableCLOSED = "</table>";
	$tableC1 = $tableOPEN . $tableNAME . $tableSOUL . $tableDAMAGE . $tableDEFENSE . $tableLIFE;
	$tableC2 = $tableSTRENGHT . $tableSTRENGHTper . $tableSKILL . $tableSKILLper . $tableAGILITY . $tableAGILITYper . $tableCONSTITUTION . $tableCONSTITUTIONper . $tableCHARISMA . $tableCHARISMAper . $tableINTELLIGENCE . $tableINTELLIGENCEper;
	$tableC3 = $tableCRIT . $tableBLOCK . $tableRESISTENCE . $tableTHREAT;
	$tableC4 = $tableHEAL . $tableHEALcrit;
	$tableC5 = $tableBONUS . $tableLEVEL . $tableCOSTsell . $tableTIP . $tableUSE . $tableCLOSED;
	$tableC = $tableC1 . $tableC2 . $tableC3 . $tableC4 . $tableC5;

}

?>