<?php

## MISION 1 // MISION DE NIVELES
$requiere1 = 0;
$requiere2 = 0;
if ($mision1 == 0) {
	$requiere2 = 5;
} elseif ($mision1 == 1) {
	$requiere2 = 10;
} elseif ($mision1 == 2) {
	$requiere2 = 20;
} elseif ($mision1 == 3) {
	$requiere2 = 40;
} elseif ($mision1 == 4) {
	$requiere2 = 50;
} elseif ($mision1 == 5) {
	$requiere2 = 80;
} elseif ($mision2 == 6) {
	$requiere2 = 100;
} else {
	$requiere2 = 999;
}
$requiere1 = $userLEVEL;
$mision1c = 0;
$mision1p = (int)(($requiere1 * 100)/$requiere2);
if ($requiere1 >= $requiere2) {
	$mision1c = 1;
}

## MISION 2 // MISION DE HABILIDADES
$requiere3 = 0;
$requiere4 = 0;
$requiere5 = 0;
if ($mision2 == 0) {
	$requiere4 = 10;
} elseif ($mision2 == 1) {
	$requiere4 = 20;
} elseif ($mision2 == 2) {
	$requiere4 = 40;
} elseif ($mision2 == 3) {
	$requiere4 = 80;
} elseif ($mision2 == 4) {
	$requiere4 = 100;
} elseif ($mision2 == 5) {
	$requiere4 = 150;
} elseif ($mision2 == 6) {
	$requiere4 = 200;
} else {
	$requiere4 = 999;
}
if ($userSTRENGHTbasic >= $requiere4) {
	$requiere3++;
}
if ($userSKILLbasic >= $requiere4) {
	$requiere3++;
}
if ($userAGILITYbasic >= $requiere4) {
	$requiere3++;
}
if ($userCONSTITUTIONbasic >= $requiere4) {
	$requiere3++;
}
if ($userCHARISMAbasic >= $requiere4) {
	$requiere3++;
}
if ($userINTELLIGENCEbasic >= $requiere4) {
	$requiere3++;
}
$requiere5 = 6;
$mision2c = 0;
$mision2p = (int)(($requiere3 * 100)/$requiere5);
if ($requiere3 >= $requiere5) {
	$mision2c = 1;
}

## MISION 3 // MISION DE SONDEO
$requiere6 = 0;
$requiere7 = 0;
$sondeo1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID ");
$sondeo2 = 1;
$sondeo3 = mysql_num_rows($sondeo1);
while ($sondeo2 <= $sondeo3) {
	$sondeo2++;
	$sondeo4 = mysql_fetch_array($sondeo1);
	$bonus1 = $sondeo4['clu_bonusGold'];
	$bonus2 = $sondeo4['clu_bonusExp'];
	$bonus3 = $sondeo4['clu_bonusDrop'];
	$bonus4 = $sondeo4['clu_bonusHonor'];
	if ($bonus1 == 1 && $bonus2 == 1 && $bonus3 == 1 && $bonus4 == 1) {
		$requiere6++;
	}
}
if ($mision3 == 0) {
	$requiere7 = 1;
} elseif ($mision3 == 1) {
	$requiere7 = 2;
} elseif ($mision3 == 2) {
	$requiere7 = 4;
} elseif ($mision3 == 3) {
	$requiere7 = 8;
} elseif ($mision3 == 4) {
	$requiere7 = 16;
} elseif ($mision3 == 5) {
	$requiere7 = 28;
} elseif ($mision3 == 6) {
	$requiere7 = 60;
} else {
	$requiere7 = 999;
}
$mision3c = 0;
$mision3p = (int)(($requiere6 * 100)/$requiere7);
if ($requiere6 >= $requiere7) {
	$mision3c = 1;
}

## MISION 4 // MISION DE JEFES DE ZONA
$requiere8 = 0;
$requiere9 = 0;
$jefes1 = 1;
$jefes2 = 0;
$jefes3 = 3;
while ($jefes1 <= $jefes3) {
	$jefes1++;
	$jefes2 += 4;
	$jefes4 = mysql_fetch_array(mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$jefes2."' "));
	$victoria = $jefes4['clu_wins'];
	if ($victoria >= 1) {
		$requiere8++;
	}
}
if ($mision4 == 0) {
	$requiere9 = 1;
} elseif ($mision4 == 1) {
	$requiere9 = 2;
} elseif ($mision4 == 2) {
	$requiere9 = 3;
} elseif ($mision4 == 3) {
	$requiere9 = 4;
} elseif ($mision4 == 4) {
	$requiere9 = 5;
} elseif ($mision4 == 5) {
	$requiere9 = 6;
} elseif ($mision4 == 6) {
	$requiere9 = 7;
} else {
	$requiere9 = 999;
}
$mision4c = 0;
$mision4p = (int)(($requiere8 * 100)/$requiere9);
if ($requiere8 >= $requiere9) {
	$mision4c = 1;
}

## MISION 5 // MISION VICTORIAS ARENA
$requiere10 = 0;
$requiere11 = 0;
$requiere10 = 1;
$requiere11 = 2;
$mision5c = 0;
$mision5p = (int)(($requiere10 * 100)/$requiere11);
if ($requiere10 >= $requiere11) {
	$mision5c = 1;
}

## MISION 6 // MISION POSICION ARENA
$requiere12 = 0;
$requiere13 = 0;
$requiere12 = 1;
$requiere13 = 2;
$mision6c = 0;
$mision6p = (int)(($requiere12 * 100)/$requiere13);
if ($requiere12 >= $requiere13) {
	$mision6c = 1;
}

## MISION 7 // MISION VALOR DE DAÑO
$requiere14 = 0;
$requiere15 = 0;
$requiere14 = $userDAMAGEmax;
if ($mision7 == 0) {
	$requiere15 = 14;
} elseif ($mision7 == 1) {
	$requiere15 = 33;
} elseif ($mision7 == 2) {
	$requiere15 = 62;
} elseif ($mision7 == 3) {
	$requiere15 = 98;
} elseif ($mision7 == 4) {
	$requiere15 = 120;
} elseif ($mision7 == 5) {
	$requiere15 = 188;
} elseif ($mision7 == 6) {
	$requiere15 = 222;
} else {
	$requiere15 = 999;
}
$mision7c = 0;
$mision7p = (int)(($requiere14 * 100)/$requiere15);
if ($requiere14 >= $requiere15) {
	$mision7c = 1;
}

## MISION 8 // MISION VALOR DE ARMADURA
$requiere16 = 0;
$requiere17 = 0;
$requiere16 = $userARMOR;
if ($mision8 == 0) {
	$requiere17 = 370;
} elseif ($mision8 == 1) {
	$requiere17 = 888;
} elseif ($mision8 == 2) {
	$requiere17 = 1511;
} elseif ($mision8 == 3) {
	$requiere17 = 2209;
} elseif ($mision8 == 4) {
	$requiere17 = 2710;
} elseif ($mision8 == 5) {
	$requiere17 = 3415;
} elseif ($mision8 == 6) {
	$requiere17 = 4000;
} else {
	$requiere17 = 99999;
}
$mision8c = 0;
$mision8p = (int)(($requiere16 * 100)/$requiere17);
if ($requiere16 >= $requiere17) {
	$mision8c = 1;
}

## MISION 9 // MISION DIOSES
$requiere18 = 0;
$requiere19 = 0;
$requiere20 = 0;
if ($mision9 == 0) {
	$requiere20 = 1;
} elseif ($mision9 == 1) {
	$requiere20 = 5;
} elseif ($mision9 == 2) {
	$requiere20 = 20;
} elseif ($mision9 == 3) {
	$requiere20 = 50;
} elseif ($mision9 == 4) {
	$requiere20 = 100;
} elseif ($mision9 == 5) {
	$requiere20 = 200;
} elseif ($mision9 == 6) {
	$requiere20 = 500;
} else {
	$requiere20 = 9999;
}
$dioses1 = mysql_query("SELECT * FROM godsa WHERE ga_userID = '".$userID."' ");
$dioses2 = mysql_fetch_array($dioses1);
for ($dn=1; $dn < 6; $dn++) { 
	for ($dl=1; $dl < 3; $dl++) { 
		$array1 = 'ga_';
		$array2 = "g$dn";
		$array3 = "n$dl";
		$array = $array1 . $array2 . $array3;
		$valor = $dioses2[$array];
		if ($valor > 0) {
			$requiere18++;
			if ($requiere18 > $requiere20) {
				$requiere19++;
			}
		}
	}
}
$mision9c = 0;
$mision9p = (int)(($requiere19 * 100)/$requiere20);
if ($requiere19 >= $requiere20) {
	$mision9c = 1;
}

## MISION 10 // MISION CONCLUIR MISIONES
$requiere21 = 0;
$requiere22 = 0;
$requeire21 = $uQuests;
if ($mision10 == 0) {
	$requiere22 = 10;
} elseif ($mision10 == 0) {
	$requiere22 = 20;
} elseif ($mision10 == 0) {
	$requiere22 = 50;
} elseif ($mision10 == 0) {
	$requiere22 = 100;
} elseif ($mision10 == 0) {
	$requiere22 = 180;
} elseif ($mision10 == 0) {
	$requiere22 = 250;
} elseif ($mision10 == 0) {
	$requiere22 = 400;
} else {
	$requiere22 = 9999;
}
$mision10c = 0;
$mision10p = (int)(($requiere21 * 100)/$requiere22);
if ($requiere21 >= $requiere22) {
	$mision10c = 1;
}

?>