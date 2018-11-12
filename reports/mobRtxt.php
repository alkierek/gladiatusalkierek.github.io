<?php

$roundTXT1 = "";
$monsterTXT1 = "";
$monsterTXT2 = "";
$userDIE = "";
$userTXT1 = "";
$userTXT2 = "";
$monsterDIE = "";
$ronda1 = $ronda-1;
$reportID = $reportID;
$codeP = $codeP;

if($ronda == 1){
	$ronda = 1;
}elseif($ronda == 2){
	$ronda = 2;
}elseif($ronda == 3){
	$ronda = 3;
}elseif($ronda == 4){
	$ronda = 4;
}elseif($ronda == 5){
	$ronda = 5;
}

$roundTXT1 = '<tr style="background-color: #B5AB83;"><th colspan="2" class="table_border_bottom">Ronda '.$ronda1.'</th></tr>';
if($monsterLIFEn == 1){
	$monsterDIE = '<td width="50%"></td><td style="text-align:center;"><b>*'.$monsterNAME1.' muere*</b></td>';
}
$monsterTXT1 = '<tr style="background-color:#CFC7A3;"><td width="50%">'.$monsterNAME.' golpea a '.$userNAME.'.</td><td style="text-align:center;">'.$monsterTIMEtxt1.'</td></tr>';
if($EDH == 1 && $userLIFEn > 1){
	$monsterTXT2 = '<tr style="background-color:#CFC7A3;"><td width="50%">'.$monsterNAME.' golpea a '.$userNAME.'.</td><td style="text-align:center;">'.$monsterTIMEtxt2.'</td></tr>';
}
if($userLIFEn == 1){
	$userDIE = '<td width="50%"></td><td style="text-align:center;"><b>*'.$userNAME.' muere*</b></td>';	
}else{
	
}
if($userLIFEn > 1){
	$userTXT1 = '<tr><td width="50%">'.$userNAME.' golpea a '.$monsterNAME.'.</td><td style="text-align:center;">'.$userTIMEtxt1.'</td></tr>';
	if($UDH == 1 && $monsterLIFEn > 1){
		$userTXT2 = '<tr><td width="50%">'.$userNAME.' golpea a '.$monsterNAME.'.</td><td style="text-align:center;">'.$userTIMEtxt2.'</td></tr>';
	}
}else{

}

if($ronda1 == 1){
	$table = "$roundTXT1 $monsterTXT1 $monsterTXT2 $userDIE $userTXT1 $userTXT2 $monsterDIE";
	$ronda1 = "UPDATE mob_reports SET mr_round1 = '".$table."' WHERE mr_id = '".$reportID."' ";
	$ronda12 = mysql_query($ronda1);
}
if($ronda1 == 2){
	$table = "$roundTXT1 $monsterTXT1 $monsterTXT2 $userDIE $userTXT1 $userTXT2 $monsterDIE";
	$ronda2 = "UPDATE mob_reports SET mr_round2 = '".$table."' WHERE mr_id = '".$reportID."' ";
	$ronda22 = mysql_query($ronda2);
}
if($ronda1 == 3){
	$table = "$roundTXT1 $monsterTXT1 $monsterTXT2 $userDIE $userTXT1 $userTXT2 $monsterDIE";
	$ronda3 = "UPDATE mob_reports SET mr_round3 = '".$table."' WHERE mr_id = '".$reportID."' ";
	$ronda32 = mysql_query($ronda3);
}
if($ronda1 == 4){
	$table = "$roundTXT1 $monsterTXT1 $monsterTXT2 $userDIE $userTXT1 $userTXT2 $monsterDIE";
	$ronda4 = "UPDATE mob_reports SET mr_round4 = '".$table."' WHERE mr_id = '".$reportID."' ";
	$ronda42 = mysql_query($ronda4);
}
if($ronda1 == 5){
	$table = "$roundTXT1 $monsterTXT1 $monsterTXT2 $userDIE $userTXT1 $userTXT2 $monsterDIE";
	$ronda5 = "UPDATE mob_reports SET mr_round5 = '".$table."' WHERE mr_id = '".$reportID."' ";
	$ronda52 = mysql_query($ronda5);
}
if($ronda1 == 6){
	$table = "$roundTXT1 $monsterTXT1 $monsterTXT2 $userDIE $userTXT1 $userTXT2 $monsterDIE";
	$ronda6 = "UPDATE mob_reports SET mr_round6 = '".$table."' WHERE mr_id = '".$reportID."' ";
	$ronda62 = mysql_query($ronda6);
}
if($ronda1 == 7){
	$table = "$roundTXT1 $monsterTXT1 $monsterTXT2 $userDIE $userTXT1 $userTXT2 $monsterDIE";
	$ronda7 = "UPDATE mob_reports SET mr_round7 = '".$table."' WHERE mr_id = '".$reportID."' ";
	$ronda72 = mysql_query($ronda7);
}
if($ronda1 == 8){
	$table = "$roundTXT1 $monsterTXT1 $monsterTXT2 $userDIE $userTXT1 $userTXT2 $monsterDIE";
	$ronda8 = "UPDATE mob_reports SET mr_round8 = '".$table."' WHERE mr_id = '".$reportID."' ";
	$ronda82 = mysql_query($ronda8);
}
if($ronda1 == 9){
	$table = "$roundTXT1 $monsterTXT1 $monsterTXT2 $userDIE $userTXT1 $userTXT2 $monsterDIE";
	$ronda9 = "UPDATE mob_reports SET mr_round9 = '".$table."' WHERE mr_id = '".$reportID."' ";
	$ronda92 = mysql_query($ronda9);
}
if($ronda1 == 10){
	$table = "$roundTXT1 $monsterTXT1 $monsterTXT2 $userDIE $userTXT1 $userTXT2 $monsterDIE";
	$ronda10 = "UPDATE mob_reports SET mr_round10 = '".$table."' WHERE mr_id = '".$reportID."' ";
	$ronda102 = mysql_query($ronda10);
}

?>