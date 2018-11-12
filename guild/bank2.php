<div style="margin:20px;">

<div class="title_box"><div class="title_inner">Donaciones de la Alianza</div></div>

<div class="title2_box"><div class="title2_inner"><table width="90%">

<tr>
<td>Jugador</td>
<td align="right">Oro</td>
</tr>
<?php
$gdonates1 = mysql_query("SELECT * FROM guilds_members WHERE gmb_guildID = '".$guserID."' ");
$gdonates2 = mysql_num_rows($gdonates1);
if ($gdonates2 != 0) {
    $gdonates3 = 1;
    while ($gdonates3 <= $gdonates2) {
        $gdonates3++;
        $gdonates4 = mysql_fetch_array($gdonates1);
        $guDONATE1 = $gdonates4['gmb_donate'];
        $guDONATE2 = number_format($guDONATE1, 0, ",", ".");
        $gudID = $gdonates4['gmb_userID'];
        $gudNAME1 = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE user_id = '".$gudID."' "));
        $gudNAME2 = $gudNAME1['user_accID'];
        $gudNAME3 = mysql_fetch_array(mysql_query("SELECT * FROM accounts WHERE acc_id = '".$gudNAME2."' "));
        $gudNAME4 = $gudNAME3['acc_name'];
        ?>
<tr>
<td><a href="player.php?p=<?php echo $gudID; ?>"><?php echo $gudNAME4; ?></a>
<td align="right"><?php echo $guDONATE2; ?></td>
</tr>
        <?php
    }
}
?>

</table></div></div>

</div>
<!-- -->
<div style="margin:20px;">

<div class="title_box"><div class="title_inner">Detalle de las donaciones de la Alianza</div></div>

<div class="title2_box"><div class="title2_inner"><table width="100%">

<tr>
<td>Jugador</td>
<td align="right">Oro</td>
<td align="right">Fecha</td>
</tr>
<?php
$gdonate1 = mysql_query("SELECT * FROM guilds_banks WHERE gbk_guildID = '".$guserID."' ORDER BY gbk_id DESC ");
$gdonate2 = mysql_num_rows($gdonate1);
if ($gdonate2 != 0) {
    $gdonate3 = 1;
    while ($gdonate3 <= $gdonate2) {
        $gdonate3++;
        $gdonate4 = mysql_fetch_array($gdonate1);
        $gduID = $gdonate4['gbk_userID'];
        $gddate = $gdonate4['gbk_date'];
        $gdamo1 = $gdonate4['gbk_amount'];
        $gdamo2 = number_format($gdamo1, 0, ",", ".");
        $gduNAME1 = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE user_id = '".$gduID."' "));
        $gduNAME2 = $gduNAME1['user_accID'];
        $gduNAME3 = mysql_fetch_array(mysql_query("SELECT * FROM accounts WHERE acc_id = '".$gduNAME2."' "));
        $gduNAME4 = $gduNAME3['acc_name'];
        ?>
<tr>
<td><a href="player.php?p=<?php echo $gduID; ?>"><?php echo $gduNAME4; ?></a></td>
<td align="right"><?php echo $gdamo2; ?></td>
<td align="right"><?php echo $gddate; ?></td>
</tr>
        <?php
    }
}
?>
</table></div></div>

</div>