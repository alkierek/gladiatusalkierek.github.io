<div id="mainbox">

<?php
if ($guser == 1) {
	$ggold1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$guserID."' "));
	$ggold2 = $ggold1['gd_gold'];
	$ggold3 = number_format($ggold2, 0, ",", ".");
}

if ($gbank <= 8) { $gbankb = 1; } elseif ($gbank <= 13) { $gbankb = 2; } elseif ($gbank >= 14) { $gbankb = 3; }
if ($gbath <= 8) { $gbathb = 1; } elseif ($gbath <= 13) { $gbathb = 2; } elseif ($gbath >= 14) { $gbathb = 3; }
if ($gbibly <= 8) { $gbiblyb = 1; } elseif ($gbibly <= 13) { $gbiblyb = 2; } elseif ($gbibly >= 14) { $gbiblyb = 3; }
if ($gcamp <= 8) { $gcampb = 1; } elseif ($gcamp <= 13) { $gcampb = 2; } elseif ($gcamp >= 14) { $gcampb = 3; }
if ($gdepos <= 8) { $gdeposb = 1; } elseif ($gdepos <= 13) { $gdeposb = 2; } elseif ($gdepos >= 14) { $gdeposb = 3; }
if ($ghall <= 8) { $ghallb = 1; } elseif ($ghall <= 13) { $ghallb = 2; } elseif ($ghall >= 14) { $ghallb = 3; }
if ($gmarket <= 8) { $gmarketb = 1; } elseif ($gmarket <= 13) { $gmarketb = 2; } elseif ($gmarket >= 14) { $gmarketb = 3; }
if ($gnx <= 8) { $gnxb = 1; } elseif ($gnx <= 13) { $gnxb = 2; } elseif ($gnx >= 14) { $gnxb = 3; }
if ($gtemplum <= 8) { $gtemplumb = 1; } elseif ($gtemplum <= 13) { $gtemplumb = 2; } elseif ($gtemplum >= 14) { $gtemplumb = 3; }
if ($gmedici <= 8) { $gmedicib = 1; } elseif ($gmedici <= 13) { $gmedicib = 2; } elseif ($gmedici >= 14) { $gmedicib = 3; }


if (isset($_GET['updateBuilding'])) {
	$gbup = $_GET['updateBuilding'];
	if ($guserCBUP == 1) {
		if ($gbup == 'forum') {
			if ($ggold2 >= $gforumc) {
				mysql_query("UPDATE guilds SET g_forum = g_forum + 1 WHERE g_id = '".$guserID."' ");
				mysql_query("UPDATE guilds_data SET gd_gold = gd_gold - '".$gforumc."' WHERE gd_id = '".$guserID."' ");
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=suses';</script></body>";
			} else {
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=nofund';</script></body>";
			}
		} elseif ($gbup == 'bank') {
			if ($ggold2 >= $gbankc) {
				mysql_query("UPDATE guilds SET g_bank = g_bank + 1 WHERE g_id = '".$guserID."' ");
				mysql_query("UPDATE guilds_data SET gd_gold = gd_gold - '".$gbankc."' WHERE gd_id = '".$guserID."' ");
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=suses';</script></body>";
			} else {
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=nofund';</script></body>";
			}
		} elseif ($gbup == 'bath') {
			if ($ggold2 >= $gbathc) {
				mysql_query("UPDATE guilds SET g_bath = g_bath + 1 WHERE g_id = '".$guserID."' ");
				mysql_query("UPDATE guilds_data SET gd_gold = gd_gold - '".$gbathc."' WHERE gd_id = '".$guserID."' ");
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=suses';</script></body>";
			} else {
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=nofund';</script></body>";
			}
		} elseif ($gbup == 'bibly') {
			if ($ggold2 >= $gbiblyc) {
				mysql_query("UPDATE guilds SET g_bibly = g_bibly + 1 WHERE g_id = '".$guserID."' ");
				mysql_query("UPDATE guilds_data SET gd_gold = gd_gold - '".$gbiblyc."' WHERE gd_id = '".$guserID."' ");
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=suses';</script></body>";
			} else {
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=nofund';</script></body>";
			}
		} elseif ($gbup == 'camp') {
			if ($ggold2 >= $gcampc) {
				mysql_query("UPDATE guilds SET g_camp = g_camp + 1 WHERE g_id = '".$guserID."' ");
				mysql_query("UPDATE guilds_data SET gd_gold = gd_gold - '".$gcampc."' WHERE gd_id = '".$guserID."' ");
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=suses';</script></body>";
			} else {
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=nofund';</script></body>";
			}
		} elseif ($gbup == 'depos') {
			if ($ggold2 >= $gdeposc) {
				mysql_query("UPDATE guilds SET g_depos = g_depos + 1 WHERE g_id = '".$guserID."' ");
				mysql_query("UPDATE guilds_data SET gd_gold = gd_gold - '".$gdeposc."' WHERE gd_id = '".$guserID."' ");
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=suses';</script></body>";
			} else {
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=nofund';</script></body>";
			}
		} elseif ($gbup == 'hall') {
			if ($ggold2 >= $ghallc) {
				mysql_query("UPDATE guilds SET g_hall = g_hall + 1 WHERE g_id = '".$guserID."' ");
				mysql_query("UPDATE guilds_data SET gd_gold = gd_gold - '".$ghallc."' WHERE gd_id = '".$guserID."' ");
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=suses';</script></body>";
			} else {
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=nofund';</script></body>";
			}
		} elseif ($gbup == 'market') {
			if ($ggold2 >= $gmarketc) {
				mysql_query("UPDATE guilds SET g_market = g_market + 1 WHERE g_id = '".$guserID."' ");
				mysql_query("UPDATE guilds_data SET gd_gold = gd_gold - '".$gmarketc."' WHERE gd_id = '".$guserID."' ");
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=suses';</script></body>";
			} else {
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=nofund';</script></body>";
			}
		} elseif ($gbup == 'nx') {
			if ($ggold2 >= $gnxc) {
				mysql_query("UPDATE guilds SET g_nx = g_nx + 1 WHERE g_id = '".$guserID."' ");
				mysql_query("UPDATE guilds_data SET gd_gold = gd_gold - '".$gnxc."' WHERE gd_id = '".$guserID."' ");
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=suses';</script></body>";
			} else {
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=nofund';</script></body>";
			}
		} elseif ($gbup == 'templum') {
			if ($ggold2 >= $gtemplumc) {
				mysql_query("UPDATE guilds SET g_templum = g_templum + 1 WHERE g_id = '".$guserID."' ");
				mysql_query("UPDATE guilds_data SET gd_gold = gd_gold - '".$gtemplumc."' WHERE gd_id = '".$guserID."' ");
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=suses';</script></body>";
			} else {
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=nofund';</script></body>";
			}
		} elseif ($gbup == 'medici') {
			if ($ggold2 >= $gmedicic) {
				mysql_query("UPDATE guilds SET g_medici = g_medici + 1 WHERE g_id = '".$guserID."' ");
				mysql_query("UPDATE guilds_data SET gd_gold = gd_gold - '".$gmedicic."' WHERE gd_id = '".$guserID."' ");
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=suses';</script></body>";
			} else {
				echo "<body><script type='text/javascript'>window.location='buildings.php?submod=nofund';</script></body>";
			}
		}
	} else {
		echo "<body><script type='text/javascript'>window.location='buildings.php?submod=lowl';</script></body>";
	}
}

?>

<div class="title_box"><div class="title_inner" style="text-align:center;font-size:large;">Edificio</div></div>

<div class="title2_box"><div class="title2_inner" style="text-align:left;font-size:13px;">
<b>Fortuna:</b> <?php echo $ggold3; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /><br/>
<b>Descuento mediante bonuso de Centurion:</b> 0%
</div></div>

<div class="title2_box"><div class="title2_inner">

<div class="guild_build_cost title_box" name="0">
<div class="title_inner" name="0"><table border="0" style="width:100%;"><tr>
<td id="arrow_0" onclick='showBuildings("0");' class="guild_build_arrow_visible"></td>
<td style="width:300px;cursor:pointer;" onclick='showBuildings("0");'><b>Foro de Gladiadores</b>(Nivel <?php echo $gforum; ?>)</td>
<td nowrap="nowrap"><div class="guild_gold"><?php echo $gforumc1; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></div></td>
<?php if ($ggold2 >= $gforumc) { ?>
	<td><a href="buildings.php?updateBuilding=forum">Ampliar</a></td>
<?php } elseif ($gforumc > $ggold2) { ?>
	<td>Ampliar</td>
<?php } ?>
</tr></table></div>
<div id="guild_build_description_0" style="min-height:190px;position:relative;display:none;"><img src="8501/img/guild/building_overview/main_building_<?php $gforumn = $gforum+1; if ($gforumn >= 16) { $gforumn == 16; } echo $gforumn; ?>.png" class="guild_build_cost_image"/>
<div class="guild_build_cost_content">Gladiadores, el foro es el centro administrativo de la alianza. Al principio una alianza puede ser administrada con 3 miembros. Con cada ampliación, el edificio dispone de espacio suficiente para otros 3 miembros más. Otra función importante del foro es la planificación de la construcción de la ciudad para que la alianza se pueda desarrollar. Y, por supuesto, el foro también representa la apariencia exterior de la alianza.<br class="clearfloat"/><br/>
Con la expansión del Foro de Gladiadores a nivel <?php $gforumn = $gforum+1; echo $gforumn; ?>, <?php echo $gmaxmn; ?> miembros más de la alianza pueden ser administrados.</div></div>
</div>

<div class="guild_build_cost title_box" name="1">
<div class="title_inner" name="1"><table border="0" style="width:100%;"><tr>
<td id="arrow_1" onclick='showBuildings("1");' class="guild_build_arrow_visible"></td>
<td style="width:300px;cursor:pointer;" onclick='showBuildings("1");'><b>Banco</b>(Nivel <?php echo $gbank; ?>)</td>
<td nowrap="nowrap"><div class="guild_gold"><?php echo $gbankc1; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></div></td>
<?php if ($ggold2 >= $gbankc) { ?>
	<td><a href="buildings.php?updateBuilding=bank">Ampliar</a></td>
<?php } elseif ($gbankc > $ggold2) { ?>
	<td>Ampliar</td>
<?php } ?>
</tr></table></div>
<div id="guild_build_description_1" style="min-height:190px;position:relative;display:none;"><img src="8501/img/guild/building_overview/save_<?php echo $gbankb; ?>.png" class="guild_build_cost_image"/>
<div class="guild_build_cost_content">Hallaste el tesoro del gremio y también el centro de su crecimiento. La donación se guarda muy cuidadosamente aquí. Con cada extensión del banco del gremio, una cámara acorazada más grande puede ser construida para almacenar 2% más de oro del gremio.<br class="clearfloat"/><br/>
Con la expansión del banco de la alianza a nivel <?php $gbankn = $gbank+1; echo $gbankn; ?>, la bóveda puede almacenar <?php echo $gcap; ?>% del oro de la alianza.</div></div>
</div>

<div class="guild_build_cost title_box" name="2">
<div class="title_inner" name="2"><table border="0" style="width:100%;"><tr>
<td id="arrow_2" onclick='showBuildings("2");' class="guild_build_arrow_visible"></td>
<td style="width:300px;cursor:pointer;" onclick='showBuildings("2");'><b>Baños Públicos</b>(Nivel <?php echo $gbath; ?>)</td>
<td nowrap="nowrap"><div class="guild_gold"><?php echo $gbathc1; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></div></td>
<?php if ($ggold2 >= $gbathc) { ?>
	<td><a href="buildings.php?updateBuilding=bath">Ampliar</a></td>
<?php } elseif ($gbathc > $ggold2) { ?>
	<td>Ampliar</td>
<?php } ?>
</tr></table></div>
<div id="guild_build_description_2" style="min-height:190px;position:relative;display:none;"><img src="8501/img/guild/building_overview/bathhouse_<?php echo $gbathb; ?>.png" class="guild_build_cost_image"/>
<div class="guild_build_cost_content">Las termas son el lugar favorito de muchos gladiadores. Decoradas suntuosamente y perfumadas de modo voluptuoso son una agradable alternativa a la dura vida cotidiana en el campo de batalla. Con el idílico sonido del arpa, una agradable conversación y el vino de la bodega ``ludi officinae ferraria``, la vida maxima de cada gladiador del gremio aumenta en 0.1% por cada nivel de expansión.<br class="clearfloat"/><br/>
La expansión de las Termas al nivel <?php $gbathn = $gbath+1; echo $gbathn; ?> aumenta un <?php echo $gmaxl; ?>% extra de puntos de vida a cada miembro de la alianza.</div></div>
</div>

<div class="guild_build_cost title_box" name="3">
<div class="title_inner" name="3"><table border="0" style="width:100%;"><tr>
<td id="arrow_3" onclick='showBuildings("3");' class="guild_build_arrow_visible"></td>
<td style="width:300px;cursor:pointer;" onclick='showBuildings("3");'><b>Biblioteca</b>(Nivel <?php echo $gbibly; ?>)</td>
<td nowrap="nowrap"><div class="guild_gold"><?php echo $gbiblyc1; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></div></td>
<?php if ($ggold2 >= $gbiblyc) { ?>
	<td><a href="buildings.php?updateBuilding=bibly">Ampliar</a></td>
<?php } elseif ($gbiblyc > $ggold2) { ?>
	<td>Ampliar</td>
<?php } ?>
</tr></table></div>
<div id="guild_build_description_3" style="min-height:190px;position:relative;display:none;"><img src="8501/img/guild/building_overview/library_<?php echo $gbiblyb; ?>.png" class="guild_build_cost_image"/>
<div class="guild_build_cost_content">El conocimiento es poder y la pluma es más fuerte que la espada, se firma a menudo en los círculos imperiales. Por ello, nuestro conocimiento de recetas útiles es almacenado en la biblioteca. Con cada ampliación 2 recetas más, pueden ser entregadas a Ongarius, el administrador de la biblioteca.<br class="clearfloat"/><br/>
La expansión de la biblioteca a nivel <?php $gbiblyn = $gbibly+1; echo $gbiblyn; ?> permite que aumentes <?php echo $gmaxu; ?> puntos de alzas.</div></div>
</div>

<div class="guild_build_cost title_box" name="4">
<div class="title_inner" name="4"><table border="0" style="width:100%;"><tr>
<td id="arrow_4" onclick='showBuildings("4");' class="guild_build_arrow_visible"></td>
<td style="width:300px;cursor:pointer;" onclick='showBuildings("4");'><b>Campos de Entrenamiento</b>(Nivel <?php echo $gcamp; ?>)</td>
<td nowrap="nowrap"><div class="guild_gold"><?php echo $gcampc1; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></div></td>
<?php if ($ggold2 >= $gcampc && $gcamp == 0) { ?>
	<td><a href="buildings.php?updateBuilding=camp">Construir</a></td>
<?php } elseif ($ggold2 >= $gcampc) { ?>
	<td><a href="buildings.php?updateBuilding=camp">Ampliar</a></td>
<?php } elseif ($gcampc > $ggold2 && $gcamp == 0) { ?>
	<td>Construir</td>
<?php } elseif ($gcampc > $ggold2) { ?>
	<td>Ampliar</td>
<?php } ?>
</tr></table></div>
<div id="guild_build_description_4" style="min-height:190px;position:relative;display:none;"><img src="8501/img/guild/building_overview/training_camp_<?php echo $gcampb; ?>.png" class="guild_build_cost_image"/>
<div class="guild_build_cost_content">Hay reglas resistentes en el terreno de entrenamiento, pero el consejo de otros miembros pueden ayudar a cada gladiador a convertirse más rápido durante el entrenamiento y por lo tanto también ahorra el dinero. Cada nivel de la extensión ahorra a cada miembro del gremio el 2% de los costes de entrenamiento en la arena.<br class="clearfloat"/><br/>
Con la expansión del Campo de Entrenamiento a nivel <?php $gcampn = $gcamp+1; echo $gcampn; ?>, cada miembro de la alianza se ahorra el <?php echo $gtcr; ?>% de los costes de las prácticas.</div></div>
</div>

<div class="guild_build_cost title_box" name="5">
<div class="title_inner" name="5"><table border="0" style="width:100%;"><tr>
<td id="arrow_5" onclick='showBuildings("5");' class="guild_build_arrow_visible"></td>
<td style="width:300px;cursor:pointer;" onclick='showBuildings("5");'><b>Depósito</b>(Nivel <?php echo $gdepos; ?>)</td>
<td nowrap="nowrap"><div class="guild_gold"><?php echo $gdeposc1; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></div></td>
<?php if ($ggold2 >= $gdeposc && $gdepos == 0) { ?>
	<td><a href="buildings.php?updateBuilding=depos">Construir</a></td>
<?php } elseif ($ggold2 >= $gdeposc) { ?>
	<td><a href="buildings.php?updateBuilding=depos">Ampliar</a></td>
<?php } elseif ($gdeposc > $ggold2 && $gdepos == 0) { ?>
	<td>Construir</td>
<?php } elseif ($gdeposc > $ggold2) { ?>
	<td>Ampliar</td>
<?php } ?>
</tr></table></div>
<div id="guild_build_description_5" style="min-height:190px;position:relative;display:none;"><img src="8501/img/guild/building_overview/storage_<?php echo $gdeposb; ?>.png" class="guild_build_cost_image"/>
<div class="guild_build_cost_content">El depósito de la alianza está administrado con mano de hierro. No hay lugar aquí para objetos vinculados al alma. Quien deja algo en él o toma algún objeto es vigilado muy de cerca: nadie ha de recibir nada que no se corresponda con su reputación. Por cada nivel que alcancéis se crea espacio para una estantería más, aunque el Emperador sólo permite 1000 estanterías por almacén.<br class="clearfloat"/><br/>
Con la expansión del depósito a nivel <?php $gdeposn = $gdepos+1; echo $gdeposn; ?>, hay espacio para <?php echo $gmaxd; ?> estanterias.</div></div>
</div>

<div class="guild_build_cost title_box" name="6">
<div class="title_inner" name="6"><table border="0" style="width:100%;"><tr>
<td id="arrow_6" onclick='showBuildings("6");' class="guild_build_arrow_visible"></td>
<td style="width:300px;cursor:pointer;" onclick='showBuildings("6");'><b>Hall Maestro de la Guerra</b>(Nivel <?php echo $ghall; ?>)</td>
<td nowrap="nowrap"><div class="guild_gold"><?php echo $ghallc1; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></div></td>
<?php if ($ggold2 >= $ghallc && $ghall == 0) { ?>
	<td><a href="buildings.php?updateBuilding=hall">Construir</a></td>
<?php } elseif ($ggold2 >= $ghallc) { ?>
	<td><a href="buildings.php?updateBuilding=hall">Ampliar</a></td>
<?php } elseif ($ghallc > $ggold2 && $ghall == 0) { ?>
	<td>Construir</td>
<?php } elseif ($ghallc > $ggold2) { ?>
	<td>Ampliar</td>
<?php } ?>
</tr></table></div>
<div id="guild_build_description_6" style="min-height:190px;position:relative;display:none;"><img src="8501/img/guild/building_overview/war_master_<?php echo $ghallb; ?>.png" class="guild_build_cost_image"/>
<div class="guild_build_cost_content">El emperador cree en que las alianzas necesitan administrar buen oro en las batallas, es por ello, que cada nivel del Maestro de Guerra aumentará 2% las ganancias de oro en batallas, además, conseguiran oro basado en lo que haya en el deposito del banco, si! cada victoria dará una bonificación de 1% por nivel del Maestro de Guerra con lo que obtendrás extra de oro.<br class="clearfloat"/><br/>
Con la expansión a nivel <?php $ghalln = $ghall+1; echo $ghalln; ?>, el maestro de guerra bonifica <?php echo $ggoldb; ?>% de oro por batalla y <?php echo $ggoldad; ?>% de bonificacion por banco.</div></div>
</div>

<div class="guild_build_cost title_box" name="7">
<div class="title_inner" name="7"><table border="0" style="width:100%;"><tr>
<td id="arrow_7" onclick='showBuildings("7");' class="guild_build_arrow_visible"></td>
<td style="width:300px;cursor:pointer;" onclick='showBuildings("7");'><b>Mercado de la Alianza</b>(Nivel <?php echo $gmarket; ?>)</td>
<td nowrap="nowrap"><div class="guild_gold"><?php echo $gmarketc1; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></div></td>
<?php if ($ggold2 >= $gmarketc && $gmarket == 0) { ?>
	<td><a href="buildings.php?updateBuilding=market">Construir</a></td>
<?php } elseif ($ggold2 >= $gmarketc) { ?>
	<td><a href="buildings.php?updateBuilding=market">Ampliar</a></td>
<?php } elseif ($gmarketc > $ggold2 && $gmarket == 0) { ?>
	<td>Construir</td>
<?php } elseif ($gmarketc > $ggold2) { ?>
	<td>Ampliar</td>
<?php } ?>
</tr></table></div>
<div id="guild_build_description_7" style="min-height:190px;position:relative;display:none;"><img src="8501/img/guild/building_overview/guild_market_<?php echo $gmarketb; ?>.png" class="guild_build_cost_image"/>
<div class="guild_build_cost_content">Con lo dificil que es conseguir materias, los gremios permiten que distintos mercaderes vengan a su alianza para abastecer productos, pero los mercaderes vendrán solo con la expansión del mercado, estos pueden distribuir diferentes objetos, bonificaciones, mecenarios, materias, etc..., para poder comprar en estos mercados debes tener permisos, pues este mercado utiliza el dinero del banco para su compra, actualmente cuentas con:<br>
<br>
<?php if ($gmarket >= 1) { ?><p>Mercader de Comida</p><?php } ?>
<?php if ($gmarket >= 2) { ?><p>Mercader de Genios</p><?php } ?>
<?php if ($gmarket >= 3) { ?><p>Mercader de Materias</p><?php } ?>
<?php if ($gmarket >= 4) { ?><p>Mercader de Construccion</p><?php } ?>
<?php if ($gmarket >= 5) { ?><p>Mercader de Abasto</p><?php } ?>
<?php if ($gmarket >= 6) { ?><p>Mercader de Lujos</p><?php } ?>
<?php if ($gmarket >= 7) { ?><p>Mercader de Dioses</p><?php } ?>
<?php if ($gmarket >= 8) { ?><p>Mercader de Mascotas</p><?php } ?>
<?php if ($gmarket >= 9) { ?><p>Mercader de Bienes</p><?php } ?>
<?php if ($gmarket >= 10) { ?><p>Mercader de Trabajo</p><?php } ?>
<?php if ($gmarket >= 11) { ?><p>Mercader de Mercenarios</p><?php } ?>
<?php if ($gmarket >= 12) { ?><p>Mercader de Ayudantes</p><?php } ?>
<?php if ($gmarket >= 13) { ?><p>Mercader de Plata</p><?php } ?>
<?php if ($gmarket >= 14) { ?><p>Mercader de Misterios</p><?php } ?>
<?php if ($gmarket >= 15) { ?><p>Mercader de Mar</p><?php } ?>
<?php if ($gmarket >= 16) { ?><p>Mercader de Flores</p><?php } ?>
<?php if ($gmarket >= 17) { ?><p>Mercader de Oro</p><?php } ?>
<?php if ($gmarket >= 18) { ?><p>Mercader de Flotas</p><?php } ?>
<?php if ($gmarket >= 19) { ?><p>Mercader de Emperador</p><?php } ?>
<?php if ($gmarket >= 20) { ?><p>Mercader de Leyenda</p><?php } ?>
<br class="clearfloat"/><br/>
Con la expansión del mercado de la alianza a nivel <?php $gmarketn = $gmarket+1; echo $gmarketn; ?>, vendrá <?php echo $gnmarket; ?>.</div></div>
</div>

<div class="guild_build_cost title_box" name="8">
<div class="title_inner" name="8"><table border="0" style="width:100%;"><tr>
<td id="arrow_8" onclick='showBuildings("8");' class="guild_build_arrow_visible"></td>
<td style="width:300px;cursor:pointer;" onclick='showBuildings("8");'><b>Negotium X</b>(Nivel <?php echo $gnx; ?>)</td>
<td nowrap="nowrap"><div class="guild_gold"><?php echo $gnxc1; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></div></td>
<?php if ($ggold2 >= $gnxc && $gnx == 0) { ?>
	<td><a href="buildings.php?updateBuilding=nx">Construir</a></td>
<?php } elseif ($ggold2 >= $gnxc) { ?>
	<td><a href="buildings.php?updateBuilding=nx">Ampliar</a></td>
<?php } elseif ($gnxc > $ggold2 && $gnx == 0) { ?>
	<td>Construir</td>
<?php } elseif ($gnxc > $ggold2) { ?>
	<td>Ampliar</td>
<?php } ?>
</tr></table></div>
<div id="guild_build_description_8" style="min-height:190px;position:relative;display:none;"><img src="8501/img/guild/building_overview/jailhouse_<?php echo $gnxb; ?>.png" class="guild_build_cost_image"/>
<div class="guild_build_cost_content">Los Jefes de Mazmorras que has sido encontrados y derrotados por los miembros de la alianza son encarcelados en Negotium X, quedando fuera de los muros de la ciudad. Con cada ampliación, se realizan los preparativos necesarios para el encarcelamiento de 2 jefes más. Negotium X da la posibilidad a los miembros de la alianza de poner a prueba sus fuerzas contra los jefes capturados en las mazmorras calabozo (hasta que el jefe esté muerto), sin perder ningún punto de mazmorra.<br class="clearfloat"/><br/>
La expansión de Negotium X hasta nivel <?php $gnxn = $gnx+1; echo $gnxn; ?> permite que <?php echo $gmaxp; ?> jefes de mazmorra sean encarcelados.</div></div>
</div>

<div class="guild_build_cost title_box" name="9">
<div class="title_inner" name="9"><table border="0" style="width:100%;"><tr>
<td id="arrow_9" onclick='showBuildings("9");' class="guild_build_arrow_visible"></td>
<td style="width:300px;cursor:pointer;" onclick='showBuildings("9");'><b>Templum</b>(Nivel <?php echo $gtemplum; ?>)</td>
<td nowrap="nowrap"><div class="guild_gold"><?php echo $gtemplumc1; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></div></td>
<?php if ($ggold2 >= $gtemplumc && $gtemplum == 0) { ?>
	<td><a href="buildings.php?updateBuilding=templum">Construir</a></td>
<?php } elseif ($ggold2 >= $gtemplumc) { ?>
	<td><a href="buildings.php?updateBuilding=templum">Ampliar</a></td>
<?php } elseif ($gtemplumc > $ggold2 && $gtemplum == 0) { ?>
	<td>Construir</td>
<?php } elseif ($gtemplumc > $ggold2) { ?>
	<td>Ampliar</td>
<?php } ?>
</tr></table></div>
<div id="guild_build_description_9" style="min-height:190px;position:relative;display:none;"><img src="8501/img/guild/building_overview/temple_<?php echo $gtemplumb; ?>.png" class="guild_build_cost_image"/>
<div class="guild_build_cost_content">El Templo está dedicado a todos los dioses. Todos los miembros pueden asegurarse la protección de la divinidad de su confianza. Por cada ampliación, los dioses aumentan 0.2% todas sus bonificaciones que tengas acumuladas.<br class="clearfloat"/><br/>
Con la ampliación del templo al nivel <?php $gtemplumn = $gtemplum+1; echo $gtemplumn;  ?>, aumentas las bonificaciones de los dioses un <?php echo $ggodb; ?>%.</div></div>
</div>

<div class="guild_build_cost title_box" name="10">
<div class="title_inner" name="10"><table border="0" style="width:100%;"><tr>
<td id="arrow_10" onclick='showBuildings("10");' class="guild_build_arrow_visible"></td>
<td style="width:300px;cursor:pointer;" onclick='showBuildings("10");'><b>Villa Médica</b>(Nivel <?php echo $gmedici; ?>)</td>
<td nowrap="nowrap"><div class="guild_gold"><?php echo $gmedicic1; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /></div></td>
<?php if ($ggold2 >= $gmedicic && $gmedici == 0) { ?>
	<td><a href="buildings.php?updateBuilding=medici">Construir</a></td>
<?php } elseif ($ggold2 >= $gmedicic) { ?>
	<td><a href="buildings.php?updateBuilding=medici">Ampliar</a></td>
<?php } elseif ($gmedicic > $ggold2 && $gmedici == 0) { ?>
	<td>Construir</td>
<?php } elseif ($gmedicic > $ggold2) { ?>
	<td>Ampliar</td>
<?php } ?>
</tr></table></div>
<div id="guild_build_description_10" style="min-height:190px;position:relative;display:none;"><img src="8501/img/guild/building_overview/doctor_<?php echo $gmedicib; ?>.png" class="guild_build_cost_image"/>
<div class="guild_build_cost_content">Las guerras de gremios dejan muchas bajas y heridos, por lo tanto el centro medico de cada gremio debe trabajar de la mejor forma, aquí podrás regenerar tu vida, pero el costo será cobrado al banco de tu alianza, claro esta mientras mas nivel tiene el centro medico, mas puede sanar por menos precio.<br class="clearfloat"/><br/>
Con la expansión de Villa Médica a nivel <?php $gmedicin = $gmedici+1; echo $gmedicin; ?> cura hasta <?php echo $gheal; ?> por cada 1 de oro.</div></div>
</div>

</div></div>

</div>

<script type="text/javascript" src="8501/js/guild_buildings.js"></script>