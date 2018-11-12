<?php
						$dobleEx1 = rand(0,$enemyDOUBLEhit);
						$dobleEx2 = rand(0,50);
						$dobleE1 = $dobleEx1 + $dobleEx2;
						$EDH = 0;
						if($dobleE1 > 50){
							$EDH = 1;
							$golpearEx1 = rand(5,$enemyHITrate);
							$golpearEx2 = rand(5,50);
							$golpearE1 = $golpearEx1 + $golpearEx2;
							if($golpearE1 > 50){
								$damageUR1 = rand($monsterDAMAGEmin,$monsterDAMAGEmax);
								$damageUR2 = rand($userREDUCEdmg1,$userREDUCEdmg2);
								$damageURT = $damageUR1-$damageUR2;
								if($damageURT < 1){
									$damageURT = 0;
								}
								if($damageURT > $userLIFEn){
									$damageURT = $userLIFEn-1;
								}
								$monsterTIMEtxt1 = '<font color="red">'.$userNAME.' recibe '.$damageURT.' puntos de daño</font>';
								$userLIFEn -= $damageURT;
								$monsterPOINTS += $damageURT;
							}else{
								$monsterTIMEtxt1 = "Fallado";
							}
							if($userLIFEn > 1){
								$golpearEx1 = rand(5,$enemyHITrate);
								$golpearEx2 = rand(5,50);
								$golpearE1 = $golpearEx1 + $golpearEx2;
								if($golpearE1 > 50){
									$damageUR1 = rand($monsterDAMAGEmin,$monsterDAMAGEmax);
									$damageUR2 = rand($userREDUCEdmg1,$userREDUCEdmg2);
									$damageURT = $damageUR1-$damageUR2;
									if($damageURT < 1){
										$damageURT = 0;
									}
									if($damageURT > $userLIFEn){
										$damageURT = $userLIFEn-1;
									}
									$monsterTIMEtxt2 = '<font color="red">'.$userNAME.' recibe '.$damageURT.' puntos de daño</font>';
									$userLIFEn -= $damageURT;
									$monsterPOINTS += $damageURT;
								}else{
									$monsterTIMEtxt2 = "Fallado";
								}
							}
						}else{
							$golpearEx1 = rand(5,$enemyHITrate);
							$golpearEx2 = rand(5,50);
							$golpearE1 = $golpearEx1 + $golpearEx2;
							if($golpearE1 > 50){
								$damageUR1 = rand($monsterDAMAGEmin,$monsterDAMAGEmax);
								$damageUR2 = rand($userREDUCEdmg1,$userREDUCEdmg2);
								$damageURT = $damageUR1-$damageUR2;
								if($damageURT < 1){
									$damageURT = 0;
								}
								if($damageURT > $userLIFEn){
									$damageURT = $userLIFEn-1;
								}
								$monsterTIMEtxt1 = '<font color="red">'.$userNAME.' recibe '.$damageURT.' puntos de daño</font>';
								$userLIFEn -= $damageURT;
								$monsterPOINTS += $damageURT;
							}else{
								$monsterTIMEtxt1 = "Fallado";
							}
						}
						if($userLIFEn == 1){
							$finish = 1;
						}
?>