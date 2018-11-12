<?php

$datos1 = mysql_query("SELECT * FROM location_users WHERE lu_userID = '".$userID."' ");
$datos3 = mysql_num_rows($datos1);
if($datos3 == 0){
	$generar1 = "INSERT INTO location_users SET lu_userID = '".$userID."' ";
	$generar2 = mysql_query($generar1);
	if($generar2){
		header("Location: overview.php");
	}
}else{
	$datos2 = mysql_fetch_array($datos1);
	$uloc = $datos2['lu_loc'];
	$ucc = $datos2['lu_cc'];
	$umap = $datos2['lu_map'];
	$udun = $datos2['lu_dun'];
	$uinv = $datos2['lu_inv'];
	$urla = $_SERVER['REQUEST_URI'];
	$urla = explode("?", $urla);
	$urla = $urla[0];
	
	$currentIC1 = '';
	$currentIC2 = '';
	if ($uinv == 1) {
		$currentIC1 = ' current';
		$pInvN = 'p512';
	} elseif ($uinv == 2) {
		$currentIC2 = ' current';
		$pInvN = 'p513';
	}
}

if (isset($_GET['invC'])) {
	$_GET['invC'] = (int)($_GET['invC']);
	$invC = $_GET['invC'];
	if ($invC >= 3) {
		mysql_query("UPDATE location_users SET lu_inv = 1 WHERE lu_userID = '".$userID."' ");
		echo "<body><script type='text/javascript'>window.location='$urla';</script></body>";
	} else {
		mysql_query("UPDATE location_users SET lu_inv = '".$invC."' WHERE lu_userID = '".$userID."' ");
		echo "<body><script type='text/javascript'>window.location='$urla';</script></body>";
	}
}

if(isset($_GET['loc'])){
	$_GET['loc'] = (int)($_GET['loc']);
	$loc = $_GET['loc'];
	if(ereg("^([0-9]+)$", $loc)){
		if($loc == 0){
			$mon1 = 1;
			$mon2 = 2;
			$mon3 = 3;
			$mon4 = 4;
			$nuevoLoc1 = "UPDATE location_users SET lu_loc = '".$loc."' WHERE lu_userID = '".$userID."' ";
			$nuevoLoc2 = mysql_query($nuevoLoc1);
			$nuevoLoc3 = "UPDATE location_users SET lu_cc = '2' WHERE lu_userID = '".$userID."' ";
			$nuevoLoc4 = mysql_query($nuevoLoc3);
			$locNAME = 'Bosque Sombrío';
		}elseif($loc == 1){
			$mon1 = 5;
			$mon2 = 6;
			$mon3 = 7;
			$mon4 = 8;
			$nuevoLoc1 = "UPDATE location_users SET lu_loc = '".$loc."' WHERE lu_userID = '".$userID."' ";
			$nuevoLoc2 = mysql_query($nuevoLoc1);
			$nuevoLoc3 = "UPDATE location_users SET lu_cc = '2' WHERE lu_userID = '".$userID."' ";
			$nuevoLoc4 = mysql_query($nuevoLoc3);
			$locNAME = 'Puerto Pirata';
		}elseif($loc == 2){
			$mon1 = 9;
			$mon2 = 10;
			$mon3 = 11;
			$mon4 = 12;
			$nuevoLoc1 = "UPDATE location_users SET lu_loc = '".$loc."' WHERE lu_userID = '".$userID."' ";
			$nuevoLoc2 = mysql_query($nuevoLoc1);
			$nuevoLoc3 = "UPDATE location_users SET lu_cc = '2' WHERE lu_userID = '".$userID."' ";
			$nuevoLoc4 = mysql_query($nuevoLoc3);
			$locNAME = 'Montañas Nubladas';
		}elseif($loc == 3){
			$mon1 = 13;
			$mon2 = 14;
			$mon3 = 15;
			$mon4 = 16;
			$nuevoLoc1 = "UPDATE location_users SET lu_loc = '".$loc."' WHERE lu_userID = '".$userID."' ";
			$nuevoLoc2 = mysql_query($nuevoLoc1);
			$nuevoLoc3 = "UPDATE location_users SET lu_cc = '2' WHERE lu_userID = '".$userID."' ";
			$nuevoLoc4 = mysql_query($nuevoLoc3);
			$locNAME = 'Cueva del Lobo';
		}else{
			echo "<body><script type='text/javascript'>window.location='location.php?loc=$uloc';</script></body>";
			if ($uloc == 1) {
				$locNAME = 'Bosque Sombrío';
			} elseif ($uloc == 2) {
				$locNAME = 'Puerto Pirata';
			} elseif ($uloc == 3) {
				$locNAME = 'Montañas Nubladas';
			} else {
				$locNAME = 'Bosque Sombrío';
			}
		}
	}else{
		echo "<body><script type='text/javascript'>window.location='location.php?loc=$uloc';</script></body>";
		if ($uloc == 1) {
				$locNAME = 'Bosque Sombrío';
			} elseif ($uloc == 2) {
				$locNAME = 'Puerto Pirata';
			} elseif ($uloc == 3) {
				$locNAME = 'Montañas Nubladas';
			} else {
				$locNAME = 'Bosque Sombrío';
			}
	}
}else{
	$loc = $uloc;
	$nuevoLoc1 = "UPDATE location_users SET lu_loc = '".$loc."' WHERE lu_userID = '".$userID."' ";
	$nuevoLoc2 = mysql_query($nuevoLoc1);
	if ($uloc == 0) {
		$locNAME = 'Bosque Sombrío';
	} elseif ($uloc == 1) {
		$locNAME = 'Puerto Pirata';
	} elseif ($uloc == 2) {
		$locNAME = 'Montañas Nubladas';
	} else {
		$locNAME = 'Bosque Sombrío';
	}
}


?>