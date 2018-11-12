<?php
$cuenta = 1;
while ($cuenta <= 4) {
	if($cuenta==1){
		$Mid = $Mid1;
	}elseif($cuenta==2){
		$Mid = $Mid2;
	}elseif($cuenta==3){
		$Mid = $Mid3;
	}elseif($cuenta==4){
		$Mid = $Mid4;
	}
	include ('db/monsters.php');
	include ('monsters/tables.php');
	if($Mid != 1 && $Mid != 5 && $Mid != 9 && $Mid != 13){
		$MidN = $Mid-1;
		$info1 = mysql_fetch_array(mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$MidN."' "));
		$primeraVic = $info1['clu_wins'];
		if($primeraVic >= 1){
			include ('monsters/boxNormal.php');
		}else{
			include ('monsters/boxIncog.php');
		}
	}else{
		include ('monsters/boxNormal.php');
	}
	$cuenta++;
}
?>