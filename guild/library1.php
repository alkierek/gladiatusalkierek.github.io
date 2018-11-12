<div class="title_box">
<div class="title_inner">
<span class="span_left" style="width:420px;display:block;">Recetas activas</span>
<span class="span_right">1 / 2</span>
</div>
</div>

<div class="title2_box"><div class="title2_inner">

<table width="100%" cellspacing="0" cellpadding="0">

<tr>
<td>&nbsp;</td>
<td><b>Costo de mejora</b></td>
<td><b>Bonificacion</b></td>
<td></td>
</tr>
<?php
$grups1 = mysql_query("SELECT * FROM guilds_biblys WHERE gb_guildID = '".$guserID."' ");
$grups2 = mysql_num_rows($grups1);
if ($grups2 != 0) {
    $grups3 = 1;
    while ($grups3 <= $grups2) {
        $grups3++;
        $grups4 = mysql_fetch_array($grups1);
        $upsID = $grups4['gb_id'];
        $upsTYPE = $grups4['gb_type'];
        $upsLEVEL = $grups4['gb_level'];
        $upsUSERID = $grups4['gb_userID'];
        $uiname1 = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE user_id = '".$upsUSERID."' "));
        $uiname2 = $uiname1['user_accID'];
        $uiname3 = mysql_fetch_array(mysql_query("SELECT * FROM accounts WHERE acc_id = '".$uiname2."' "));
        $upsUSERNAME = $uiname3['acc_name'];
        include_once ('db/ups.php');
        ?>
<tr>
<td>
<div style="margin-left:4px;margin-right:4px;background-image:url(8501/img/shop/shop_zelle.gif);width:32px;height:32px">
<div id="gildenbuff_2313"onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'><?php echo $upsNAME; ?></td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Bonifica: <?php echo $upsBONUS; ?> </td></tr><tr><td style=\'color:#00B712; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>< Agregado por <?php echo $upsUSERNAME; ?> ></td></tr><tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Nivel <?php echo $upsLEVEL; ?></td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Precio de mercader <?php echo $upsCOST2; ?> <img src=\'8501/img/res2d.gif\' alt=\'Oro\' title=\'Oro\' align=\'absmiddle\' border=\'0\' /></td></tr></table>')"><img src="8501/img/item/13_1.gif" width="32" height="32" /></div>
</div>
</td>
<td><?php echo $upsCOST2; ?> <img src="8501/img/res2.gif" alt="Oro" title="Oro" border="0" /></td>
<td><?php echo $upsBONUS; ?></td>
<td><input type="button" name="upR" value="mejorar" onclick="window.location.href='guild_library.php?update=<?php echo $upsID; ?>'" class="button2"   /></td>
</tr>
        <?php
    }
}
?>
</table>

</div></div>


<div class="title_box">
<div class="title_inner">
<b>
<span class="span_left">Fortuna:&nbsp;</span>
<?php
$ggold1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$guserID."' "));
$ggold2 = $ggold1['gd_gold'];
$ggold3 = number_format($ggold2, 0, ",", ".");
?>
<span class="span_right"><?php echo $ggold3; ?></span>
<img src="8501/img/res2.gif" alt="Oro" title="Oro" align="absmiddle" border="0" />  </b>
</div>
</div>