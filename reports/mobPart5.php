<?php
					## TOMAMOS LOS PUNTOS PARA SABER QUIEN GANO
					$userPOINTS = $userPOINTS;
					$monsterPOINTS = $monsterPOINTS;
					## VERIFICAMOS QUE LA PARTIDA NO ALLA TERMINADO ANTES
					## GANADOR 1 = USUARIO 2 = ENEMIGO 0 = EMPATE
					$ganador = 0;
					if($finish != 1){
						if($userPOINTS > $monsterPOINTS){
							$ganador = 1;
							$tabla1 = '<div id="reportHeader" class="reportWin"><table cellspacing="0" cellpadding="0" width="100%" style="border-spacing:0px" border = "0"><tr><td valign="center" width="40">';
							$tabla2 = '<a title="al informe anterior" href="showCombatReport.php"><div class="previousReportButton"></div></a>';
							$tabla3 = '</td><td>Ganador: '.$userNAME.'</td><td valign="center" width="40"></td></tr></table></div>';
							$winTable = $tabla1 . $tabla2 . $tabla3;							
						}elseif($userPOINTS == $monsterPOINTS){
							$ganador = 0;
							$tabla1 = '<div id="reportHeader" class="reportDraw"><table cellspacing="0" cellpadding="0" width="100%" style="border-spacing:0px" border = "0"><tr><td valign="center" width="40">';
							$tabla2 = '<a title="al informe anterior" href="showCombatReport.php"><div class="previousReportButton"></div></a>';
							$tabla3 = '</td><td>Empate</td><td valign="center" width="40"></td></tr></table></div>';
							$winTable = $tabla1 . $tabla2 . $tabla3;
						}elseif($userPOINTS < $monsterPOINTS){
							$ganador = 2;
							$tabla1 = '<div id="reportHeader" class="reportLose"><table cellspacing="0" cellpadding="0" width="100%" style="border-spacing:0px" border = "0"><tr><td valign="center" width="40">';
							$tabla2 = '<a title="al informe anterior" href="showCombatReport.php"><div class="previousReportButton"></div></a>';
							$tabla3 = '</td><td>Ganador: '.$monsterNAME1.'</td><td valign="center" width="40"></td></tr></table></div>';
							$winTable = $tabla1 . $tabla2 . $tabla3;
						}
					}else{
						if($userLIFEn == 1){
							$ganador = 2;
							$tabla1 = '<div id="reportHeader" class="reportLose"><table cellspacing="0" cellpadding="0" width="100%" style="border-spacing:0px" border = "0"><tr><td valign="center" width="40">';
							$tabla2 = '<a title="al informe anterior" href="showCombatReport.php"><div class="previousReportButton"></div></a>';
							$tabla3 = '</td><td>Ganador: '.$monsterNAME1.'</td><td valign="center" width="40"></td></tr></table></div>';
							$winTable = $tabla1 . $tabla2 . $tabla3;
						}elseif($monsterLIFEn == 1){
							$ganador = 1;
							$tabla1 = '<div id="reportHeader" class="reportWin"><table cellspacing="0" cellpadding="0" width="100%" style="border-spacing:0px" border = "0"><tr><td valign="center" width="40">';
							$tabla2 = '<a title="al informe anterior" href="showCombatReport.php"><div class="previousReportButton"></div></a>';
							$tabla3 = '</td><td>Ganador: '.$userNAME.'</td><td valign="center" width="40"></td></tr></table></div>';
							$winTable = $tabla1 . $tabla2 . $tabla3;
						}
					}
					## INDICAMOS LOS PREMIOS SEGUN EL GANADOR
					if($ganador == 0){ ## EN CASO DE EMPATE
						$mww = 0;
						$iww = 0;
						$gww = 0;
						$hww = 0;
						$exw = 1;
					}elseif($ganador == 1){ ## EN CASO DE GANAR USUARIO
						$mww = 1;
						$gww = $monsterGOLD;
						$iww = 0;
						$iiw = 0; ## $iiw = rand(1,10);
						$hww1 = rand(1.5,4.5);
						$hww = (int)($hww1*$userLEVEL);
						$exw = rand(1,3);
						$bbonus1 = mysql_fetch_array(mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$mobID."' "));
						$bonusGOLD = $bbonus1['clu_bonusGold'];
						$bonusEXP = $bbonus1['clu_bonusExp'];
						$bonusDROP = $bbonus1['clu_bonusDrop'];
						$bonusHONOR = $bbonus1['clu_bonusHonor'];
						if($bonusGOLD == 1){
							$gww = (int)($gww*1.30);
						}
						if($bonusHONOR == 1){
							$hww = (int)($hww*1.20);
						}
						if($bonusEXP == 1){
							$exw = (int)($exw*1.30);
						}
						if($bonusDROP == 1){
							$iiw = $iiw+1;
						}
						$mboxc = 0;
						if($iiw > 5){
							$iww = 1;
						} else {
							$mboxc = rand(1,10);
							if ($mboxc > 8) {
								mysql_query("UPDATE premiuminv SET pi_box1 = pi_box1 + 1 WHERE pi_userID = '".$userID."' ");
								mysql_query("UPDATE mob_reports SET mr_mbox = 1 WHERE mr_codeP = '".$codeP."' ");
							}
						}
						$bwt = '';
						$bwc = rand(1,10);
						if ($bwc > 5) {
							$bidw = rand(1,4);
							if ($bidw == 1 && $bonusGOLD == 0) {
								mysql_query("UPDATE count_locu SET clu_bonusGold = 1 WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$mobID."' ");
								mysql_query("UPDATE mob_reports SET mr_bonus = 1 WHERE mr_codeP = '".$codeP."' ");
							} elseif ($bidw == 2 && $bonusEXP == 0) {
								$beot = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Batalla analítica</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>Debido a tu mejor análisis de tu enemigo consigues 30% más de experiencia en las batallas contra el.</div></td></tr></table>'";
								$bwt = '<p><div style="height:26px;line-height:26px;float:left;padding-right:8px">Bonus aprendido</div><div class="expedition_bonus" style="background-image:url(8501/img/expedition/bonus2.jpg);" onMouseOver="return escape('.$beot.')"></div></p>';
								mysql_query("UPDATE count_locu SET clu_bonusExp = 1 WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$mobID."' ");
								mysql_query("UPDATE mob_reports SET mr_bonus = 2 WHERE mr_codeP = '".$codeP."' ");
							} elseif ($bidw == 3 && $bonusDROP == 0) {
								$bdot = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Olfato del Refugio</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>El conocimiento sobre las costumbre de tu enemigo aumentan la probabilidad de encontrar un objeto en un 10%.</div></td></tr></table>'";
								$bwt = '<p><div style="height:26px;line-height:26px;float:left;padding-right:8px">Bonus aprendido</div><div class="expedition_bonus" style="background-image:url(8501/img/expedition/bonus3.jpg);" onMouseOver="return escape('.$bdot.')"></div></p>';
								mysql_query("UPDATE count_locu SET clu_bonusDrop = 1 WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$mobID."' ");
								mysql_query("UPDATE mob_reports SET mr_bonus = 3 WHERE mr_codeP = '".$codeP."' ");
							} elseif ($bidw == 4 && $bonusHONOR == 0) {
								$bhot = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Narrador de historias</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>Tus historias sobre el enemigo derrotado aumentan tu Honor en un 20%.</div></td></tr></table>'";
								$bwt = '<p><div style="height:26px;line-height:26px;float:left;padding-right:8px">Bonus aprendido</div><div class="expedition_bonus" style="background-image:url(8501/img/expedition/bonus4.jpg);" onMouseOver="return escape('.$bhot.')"></div></p>';
								mysql_query("UPDATE count_locu SET clu_bonusHonor = 1 WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$mobID."' ");
								mysql_query("UPDATE mob_reports SET mr_bonus = 4 WHERE mr_codeP = '".$codeP."' ");
							}
						}
						if ($mboxc > 5) {
							
						}
						if ($iww == 1) {
							$iidw = rand(1,77);
							mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = '".$iidw."' ");
							mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
						}
					}elseif($ganador == 2){ ## EN CASO DE GANAR ENEMIGO
						$mww = 2;
						$iww = 0;
						$gww = 0;
						$hww = 0;
						$exw = 0;
					}
					$actualizarR1 = "UPDATE mob_reports SET mr_ww = '".$mww."' WHERE mr_codeP = '".$codeP."' ";
					$actualizarR1q = mysql_query($actualizarR1);
					$actualizarR2 = "UPDATE mob_reports SET mr_winner = '".$winTable."' WHERE mr_codeP = '".$codeP."' ";
					$actualizarR2q = mysql_query($actualizarR2);
					if($mww == 1){
						$gww1 = number_format($gww, 0, ",", ".");
						$rTable1 = '<div class="report_reward"><div class="title_box"><div class="title_inner">Recompensa</div></div><div class="title2_box"><div class="title2_inner"><table width="100%" cellspacing="0" cellpadding="0"><tr><td>';
						$rTable2 = '<p><a href="player.php?p=">'.$userNAME.'</a> conseguiste: '.$gww1.' <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></p>';
						$rTable3 = '<p><a href="player.php?p=">'.$userNAME.'</a> ha recibido '.$exw.' puntos de experiencia</p>';
						$rTable4 = '<p><a href="player.php?p=">'.$userNAME.'</a> ha obtenido '.$hww.' Honor.</p>';
						$rTable5 = '</td><td>';
						$rTable6 = '<div style="clear: left;"></div></td></tr><tr><td colspan="2"></td></tr></table></div></div></div>';
						$rTable = "$rTable1 $rTable2 $rTable3 $rTable4";
						mysql_query("UPDATE mob_reports SET mr_price = '".$rTable."' WHERE mr_codeP = '".$codeP."' ");
						mysql_query("UPDATE mob_reports SET mr_price2 = '".$rTable5."' WHERE mr_codeP = '".$codeP."' ");
						mysql_query("UPDATE mob_reports SET mr_price3 = '".$rTable6."' WHERE mr_codeP = '".$codeP."' ");
						$actualizarR4 = "UPDATE mob_reports SET mr_gold = '".$gww."' WHERE mr_codeP = '".$codeP."' ";
						$actualizarR4q = mysql_query($actualizarR4);
					}elseif($mww == 0){
						$rTable1 = '<div class="report_reward"><div class="title_box"><div class="title_inner">Recompensa</div></div><div class="title2_box"><div class="title2_inner"><table width="100%" cellspacing="0" cellpadding="0"><tr><td>';
						$rTable3 = '<p><a href="player.php?p=">'.$userNAME.'</a> ha recibido '.$exw.' puntos de experiencia</p>';
						$rTable5 = '<div style="clear: left;"></div></td></tr><tr><td colspan="2"></td></tr></table></div></div></div>';
						$rTable = $rTable1 . $rTable3 . $rTable5;
						$actualizarR3 = "UPDATE mob_reports SET mr_price = '".$rTable."' WHERE mr_codeP = '".$codeP."' ";
						$actualizarR3q = mysql_query($actualizarR3);
					}else{
						$rTable = '';
						$actualizarR3 = "UPDATE mob_reports SET mr_price = '".$rTable."' WHERE mr_codeP = '".$codeP."' ";
						$actualizarR3q = mysql_query($actualizarR3);
					}
					if($iww == 1){
						$actualizarR5 = "UPDATE mob_reports SET mr_item = '".$iidw."' WHERE mr_codeP = '".$codeP."' ";
						$actualizarR5q = mysql_query($actualizarR5);
					}
					$actualizarR6 = "UPDATE users SET user_gold = user_gold + ".$gww." WHERE user_id = '".$userID."' ";
					$actualizarR6q = mysql_query($actualizarR6);
					$actualizarR7 = "UPDATE users SET user_exp = user_exp + ".$exw." WHERE user_id = '".$userID."' ";
					$actualizarR7q = mysql_query($actualizarR7);
					$actualizarR8 = "UPDATE users SET user_honor = user_honor + ".$hww." WHERE user_id = '".$userID."' ";
					$actualizarR8q = mysql_query($actualizarR8);
					$actualizarR9 = "UPDATE users SET user_life = '".$userLIFEn."' WHERE user_id = '".$userID."' ";
					$actualizarR9q = mysql_query($actualizarR9);
?>