<?php

$d11a = $Dios1Nivel1A;
$apoloLv1 = 0.1*$d11a;
$userAGILITY = (int)($userAGILITY+($userAGILITY*$apoloLv1/100));
$d12a = $Dios1Nivel2A;
$apoloLv2 = 0.4*$d12a;
$userDAMAGEmin = (int)($userDAMAGEmin+$apoloLv2);
$userDAMAGEmax = (int)($userDAMAGEmax+$apoloLv2);
$userDAMAGEbyUps += (int)($apoloLv2);
$d13a = $Dios1Nivel3A;
$apoloLv3 = 2.5*$d13a*$userLEVEL;
$userARMOR = $userARMOR+$apoloLv3;
$userREDUCEdmg1 = (int)($userARMOR/80);
$userREDUCEdmg2 = (int)($userARMOR/60);

$d21a = $Dios2Nivel1A;
$dianaLv1 = 0.5*$d21a*$userLEVEL;
$userARMOR = $userARMOR+$dianaLv1;
$userREDUCEdmg1 = (int)($userARMOR/80);
$userREDUCEdmg2 = (int)($userARMOR/60);
$d22a = $Dios2Nivel2A;
$dianaLv2 = 0.3*$d22a;
$userSKILL = (int)($userSKILL+($userSKILL*$dianaLv2/100));
$d23a = $Dios2Nivel3A;
$dianaLv3 = 0.05*$d23a*$userLEVEL;
$userSKILL = (int)($userSKILL+$dianaLv3);

$d31a = $Dios3Nivel1A;
$marteLv1 = 0.2*$d31a;
$userDAMAGEmin = (int)($userDAMAGEmin+$marteLv1);
$userDAMAGEmax = (int)($userDAMAGEmax+$marteLv1);
$userDAMAGEbyUps += (int)($marteLv1);
$d32a = $Dios3Nivel2A;
$marteLv2 = 0.3*$d32a;
$userAGILITY = (int)($userAGILITY+($userAGILITY*$marteLv2/100));
$d33a = $Dios3Nivel3A;
$marteLv3 = 0.05*$d33a*$userLEVEL;
$userAGILITY = (int)($userAGILITY+$marteLv3);

$d41a = $Dios4Nivel1A;
$mercurioLv1 = 0.1*$d41a;
$userCHARISMA = (int)($userCHARISMA+($userCHARISMA*$mercurioLv1/100));
$d42a = $Dios4Nivel2A;
$mercurioLv2 = 0.3*$d42a;
$userINTELLIGENCE = (int)($userINTELLIGENCE+($userINTELLIGENCE*$mercurioLv2/100));
$d43a = $Dios4Nivel3A;
$mercurioLv3 = 0.05*$d43a*$userLEVEL;
$userINTELLIGENCE = (int)($userINTELLIGENCE+$mercurioLv3);

$d51a = $Dios5Nivel1A;
$minervaLv1 = 0.1*$d51a;
$userINTELLIGENCE = (int)($userINTELLIGENCE+($userINTELLIGENCE*$minervaLv1/100));
$d52a = $Dios5Nivel2A;
$minervaLv2 = 0.3*$d52a;
$userCHARISMA = (int)($userCHARISMA+($userCHARISMA*$minervaLv2/100));
$d53a = $Dios5Nivel3A;
$minervaLv3 = 0.05*$d53a*$userLEVEL;
$userCHARISMA = (int)($userCHARISMA+$minervaLv3);

$d61a = $Dios6Nivel1A;
$vulcanoLv1 = 0.1*$d61a;
$userSKILL = (int)($userSKILL+($userSKILL*$vulcanoLv1/100));
$d62a = $Dios6Nivel2A;
$vulcanoLv2 = 1.5*$d62a*$userLEVEL;
$userARMOR = $userARMOR+$vulcanoLv2;
$userREDUCEdmg1 = (int)($userARMOR/80);
$userREDUCEdmg2 = (int)($userARMOR/60);
$d63a = $Dios6Nivel3A;
$vulcanoLv3 = 0.5*$d63a;
$userARMOR = (int)($userARMOR+($userARMOR*$vulcanoLv3/100));
$userREDUCEdmg1 = (int)($userARMOR/80);
$userREDUCEdmg2 = (int)($userARMOR/60);
$userLIFEbyUps = (int)($userLIFEbyUps+($userLIFEmax*$vulcanoLv3/100));
$userLIFEmax = $userLIFEmax+$userLIFEbyUps;

if($userSKILL > $userSKILLmax){
	$userSKILL = $userSKILLmax;
}
$userSKILLper = (int)($userSKILL*100/$userSKILLmax);
if($userAGILITY > $userAGILITYmax){
	$userAGILITY = $userAGILITYmax;
}
$userAGILITYper = (int)($userAGILITY*100/$userAGILITYmax);
if($userCHARISMA > $userCHARISMAmax){
	$userCHARISMA = $userCHARISMAmax;
}
$userCHARISMAper = (int)($userCHARISMA*100/$userCHARISMAmax);
if($userINTELLIGENCE > $userINTELLIGENCEmax){
	$userINTELLIGENCE = $userINTELLIGENCEmax;
}
$userINTELLIGENCEper = (int)($userINTELLIGENCE*100/$userINTELLIGENCEmax);

?>