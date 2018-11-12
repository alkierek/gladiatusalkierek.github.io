<?php
$ggold1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$guserID."' "));
$ggold2 = $ggold1['gd_gold'];
$ggold3 = number_format($ggold2, 0, ",", ".");

$gbpper1 = $guserBank*2;
$gbpper2 = (int)(($ggold2*$gbpper1)/100);
$gbpper3 = number_format($gbpper2, 0, ",", ".");
?>

<p class="buildingDesc" style="min-height:180px;"><img src="8501/img/allianz/npc/npc_bank.jpg" />Dos figuras oscuras guardan la entrada y el ojo encima de cada visitante al banco del gremio. Usted no quiere definitivamente comenzar una lucha con cualquiera de ellas. Dentro del banco, las rejas evitan que los intrusos indeseados entren. Un comerciante barbudo con una mirada divertida se coloca detrás del contador. Con la corrección romana él documenta cada donación en el libro de donación y llena la cámara acorazada del 2% del oro del gremio.</p>

<div style="margin:20px;clear:both;"><div class="title_box"><div class="title_inner">Cuenta de la Alianza</div></div>

<div class="title2_box"><div class="title2_inner"><table width="100%" align="center">

<tr>
<th width="70%">Suministro de Oro</th>
<th align="right"><?php echo $ggold3; ?>  <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></th>
</tr>

<tr>
<th>Cantidad de oro en la bóveda</th>
<th align="right"><?php echo $gbpper3; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></th>
</tr>

</table></div></div></div>


<div style="margin:20px;">
<div class="title_box"><div class="title_inner">Donación a la alianza</div></div>
<div class="title2_box"><div class="title2_inner"><form action="guildBankingHouse.php" method="POST"><table width="100%" align="center">

<tr>
<th width="70%">Tu cantidad de oro:</th>
<th align="right"><?php echo $userGOLD1; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></th>
</tr>

<tr>
<th>¿Cuánto deseás donar?:</th>
<th align="right"><input type="text" name="donation" size="10" maxlength="10"> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></th>
</tr>

<tr><th colspan="2"><input type="submit" name="doDonation" value="Donar" class="button2"></th></tr>

</table></form></div></div>
</div>

<div style="display:none"><input type="text" name="hiddenIEText"/></div>