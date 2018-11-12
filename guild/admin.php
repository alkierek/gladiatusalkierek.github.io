<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>
<div id="blackoutDialogDisband" class="cancel_confirm">
<div class="blackoutDialog_header pngfix"><div id="header_Disband" style="font-size:large;text-align:center">Deshacer Alianza</div></div>

<div class="blackoutDialog_body pngfix">
<div class="blackoutDialog_icon"><img src="8501/img/ui/blackoutDialog/icon_question.jpg"/></div>
<div id="dialogTxtDisband" class="blackoutDialog_text"><p>¿Usted quiere destruir su gremio ? ¡Sus jefaturas del gremio serán quemadas totalmente y el emperador recibirá todo el oro del gremio!</p></div>
<br class="clearfloat" />

<table class="blackoutDialog_buttons" cellspacing="0" cellpadding="0"><tr>

<td id="buttonleftDisband" style="width:50%"><div class="al" style="padding:5px"><input type="submit" class="awesome-button big" value="Deshacer Alianza" onclick="window.location.href = 'admin.php?mod=disband'" id="linkDisband" /></div></td>
<td id="buttonrightDisband" style="width:50%"><div class="ar" style="padding:5px"><input type="submit" class="awesome-button big" value="Cancelar" onclick="blackoutDialog(false)" id="linkcancelDisband" /></div></td>

</tr></table>

</div>

<div class="blackoutDialog_footer pngfix"></div>
</div>
<!-- -->
<!-- -->

<div id="mainbox">

<div class="title_box"><div class="title_inner">Opciones de la alianza	</div></div>

<div class="title2_box"><div class="title2_inner"><p><table width="100%" class="table1">

<?php if ($guserRANK == 98 || $guserRANK == 99) { ?>
<tr><th colspan="2"><a href="admin.php?mod=adminDescription">Cambiar descripción</a></th></tr>
<tr><th colspan="2"><a href="admin.php?mod=adminLogo">Cambiar el logo de la alianza</a></th></tr>
<tr><th colspan="2"><a href="admin.php?mod=adminHomepage">Cambiar la pagina de inicio</a></th></tr>
<tr><th colspan="2"><a href="admin.php?mod=adminName">Cambiar el nombre de la alianza</a></th></tr>
<?php } ?>
<?php if ($guserRANK > 1) {
	$rankP2 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_ranks WHERE gr_id = '".$guserRANK."' "));
	$rankP2 = $rankP2['gr_pMessages1'];
	if ($rankP2 == 1) {
		?>
		<tr><th colspan="2"><a href="admin.php?mod=adminMail">Escribír circular</a></th></tr>
		<?php
	}
} ?>
<?php if ($guserRANK == 98 || $guserRANK == 99) { ?>
<tr><th colspan="2"><a href="admin.php?mod=adminMembers">Administrar miembros</a></th></tr>
<?php } ?>
<?php if ($guserRANK == 99) { ?>
<tr><th colspan="2"><a href="javascript:blackoutDialog(true, 'blackoutDialogDisband', 350)">Deshacer Alianza</a></th></tr>
<?php } ?>
</table></p></div></div>

<br />

<div class="title_box"><div class="title_inner">Solicitudes de la alianza</div></div>
<div class="title2_box"><div class="title2_inner"><p><table width="100%">

<tr><th colspan=2>No hay solicitudes</th></tr>

</table></p></div></div>

</div>