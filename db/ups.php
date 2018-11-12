<?php

##
## TYPE 1 STRENGHT
if ($upsTYPE == 1) {
	$upsNAME = 'Bendicion de la fuerza';
	$upsPOINTS = (int)($upsLEVEL*1.3);
	$upsBONUS = '+'.$upsPOINTS.' Fuerza';
	$upsCOST = (int)($upsLEVEL*2433.73);
	$upsCOST2 = number_format($upsCOST, 0, ",", ".");
}

?>