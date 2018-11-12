<?php
					$Mid = $mobID;
					include ('db/monsters.php');
					## NOMBRE
					$monsterNAME1 = $monsterNAME;

					## LEVEL
					$monsterLEVEL1 = $monsterLEVEL;

					## VIDA
					$monsterLIFE1 = $monsterLIFE;

					## CALCULADORA
					## Valores X:
					## Muy debil = 1,1
					## Debil = 1,3
					## Normal = 2,4
					## Bueno = 3,4
					## Satisfactorio = 4,5
					## ValorX * NivelX

					## EN CASO DE ARMADURA
					## 5,50
					## 50,100
					## 100,150
					## 150,200
					## 200,300

					## FUERZA
					
					$monsterSTRENGHT1 = rand($monsterST1,$monsterST2);

					## HABILIDAD
					$monsterSKILL1 = rand($monsterSK1,$monsterSK2);

					## AGILIDAD
					$monsterAGILITY1 = rand($monsterAG1,$monsterAG2);

					## CONSTITUCION
					$monsterCONSTITUTION1 = rand($monsterCO1,$monsterCO2);

					## CARISMA
					$monsterCHARISMA1 = rand($monsterCH1,$monsterCH2);

					## INTELIGENCIA
					$monsterINTELLIGENCE1 = rand($monsterIN1,$monsterIN2);

					## ARMADURA
					$monsterARMORf = $monsterAR2;
					$monsterREDUCEdmg1 = (int)($monsterARMORf/80);
					$monsterREDUCEdmg2 = (int)($monsterARMORf/60);

					## DAÑO
					$monsterDAMAGEmin = $monsterDAMAGEmin;
					$monsterDAMAGEmax = $monsterDAMAGEmax;
?>