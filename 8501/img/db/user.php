<?php
## REVISAMOS SESION
$ip = $_SERVER['REMOTE_ADDR'];
$sessionid1 = mysql_query("SELECT * FROM session WHERE session_ip = '".$ip."' ");
if (!empty($sessionid1)) {
	$sessionid2 = mysql_fetch_array($sessionid1);
	##$_SESSION['userid'] = $sessionid3['session_accid'];
	$SESSION1 = $sessionid2['session_accid'];
} else {
	header("Location: index.php");
}
if(empty($SESSION1)){ ## EN CASO QUE NO ESTE CONECTADO
	echo "No estas conectado, porfavor inicia session.";
	header("Location: index.php");
}else{ ## EN CASO CONTRARIO (QUE SI LO ESTE)
	$SESSION1 = (int)($SESSION1); ## VOLVEMOS LA SESION UN VALOR NUMERAL
	$mysql1 = mysql_query("SELECT * FROM accounts WHERE acc_id = '".$SESSION1."' LIMIT 1 "); ## SELECCIONAMOS LA CUENTA
	if(empty($mysql1)){ ## REVISAMOS QUE EXISTA
		header("Location: index.php");
	}else{ ## EN CASO QUE SI EXISTA
		$mysql2 = mysql_fetch_array($mysql1);
		$accID = $mysql2['acc_id'];
		$accNAME = $mysql2['acc_name'];
		$accEMAIL = $mysql2['acc_email'];
		$accPROVIN = $mysql2['acc_provin'];
		$accAFK = $mysql2['acc_afk'];
		$accCASH = $mysql2['acc_cash'];
		$accCASH = number_format($accCASH, 0, ",", ".");
		$accIP = $_SERVER['REMOTE_ADDR'];
		## AHORA VERIFICAMOS USUARIO
		$mysql3 = mysql_query("SELECT * FROM users WHERE user_accID = '".$accID."' LIMIT 1 ");
		$mysql3n = mysql_num_rows($mysql3);
		if($mysql3n == 0){
			mysql_query("INSERT INTO users SET user_accID = '".$accID."'");
			echo "<body><script type='text/javascript'>window.location='genderchangeUPDATE.php';</script></body>";
		}else{
			$mysql5 = mysql_fetch_array($mysql3);
			$userID = $mysql5['user_id'];
			$userNAME = $accNAME;
			## LOCATION
			include ('db/location.php');
			## GENERO
			$userGENDER = ''.$mysql5['user_gender'].'';
			$url = $_SERVER['REQUEST_URI'];
			if($userGENDER != 'f' && $userGENDER != 'm' && $url != '/genderchangeUPDATE.php'){
				echo "<body><script type='text/javascript'>window.location='genderchangeUPDATE.php';</script></body>";
			}
			if($url == '/genderchangeUPDATE.php'){
				if($userGENDER == 'f' || $userGENDER == 'm'){
					echo "<body><script type='text/javascript'>window.location='genderchangeUPDATE.php';</script></body>";
				}
			}
			## HONOR Y FAMA
			$userHONOR = $mysql5['user_honor'];
			$userFAME = $mysql5['user_fame'];
			## ORO
			$userGOLD = $mysql5['user_gold'];
			$userGOLD1 = number_format($userGOLD, 0, ",", ".");
			## NIVEL
			$userLEVEL = $mysql5['user_level'];
			$userLEVELnext = (int)($userLEVEL+1);
			## AVATAR
			if($userLEVEL >= 80){
				$userAVATARlvl = 80;
			}elseif($userLEVEL >= 70){
				$userAVATARlvl = 70;
			}elseif($userLEVEL >= 60){
				$userAVATARlvl = 60;
			}elseif($userLEVEL >= 50){
				$userAVATARlvl = 50;
			}elseif($userLEVEL >= 40){
				$userAVATARlvl = 40;
			}elseif($userLEVEL >= 30){
				$userAVATARlvl = 30;
			}elseif($userLEVEL >= 20){
				$userAVATARlvl = 20;
			}elseif($userLEVEL >= 10){
				$userAVATARlvl = 10;
			}elseif($userLEVEL >= 5){
				$userAVATARlvl = 5;
			}elseif($userLEVEL >= 1){
				$userAVATARlvl = 1;
			}
			$userEXP = $mysql5['user_exp'];
			$userEXPmax = $mysql5['user_expMAX'];
			$userEXPneed = (int)($userEXPmax-$userEXP);
			$userEXPper = (int)(($userEXP*100)/$userEXPmax);
			$anlvl = $mysql5['user_newLn'];
			if($userEXP >= $userEXPmax){
				$anlvl = 1;
			}
			if($userEXP < 0){
				$userEXP = 0;
				$newUlvl1 = "UPDATE users SET user_exp = '".$userEXP."' WHERE user_id = '".$userID."' ";
				$newUlvl2 = mysql_query($newUlvl1);
			}

			## OBJETOS
			$dañoAc = 0;
			$dañoMin = 0;
			$dañoMax = 0;
			$defensaAc = 0;
			$saludAc = 0;
			$fuerzaAc = 0;
			$pfuerzaAc = 0;
			$habilidadAc = 0;
			$phabilidadAc = 0;
			$agilidadAc = 0;
			$pagilidadAc = 0;
			$constiAc = 0;
			$pconstiAc = 0;
			$carismaAc = 0;
			$pcarismaAc = 0;
			$inteAc = 0;
			$pinteAc = 0;
			## PERSONAJE E INVENTARIO
			$doll1 = mysql_query("SELECT * FROM doll WHERE id = '".$userID."' ");
			$doll2 = mysql_num_rows($doll1);
			if (empty($doll2)) {
				$crear1 = "INSERT INTO doll SET id = '".$userID."' ";
				$crear2 = mysql_query($crear1);
				if ($crear2) {
					header("Location: ");
				}
			}
			$inv1 = mysql_query("SELECT * FROM inventory WHERE id = '".$userID."' ");
			$inv2 = mysql_num_rows($inv1);
			if (empty($inv2)) {
				$crear3 = "INSERT INTO inventory SET id = '".$userID."' ";
				$crear4 = mysql_query($crear3);
				if ($crear4) {
					header("Location: ");
				}
			}
			$inv3 = mysql_query("SELECT * FROM inventory2 WHERE id = '".$userID."' ");
			$inv4 = mysql_num_rows($inv3);
			if (empty($inv4)) {
				$crear5 = "INSERT INTO inventory2 SET id = '".$userID."' ";
				$crear6 = mysql_query($crear5);
				if ($crear6) {
					header("Location: ");
				}
			}
			$sshop1 = mysql_query("SELECT * FROM sshop1 WHERE id = '".$userID."' ");
			$sshop2 = mysql_num_rows($sshop1);
			if (empty($sshop2)) {
				$crear7 = "INSERT INTO sshop1 SET id = '".$userID."' ";
				$crear8 = mysql_query($crear7);
				if ($crear8) {
					header("Location: ");
				}
			}
			$falt = $userID;
			##
			if ($uinv == 1) {
				include_once("engine/functions.php");
				include_once("engine/functions4.php");
			} elseif ($uinv == 2) {
				include_once("engine/functions3.php");
				include_once("engine/functions5.php");
			}
			$fiu = mysql_query("SELECT * FROM doll WHERE id = '".$userID."' ");
			$fiu1 = 1;
			$fiu2 = mysql_fetch_array($fiu);
			$p2 = $fiu2['p2_1_1'];
			$p3 = $fiu2['p3_1_1'];
			$p4 = $fiu2['p4_1_1'];
			$p5 = $fiu2['p5_1_1'];
			$p6 = $fiu2['p6_1_1'];
			$p7 = $fiu2['p7_1_1'];
			$p8 = $fiu2['p8_1_1'];
			$p9 = $fiu2['p9_1_1'];
			$p10 = $fiu2['p10_1_1'];
			$p11 = $fiu2['p11_1_1'];
			$p12 = $fiu2['p12_1_1'];
			while ($fiu1 <= 12) {
				$fiu1++;
				$px = 0;
				if ($fiu1 == 2) {
					$px = $p2;
				} elseif ($fiu1 == 3) {
					$px = $p3;
				} elseif ($fiu1 == 4) {
					$px = $p4;
				} elseif ($fiu1 == 5) {
					$px = $p5;
				} elseif ($fiu1 == 6) {
					$px = $p6;
				} elseif ($fiu1 == 7) {
					$px = $p7;
				} elseif ($fiu1 == 8) {
					$px = $p8;
				} elseif ($fiu1 == 9) {
					$px = $p9;
				} elseif ($fiu1 == 10) {
					$px = $p10;
				} elseif ($fiu1 == 11) {
					$px = $p11;
				} elseif ($fiu1 == 12) {
					$px = $p12;
				}
				if ($px != NULL) {
					include_once("engine/functions.php"); // Fix by charles
					$item = getItemByID($px);
					if ($item != null) {
						foreach ($item as $key => $value) {
							if ($key == "damage"){
								$damagex1 = $value;
								$damagex1 = explode(" ", $damagex1);
								$damageMIN = $damagex1[0];
								$damageMAX = $damagex1[2];
								$dañoMin += $damageMIN;
								$dañoMax += $damageMAX;
							}
							if ($key == "damage_+") {
								$dañoAc += $value;
							}
							if ($key == "damage_add_green") {
								$dañoAc += $value;
							}
							if ($key == "armour") {
								$defensaAc += $value;
							}
							if ($key == "armour_add_green") {
								$defensaAc += $value;
							}
						}
					}
				}			
			}

			## VIDA
			$userLIFE = $mysql5['user_life'];
			$userLIFEbyLevel = (int)($userLEVEL*25);
			$userLIFEbyUps = 0;
			## REGENERACION
			$userLASTreg = $mysql5['user_lastREG'];
			$userREGbyLevel = (int)($userLEVEL*2);
			## FUERZA
			$userSTRENGHT = $mysql5['user_strenght'];
			$userSTRENGHTbyItem = 0;
			$userSTRENGHTbyItemMAX = 0;
			## HABILIDAD
			$userSKILL = $mysql5['user_skill'];
			$userSKILLbyItem = 0;
			$userSKILLbyItemMAX = 0;
			## AGILIDAD
			$userAGILITY = $mysql5['user_agility'];
			$userAGILITYbyItem = 0;
			$userAGILITYbyItemMAX = 0;
			## CONSTITUCION
			$userCONSTITUTION = $mysql5['user_constitution'];
			$userLIFEbyConstitution = (int)(75+(($mysql5['user_constitution']-5)*25));
			$userREGbyConstitution = (int)($mysql5['user_constitution']*2);
			$userREG = (int)($userREGbyConstitution+$userREGbyLevel);
			$userCONSTITUTIONbyItem = 0;
			$userCONSTITUTIONbyItemMAX = 0;
			## CARISMA
			$userCHARISMA = $mysql5['user_charisma'];
			$userCHARISMAbyItem = 0;
			$userCHARISMAbyItemMAX = 0;
			## INTELIGENCIA
			$userINTELLIGENCE = $mysql5['user_intelligence'];
			$userINTELLIGENCEbyItem = 0;
			$userINTELLIGENCEbyItemMAX = 0;
			## ARMADURA
			$userARMOR = 0;
			$userREDUCEdmg1 = (int)($userARMOR/74);
			$userREDUCEdmg2 = (int)($userARMOR/60.5);
			$userRESISTENCE = 0;
			$userRESISTENCEbyItems = 0;
			$userRESISTENCEbyAgility = 0;
			$userDODGEchance = 0;
			$userBLOCK = 0;
			$userBLOCKbyItems = 0;
			$userBLOCKbyStrenght = 0;
			$userBLOCKchance = 0;
			## DAÑO
			$userDAMAGEmin = 0;
			$userDAMAGEmax = 2;
			$userDAMAGEmin1 = 0;
			$userDAMAGEmax1 = 2;
			$userDAMAGEbyItems = 0;
			$userDAMAGEbyStrenght = 0;
			$userDAMAGEbyUps = 0;
			$userCRIT = 0;
			$userCRITbyItems = 0;
			$userCRITbySkill = 0;
			$userCRITchance = 0;

			$userMERCYh = 5;

			## CALCULANDO
			## NUEVA VIDA
			$userLIFEbyItems = $saludAc;
			## NUEVA FUERZA
			$userSTRENGHTmax = (int)($userSTRENGHT/2)+$userLEVEL+$userSTRENGHT;
			$userSTRENGHTbasic = $userSTRENGHT;
			$userSTRENGHTppi = (int)(($userSTRENGHTbasic*$pfuerzaAc)/100);
			$userSTRENGHT = $userSTRENGHT+$fuerzaAc+$userSTRENGHTppi;
			if($userSTRENGHT > $userSTRENGHTmax){
				$userSTRENGHT = $userSTRENGHTmax;
			}
			$userSTRENGHTper = (int)($userSTRENGHT*100/$userSTRENGHTmax);
			$userSTRENGHTbyItem = $fuerzaAc+$userSTRENGHTppi-$userSTRENGHT;
			$userSTRENGHTbyItem = $fuerzaAc+$userSTRENGHTppi-$userSTRENGHTbyItem-$userSTRENGHTbasic;
			$userSTRENGHTbyItemMAX = $fuerzaAc+$userSTRENGHTppi;
			## NUEVA HABILIDAD
			$userSKILLmax = (int)($userSKILL/2)+$userLEVEL+$userSKILL;
			$userSKILLbasic = $userSKILL;
			$userSKILLppi = (int)($userSKILLbasic*$phabilidadAc/100);
			$userSKILL = $userSKILL+$habilidadAc+$userSKILLppi;
			if($userSKILL > $userSKILLmax){
				$userSKILL = $userSKILLmax;
			}
			$userSKILLper = (int)($userSKILL*100/$userSKILLmax);
			$userSKILLbyItem = $habilidadAc+$userSKILLppi-$userSKILL;
			$userSKILLbyItem = $habilidadAc+$userSKILLppi-$userSKILLbyItem-$userSKILLbasic;
			$userSKILLbyItemMAX = $habilidadAc+$userSKILLppi;
			## NUEVA AGILIDAD
			$userAGILITYmax = (int)($userAGILITY/2)+$userLEVEL+$userAGILITY;
			$userAGILITYbasic = $userAGILITY;
			$userAGILITYppi = (int)($userAGILITYbasic*$pagilidadAc/100);
			$userAGILITY = $userAGILITY+$agilidadAc+$userAGILITYppi;
			if($userAGILITY > $userAGILITYmax){
				$userAGILITY = $userAGILITYmax;
			}
			$userAGILITYper = (int)($userAGILITY*100/$userAGILITYmax);
			$userAGILITYbyItem = $agilidadAc+$userAGILITYppi-$userAGILITY;
			$userAGILITYbyItem = $agilidadAc+$userAGILITYppi-$userAGILITYbyItem-$userAGILITYbasic;
			$userAGILITYbyItemMAX = $agilidadAc+$userAGILITYppi;
			## NUEVA CONSTITUCION
			$userCONSTITUTIONmax = (int)($userCONSTITUTION/2)+$userLEVEL+$userCONSTITUTION;
			$userCONSTITUTIONbasic = $userCONSTITUTION;
			$userCONSTITUTIONppi = (int)($userCONSTITUTIONbasic*$pconstiAc/100);
			$userCONSTITUTION = $userCONSTITUTION+$constiAc+$userCONSTITUTIONppi;
			if($userCONSTITUTION > $userCONSTITUTIONmax){
				$userCONSTITUTION = $userCONSTITUTIONmax;
			}
			$userCONSTITUTIONper = (int)($userCONSTITUTION*100/$userCONSTITUTIONmax);
			$userCONSTITUTIONbyItem = $constiAc+$userCONSTITUTIONppi-$userCONSTITUTION;
			$userCONSTITUTIONbyItem = $constiAc+$userCONSTITUTIONppi-$userCONSTITUTIONbyItem-$userCONSTITUTIONbasic;
			$userCONSTITUTIONbyItemMAX = $constiAc+$userCONSTITUTIONppi;
			## NUEVA CARISMA
			$userCHARISMAmax = (int)($userCHARISMA/2)+$userLEVEL+$userCHARISMA;
			$userCHARISMAbasic = $userCHARISMA;
			$userCHARISMAppi = (int)($userCHARISMAbasic*$pcarismaAc/100);
			$userCHARISMA = $userCHARISMA+$carismaAc+$userCHARISMAppi;
			if($userCHARISMA > $userCHARISMAmax){
				$userCHARISMA = $userCHARISMAmax;
			}
			$userCHARISMAper = (int)($userCHARISMA*100/$userCHARISMAmax);
			$userCHARISMAbyItem = $carismaAc+$userCHARISMAppi-$userCHARISMA;
			$userCHARISMAbyItem = $carismaAc+$userCHARISMAppi-$userCHARISMAbyItem-$userCHARISMAbasic;
			$userCHARISMAbyItemMAX = $carismaAc+$userCHARISMAppi;
			## NUEVA INTELIGENCIA
			$userINTELLIGENCEmax = (int)($userINTELLIGENCE/2)+$userLEVEL+$userINTELLIGENCE;
			$userINTELLIGENCEbasic = $userINTELLIGENCE;
			$userINTELLIGENCEppi = (int)($userINTELLIGENCEbasic*$pinteAc/100);
			$userINTELLIGENCE = $userINTELLIGENCE+$inteAc+$userINTELLIGENCEppi;
			if($userINTELLIGENCE > $userINTELLIGENCEmax){
				$userINTELLIGENCE = $userINTELLIGENCEmax;
			}
			$userINTELLIGENCEper = (int)($userINTELLIGENCE*100/$userINTELLIGENCEmax);
			$userINTELLIGENCEbyItem = $inteAc+$userINTELLIGENCEppi-$userINTELLIGENCE;
			$userINTELLIGENCEbyItem = $inteAc+$userINTELLIGENCEppi-$userINTELLIGENCEbyItem-$userINTELLIGENCEbasic;
			$userINTELLIGENCEbyItemMAX = $inteAc+$userINTELLIGENCEppi;
			## NUEVA ARMADURA
			$userARMOR = $defensaAc;
			$userREDUCEdmg1 = (int)($userARMOR/80);
			$userREDUCEdmg2 = (int)($userARMOR/60);
			## NUEVO DAÑO
			$userDAMAGEmin1 = $dañoMin;
			$userDAMAGEmax1 = $dañoMax;
			if ($userDAMAGEmax1 == 0) {
				$userDAMAGEmax1 = 2;
			}
			$userDAMAGEbyStrenght = (int)($userSTRENGHT/10);
			$userDAMAGEmin = $userDAMAGEmin1+$dañoAc+$userDAMAGEbyStrenght;
			$userDAMAGEmax = $userDAMAGEmax1+$dañoAc+$userDAMAGEbyStrenght;
			$userDAMAGEbyItems = $dañoAc;
			if($userDAMAGEmax < 2){
				$userDAMAGEmax = 2;
				$userDAMAGEmax1 = 2;
			}
			## NUEVA VIDA 
			$userLIFEbyConstitution = (int)(($userCONSTITUTION-5)*25+75);
			$userLIFEmax = $userLIFEbyLevel+$userLIFEbyConstitution;
			$userLIFEmax = $userLIFEmax+$saludAc;
			if($userLIFE > $userLIFEmax){
				$userLIFE = $userLIFEmax;
			}
			$userLIFEper = (int)(($userLIFE*100)/$userLIFEmax);


			## RANKING
			$userRANKING = 0;
			$ranking1 = mysql_query("SELECT * FROM users ORDER BY user_honor DESC ");
			$usersCounts = 0;
			while ($usersCounts != 1) {
				$userRANKING++;
				$ranking2 = mysql_fetch_array($ranking1);
				$userRid = $ranking2['user_id'];
				if ($userRid == $userID) {
					$usersCounts = 1;
				}
			}
			

			## EN CASO DE MUCHA VIDA
			if ($userLIFE >= $userLIFEmax) {
				$newUlife1 = "UPDATE users SET user_life = '".$userLIFEmax."' WHERE user_id = '".$userID."' ";
				$newUlife2 = mysql_query($newUlife1);
			}

			## OBJETOS TABLAS
			## TABLAS VACIAS
			$tableWEAPONu = '';
			$tableSHIELDu = '';
			$tableCHESTSu = '';
			$tableHELMETu = '';
			$tableGLOVESu = '';
			$tableRINGp6u = '';
			$tableRINGp7u = '';
			$tableSHOESu = '';
			$tableAMULETu = '';
			$usandoT1 = 0;
			$usandoT2 = 0;
			$usandoT3 = 0;
			$usandoT4 = 0;
			$usandoT5 = 0;
			$usandoP6 = 0;
			$usandoP7 = 0;
			$usandoT8 = 0;
			$usandoT9 = 0;
			## DANDO VALORES A LAS TABLAS


			## MISIONES
			if ($userLEVEL >= 100) {
				$maxQA = 10;
				$maxQV = 20;
			}elseif ($userLEVEL >= 90) {
				$maxQA = 9;
				$maxQV = 20;
			}elseif ($userLEVEL >= 80) {
				$maxQA = 8;
				$maxQV = 15;
			}elseif ($userLEVEL >= 70) {
				$maxQA = 7;
				$maxQV = 15;
			}elseif ($userLEVEL >= 60) {
				$maxQA = 6;
				$maxQV = 10;
			}elseif ($userLEVEL >= 50) {
				$maxQA = 5;
				$maxQV = 10;
			}elseif ($userLEVEL >= 40) {
				$maxQA = 4;
				$maxQV = 5;
			}elseif ($userLEVEL >= 30) {
				$maxQA = 3;
				$maxQV = 5;
			}elseif ($userLEVEL >= 20) {
				$maxQA = 2;
				$maxQV = 3;
			}elseif ($userLEVEL >= 10) {
				$maxQA = 1;
				$maxQV = 3;
			}else{
				$maxQA = 1;
				$maxQV = 2;
			}
			$umisiones1 = mysql_query("SELECT * FROM quests WHERE quest_userID = '".$userID."' ");
			$umisiones2 = mysql_num_rows($umisiones1);
			if (empty($umisiones2)) {
				$deleteAll = 0;
				$crearQ = 1;
				include ('db/quests.php');
			}
			$uAmisiones1 = mysql_query("SELECT * FROM quests WHERE quest_userID = '".$userID."' AND quest_accept = 1 ");
			$uAmisiones2 = mysql_num_rows($uAmisiones1);
			$uQuests = $mysql5['user_quests'];

			## DIOSES ##
			$dioses1 = mysql_query("SELECT * FROM gods WHERE gods_userID = '".$userID."' ");
			$dioses2 = mysql_num_rows($dioses1);
			if (empty($dioses2)) {
				$crearD1 = "INSERT INTO gods SET gods_userID = '".$userID."' ";
				$crearD2 = mysql_query($crearD1);
				if ($crearD2) {
					echo "<body><script type='text/javascript'>window.location='';</script></body>";
				}
			}else{
				$dioses3 = mysql_fetch_array($dioses1);
				$uDios1 = $dioses3['gods_1c'];
				$uDios2 = $dioses3['gods_2c'];
				$uDios3 = $dioses3['gods_3c'];
				$uDios4 = $dioses3['gods_4c'];
				$uDios5 = $dioses3['gods_5c'];
				$uDios6 = $dioses3['gods_6c'];
				$uDiosCC = $dioses3['gods_cc'];
			}
			$dioses4 = mysql_query("SELECT * FROM godsa WHERE ga_userID = '".$userID."' ");
			$dioses5 = mysql_num_rows($dioses4);
			if (empty($dioses5)) {
				$insertarGA1 = "INSERT INTO godsa SET ga_userID = '".$userID."' ";
				$insertarGA2 = mysql_query($insertarGA1);
				if ($insertarGA2) {
					echo "<body><script type='text/javascript'>window.location='';</script></body>";
				}
			}else{
				$dioses6 = mysql_fetch_array($dioses4);
				$Dios1Nivel1A = $dioses6['ga_g1n1'];
				$Dios1Nivel2A = $dioses6['ga_g1n2'];
				$Dios1Nivel3A = $dioses6['ga_g1n3'];
				$Dios2Nivel1A = $dioses6['ga_g2n1'];
				$Dios2Nivel2A = $dioses6['ga_g2n2'];
				$Dios2Nivel3A = $dioses6['ga_g2n3'];
				$Dios3Nivel1A = $dioses6['ga_g3n1'];
				$Dios3Nivel2A = $dioses6['ga_g3n2'];
				$Dios3Nivel3A = $dioses6['ga_g3n3'];
				$Dios4Nivel1A = $dioses6['ga_g4n1'];
				$Dios4Nivel2A = $dioses6['ga_g4n2'];
				$Dios4Nivel3A = $dioses6['ga_g4n3'];
				$Dios5Nivel1A = $dioses6['ga_g5n1'];
				$Dios5Nivel2A = $dioses6['ga_g5n2'];
				$Dios5Nivel3A = $dioses6['ga_g5n3'];
				$Dios6Nivel1A = $dioses6['ga_g6n1'];
				$Dios6Nivel2A = $dioses6['ga_g6n2'];
				$Dios6Nivel3A = $dioses6['ga_g6n3'];
				include ('db/bless.php');
			}

			## HEADER MENUE
			$newsHL = '';
			$newsLINK = 'news.php';
			$newsC = $mysql5['user_newsN'];
			if ($newsC > 0) {
				$newsHL = '_highlight';
			}
			$seC =  $mysql5['user_seN'];
			if ($seC > 0) {
				$newsHL = '_highlight';
				$newsLINK = 'serverEvents.php';
			}
			$newsC = $newsC + $seC;
			$msgsHL = '';
			$msgsC = $mysql5['user_msgsN'];
			if ($msgsC > 0) {
				$msgsHL = '_highlight';
			}
			$packHL = '';
			$packC = $mysql5['user_packN'];
			if ($packC > 0) {
				$packHL = '_highlight';
			}
			$rptsHL = '';
			$rptsC = $mysql5['user_rptsN'];
			if ($rptsC > 0) {
				$rptsHL = '_highlight';
			}

			## MYSTERY BOX // PREMIUM INVENTARY
			$revMyP = mysql_query("SELECT * FROM premiuminv WHERE pi_userID = '".$userID."' ");
			$revMyP2 = mysql_num_rows($revMyP);
			if (empty($revMyP2)) {
				mysql_query("INSERT INTO premiuminv SET pi_userID = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='';</script></body>";
			}

			## MISSION // OBJETIVOS
			$ms1 = mysql_query("SELECT * FROM missions WHERE ms_userID = '".$userID."' ");
			$ms2 = mysql_num_rows($ms1);
			if (empty($ms2)) {
				mysql_query("INSERT INTO missions SET ms_userID = '".$userID."' ");
				echo "<body><script type='text/javascript'>window.location='';</script></body>";
			} else {
				$ms3 = mysql_fetch_array($ms1);
				$mision1 = $ms3['ms_1'];
				$mision2 = $ms3['ms_2'];
				$mision3 = $ms3['ms_3'];
				$mision4 = $ms3['ms_4'];
				$mision5 = $ms3['ms_5'];
				$mision6 = $ms3['ms_6'];
				$mision7 = $ms3['ms_7'];
				$mision8 = $ms3['ms_8'];
				$mision9 = $ms3['ms_9'];
				$mision10 = $ms3['ms_10'];
				include ('db/missions.php');
			}

			## ALIANZA
			$guser = 0;
			$guserID = 0;
			$guserRANK = 0;
			$ali1 = mysql_query("SELECT * FROM guilds_members WHERE gmb_userID = '".$userID."' ");
			$ali2 = mysql_num_rows($ali1);
			if ($ali2 != 0) {
				$ali3 = mysql_fetch_array($ali1);
				$guser = 1;
				$guserID = $ali3['gmb_guildID'];
				$guserRANK = $ali3['gmb_rank'];
				if ($guserRANK == 99) {
					$guserRANKn = 'Fundador';
					$guserCBUP = 1;
					$guserCANM = 1;
					$guserCSMG = 1;
					$guserCV1 = 1;
					$guserCV2 = 1;
					$guserCV3 = 1;
					$guserCB1 = 1;
					$guserCB2 = 1;
				} else if ($guserRANK == 98) {
					$guserRANKn = 'Admin';
					$guserCBUP = 1;
					$guserCANM = 1;
					$guserCSMG = 1;
					$guserCV1 = 1;
					$guserCV2 = 1;
					$guserCV3 = 1;
					$guserCB1 = 1;
					$guserCB2 = 1;
				} else if ($guserRANK == 1) {
					$guserRANKn = 'Miembro';
					$guserCBUP = 0;
					$guserCANM = 0;
					$guserCSMG = 0;
					$guserCV1 = 0;
					$guserCV2 = 0;
					$guserCV3 = 0;
					$guserCB1 = 0;
					$guserCB2 = 0;
				} else {
					$rank1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_ranks WHERE gr_id = '".$guserRANK."' "));
					$guserRANKn = $rank1['gr_name'];
					$guserCBUP = $rank1['gr_pBuilds'];
					$guserCANM = $rank1['gr_pAccept'];
					$guserCSMG = $rank1['gr_pMessages2'];
					$guserCV1 = $rank1['gr_pVox1'];
					$guserCV2 = $rank1['gr_pVox2'];
					$guserCV3 = $rank1['gr_pVox3'];
					$guserCB1 = $rank1['gr_pBibly1'];
					$guserCB2 = $rank1['gr_pBibly2'];
				}
				$ali4 = mysql_fetch_array(mysql_query("SELECT * FROM guilds WHERE g_id = '".$guserID."' "));
				$guserForum = $ali4['g_forum'];
				$guserBank = $ali4['g_bank'];
				$guserBibly = $ali4['g_bibly'];
				$guserBath = $ali4['g_bath'];
				$guserHall = $ali4['g_hall'];
				$guserMarket = $ali4['g_market'];
				$guserDepos = $ali4['g_depos'];
				$guserCamp = $ali4['g_camp'];
				$guserMedici = $ali4['g_medici'];
				$guserTemplum = $ali4['g_templum'];
				$guserNx = $ali4['g_nx'];
			}

		}


		## LENGUAGE
		$provinLNG1 = mysql_fetch_array(mysql_query("SELECT * FROM provinces WHERE provin_server = '".$accPROVIN."' ")); //Edit by charles
		$provinLNG = $provinLNG1['provin_leng'];
		include ('lng/game/'.$provinLNG.'.php');
	}
}
?>