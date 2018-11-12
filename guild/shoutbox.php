<div style="margin:20px">
<?php if ($guserCV1 == 1) { ?>
<!-- -->
<div class="title_box"><div class="title_inner">Mensajes</div></div>
<div class="title2_box"><div class="title2_inner"><p><table width="100%">
<?php
$vox1 = mysql_query("SELECT * FROM guilds_baths WHERE gbr_guildID = '".$guserID."' ");
$vox2 = mysql_num_rows($vox1);
if ($vox2 != 0) {
    $vox3 = 1;
    while ($vox3 <= $vox2) {
        $vox4 = mysql_fetch_array($vox1);
        $userIDi = $vox4['gbr_userID'];
        $datev = $vox4['gbr_date'];
        $textv = $vox4['gbr_text'];
        $idv = $vox4['gbr_id'];
        $userDv = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE user_id = '".$userIDi."' "));
        $userACCi = $userDv['user_accID'];
        $userDv2 = mysql_fetch_array(mysql_query("SELECT * FROM accounts WHERE acc_id = '".$userACCi."' "));
        $userNAMEi = $userDv2['acc_name'];
        $rankDv = mysql_fetch_array(mysql_query("SELECT * FROM guilds_members WHERE gmb_userID = '".$userIDi."' "));
        $userRANKi = $rankDv['gmb_rank'];
        $rankDv2 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_ranks WHERE gr_id = '".$userRANKi."' "));
        $userRNAMEi = $rankDv2['gr_name'];
        if ($userRANKi == 1) {
            $userRNAMEi = 'Miembro';
        } elseif ($userRANKi == 98) {
            $userRNAMEi = 'Admin';
        } elseif ($userRANKi == 99) {
            $userRNAMEi = 'Fundador';
        }
        $vox3++;
        ?>
<tr><th>Remitente</th><th><a href="player.php?p=<?php echo $userIDi; ?>"><?php echo $userNAMEi; ?></a>&nbsp;(<?php echo $userRNAMEi; ?>)&nbsp;<?php echo $datev; ?></th></tr>
<tr><th colspan="2" style="padding-top:5px">Contenido</th></tr>
<tr><th colspan="2" style="padding-bottom:5px"><?php echo $textv; ?></th></tr>
<?php if ($guserCV3 == 1) { ?><tr><th colspan="2"><a href="guild_bath.php?mod=shoutbox&den=<?php echo $idv; ?>">borrar mensaje</a></th></tr><?php } ?>
<tr><td colspan="2"><hr style="color:#552222"></td></tr>
        <?php
    }
}
?>
<?php
?>
</table></p></div></div>
<?php } ?>
<!-- -->
<br />
<!-- -->
<?php if ($guserCV2 == 1) { ?>
<div class="title_box"><div class="title_inner">Nuevo mensaje</div>
<div class="title2_box"><div class="title2_inner" style="padding:15px">
<form action="guild_bath.php?mod=shoutbox"  method="POST" accept-charset="utf-8">
<textarea name="message" style="width:100%;height:150px"></textarea><br />
<input type="submit" name="sendMessage" value="insertar" class="button3" />
</form>
</div></div>
</div>
<?php } ?>
<!-- -->
</div>
