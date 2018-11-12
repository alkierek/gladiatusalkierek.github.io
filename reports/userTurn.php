<?php
						if($finish == 1 || $userLIFEn == 1){

						}else{
							$dobleUx1 = rand(0,$userDOUBLEhit);
							$dobleUx2 = rand(0,50);
							$dobleU1 = $dobleUx1 + $dobleUx2;
							$UDH = 0;
							if($dobleU1 > 50){
								$UDH = 1;
								$golpearUx1 = rand(5,$userHITrate);
								$golpearUx2 = rand(5,50);
								$golpearU1 = $golpearUx1 + $golpearUx2;
								if($golpearU1 > 50){
									$damageER1 = rand($userDAMAGEmin,$userDAMAGEmax);
									$damageER2 = rand($monsterREDUCEdmg1,$monsterREDUCEdmg2);
									$damageERT = $damageER1-$damageER2;
									if($damageERT < 1){
										$damageERT = 0;
									}
									if($damageERT > $monsterLIFEn){
										$damageERT = $monsterLIFEn-1;
									}
									$userTIMEtxt1 = '<font color="red">'.$monsterNAME.' recibe '.$damageERT.' puntos de daño</font>';
									$monsterLIFEn -= $damageERT;
									$userPOINTS += $damageERT;
								}else{
									$userTIMEtxt1 = "Fallado";
								}
								if($monsterLIFEn > 1){
									$golpearUx1 = rand(5,$userHITrate);
									$golpearUx2 = rand(5,50);
									$golpearU1 = $golpearUx1 + $golpearUx2;
									if($golpearU1 > 50){
										$damageER1 = rand($userDAMAGEmin,$userDAMAGEmax);
										$damageER2 = rand($monsterREDUCEdmg1,$monsterREDUCEdmg2);
										$damageERT = $damageER1-$damageER2;
										if($damageERT < 1){
											$damageERT = 0;
										}
										if($damageERT > $monsterLIFEn){
											$damageERT = $monsterLIFEn-1;
										}
										$userTIMEtxt2 = '<font color="red">'.$monsterNAME.' recibe '.$damageERT.' puntos de daño</font>';
										$monsterLIFEn -= $damageERT;
										$userPOINTS += $damageERT;
									}else{
										$userTIMEtxt2 = "Fallado";
									}
								}else{
									
								}
							}else{
								$golpearUx1 = rand(5,$userHITrate);
								$golpearUx2 = rand(5,50);
								$golpearU1 = $golpearUx1 + $golpearUx2;
								if($golpearU1 > 50){
									$damageER1 = rand($userDAMAGEmin,$userDAMAGEmax);
									$damageER2 = rand($monsterREDUCEdmg1,$monsterREDUCEdmg2);
									$damageERT = $damageER1-$damageER2;
									if($damageERT < 1){
										$damageERT = 0;
									}
									if($damageERT > $monsterLIFEn){
										$damageERT = $monsterLIFEn-1;
									}
									$userTIMEtxt1 = '<font color="red">'.$monsterNAME.' recibe '.$damageERT.' puntos de daño</font>';
									$monsterLIFEn -= $damageERT;
									$userPOINTS += $damageERT;
								}else{
									$userTIMEtxt1 = "Fallado";
								}
							}
						}
						if($monsterLIFEn == 1){
							$finish = 1;
						}
?>