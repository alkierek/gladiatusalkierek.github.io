<div id="header_game">
<span><a href="" target="_blank">Ayuda</a></span>
<span><a href="settings.php">Perfil</a></span>
<span><a href="memo.php">Notas</a></span>
<span><a href="" target="_blank">Foro</a></span>
<span><a href="premium.php" style="color:yellow;">Joyero</a></span>
<span><a href="" target="_blank">Reglas</a></span>
<span>05.04.2015 20:04</span>
<span><a href="logout.php">Salir</a></span>
<div id="header_menue">

<a id="menue_news" class="menue_news<?php echo $newsHL; ?>" href="<?php echo $newsLINK; ?>" title="Novedades"><?php if ($newsC > 0) { ?><div class="menue_new_count"><?php echo $newsC; ?></div><?php } ?></a>
<a id="menue_reports" class="menue_reports<?php echo $rptsHL; ?>" href="reports.php" title="Reportes de batalla"><?php if ($rptsC > 0) { ?><div class="menue_new_count"><?php echo $rptsC; ?></div><?php } ?></a>
<a id="menue_messages" class="menue_messages<?php echo $msgsHL; ?>" href="messageShow.php" title="Mensajes"><?php if ($msgsC > 0) { ?><div class="menue_new_count"><?php echo $msgsC; ?></div><?php } ?></a>
<a id="menue_packages" class="menue_packages<?php echo $packHL; ?>" href="packages.php" title="Paquetes"><?php if ($packC > 0) { ?><div class="menue_new_count"><?php echo $packC; ?></div><?php } ?></a>

</div>