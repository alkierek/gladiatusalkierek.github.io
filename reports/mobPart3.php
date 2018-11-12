<?php

## ENEMIGO
## PROBABILIDAD DE GOLPE (HIT RATE)
if($userAGILITY > $monsterSKILL1){
	$enemyHITrate = (int)(50-(($userAGILITY-$monsterSKILL1)/2));
}elseif($userAGILITY < $monsterSKILL1){
	$enemyHITrate = (int)(50+(($monsterSKILL1-$userAGILITY)/2));
}elseif($userAGILITY == $monsterSKILL1){
	$enemyHITrate = 50;
}
if($enemyHITrate > 95){
	$enemyHITrate = 95;
}
if($enemyHITrate < 5){
	$enemyHITrate = 5;
}
## DOBLE GOLPE
if($userCHARISMA > $monsterCHARISMA1 || $userCHARISMA == $monsterCHARISMA1){
	$enemyDOUBLEhit = 0;
}else{
	$enemyDOUBLEhit = $monsterCHARISMA1-$userCHARISMA;
}
if($enemyDOUBLEhit > 95){
	$enemyDOUBLEhit = 95;
}
## CRITICO (CRIT CHANCE)
$enemyCRITrate = 0;
## BLOQUEO (BLOCK CHANCE)
$enemyBLOCKrate = 0;
## ESQUIVAR (DODGE CHANCE)
$enemyDODGErate = 0;

$enemyHITrate1 = $enemyHITrate;
$enemyDOUBLEhit1 = $enemyDOUBLEhit;
$enemyCRITrate1 = $enemyCRITrate;
$enemyBLOCKrate1 = $enemyBLOCKrate;
$enemyDODGErate1 = $enemyDODGErate;


## USUARIO
## PROBABILIDAD DE GOLPE (HIT RATE)
if($userAGILITY > $monsterSKILL1){
	$userHITrate = (int)(50+(($userAGILITY-$monsterSKILL1)/2));
}elseif($userAGILITY < $monsterSKILL1){
	$userHITrate = (int)(50-(($monsterSKILL1-$userAGILITY)/2));
}elseif($userAGILITY == $monsterSKILL1){
	$userHITrate = 50;
}
if($userHITrate > 95){
	$userHITrate = 95;
}
if ($userHITrate < 5) {
	$userHITrate = 5;
}
## DOBLE GOLPE
if($userCHARISMA > $monsterCHARISMA1 || $userCHARISMA == $monsterCHARISMA1){
	$userDOUBLEhit = $userCHARISMA-$monsterCHARISMA1;
}else{
	$userDOUBLEhit = 0;
}
if($userDOUBLEhit > 95){
	$userDOUBLEhit = 95;
}
## CRITICO (CRIT CHANCE)
$userCRITrate = 0;
## BLOQUEO (BLOCK CHANCE)
$userBLOCKrate = 0;
## ESQUIVAR (DODGE CHANCE)
$userDODGErate = 0;

$userHITrate1 = $userHITrate;
$userDOUBLEhit1 = $userDOUBLEhit;
$userCRITrate1 = $userCRITrate;
$userBLOCKrate1 = $userBLOCKrate;
$userDODGErate1 = $userDODGErate;

?>