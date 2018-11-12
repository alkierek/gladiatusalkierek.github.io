<form action="admin.php?mod=adminName"  method="POST" accept-charset="utf-8" >

<div id="mainbox">

<div class="title_box"><div class="title_inner">Cambiar el nombre de la alianza</div></div>

<div class="title2_box"><div class="title2_inner"><table width="100%">

<tr><th>Nombre:</th><th><?php echo $gname; ?></th></tr>
<tr><th>Nuevo nombre de la alianza:</th><th><input type="text" name="newname" value="<?php echo $gname; ?>" size="20" maxlength="35"></th></tr>
<tr><th>Etiqueta de la alianza:</th><th><?php echo $gtag; ?></th></tr>
<tr><th>Nueva etiqueta de la alianza:</th><th><input type="text" name="newtag" value="<?php echo $gtag; ?>" size="20" maxlength="8"></th></tr>
<tr><th colspan="2"><input type="submit" value="Cambiar" class="button2" name="adminNameEdit"></th></tr>

</table></div></div>

</div>

</form>
