<?php

if(isset($_GET['mobID'])){
	$_GET['mobID'] = (int)($_GET['mobID']);
	$mobID = $_GET['mobID'];
	## ASEGURAMOS ANTES QUE EL PUEDA COMBATIR CONTRA ESTE ENEMIGO
	$paso1 = 0;
	if(($mobID == 1) || ($mobID == 5 && $userLEVEL >= 5) || ($mobID == 9 && $userLEVEL >= 10) || ($mobID == 13 && $userLEVEL >= 15) || ($mobID == 17 && $userLEVEL >= 20) || ($mobID == 21 && $userLEVEL >= 25) || ($mobID == 25 && $userLEVEL >= 30) || ($mobID == 29 && $userLEVEL >= 35) || ($mobID == 33 && $userLEVEL >= 40) || ($mobID == 37 && $userLEVEL >= 45) || ($mobID == 41 && $userLEVEL >= 50) || ($mobID == 45 && $useLEVEL >= 55) || ($mobID == 49 && $userLEVEL >= 60)){
		$paso1 = 1;
	}else{
		$mobID2 = $mobID-1;
		$asegurar1 = mysql_query("SELECT * FROM count_locu WHERE clu_monsterID = '".$mobID2."' AND clu_userID = '".$userID."' ");
		$asegurar3 = mysql_num_rows($asegurar1);
		if($asegurar3 != 0){
			$asegurar4 = mysql_fetch_array($asegurar1);
		}
		$asegurar2 = $asegurar4['clu_wins'];
		if($asegurar2 == 1){
			$paso1 = 1;
		}
	}
	if($paso1 == 1){
	## ASEGURAMOS QUE EL USUARIO PUEDA COMBATIR (TENER MAS DE 5 DE VIDA)
	if($userLIFE > 5){
	## ASEGURAMOS QUE EXISTA EL ID
	if($mobID != 0){
		## ASEGURAMOS QUE EXISTA EL ENEMIGO
		$prebatalla1 = mysql_query("SELECT * FROM monsters WHERE monster_id = '".$mobID."' ");	
		if(!empty($prebatalla1)){
			## GENERAMOS UN CODIGO
			$codeP = rand(100000000,999999999);
			## VERIFICAMOS QUE NO EXISTA
			$verificar1 = mysql_query("SELECT * FROM mob_reports WHERE mr_codeP = '".$codeP."' ");
			$verificar2 = mysql_num_rows($verificar1);
			if($verificar2 == 0){
				## CREAMOS LA TABLA CON EL NUEVO CODIGO
				$crear1 = "INSERT INTO mob_reports SET mr_codeP = '".$codeP."', mr_userID = '".$userID."', mr_mobID = '".$mobID."' ";
				$crear2 = mysql_query($crear1);
				if($crear2){
					## EMPIEZA LA ACCION
					## PARTE 1: BUSCAR INFORMACION DEL ENEMIGO
					include ('reports/mobPart1.php');
					## PARTE 2: REESTABLECER LA TABLA
					$reponer1 = mysql_fetch_array(mysql_query("SELECT * FROM mob_reports WHERE mr_codeP = '".$codeP."' "));
					$reportID = $reponer1['mr_id'];
					## PARTE 3: CALCULAR RATES/CHANCES
					include ('reports/mobPart3.php');
					## PARTE 4: PELEA
					$ronda = 1;
					$finish = 0;
					$userLIFEn = $userLIFE;
					$monsterLIFEn = $monsterLIFE1;
					$userPOINTS = 0;
					$monsterPOINTS = 0;
					while ($ronda <= 10 && $userLIFE > 1 && $monsterLIFE > 1 && $finish != 1) {

						## PASAMOS A LA SIGUIENTE RONDA
						$ronda++;

						## TURNO ENEMIGO
						include ('reports/enemyTurn.php');

						## TURNO USUARIO
						include ('reports/userTurn.php');

						## CREAMOS LA TABLA
						include ('reports/mobRtxt.php');
					}
					## PARTE 5: RESULTADOS/RECOMPENSAS
					include ('reports/mobPart5.php');

					## PARTE 6: TABLAS RESTANTES
					include ('reports/vsTable.php');
					include ('reports/reportTable.php');

					## PARTE 7: ACTUALIZAMOS EL CONTADOR
					$contador1 = mysql_fetch_array(mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$mobID."' "));
					$clID = $contador1['clu_id'];
					$fwin = $contador1['clu_wins'];
					if($fwin == 0){
						if($mww == 1){
							$contador2 = "UPDATE count_locu SET clu_wins = 1 WHERE clu_id = '".$clID."' ";
							$contador2q = mysql_query($contador2);
						}
					}
					$contador3 = "UPDATE count_locu SET clu_fights = clu_fights + 1 WHERE clu_id = '".$clID."' ";
					$contador3q = mysql_query($contador3);

					## PARTE 8: MISIONES
					include ('reports/quests.php');

					## MANDAMOS A QUE VEA LOS RESULTADOS
					echo
					'
					<script type="text/javascript">
            		window.location="showCombatReport.php?t=0&reportId='.$reportID.'";
            		</script>
					';
					
					## FINAL
				}
			}
		}
	}
	##
	}else{
		echo '<script type="text/javascript">window.location="overview.php";</script>';
	}
	##
	}else{
		echo '<script type="text/javascript">window.location="overview.php";</script>';
	}
}

?>