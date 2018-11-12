<?php
## FUERZA
$costoFuerza = (int)(($userSTRENGHTbasic*6.5)*6.5);
if($userSTRENGHTbasic == 5){
	$costoFuerza = 1;
}elseif($userSTRENGHTbasic == 6){
	$costoFuerza = 7;
}elseif($userSTRENGHTbasic == 7){
	$costoFuerza = 13;
}elseif($userSTRENGHTbasic == 8){
	$costoFuerza = 39;
}elseif($userSTRENGHTbasic == 9){
	$costoFuerza = 78;
}elseif($userSTRENGHTbasic == 10){
	$costoFuerza = 160;
}elseif($userSTRENGHTbasic == 11){
	$costoFuerza = 280;
}elseif($userSTRENGHTbasic == 12){
	$costoFuerza = 420;
}
$costoFuerza1 = number_format($costoFuerza, 0, ",", ".");
## HABILIDAD
$costoHabilidad = (int)(($userSKILLbasic*4.5)*4.5);
if($userSKILLbasic == 5){
	$costoHabilidad = 1;
}elseif($userSKILLbasic == 6){
	$costoHabilidad = 5;
}elseif($userSKILLbasic == 7){
	$costoHabilidad = 9;
}elseif($userSKILLbasic == 8){
	$costoHabilidad = 27;
}elseif($userSKILLbasic == 9){
	$costoHabilidad = 54;
}elseif($userSKILLbasic == 10){
	$costoHabilidad = 110;
}elseif($userSKILLbasic == 11){
	$costoHabilidad = 190;
}
$costoHabilidad1 = number_format($costoHabilidad, 0, ",", ".");
## AGILIDAD
$costoAgilidad = (int)(($userAGILITYbasic*2.5)*2.5);
if($userAGILITYbasic == 5){
	$costoAgilidad = 1;
}elseif($userAGILITYbasic == 6){
	$costoAgilidad = 3;
}elseif($userAGILITYbasic == 7){
	$costoAgilidad = 5;
}elseif($userAGILITYbasic == 8){
	$costoAgilidad = 15;
}elseif($userAGILITYbasic == 9){
	$costoAgilidad = 30;
}elseif($userAGILITYbasic == 10){
	$costoAgilidad = 60;
}
$costoAgilidad1 = number_format($costoAgilidad, 0, ",", ".");
## CONSTITUCION
$costoConstitucion = (int)(($userCONSTITUTIONbasic*3.5)*3.5);
if($userCONSTITUTIONbasic == 5){
	$costoConstitucion = 1;
}elseif($userCONSTITUTIONbasic == 6){
	$costoConstitucion = 4;
}elseif($userCONSTITUTIONbasic == 7){
	$costoConstitucion = 7;
}elseif($userCONSTITUTIONbasic == 8){
	$costoConstitucion = 21;
}elseif($userCONSTITUTIONbasic == 9){
	$costoConstitucion = 42;
}elseif($userCONSTITUTIONbasic == 10){
	$costoConstitucion = 90;
}
$costoConstitucion1 = number_format($costoConstitucion, 0, ",", ".");
## CARISMA
$costoCarisma = (int)(($userCHARISMAbasic*4.5)*4.5);
if($userCHARISMAbasic == 5){
	$costoCarisma = 1;
}elseif($userCHARISMAbasic == 6){
	$costoCarisma = 5;
}elseif($userCHARISMAbasic == 7){
	$costoCarisma = 9;
}elseif($userCHARISMAbasic == 8){
	$costoCarisma = 27;
}elseif($userCHARISMAbasic == 9){
	$costoCarisma = 54;
}elseif($userCHARISMAbasic == 10){
	$costoCarisma = 110;
}elseif($userCHARISMAbasic == 10){
	$costoCarisma = 190;
}
$costoCarisma1 = number_format($costoCarisma, 0, ",", ".");
## INTELIGENCIA
$costoInteligencia = (int)(($userINTELLIGENCEbasic*5.5)*5.5);
if($userINTELLIGENCEbasic == 5){
	$costoInteligencia = 1;
}elseif($userINTELLIGENCEbasic == 6){
	$costoInteligencia = 6;
}elseif($userINTELLIGENCEbasic == 7){
	$costoInteligencia = 11;
}elseif($userINTELLIGENCEbasic == 8){
	$costoInteligencia = 33;
}elseif($userINTELLIGENCEbasic == 9){
	$costoInteligencia = 66;
}elseif($userINTELLIGENCEbasic == 10){
	$costoInteligencia = 140;
}elseif($userINTELLIGENCEbasic == 11){
	$costoInteligencia = 245;
}
$costoInteligencia1 = number_format($costoInteligencia, 0, ",", ".");
?>