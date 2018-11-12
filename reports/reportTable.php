<?php

$fecha1 = mysql_fetch_array(mysql_query("SELECT * FROM mob_reports WHERE mr_codeP = '".$codeP."' "));
$fecha = $fecha1['mr_date'];

if($mww == 0){
    $winTXT = 'Empate';
}elseif($mww == 1){
    $winTXT = 'Ganador: </span> &nbsp; <span class="span_right">'.$userNAME.'';
}elseif($mww == 2){
    $winTXT = 'Ganador: </span> &nbsp; <span class="span_right">'.$monsterNAME.'';
}

$reportTable = '
<tr>
<td><a href="player.php?p='.$userID.'">'.$userNAME.'</a></td><td><a href="guild.php?i="></a></td>
<td>'.$userPOINTS.'</td><td>'.$userLIFEn.'</td></tr><tr>
<td>'.$monsterNAME.'</td><td></td>
<td>'.$monsterPOINTS.'</td><td>'.$monsterLIFEn.'</td>
</tr>

</table>

</div></div>

<div class="title_box"><div class="title_inner">
<span class="span_left">'.$winTXT.'</span></div></div>

</div>
';

$actualizarR11 = "UPDATE mob_reports SET mr_report0 = '".$reportTable."' WHERE mr_codeP = '".$codeP."' ";
$actualizarR11q = mysql_query($actualizarR11);

?>