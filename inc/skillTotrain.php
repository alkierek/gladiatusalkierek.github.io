<?php

if (isset($_GET['skillToTrainx'])) {
    $_GET['skillToTrainx'] = (int)($_GET['skillToTrainx']);
    $sttx = $_GET['skillToTrainx'];
    switch ($sttx) {
        case 1:
            if ($userSTRENGHTbasic >= 15) {
                $trainP1 = 0;
                $i = 1;
                $costoFuerza = 0;
                while ($i <= 10 && $userGOLD >= $costoFuerza) { 
                    $costoFuerza = (int)(($userSTRENGHTbasic*6.5)*6.5);
                    $userSTRENGHTbasic++;
                    $trainP1++;
                    $userGOLD-=$costoFuerza;
                    $i++;
                }
                mysql_query("UPDATE users SET user_strenght = '".$userSTRENGHTbasic."' WHERE user_id = '".$userID."' ");
                mysql_query("UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ");
                echo '<script type="text/javascript">window.location="training.php";</script>';
            } else {
                echo "Solo puedes utilizar esta opción cuando tu Fuerza es superior a 15.";
            }
            break;
        case 2:
            if ($userSKILLbasic >= 15) {
                $trainP1 = 0;
                $i = 1;
                $costoHabilidad = 0;
                while ($i <= 10 && $userGOLD >= $costoHabilidad) { 
                    $costoHabilidad = (int)(($userSKILLbasic*6.5)*6.5);
                    $userSKILLbasic++;
                    $trainP1++;
                    $userGOLD-=$costoHabilidad;
                    $i++;
                }
                mysql_query("UPDATE users SET user_skill = '".$userSKILLbasic."' WHERE user_id = '".$userID."' ");
                mysql_query("UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ");
                echo '<script type="text/javascript">window.location="training.php";</script>';
            } else {
                echo "Solo puedes utilizar esta opción cuando tu Habilidad es superior a 15.";
            }
            break;
        case 3:
            if ($userAGILITYbasic >= 15) {
                $trainP1 = 0;
                $i = 1;
                $costoAgilidad = 0;
                while ($i <= 10 && $userGOLD >= $costoAgilidad) { 
                    $costoAgilidad = (int)(($userAGILITYbasic*6.5)*6.5);
                    $userAGILITYbasic++;
                    $trainP1++;
                    $userGOLD-=$costoAgilidad;
                    $i++;
                }
                mysql_query("UPDATE users SET user_agility = '".$userAGILITYbasic."' WHERE user_id = '".$userID."' ");
                mysql_query("UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ");
                echo '<script type="text/javascript">window.location="training.php";</script>';
            } else {
                echo "Solo puedes utilizar esta opción cuando tu Agilidad es superior a 15.";
            }
            break;
        case 4:
            if ($userCONSTITUTIONbasic >= 15) {
                $trainP1 = 0;
                $i = 1;
                $costoConstitucion = 0;
                while ($i <= 10 && $userGOLD >= $costoConstitucion) { 
                    $costoConstitucion = (int)(($userCONSTITUTIONbasic*6.5)*6.5);
                    $userCONSTITUTIONbasic++;
                    $trainP1++;
                    $userGOLD-=$costoConstitucion;
                    $i++;
                }
                mysql_query("UPDATE users SET user_constitution = '".$userCONSTITUTIONbasic."' WHERE user_id = '".$userID."' ");
                mysql_query("UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ");
                echo '<script type="text/javascript">window.location="training.php";</script>';
            } else {
                echo "Solo puedes utilizar esta opción cuando tu Constitucion es superior a 15.";
            }
            break;
        case 5:
            if ($userCHARISMAbasic >= 15) {
                $trainP1 = 0;
                $i = 1;
                $costoCarisma = 0;
                while ($i <= 10 && $userGOLD >= $costoCarisma) { 
                    $costoCarisma = (int)(($userCHARISMAbasic*6.5)*6.5);
                    $userCHARISMAbasic++;
                    $trainP1++;
                    $userGOLD-=$costoCarisma;
                    $i++;
                }
                mysql_query("UPDATE users SET user_charisma = '".$userCHARISMAbasic."' WHERE user_id = '".$userID."' ");
                mysql_query("UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ");
                echo '<script type="text/javascript">window.location="training.php";</script>';
            } else {
                echo "Solo puedes utilizar esta opción cuando tu Carisma es superior a 15.";
            }
            break;
        case 6:
            if ($userINTELLIGENCEbasic >= 15) {
                $trainP1 = 0;
                $i = 1;
                $costoInteligencia = 0;
                while ($i <= 10 && $userGOLD >= $costoInteligencia) { 
                    $costoInteligencia = (int)(($userINTELLIGENCEbasic*6.5)*6.5);
                    $userINTELLIGENCEbasic++;
                    $trainP1++;
                    $userGOLD-=$costoInteligencia;
                    $i++;
                }
                mysql_query("UPDATE users SET user_intelligence = '".$userINTELLIGENCEbasic."' WHERE user_id = '".$userID."' ");
                mysql_query("UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ");
                echo '<script type="text/javascript">window.location="training.php";</script>';
            } else {
                echo "Solo puedes utilizar esta opción cuando tu Inteligencia es superior a 15.";
            }
            break;
        default:
    }
}

if (isset($_GET['skillToTrain'])) {
	$_GET['skillToTrain'] = (int)($_GET['skillToTrain']);
	$stt = $_GET['skillToTrain'];
	switch ($stt) {
    	case 1:
    		## ENTRENAR FUERZA
        	if ($userGOLD >= $costoFuerza) {
        		$userSTRENGHTbasic++;
        		$userGOLD -= $costoFuerza;
        		$entrenamiento1 = "UPDATE users SET user_strenght = '".$userSTRENGHTbasic."' WHERE user_id = '".$userID."' ";
        		$entrenamiento2 = mysql_query($entrenamiento1);
        		$entrenamiento3 = "UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ";
        		$entrenamiento4 = mysql_query($entrenamiento3);
        		if ($entrenamiento2) {
        			echo
					'
					<script type="text/javascript">
            		window.location="training.php";
            		</script>
					';
        		}
        	}else{
        		echo
				'
				<script type="text/javascript">
            	window.location="training.php";
            	</script>
				';
        	}
        	break;
    	case 2:
        	## ENTRENAR HABILIDAD
        	if ($userGOLD >= $costoHabilidad) {
        		$userSKILLbasic++;
        		$userGOLD -= $costoHabilidad;
        		$entrenamiento1 = "UPDATE users SET user_skill = '".$userSKILLbasic."' WHERE user_id = '".$userID."' ";
        		$entrenamiento2 = mysql_query($entrenamiento1);
        		$entrenamiento3 = "UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ";
        		$entrenamiento4 = mysql_query($entrenamiento3);
        		if ($entrenamiento2) {
        			echo
					'
					<script type="text/javascript">
            		window.location="training.php";
            		</script>
					';
        		}
        	}else{
        		echo
				'
				<script type="text/javascript">
            	window.location="training.php";
            	</script>
				';
        	}
        	break;
    	case 3:
        	## ENTRENAR AGILIDAD
        	if ($userGOLD >= $costoAgilidad) {
        		$userAGILITYbasic++;
        		$userGOLD -= $costoAgilidad;
        		$entrenamiento1 = "UPDATE users SET user_agility = '".$userAGILITYbasic."' WHERE user_id = '".$userID."' ";
        		$entrenamiento2 = mysql_query($entrenamiento1);
        		$entrenamiento3 = "UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ";
        		$entrenamiento4 = mysql_query($entrenamiento3);
        		if ($entrenamiento2) {
        			echo
					'
					<script type="text/javascript">
            		window.location="training.php";
            		</script>
					';
        		}
        	}else{
        		echo
				'
				<script type="text/javascript">
            	window.location="training.php";
            	</script>
				';
        	}
        	break;
        case 4:
        	## ENTRENAR CONSTITUCION
        	if ($userGOLD >= $costoConstitucion) {
        		$userCONSTITUTIONbasic++;
        		$userGOLD -= $costoConstitucion;
        		$entrenamiento1 = "UPDATE users SET user_constitution = '".$userCONSTITUTIONbasic."' WHERE user_id = '".$userID."' ";
        		$entrenamiento2 = mysql_query($entrenamiento1);
        		$entrenamiento3 = "UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ";
        		$entrenamiento4 = mysql_query($entrenamiento3);
        		if ($entrenamiento2) {
        			echo
					'
					<script type="text/javascript">
            		window.location="training.php";
            		</script>
					';
        		}
        	}else{
        		echo
				'
				<script type="text/javascript">
            	window.location="training.php";
            	</script>
				';
        	}
        	break;
        case 5:
        	## ENTRENAR CARISMA
        	if ($userGOLD >= $costoCarisma) {
        		$userCHARISMAbasic++;
        		$userGOLD -= $costoCarisma;
        		$entrenamiento1 = "UPDATE users SET user_charisma = '".$userCHARISMAbasic."' WHERE user_id = '".$userID."' ";
        		$entrenamiento2 = mysql_query($entrenamiento1);
        		$entrenamiento3 = "UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ";
        		$entrenamiento4 = mysql_query($entrenamiento3);
        		if ($entrenamiento2) {
        			echo
					'
					<script type="text/javascript">
            		window.location="training.php";
            		</script>
					';
        		}
        	}else{
        		echo
				'
				<script type="text/javascript">
            	window.location="training.php";
            	</script>
				';
        	}
        	break;
        case 6:
        	## ENTRENAR INTELIGENCIA
        	if ($userGOLD >= $costoInteligencia) {
        		$userINTELLIGENCEbasic++;
        		$userGOLD -= $costoInteligencia;
        		$entrenamiento1 = "UPDATE users SET user_intelligence = '".$userINTELLIGENCEbasic."' WHERE user_id = '".$userID."' ";
        		$entrenamiento2 = mysql_query($entrenamiento1);
        		$entrenamiento3 = "UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ";
        		$entrenamiento4 = mysql_query($entrenamiento3);
        		if ($entrenamiento2) {
        			echo
					'
					<script type="text/javascript">
            		window.location="training.php";
            		</script>
					';
        		}
        	}else{
        		echo
				'
				<script type="text/javascript">
            	window.location="training.php";
            	</script>
				';
        	}
        	break;
        default:
			echo
			'
			<script type="text/javascript">
            window.location="training.php";
            </script>
			';
	}
}

?>