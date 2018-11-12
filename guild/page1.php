<div style="position:relative;width:532px;height:404px;background-image:url(8501/img/guild/tmp/a87b1c67de017c0ce18439682750f3a5.jpg)">

<?php

if ($gbank <= 9) { $gbankb = 1; } elseif ($gbank <= 14) { $gbankb = 2; } elseif ($gbank >= 15) { $gbankb = 3; }
if ($gbath <= 9) { $gbathb = 1; } elseif ($gbath <= 14) { $gbathb = 2; } elseif ($gbath >= 15) { $gbathb = 3; }
if ($gbibly <= 9) { $gbiblyb = 1; } elseif ($gbibly <= 14) { $gbiblyb = 2; } elseif ($gbibly >= 15) { $gbiblyb = 3; }
if ($gcamp <= 9) { $gcampb = 1; } elseif ($gcamp <= 14) { $gcampb = 2; } elseif ($gcamp >= 15) { $gcampb = 3; }
if ($gdepos <= 9) { $gdeposb = 1; } elseif ($gdepos <= 14) { $gdeposb = 2; } elseif ($gdepos >= 15) { $gdeposb = 3; }
if ($ghall <= 9) { $ghallb = 1; } elseif ($ghall <= 14) { $ghallb = 2; } elseif ($ghall >= 15) { $ghallb = 3; }
if ($gmarket <= 9) { $gmarketb = 1; } elseif ($gmarket <= 14) { $gmarketb = 2; } elseif ($gmarket >= 15) { $gmarketb = 3; }
if ($gnx <= 9) { $gnxb = 1; } elseif ($gnx <= 14) { $gnxb = 2; } elseif ($gnx >= 15) { $gnxb = 3; }
if ($gtemplum <= 9) { $gtemplumb = 1; } elseif ($gtemplum <= 14) { $gtemplumb = 2; } elseif ($gtemplum >= 15) { $gtemplumb = 3; }
if ($gmedici <= 9) { $gmedicib = 1; } elseif ($gmedici <= 14) { $gmedicib = 2; } elseif ($gmedici >= 15) { $gmedicib = 3; }

?>
<img src="8501/img/guild/building/doctor_<?php echo $gmedicib; ?>.png" style="position:absolute;left:426px;top:183px;">
<img src="8501/img/guild/building/temple_<?php echo $gtemplumb; ?>.png" style="position:absolute;left:413px;top:87px;">
<img src="8501/img/guild/building/jailhouse_<?php echo $gnxb; ?>.png" style="position:absolute;left:381px;top:0px;">
<img src="8501/img/guild/building/guild_market_<?php echo $gmarketb; ?>.png" style="position:absolute;left:69px;top:215px;">
<img src="8501/img/guild/building/war_master_<?php echo $ghallb; ?>.png" style="position:absolute;left:335px;top:127px;">
<img src="8501/img/guild/building/storage_<?php echo $gdeposb; ?>.png" style="position:absolute;left:240px;top:210px;">
<img src="8501/img/guild/building/training_camp_<?php echo $gcampb; ?>.png" style="position:absolute;left:206px;top:317px;">
<img src="8501/img/guild/building/library_<?php echo $gbiblyb; ?>.png" style="position:absolute;left:22px;top:25px;">
<img src="8501/img/guild/building/bathhouse_<?php echo $gbathb; ?>.png" style="position:absolute;left:0px;top:114px;">
<img src="8501/img/guild/building/save_<?php echo $gbankb; ?>.png" style="position:absolute;left:245px;top:46px;">
<img src="8501/img/guild/building/main_building_<?php echo $gforum; ?>.png" style="position:absolute;left:93px;top:73px;">
<!-- -->
<a href="forumGladiatorius.php" id="main_building_div" style="position:absolute;left:140px;top:80px;width:150px;height:120px"></a>
<a href="forumGladiatorius.php" class="map_label" style="left:170px; top:170px">Foro de Gladiadores (<?php echo $gforum; ?>)</a>
<!-- -->
<a href="guildBankingHouse.php" id="save_div" style="position:absolute;left:295px;top:46px;width:80px;height:77px"></a>
<a href="guildBankingHouse.php" class="map_label" style="left:290px; top:80px">Banco (<?php echo $gbank; ?>)</a>
<!-- -->
<a href="guild_bath.php" id="bathhouse_div" style="position:absolute;left:1px;top:114px;width:114px;height:83px"></a>
<a href="guild_bath.php" class="map_label" style="left:5px; top:190px">Baños Públicos (<?php echo $gbath; ?>)</a>
<!-- -->
<a href="guild_library.php" id="library_div" style="position:absolute;left:40px;top:40px;width:95px;height:70px"></a>
<a href="guild_library.php" class="map_label" style="left:38px; top:95px">Biblioteca (<?php echo $gbibly; ?>)</a>
<!-- -->
<a href="guild_training.php" id="training_camp_div" style="position:absolute;left:206px;top:317px;width:135px;height:87px"></a>
<a href="guild_training.php" class="map_label" style="left:230px; top:385px">Campos de Entrenamiento (<?php echo $gcamp; ?>)</a>
<!-- -->
<a href="guild_training.php" id="storage_div" style="position:absolute;left:240px;top:210px;width:110px;height:85px"></a>
<a href="guild_training.php" class="map_label" style="left:280px; top:266px">Depósito (<?php echo $gdepos; ?>)</a>
<!-- -->
<a href="guild_warcamp.php" id="war_master_div" style="position:absolute;left:345px;top:127px;width:90px;height:80px"></a>
<a href="guild_warcamp.php" class="map_label" style="left:340px; top:190px">Hall Maestro de la Guerra (<?php echo $ghall; ?>)</a>
<!-- -->
<a href="guild_market.php" id="guild_market_div" style="position:absolute;left:69px;top:215px;width:135px;height:100px"></a>
<a href="guild_market.php" class="map_label" style="left:70px; top:260px">Mercado de la Alianza (<?php echo $gmarket; ?>)</a>
<!-- -->
<a href="guild_jail.php" id="jailhouse_div" style="position:absolute;left:381px;top:0px;width:126px;height:80px"></a>
<a href="guild_jail.php" class="map_label" style="left:400px; top:50px">Negotium X (<?php echo $gnx; ?>)</a>
<!-- -->
<a href="guildTemple.php" id="temple_div" style="position:absolute;left:440px;top:87px;width:80px;height:77px"></a>
<a href="guildTemple.php" class="map_label" style="left:440px; top:135px">Templum (<?php echo $gtemplum; ?>)</a>
<!-- -->
<a href="guild_medic.php" id="doctor_div" style="position:absolute;left:440px;top:183px;width:80px;height:68px"></a>
<a href="guild_medic.php" class="map_label" style="left:440px; top:240px">Villa Médica (<?php echo $gmedici; ?>)</a>

</div>

<?php
$gid = $guserID;
$gNAME1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$gid."' "));
$gNAME = $gNAME1['gd_name'];
?>

<div style="margin:10px">Ésta es jefatura del gremio <b><?php echo $gNAME; ?></b>. Todos los nuevos miembros del gremio pueden tener un baño agradable en la casa de baños, se introducen las termas para los más viejos guerreros y descubren generalmente más sobre el gremio. Gladiatorius, el foro, es el centro administrativo del gremio y es por lo tanto también muy importante.</div>