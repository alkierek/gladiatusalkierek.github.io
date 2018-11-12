<?php

$primero = mysql_query("SELECT * FROM forge WHERE forge_userID = '".$userID."' ");
$segundo = mysql_num_rows($primero);
if ($segundo == 0) {
	$tercero = "INSERT INTO forge SET forge_userID = '".$userID."' ";
	$cuarto = mysql_query($tercero);
	if ($cuarto) {
		echo '<script type="text/javascript">window.location="";</script>';
	}
}else{
	$tercero = mysql_fetch_array($primero);
	$forgeID = $tercero['forge_id'];
	$forgeUSERid = $tercero['forge_userID'];
	$forgeEXP = $tercero['forge_exp'];
	$forgeEXPmax = $tercero['forge_expMAX'];
	$forgeLEVEL = $tercero['forge_level'];
	$forgePOINTS = $tercero['forge_points'];
	if ($forgeEXP >= $forgeEXPmax) {
		if ($forgeEXP > $forgeEXPmax) {
			$forgeEXP = $forgeEXP-$forgeEXPmax;
		}else{
			$forgeEXP = 0;
		}
		$forgeEXPmax*=1.5;
		$forgeLEVEL++;
		$nuevo1 = "UPDATE forge SET forge_exp = '".$forgeEXP."' WHERE forge_id = '".$forgeID."' ";
		$nuevo2 = mysql_query($nuevo1);
		$nuevo1 = "UPDATE forge SET forge_expMAX = '".$forgeEXPmax."' WHERE forge_id = '".$forgeID."' ";
		$nuevo2 = mysql_query($nuevo1);
		$nuevo1 = "UPDATE forge SET forge_level = '".$forgeLEVEL."' WHERE forge_id = '".$forgeID."' ";
		$nuevo2 = mysql_query($nuevo1);
		if($nuevo2){
			echo '<script type="text/javascript">window.location="";</script>';
		}
	}
	$weaponChanceF1 = 100;
	$weaponChanceF2 = 0;
	$weaponChanceF3 = 0;
	if ($forgeLEVEL <= 2) {
		$weaponChanceF2 = 1;
		$weaponChanceF3 = 1;
	} elseif ($forgeLEVEL <= 5) {
		$weaponChanceF2 = 2;
		$weaponChanceF3 = 2;
	} elseif ($forgeLEVEL <= 8) {
		$weaponChanceF2 = 3;
		$weaponChanceF3 = 3;
	} elseif ($forgeLEVEL <= 13) {
		$weaponChanceF2 = 5;
		$weaponChanceF3 = 4;
	} elseif ($forgeLEVEL <= 17) {
		$weaponChanceF2 = 6;
		$weaponChanceF3 = 5;
	}
	$weaponChanceF1 = $weaponChanceF1-$weaponChanceF2-$weaponChanceF3;
}

?>