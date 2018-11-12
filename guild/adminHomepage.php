<form action="admin.php?mod=adminHomepage" method="POST"><div id="mainbox">

<?php if ($descACEP == 1) { ?>
<div style="margin-bottom: 10px;"><div class="title2_box"><div class="title2_inner messageSuccess">Valor guardado.</div></div></div>
<?php } ?>
<?php if ($descLOWL == 1) { ?>
<div style="margin-bottom: 10px;"><div class="title2_box"><div class="title2_inner messageFail">Rango bajo.</div></div></div>
<?php } ?>

<div class="title_box"><div class="title_inner">Cambiar la pagina de inicio</div></div>

<div class="title2_box"><div class="title2_inner"><table width="100%">

<tr><th>Página de inicio</th><th></th></tr>
<tr><th>Nueva página de inicio:</th><th><input type="text" name="newpage" value="<?php echo $glink; ?>" size="50" maxlength="250"></th></tr>
<tr><th colspan="2"><input type="submit" value="Cambiar" class="button2"></th></tr>

</table></div></div>

</div></form>