<div id="mainbox">

<input type="hidden" id="guild_storage_bag_hidden_param" name="guild_storage_bag_hidden_param" value="0" size="1" maxlength="1"/>
<div class="title_box"><div class="title_inner">Administrar rangos</div></div>

<div class="title2_box"><div class="title2_inner"><table width="100%">

<tr><td>Nombre</td><td>Escribe Mensajes</td><td>Leer mensajes</td><td>Borrar Mensajes</td></tr>

<tr><th>Fundador</th><th><input type="checkbox" checked disabled="disabled"></th>
<th><input type="checkbox" checked disabled="disabled"></th>
<th><input type="checkbox" checked disabled="disabled"></th>
</tr>

<tr>
<th>Admin</th>
<th><input type="checkbox" checked disabled="disabled"></th>
<th><input type="checkbox" checked disabled="disabled"></th>
<th><input type="checkbox" checked disabled="disabled"></th>
</tr>

<tr>
<th>Miembro</th>
<th><input type="checkbox" disabled="disabled"></th>
<th><input type="checkbox" disabled="disabled"></th>
<th><input type="checkbox" disabled="disabled"></th>
</tr>

<?php
$granks1 = mysql_query("SELECT * FROM guilds_ranks WHERE gr_guildID = '".$guserID."' ");
$granks2 = mysql_num_rows($granks1);
$granks3 = 1;
while ($granks3 <= $granks2) {
    $granks3++;
    $granks4 = mysql_fetch_array($granks1);
    $rankNAME = $granks4['gr_name'];
    $rankID = $granks4['gr_id'];
    $rankP1 = $granks4['gr_pVox1'];
    $ch1 = '';
    $ra1 = 1;
    if ($rankP1 == 1) {
        $ch1 = 'checked="checked"';
        $ra1 = 0;
    }
    $rankP2 = $granks4['gr_pVox2'];
    $ch2 = '';
    $ra2 = 1;
    if ($rankP2 == 1) {
        $ch2 = 'checked="checked"';
        $ra2 = 0;
    }
    $rankP3 = $granks4['gr_pVox3'];
    $ch3 = '';
    $ra3 = 1;
    if ($rankP3 == 1) {
        $ch3 = 'checked="checked"';
        $ra3 = 0;
    }
?>

<tr><th><?php echo $rankNAME; ?><br>
</th>
<th><input onchange="window.location.href='guild_bath.php?mod=rights&saveRights=<?php echo $rankID; ?>-1-<?php echo $ra1; ?>'" type="checkbox" <?php echo $ch1; ?> name="<?php echo $rankID; ?>-1-<?php echo $ra1; ?>" /></th>
<th><input onchange="window.location.href='guild_bath.php?mod=rights&saveRights=<?php echo $rankID; ?>-2-<?php echo $ra2; ?>'" type="checkbox" <?php echo $ch2; ?> name="<?php echo $rankID; ?>-2-<?php echo $ra2; ?>" /></th>
<th><input onchange="window.location.href='guild_bath.php?mod=rights&saveRights=<?php echo $rankID; ?>-3-<?php echo $ra3; ?>'" type="checkbox" <?php echo $ch3; ?> name="<?php echo $rankID; ?>-3-<?php echo $ra3; ?>" /></th>
</tr>

<?php
}
?>

</table></div></div>

</div>