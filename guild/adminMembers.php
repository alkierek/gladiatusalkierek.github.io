<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>

<div id="blackoutDialog1" class="cancel_confirm">
<div class="blackoutDialog_header pngfix"><div id="header_1" style="font-size:large;text-align:center">Cambiar Maestro de la Alianza.</div></div>
<div class="blackoutDialog_body pngfix">
<div class="blackoutDialog_icon"><img src="8501/img/ui/blackoutDialog/icon_question.jpg"/></div>
<div id="dialogTxt1" class="blackoutDialog_text"><p></p></div><br class="clearfloat" />
<table class="blackoutDialog_buttons" cellspacing="0" cellpadding="0"><tr>
<td id="buttonleft1" style="width:50%"><div class="al" style="padding:5px"><input type="submit" class="awesome-button big" value="Designar como maestro" id="link1" /></div></td>
<td id="buttonright1" style="width:50%"><div class="ar" style="padding:5px"><input type="submit" class="awesome-button big" value="Cancelar" onclick="blackoutDialog(false)" id="linkcancel1" /></div></td>
</tr></table></div><div class="blackoutDialog_footer pngfix"></div></div>

<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>

<div id="blackoutDialog2" class="cancel_confirm">
<div class="blackoutDialog_header pngfix"><div id="header_2" style="font-size:large;text-align:center">¡Echar miembro de la Alianza!</div></div>
<div class="blackoutDialog_body pngfix">
<div class="blackoutDialog_icon"><img src="8501/img/ui/blackoutDialog/icon_question.jpg"/></div>
<div id="dialogTxt2" class="blackoutDialog_text"><p></p></div><br class="clearfloat" />
<table class="blackoutDialog_buttons" cellspacing="0" cellpadding="0"><tr>
<td id="buttonleft2" style="width:50%"><div class="al" style="padding:5px"><input type="submit" class="awesome-button big" value="Expulsar" id="link2" /></div></td>
<td id="buttonright2" style="width:50%"><div class="ar" style="padding:5px"><input type="submit" class="awesome-button big" value="Cancelar" onclick="blackoutDialog(false)" id="linkcancel2" /></div></td>
</tr></table></div><div class="blackoutDialog_footer pngfix"></div></div>


<div id="mainbox">

<?php if (isset($_GET['submod'])): ?>
    <?php if ($_GET['submod'] == 'suses'): ?>
        <div style="margin-bottom: 10px;"><div class="title2_box"><div class="title2_inner messageSuccess">Valor guardado.</div></div></div>
    <?php endif ?>
    <?php if ($_GET['submod'] == 'lowl'): ?>
        <div style="margin-bottom: 10px;"><div class="title2_box"><div class="title2_inner messageFail">Rango bajo.</div></div></div>
    <?php endif ?>
    <?php if ($_GET['submod'] == 'cant'): ?>
        <div style="margin-bottom: 10px;"><div class="title2_box"><div class="title2_inner messageFail">Accion no posible.</div></div></div>
    <?php endif ?>
<?php endif ?>

<div class="title_box"><div class="title_inner">Administrar miembros</div></div>
<div class="title2_box"><div class="title2_inner"><form action="admin.php?mod=adminMembers&submod=saveMembersRank" method="POST"><table width="100%">

<?php
$master1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_members WHERE gmb_guildID = '".$guserID."' AND gmb_rank = 99 "));
$masterID = $master1['gmb_userID'];
$master2 = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE user_id = '".$masterID."' "));
$masterAID = $master2['user_accID'];
$master3 = mysql_fetch_array(mysql_query("SELECT * FROM accounts WHERE acc_id = '".$masterAID."' "));
$masterNAME = $master3['acc_name'];
?>
<tr>
<td><a href="player.php?p=<?php echo $masterID; ?>"><?php echo $masterNAME; ?></a></td>
<th></th>
<th>
<select name="rank" size="1" disabled>
<option>Fundador</option>
<option value="98">Admin</option>
<option value="1">Miembro</option>
</select>
</th>
</tr>

<?php
$admin1 = mysql_query("SELECT * FROM guilds_members WHERE gmb_guildID = '".$guserID."' AND gmb_rank = 98 ");
$admin2 = mysql_num_rows($admin1);
if ($admin2 != 0) {
    $admin3 = 1;
    while ($admin3 <= $admin2) {
        $admin3++;
        $admin4 = mysql_fetch_array($admin1);
        $adminID = $admin4['gmb_userID'];
        $admin5 = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE user_id = '".$adminID."' "));
        $adminAID = $admin5['user_accID'];
        $admin6 = mysql_fetch_array(mysql_query("SELECT * FROM accounts WHERE acc_id = '".$adminAID."' "));
        $adminNAME = $admin6['acc_name'];
        ?>
<tr>
<td><a href="player.php?p=<?php echo $adminID; ?>"><?php echo $adminNAME; ?></a></td>
<th></th>
<th>
<select name="rank" size="1" onchange="location = this.options[this.selectedIndex].value;">
<option>Admin</option>
<option value="admin.php?mod=adminMembers&saveMembersRank=<?php echo $adminID; ?>-<?php echo $guserID; ?>-99">Fundador</option>
<?php
$ors1 = mysql_query("SELECT * FROM guilds_ranks WHERE gr_guildID = '".$guserID."' ");
$ors2 = mysql_num_rows($ors1);
$ors3 = 1;
if ($ors2 != 0) {
    while ($ors3 <= $ors2) {
        $ors3++;
        $ors4 = mysql_fetch_array($ors1);
        $rName = $ors4['gr_name'];
        $rId = $ors4['gr_id'];
        ?>
        <option value="admin.php?mod=adminMembers&saveMembersRank=<?php echo $adminID; ?>-<?php echo $guserID; ?>-<?php echo $rId; ?>"><?php echo $rName; ?></option>
        <?php
    }
}
?>
<option value="admin.php?mod=adminMembers&saveMembersRank=<?php echo $adminID; ?>-<?php echo $guserID; ?>-1">Miembro</option>
</select>
</th>
</tr>
        <?php
    }
}
?>

<?php
$members1 = mysql_query("SELECT * FROM guilds_members WHERE gmb_guildID = '".$guserID."' AND gmb_rank != 99 AND gmb_rank != 98 AND gmb_rank != 1 ORDER BY gmb_rank DESC ");
$members2 = mysql_num_rows($members1);
$members3 = 1;
while ($members3 <= $members2) {
    $members3++;
    $members4 = mysql_fetch_array($members1);
    $mbuid = $members4['gmb_userID'];
    $name1 = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE user_id = '".$mbuid."' "));
    $name2 = $name1['user_accID'];
    $name3 = mysql_fetch_array(mysql_query("SELECT * FROM accounts WHERE acc_id = '".$name2."' "));
    $name4 = $name3['acc_name'];
    $mburid = $members4['gmb_rank'];
    $rd1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_ranks WHERE gr_id = '".$mburid."' "));
    $rd2 = $rd1['gr_name'];
    ?>
<tr>
<td><a href="player.php?p=<?php echo $mbuid; ?>"><?php echo $name4; ?></a></td>
<th></th>
<th>
<select name="rank" size="1" onchange="location = this.options[this.selectedIndex].value;">
<option><?php echo $rd2; ?></option>
<option value="admin.php?mod=adminMembers&saveMembersRank=<?php echo $mbuid; ?>-<?php echo $guserID; ?>-99">Fundador</option>
<option value="admin.php?mod=adminMembers&saveMembersRank=<?php echo $mbuid; ?>-<?php echo $guserID; ?>-98">Admin</option>
<?php
$ors1 = mysql_query("SELECT * FROM guilds_ranks WHERE gr_guildID = '".$guserID."' ");
$ors2 = mysql_num_rows($ors1);
$ors3 = 1;
if ($ors2 != 0) {
    while ($ors3 <= $ors2) {
        $ors3++;
        $ors4 = mysql_fetch_array($ors1);
        $rName = $ors4['gr_name'];
        $rId = $ors4['gr_id'];
        if ($rId == $mburid) {
            # code...
        } else {
            ?>
            <option value="admin.php?mod=adminMembers&saveMembersRank=<?php echo $mbuid; ?>-<?php echo $guserID; ?>-<?php echo $rId; ?>"><?php echo $rName; ?></option>
            <?php
        }
    }
}
?>
<option value="admin.php?mod=adminMembers&saveMembersRank=<?php echo $mbuid; ?>-<?php echo $guserID; ?>-1">Miembro</option>
</select>
</th>
</tr>
    <?php
}
?>
<?php
$members1 = mysql_query("SELECT * FROM guilds_members WHERE gmb_guildID = '".$guserID."' AND gmb_rank = 1 ");
$members2 = mysql_num_rows($members1);
$members3 = 1;
while ($members3 <= $members2) {
    $members3++;
    $members4 = mysql_fetch_array($members1);
    $mbuid = $members4['gmb_userID'];
    $name1 = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE user_id = '".$mbuid."' "));
    $name2 = $name1['user_accID'];
    $name3 = mysql_fetch_array(mysql_query("SELECT * FROM accounts WHERE acc_id = '".$name2."' "));
    $name4 = $name3['acc_name'];
    $mburid = $members4['gmb_rank'];
    $rd1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_ranks WHERE gr_id = '".$mburid."' "));
    $rd2 = $rd1['gr_name'];
    ?>
    <tr>
    <td><a href="player.php?p=<?php echo $mbuid; ?>"><?php echo $name4; ?></a></td>
    <th></th>
    <th>
    <select name="rank" size="1" onchange="location = this.options[this.selectedIndex].value;">
    <option>Miembro</option>
    <option value="admin.php?mod=adminMembers&saveMembersRank=<?php echo $mbuid; ?>-<?php echo $guserID; ?>-99">Fundador</option>
    <option value="admin.php?mod=adminMembers&saveMembersRank=<?php echo $mbuid; ?>-<?php echo $guserID; ?>-98">Admin</option>
    <?php
    $ors1 = mysql_query("SELECT * FROM guilds_ranks WHERE gr_guildID = '".$guserID."' ");
    $ors2 = mysql_num_rows($ors1);
    $ors3 = 1;
    if ($ors2 != 0) {
        while ($ors3 <= $ors2) {
            $ors3++;
            $ors4 = mysql_fetch_array($ors1);
            $rName = $ors4['gr_name'];
            $rId = $ors4['gr_id'];
            if ($rId == $mburid) {
                # code...
            } else {
                ?>
                <option value="admin.php?mod=adminMembers&saveMembersRank=<?php echo $mbuid; ?>-<?php echo $guserID; ?>-<?php echo $rId; ?>"><?php echo $rName; ?></option>
                <?php
            }
        }
    }
    ?>
    </select>
    </th>
    </tr>
    <?php
}
?>


<tr><th colspan="3"><input type="submit" value="Cambiar" class="button2"></th></tr>
</table></form></div></div>

<br />

<form action="admin.php?mod=adminMembers&submod=saveRights" method="POST">
<input type="hidden" id="guild_storage_bag_hidden_param" name="guild_storage_bag_hidden_param" value="0" size="1" maxlength="1"/>
<div class="title_box"><div class="title_inner">Administrar rangos</div></div>
<div class="title2_box"><div class="title2_inner"><table width="100%">
<tr>
<td>Nombre</td>
<td>Leer circulares</td>
<td>Escribír circular</td>
<td>añadir miembros</td>
<td>Ampliar el Edificio</td>
</tr>
<tr><th>Fundador</th>
<th><input type="checkbox" checked="checked" disabled="disabled" /></th>
<th><input type="checkbox" checked="checked" disabled="disabled" /></th>
<th><input type="checkbox" checked="checked" disabled="disabled" /></th>
<th><input type="checkbox" checked="checked" disabled="disabled" /></th>
</tr>
<tr><th>Admin</th>
<th><input type="checkbox" checked="checked" disabled="disabled" /></th>
<th><input type="checkbox" checked="checked" disabled="disabled" /></th>
<th><input type="checkbox" checked="checked" disabled="disabled" /></th>
<th><input type="checkbox" checked="checked" disabled="disabled" /></th>
</tr>
<tr><th>Miembro</th>
<th><input type="checkbox" disabled="disabled" /></th>
<th><input type="checkbox" disabled="disabled" /></th>
<th><input type="checkbox" disabled="disabled" /></th>
<th><input type="checkbox" disabled="disabled" /></th>
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
    $rankP1 = $granks4['gr_pMessages1'];
    $ch1 = '';
    $ra1 = 1;
    if ($rankP1 == 1) {
        $ch1 = 'checked="checked"';
        $ra1 = 0;
    }
    $rankP2 = $granks4['gr_pMessages2'];
    $ch2 = '';
    $ra2 = 1;
    if ($rankP2 == 1) {
        $ch2 = 'checked="checked"';
        $ra2 = 0;
    }
    $rankP3 = $granks4['gr_pAccept'];
    $ch3 = '';
    $ra3 = 1;
    if ($rankP3 == 1) {
        $ch3 = 'checked="checked"';
        $ra3 = 0;
    }
    $rankP4 = $granks4['gr_pBuilds'];
    $ch4 = '';
    $ra4 = 1;
    if ($rankP4 == 1) {
        $ch4 = 'checked="checked"';
        $ra4 = 0;
    }
?>

<tr><th><?php echo $rankNAME; ?><br>
<a href="admin.php?mod=adminMembers&deleteRank=<?php echo $rankID; ?>">(borrar)</a>
</th>
<th><input onchange="window.location.href='admin.php?mod=adminMembers&saveRights=<?php echo $rankID; ?>-1-<?php echo $ra1; ?>'" type="checkbox" <?php echo $ch1; ?> name="<?php echo $rankID; ?>-1-<?php echo $ra1; ?>" /></th>
<th><input onchange="window.location.href='admin.php?mod=adminMembers&saveRights=<?php echo $rankID; ?>-2-<?php echo $ra2; ?>'" type="checkbox" <?php echo $ch2; ?> name="<?php echo $rankID; ?>-2-<?php echo $ra2; ?>" /></th>
<th><input onchange="window.location.href='admin.php?mod=adminMembers&saveRights=<?php echo $rankID; ?>-3-<?php echo $ra3; ?>'" type="checkbox" <?php echo $ch3; ?> name="<?php echo $rankID; ?>-3-<?php echo $ra3; ?>" /></th>
<th><input onchange="window.location.href='admin.php?mod=adminMembers&saveRights=<?php echo $rankID; ?>-4-<?php echo $ra4; ?>'" type="checkbox" <?php echo $ch4; ?> name="<?php echo $rankID; ?>-4-<?php echo $ra4; ?>" /></th>
</tr>

<?php
}
?>

</table></div></div>
</form>

<br />

<div class="title_box"><div class="title_inner">agregar rango</div></div>
<div class="title2_box"><div class="title2_inner"><form action="admin.php?mod=adminMembers" method="POST"><table width="100%">
<tr><th>Nombre</th><th><input type="text" name="newRankName" size="30" maxlength="30"></th></tr>
<tr><th colspan="2"><input type="submit" name="newRank" value="agregar" class="button2"></th></tr>
</table></form></div></div>

</div>