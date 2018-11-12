<?php

if ($crearQ == 1) {
	$conteoQ = $umisiones2+1;
	while ($conteoQ <= $maxQV) {
		$conteoQ++;
		## TIPO Y NOMBRE DE LA MISION ##
		$generar1 = rand(1,1);
		if ($generar1 == 1) {
			$generar2 = 'Vence a ';
			$generar3 = ' enemigos cualquieras en expediciones o en la arena';
		}elseif ($generar1 == 2) {
			$generar2 = 'Vence a ';
			$generar3 = ' enemigos en la arena';
		}
		if ($userLEVEL >= 100) {
			$generar4 = rand(20,30);
		}elseif ($userLEVEL >= 70) {
			$generar4 = rand(15,20);
		}elseif ($userLEVEL >= 45) {
			$generar4 = rand(10,15);
		}elseif ($userLEVEL >= 10) {
			$generar4 = rand(5,10);
		}else{
			$generar4 = rand(1,5);
		}
		$generar5 = $generar2 . $generar4 . $generar3;
		## RECOMPENSAS ##
		if ($generar1 == 1) {
			$generar6 = 1.5*$userLEVEL;
			$generar7 = rand(5,10);
		}elseif ($generar1 == 2) {
			$generar6 = 1.8*$userLEVEL;
			$generar7 = rand(8,15);
		}
		## ORO ##
		$generar8 = (($generar4*$generar7)+$generar6)*$userLEVEL*10;
		## DIOSES ##
		$generar9 = rand(1,6);
		$generar10 = $generar9;
		while ($generar10 == $generar9) {
			$generar10 = rand(1,6);
		}
		$generar11 = (int)(0.1*$userLEVEL+$generar6);
		$generar21 = rand(1,$generar11);
		$generar22 = rand(1,$generar11);
		$generar21*=10;
		$generar22*=10;
		## HONOR ##
		$generar12 = rand(10,50);
		## EXP ##
		$generar13 = rand(0,5);
		$generar19 = rand(5,10);
		$generar14 = (int)($generar13*($userLEVEL/$generar19));
		## ITEM ##
		$generar15 = 0;
		## ENEMY ##
		$generar16 = 0;
		$generar17 = 0;
		$generar18 = $generar4;
		## GENERAR ##
		$generar20 = "INSERT INTO quests SET quest_userID = '".$userID."', quest_type = '".$generar1."', quest_name = '".$generar5."', quest_gold = '".$generar8."', quest_god1 = '".$generar9."', quest_cgod1 = '".$generar21."', quest_god2 = '".$generar10."', quest_cgod2 = '".$generar22."', quest_honor = '".$generar12."', quest_exp = '".$generar14."', quest_itemID = '".$generar15."', quest_enemyID = '".$generar16."', quest_enemyK = '".$generar17."', quest_enemyKM = '".$generar18."' ";
		$generar23 = mysql_query($generar20);
	}
	echo "<body><script type='text/javascript'>window.location='quests.php';</script></body>";
}

?>