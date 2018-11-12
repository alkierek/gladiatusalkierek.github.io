<?php

## ARMADURA
## 10,20
## 30,60
## 90,120
## 130,165
## 180,220

## DESBLOQUEO ORDEN:
## PRIMERA PELEA: NOMBRE & NIVEL
## SEGUNDA: CONSTITUCION
## TERCERA: FUERZA
## CUARTA: HABILIDAD
## QUINTA: AGILIDAD
## SEXTA: ARMADURA
## SEPTIMA: INTELIGENCIA
## OCTAVA: DAÑO
## NOVENA: CARISMA
## DECIMA: VIDA

## LOCATION 0 = Bosque Sombrio
## RATA
if($Mid == 1){
$dataID = 1;
$monsterID = 1;
$monsterNAME = 'Rata';
$monsterIMG = '0/1_31';
$monsterTYPE = 'Normal';
$monsterLEVEL = rand(1,2);
$monsterLEVEL1 = 1;
$monsterLEVEL2 = 2;
$monsterLIFE = rand(59,140);
$monsterLIFE1 = 59;
$monsterLIFE2 = 140;
$monsterSTRENGHT = 'Muy debil';
$monsterST1 = 1;
$monsterST2 = 2;
$monsterSKILL = 'Normal';
$monsterSK1 = 4;
$monsterSK2 = 7;
$monsterAGILITY = 'Normal';
$monsterAG1 = 4;
$monsterAG2 = 7;
$monsterCONSTITUTION = 'Normal';
$monsterCO1 = 4;
$monsterCO2 = 7;
$monsterCHARISMA = 'Debil';
$monsterCH1 = 2;
$monsterCH2 = 4;
$monsterINTELLIGENCE = 'Normal';
$monsterIN1 = 4;
$monsterIN2 = 7;
$monsterARMOR = 'Muy debil';
$monsterAR1 = rand(5,50);
$monsterAR2 = $monsterAR1*$monsterLEVEL;
$monsterDAMAGE = 'Debil';
$monsterDAMAGEmin = rand(0,2);
$monsterDAMAGEmax = rand(2,3);
$monsterGOLD = rand(100,200);
$monsterITEM = rand(1,2); ## NIVEL DEL ITEM QUE PUEDE GENERAR
$verificar1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$verificar2 = mysql_num_rows($verificar1);
if($verificar2 == 0){
	$nuevatabla1 = "INSERT INTO count_locu SET clu_userID = '".$userID."', clu_monsterID = '".$monsterID."' ";
	$nuevatable2 = mysql_query($nuevatabla1);
	echo "<body><script type='text/javascript'>window.location='location.php?loc=$loc';</script></body>";
}
}
## LINCE
if($Mid == 2){
$dataID = 2;
$monsterID = 2;
$monsterNAME = 'Lince';
$monsterIMG = '0/1_33';
$monsterTYPE = 'Normal';
$monsterLEVEL = rand(2,5);
$monsterLEVEL1 = 2;
$monsterLEVEL2 = 5;
$monsterLIFE = rand(118,350);
$monsterLIFE1 = 118;
$monsterLIFE2 = 350;
$monsterSTRENGHT = 'Debil';
$monsterST1 = 3;
$monsterST2 = 7;
$monsterSKILL = 'Satisfactorio';
$monsterSK1 = 8;
$monsterSK2 = 13;
$monsterAGILITY = 'Normal';
$monsterAG1 = 7;
$monsterAG2 = 10;
$monsterCONSTITUTION = 'Debil';
$monsterCO1 = 3;
$monsterCO2 = 7;
$monsterCHARISMA = 'Debil';
$monsterCH1 = 3;
$monsterCH2 = 7;
$monsterINTELLIGENCE = 'Debil';
$monsterIN1 = 3;
$monsterIN2 = 7;
$monsterARMOR = 'Muy debil';
$monsterAR1 = rand(5,50);
$monsterAR2 = $monsterAR1*$monsterLEVEL;
$monsterDAMAGE = 'Debil';
$monsterDAMAGEmin = rand(3,5);
$monsterDAMAGEmax = rand(5,9);
$monsterGOLD = rand(200,600);
$monsterITEM = rand(1,3); ## NIVEL DEL ITEM QUE PUEDE GENERAR
$verificar1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$verificar2 = mysql_num_rows($verificar1);
if($verificar2 == 0){
	$nuevatabla1 = "INSERT INTO count_locu SET clu_userID = '".$userID."', clu_monsterID = '".$monsterID."' ";
	$nuevatable2 = mysql_query($nuevatabla1);
	echo "<body><script type='text/javascript'>window.location='location.php?loc=$loc';</script></body>";
}
}
## LOBO
if($Mid == 3){
$dataID = 3;
$monsterID = 3;
$monsterNAME = 'Lobo';
$monsterIMG = '0/1_5';
$monsterTYPE = 'Normal';
$monsterLEVEL = rand(4,8);
$monsterLEVEL1 = 4;
$monsterLEVEL2 = 8;
$monsterLIFE = rand(237,560);
$monsterLIFE1 = 237;
$monsterLIFE2 = 560;
$monsterSTRENGHT = 'Normal';
$monsterST1 = 8;
$monsterST2 = 12;
$monsterSKILL = 'Normal';
$monsterSK1 = 8;
$monsterSK2 = 12;
$monsterAGILITY = 'Normal';
$monsterAG1 = 8;
$monsterAG2 = 12;
$monsterCONSTITUTION = 'Debil';
$monsterCO1 = 5;
$monsterCO2 = 9;
$monsterCHARISMA = 'Debil';
$monsterCH1 = 5;
$monsterCH2 = 9;
$monsterINTELLIGENCE = 'Debil';
$monsterIN1 = 5;
$monsterIN2 = 9;
$monsterARMOR = 'Muy debil';
$monsterAR1 = rand(5,50);
$monsterAR2 = $monsterAR1*$monsterLEVEL;
$monsterDAMAGE = 'Muy debil';
$monsterDAMAGEmin = rand(5,8);
$monsterDAMAGEmax = rand(8,11);
$monsterGOLD = rand(400,1150);
$monsterITEM = rand(3,4); ## NIVEL DEL ITEM QUE PUEDE GENERAR
$verificar1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$verificar2 = mysql_num_rows($verificar1);
if($verificar2 == 0){
	$nuevatabla1 = "INSERT INTO count_locu SET clu_userID = '".$userID."', clu_monsterID = '".$monsterID."' ";
	$nuevatable2 = mysql_query($nuevatabla1);
	echo "<body><script type='text/javascript'>window.location='location.php?loc=$loc';</script></body>";
}
}
## OSO
if($Mid == 4){
$dataID = 4;
$monsterID = 4;
$monsterNAME = 'Oso';
$monsterIMG = '0/1_8';
$monsterTYPE = 'Boss';
$monsterLEVEL = rand(8,10);
$monsterLEVEL1 = 8;
$monsterLEVEL2 = 10;
$monsterLIFE = rand(475,700);
$monsterLIFE1 = 475;
$monsterLIFE2 = 700;
$monsterSTRENGHT = 'Bueno';
$monsterST1 = 21;
$monsterST2 = 23;
$monsterSKILL = 'Debil';
$monsterSK1 = 15;
$monsterSK2 = 20;
$monsterAGILITY = 'Debil';
$monsterAG1 = 15;
$monsterAG2 = 20;
$monsterCONSTITUTION = 'Satisfactorio';
$monsterCO1 = 27;
$monsterCO2 = 33;
$monsterCHARISMA = 'Debil';
$monsterCH1 = 15;
$monsterCH2 = 20;
$monsterINTELLIGENCE = 'Debil';
$monsterIN1 = 15;
$monsterIN2 = 20;
$monsterARMOR = 'Normal';
$monsterAR1 = rand(100,150);
$monsterAR2 = $monsterAR1*$monsterLEVEL;
$monsterDAMAGE = 'Normal';
$monsterDAMAGEmin = rand(13,17);
$monsterDAMAGEmax = rand(17,20);
$monsterGOLD = rand(1000,2200);
$monsterITEM = rand(3,6); ## NIVEL DEL ITEM QUE PUEDE GENERAR
$verificar1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$verificar2 = mysql_num_rows($verificar1);
if($verificar2 == 0){
	$nuevatabla1 = "INSERT INTO count_locu SET clu_userID = '".$userID."', clu_monsterID = '".$monsterID."' ";
	$nuevatable2 = mysql_query($nuevatabla1);
	echo "<body><script type='text/javascript'>window.location='location.php?loc=$loc';</script></body>";
}
}


## LOCATION 1 = Puerto Pirata
## 
if($Mid == 5){
$dataID = 5;
$monsterID = 5;
$monsterNAME = 'Esclavo fugitivo';
$monsterIMG = '0/1_15';
$monsterTYPE = 'Normal';
$monsterLEVEL = rand(8,9);
$monsterLEVEL1 = 8;
$monsterLEVEL2 = 9;
$monsterLIFE = rand(475,630);
$monsterLIFE1 = 475;
$monsterLIFE2 = 630;
$monsterSTRENGHT = 'Normal';
$monsterST1 = 15;
$monsterST2 = 20;
$monsterSKILL = 'Normal';
$monsterSK1 = 20;
$monsterSK2 = 25;
$monsterAGILITY = 'Normal';
$monsterAG1 = 30;
$monsterAG2 = 35;
$monsterCONSTITUTION = 'Normal';
$monsterCO1 = 15;
$monsterCO2 = 20;
$monsterCHARISMA = 'Muy debil';
$monsterCH1 = 15;
$monsterCH2 = 20;
$monsterINTELLIGENCE = 'Debil';
$monsterIN1 = 15;
$monsterIN2 = 20;
$monsterARMOR = 'Muy debil';
$monsterAR1 = rand(5,50);
$monsterAR2 = $monsterAR1*$monsterLEVEL;
$monsterDAMAGE = 'Muy debil';
$monsterDAMAGEmin = rand(7,10);
$monsterDAMAGEmax = rand(10,15);
$monsterGOLD = rand(2600,4200);
$monsterITEM = rand(4,6); ## NIVEL DEL ITEM QUE PUEDE GENERAR
$verificar1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$verificar2 = mysql_num_rows($verificar1);
if($verificar2 == 0){
	$nuevatabla1 = "INSERT INTO count_locu SET clu_userID = '".$userID."', clu_monsterID = '".$monsterID."' ";
	$nuevatable2 = mysql_query($nuevatabla1);
	echo "<body><script type='text/javascript'>window.location='location.php?loc=$loc';</script></body>";
}
}

## 
if($Mid == 6){
$dataID = 6;
$monsterID = 6;
$monsterNAME = 'Soldado Corrupto';
$monsterIMG = '0/1_17';
$monsterTYPE = 'Normal';
$monsterLEVEL = rand(9,12);
$monsterLEVEL1 = 9;
$monsterLEVEL2 = 12;
$monsterLIFE = rand(535,840);
$monsterLIFE1 = 535;
$monsterLIFE2 = 840;
$monsterSTRENGHT = 'Debil';
$monsterST1 = 13;
$monsterST2 = 18;
$monsterSKILL = 'Debil';
$monsterSK1 = 14;
$monsterSK2 = 17;
$monsterAGILITY = 'Normal';
$monsterAG1 = 21;
$monsterAG2 = 26;
$monsterCONSTITUTION = 'Normal';
$monsterCO1 = 20;
$monsterCO2 = 27;
$monsterCHARISMA = 'Debil';
$monsterCH1 = 13;
$monsterCH2 = 18;
$monsterINTELLIGENCE = 'Normal';
$monsterIN1 = 21;
$monsterIN2 = 26;
$monsterARMOR = 'Debil';
$monsterAR1 = rand(50,100);
$monsterAR2 = $monsterAR1*$monsterLEVEL;
$monsterDAMAGE = 'Debil';
$monsterDAMAGEmin = rand(10,13);
$monsterDAMAGEmax = rand(13,18);
$monsterGOLD = rand(3100,5300);
$monsterITEM = rand(5,8); ## NIVEL DEL ITEM QUE PUEDE GENERAR
$verificar1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$verificar2 = mysql_num_rows($verificar1);
if($verificar2 == 0){
	$nuevatabla1 = "INSERT INTO count_locu SET clu_userID = '".$userID."', clu_monsterID = '".$monsterID."' ";
	$nuevatable2 = mysql_query($nuevatabla1);
	echo "<body><script type='text/javascript'>window.location='location.php?loc=$loc';</script></body>";
}
}

## 
if($Mid == 7){
$dataID = 7;
$monsterID = 7;
$monsterNAME = 'Asesino';
$monsterIMG = '0/1_22';
$monsterTYPE = 'Normal';
$monsterLEVEL = rand(11,15);
$monsterLEVEL1 = 11;
$monsterLEVEL2 = 15;
$monsterLIFE = rand(654,1050);
$monsterLIFE1 = 654;
$monsterLIFE2 = 1050;
$monsterSTRENGHT = 'Debil';
$monsterST1 = 20;
$monsterST2 = 24;
$monsterSKILL = 'Normal';
$monsterSK1 = 28;
$monsterSK2 = 33;
$monsterAGILITY = 'Satisfactorio';
$monsterAG1 = 40;
$monsterAG2 = 44;
$monsterCONSTITUTION = 'Debil';
$monsterCO1 = 19;
$monsterCO2 = 26;
$monsterCHARISMA = 'Muy debil';
$monsterCH1 = 14;
$monsterCH2 = 20;
$monsterINTELLIGENCE = 'Normal';
$monsterIN1 = 27;
$monsterIN2 = 34;
$monsterARMOR = 'Muy debil';
$monsterAR1 = rand(5,50);
$monsterAR2 = $monsterAR1*$monsterLEVEL;
$monsterDAMAGE = 'Debil';
$monsterDAMAGEmin = rand(14,19);
$monsterDAMAGEmax = rand(20,24);
$monsterGOLD = rand(4800,7000);
$monsterITEM = rand(9,13); ## NIVEL DEL ITEM QUE PUEDE GENERAR
$verificar1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$verificar2 = mysql_num_rows($verificar1);
if($verificar2 == 0){
	$nuevatabla1 = "INSERT INTO count_locu SET clu_userID = '".$userID."', clu_monsterID = '".$monsterID."' ";
	$nuevatable2 = mysql_query($nuevatabla1);
	echo "<body><script type='text/javascript'>window.location='location.php?loc=$loc';</script></body>";
}
}

## 
if($Mid == 8){
$dataID = 8;
$monsterID = 8;
$monsterNAME = 'Capitan';
$monsterIMG = '0/1_21';
$monsterTYPE = 'Boss';
$monsterLEVEL = rand(15,17);
$monsterLEVEL1 = 15;
$monsterLEVEL2 = 17;
$monsterLIFE = rand(892,1190);
$monsterLIFE1 = 892;
$monsterLIFE2 = 1190;
$monsterSTRENGHT = 'Debil';
$monsterST1 = 31;
$monsterST2 = 32;
$monsterSKILL = 'Normal';
$monsterSK1 = 33;
$monsterSK2 = 40;
$monsterAGILITY = 'Normal';
$monsterAG1 = 34;
$monsterAG2 = 39;
$monsterCONSTITUTION = 'Normal';
$monsterCO1 = 34;
$monsterCO2 = 39;
$monsterCHARISMA = 'Debil';
$monsterCH1 = 32;
$monsterCH2 = 32;
$monsterINTELLIGENCE = 'Satisfactorio';
$monsterIN1 = 44;
$monsterIN2 = 54;
$monsterARMOR = 'Debil';
$monsterAR1 = rand(50,100);
$monsterAR2 = $monsterAR1*$monsterLEVEL;
$monsterDAMAGE = 'No<rmal';
$monsterDAMAGEmin = rand(23,29);
$monsterDAMAGEmax = rand(31,38);
$monsterGOLD = rand(7150,10000);
$monsterITEM = rand(11,17); ## NIVEL DEL ITEM QUE PUEDE GENERAR
$verificar1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$verificar2 = mysql_num_rows($verificar1);
if($verificar2 == 0){
	$nuevatabla1 = "INSERT INTO count_locu SET clu_userID = '".$userID."', clu_monsterID = '".$monsterID."' ";
	$nuevatable2 = mysql_query($nuevatabla1);
	echo "<body><script type='text/javascript'>window.location='location.php?loc=$loc';</script></body>";
}
}


## LOCATION 2 = Montañas Nubladas
##
if($Mid == 9){
$dataID = 9;
$monsterID = 9;
$monsterNAME = 'Recluta Fugitivo';
$monsterIMG = '0/1_20';
$monsterTYPE = 'Normal';
$monsterLEVEL = rand(15,16);
$monsterLEVEL1 = 15;
$monsterLEVEL2 = 16;
$monsterLIFE = rand(892,1120);
$monsterLIFE1 = 892;
$monsterLIFE2 = 1120;
$monsterSTRENGHT = 'Satisfactorio';
$monsterST1 = 40;
$monsterST2 = 45;
$monsterSKILL = 'Debil';
$monsterSK1 = 30;
$monsterSK2 = 35;
$monsterAGILITY = 'Debil';
$monsterAG1 = 40;
$monsterAG2 = 45;
$monsterCONSTITUTION = 'Satisfactorio';
$monsterCO1 = 40;
$monsterCO2 = 45;
$monsterCHARISMA = 'Muy debil';
$monsterCH1 = 25;
$monsterCH2 = 30;
$monsterINTELLIGENCE = 'Debil';
$monsterIN1 = 20;
$monsterIN2 = 25;
$monsterARMOR = 'Debil';
$monsterAR1 = rand(50,100);
$monsterAR2 = $monsterAR1*$monsterLEVEL;
$monsterDAMAGE = 'Debil';
$monsterDAMAGEmin = rand(15,20);
$monsterDAMAGEmax = rand(20,25);
$monsterGOLD = rand(4150,6000);
$monsterITEM = rand(14,19); ## NIVEL DEL ITEM QUE PUEDE GENERAR
$verificar1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$verificar2 = mysql_num_rows($verificar1);
if($verificar2 == 0){
	$nuevatabla1 = "INSERT INTO count_locu SET clu_userID = '".$userID."', clu_monsterID = '".$monsterID."' ";
	$nuevatable2 = mysql_query($nuevatabla1);
	echo "<body><script type='text/javascript'>window.location='location.php?loc=$loc';</script></body>";
}
}

## 
if($Mid == 10){
$dataID = 10;
$monsterID = 10;
$monsterNAME = 'Arpía';
$monsterIMG = '0/1_1';
$monsterTYPE = 'Normal';
$monsterLEVEL = rand(15,16);
$monsterLEVEL1 = 15;
$monsterLEVEL2 = 16;
$monsterLIFE = rand(892,1120);
$monsterLIFE1 = 892;
$monsterLIFE2 = 1120;
$monsterSTRENGHT = 'Satisfactorio';
$monsterST1 = 40;
$monsterST2 = 45;
$monsterSKILL = 'Debil';
$monsterSK1 = 30;
$monsterSK2 = 35;
$monsterAGILITY = 'Debil';
$monsterAG1 = 40;
$monsterAG2 = 45;
$monsterCONSTITUTION = 'Satisfactorio';
$monsterCO1 = 40;
$monsterCO2 = 45;
$monsterCHARISMA = 'Muy debil';
$monsterCH1 = 25;
$monsterCH2 = 30;
$monsterINTELLIGENCE = 'Debil';
$monsterIN1 = 20;
$monsterIN2 = 25;
$monsterARMOR = 'Debil';
$monsterAR1 = rand(50,100);
$monsterAR2 = $monsterAR1*$monsterLEVEL;
$monsterDAMAGE = 'Debil';
$monsterDAMAGEmin = rand(15,20);
$monsterDAMAGEmax = rand(20,25);
$monsterGOLD = rand(4150,6000);
$monsterITEM = rand(14,19); ## NIVEL DEL ITEM QUE PUEDE GENERAR
$verificar1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$verificar2 = mysql_num_rows($verificar1);
if($verificar2 == 0){
	$nuevatabla1 = "INSERT INTO count_locu SET clu_userID = '".$userID."', clu_monsterID = '".$monsterID."' ";
	$nuevatable2 = mysql_query($nuevatabla1);
	echo "<body><script type='text/javascript'>window.location='location.php?loc=$loc';</script></body>";
}
}

## 
if($Mid == 11){
$dataID = 11;
$monsterID = 11;
$monsterNAME = 'Cerbero';
$monsterIMG = '0/1_3';
$monsterTYPE = 'Normal';
$monsterLEVEL = rand(18,22);
$monsterLEVEL1 = 18;
$monsterLEVEL2 = 22;
$monsterLIFE = rand(1071,1540);
$monsterLIFE1 = 1071;
$monsterLIFE2 = 1540;
$monsterSTRENGHT = 'Normal';
$monsterST1 = 45;
$monsterST2 = 50;
$monsterSKILL = 'Satisfactorio';
$monsterSK1 = 60;
$monsterSK2 = 65;
$monsterAGILITY = 'Debil';
$monsterAG1 = 45;
$monsterAG2 = 50;
$monsterCONSTITUTION = 'Satisfactorio';
$monsterCO1 = 45;
$monsterCO2 = 50;
$monsterCHARISMA = 'Satisfactorio';
$monsterCH1 = 95;
$monsterCH2 = 100;
$monsterINTELLIGENCE = 'Muy debil';
$monsterIN1 = 15;
$monsterIN2 = 20;
$monsterARMOR = 'Debil';
$monsterAR1 = rand(50,100);
$monsterAR2 = $monsterAR1*$monsterLEVEL;
$monsterDAMAGE = 'Debil';
$monsterDAMAGEmin = rand(20,25);
$monsterDAMAGEmax = rand(25,30);
$monsterGOLD = rand(6300,7800);
$monsterITEM = rand(20,24); ## NIVEL DEL ITEM QUE PUEDE GENERAR
$verificar1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$verificar2 = mysql_num_rows($verificar1);
if($verificar2 == 0){
	$nuevatabla1 = "INSERT INTO count_locu SET clu_userID = '".$userID."', clu_monsterID = '".$monsterID."' ";
	$nuevatable2 = mysql_query($nuevatabla1);
	echo "<body><script type='text/javascript'>window.location='location.php?loc=$loc';</script></body>";
}
}


## 
if($Mid == 12){
$dataID = 12;
$monsterID = 12;
$monsterNAME = 'Medusa';
$monsterIMG = '0/1_2';
$monsterTYPE = 'Boss';
$monsterLEVEL = rand(22,24);
$monsterLEVEL1 = 22;
$monsterLEVEL2 = 24;
$monsterLIFE = rand(1309,1680);
$monsterLIFE1 = 1309;
$monsterLIFE2 = 1680;
$monsterSTRENGHT = 'Debil';
$monsterST1 = 35;
$monsterST2 = 40;
$monsterSKILL = 'Satisfactorio';
$monsterSK1 = 80;
$monsterSK2 = 85;
$monsterAGILITY = 'Satisfactorio';
$monsterAG1 = 100;
$monsterAG2 = 105;
$monsterCONSTITUTION = 'Normal';
$monsterCO1 = 50;
$monsterCO2 = 55;
$monsterCHARISMA = 'Satisfactorio';
$monsterCH1 = 115;
$monsterCH2 = 120;
$monsterINTELLIGENCE = 'Normal';
$monsterIN1 = 50;
$monsterIN2 = 55;
$monsterARMOR = 'Debil';
$monsterAR1 = rand(50,100);
$monsterAR2 = $monsterAR1*$monsterLEVEL;
$monsterDAMAGE = 'Normal';
$monsterDAMAGEmin = rand(30,35);
$monsterDAMAGEmax = rand(40,45);
$monsterGOLD = rand(12000,17500);
$monsterITEM = rand(21,27); ## NIVEL DEL ITEM QUE PUEDE GENERAR
$verificar1 = mysql_query("SELECT * FROM count_locu WHERE clu_userID = '".$userID."' AND clu_monsterID = '".$monsterID."' ");
$verificar2 = mysql_num_rows($verificar1);
if($verificar2 == 0){
	$nuevatabla1 = "INSERT INTO count_locu SET clu_userID = '".$userID."', clu_monsterID = '".$monsterID."' ";
	$nuevatable2 = mysql_query($nuevatabla1);
	echo "<body><script type='text/javascript'>window.location='location.php?loc=$loc';</script></body>";
}
}

?>