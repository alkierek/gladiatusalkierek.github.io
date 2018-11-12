<?php
$conectado = 0;
$login1 = 0;
$register1 = 0;
##if($serverONLINE < 1){
	$serverON = 1;
	$serverTEXTO = 'Server en linea...';
	##if(empty($_SESSION['userid'])){
		$basedatosON = 1;
		$basedatosTEXTO = 'Base de Datos funcionando...';
		if(isset($_POST['signUpform'])){
			$register1 = 1;
			$provin = $_POST['register_server'];
			$provin = (int)($provin);
			$nombre = $_POST['name'];
			$contra = $_POST['pass'];
			$contra2 = md5($contra);
			$email = $_POST['email'];
			$ip = $_SERVER['REMOTE_ADDR'];
			if(!empty($nombre) && !empty($contra) && !empty($email)){
				$mysql1 = mysql_fetch_array(mysql_query("SELECT * FROM accounts WHERE acc_name = '".$nombre."' AND acc_provin = '".$provin."' "));
				$mysql2 = mysql_fetch_array(mysql_query("SELECT * FROM accounts WHERE acc_email = '".$email."' AND acc_provin = '".$provin."' "));
					$registroTEXTO = 'Ingrese nombre de usuario, email y contraseña.';
				if(!empty($mysql1)){
					$registroTEXTO = 'Este nombre de usuario ya esta en uso.';
				}elseif(!empty($mysql2)){
					$registroTEXTO = 'Este correo ya esta en uso.';
				}elseif (strlen($contra)<8){
					$registroTEXTO = 'Contraseña debe tener minimo 8 caracteres.';
				}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL )){ 
					$registroTEXTO = "El email no es valido.";
				}elseif(strlen($nombre)<5){
					$registroTEXTO = "El nombre de usuario debe tener minimo 5 caracteres.";
				}else{
					$mysql = "INSERT INTO accounts SET acc_name = '".$nombre."', acc_pass = '".$contra2."', acc_email = '".$email."', acc_provin = '".$provin."', acc_registerIP = '".$ip."' ";
					$query = mysql_query($mysql);
					if($query){
						$user = mysql_query("SELECT * FROM accounts WHERE acc_name = '".$nombre."' LIMIT 1 ");
						$user2 = mysql_fetch_array($user);
						$registroTEXTO = 'Cuenta creada con exito...';
						$_SESSION = array();
						## $_SESSION['userid'] = $user2['acc_id']; ##
						$conectado = 1;
						$accid = $user2['acc_id'];
						$ip = $_SERVER['REMOTE_ADDR'];
						mysql_query("DELETE FROM session WHERE session_accid = '".$accid."' ");
						mysql_query("DELETE FROM session WHERE session_ip = '".$ip."' ");
						mysql_query("INSERT INTO session SET session_ip = '".$ip."', session_accid = '".$accid."' ");
					}
				}
			}
		}
		if(isset($_POST['loginform'])){
			$login1 = 1;
			$provin = $_POST['login_server'];
			$nombre = $_POST['name'];
			$contra = $_POST['pass'];
			$contra2 = md5($contra);
			if(!empty($nombre) && !empty($contra)){
				$user1 = mysql_query("SELECT * FROM accounts WHERE acc_name = '".$nombre."' AND acc_pass = '".$contra2."' AND acc_provin = '".$provin."' LIMIT 1");
				$user2 = mysql_fetch_array($user1);
				if(empty($user2)){
					$loginTEXTO = 'Este usuario o contraseña son incorrectos.';
				}else{
					$_SESSION = array();
					## $_SESSION['userid'] = $user2['acc_id']; ##
					$accid = $user2['acc_id'];
					$ip = $_SERVER['REMOTE_ADDR'];
					mysql_query("DELETE FROM session WHERE session_accid = '".$accid."' ");
					mysql_query("DELETE FROM session WHERE session_ip = '".$ip."' ");
					mysql_query("INSERT INTO session SET session_ip = '".$ip."', session_accid = '".$accid."' ");
					$loginTEXTO = 'Sesion iniciada...';
					$conectado = 1;
				}
			}else{
				$loginTEXTO = 'Ingrese Nombre y Contraseña.';
			}
		}
	##}else{
	##	$basedatosTEXTO =  'Usted ya tiene o esta conectado a una cuenta. <a href="overview.php">Clic aquí</a> para ir a la sesion actual.';
	##	$basedatosON = 0;
	##}
##}else{
##	$serverTEXTO = 'El servidor esta cerrado.<br> Intenta conectarte mas tarde.';
##	$serverON = 0;
##}
?>