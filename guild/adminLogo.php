<div id="mainbox"><div class="title_box"><div class="title_inner">Cambiar el logo de la alianza</div></div><div class="title2_box"><div class="title2_inner"><p><table width="100%">

<tr><th>&nbsp;</th></tr>
<tr><th align="center"><img src="8501/img/logo/0/tmp/<?php echo $gfc; ?>-<?php echo $gfs; ?>.png" border="0" /></th></tr>
<tr><th>&nbsp;</th></tr>
<tr><th><table width="100%"><tr><th align="center"><a href="admin.php?mod=adminLogo&design=1">Fondo</a>&nbsp;<a href="admin.php?mod=adminLogo&design=2">Bandera</a></th></tr>
<tr>
<!-- -->
<!-- -->
<?php
$dt = 1;
if (isset($_GET['design'])) {
	$dt = $_GET['design'];
}
if ($dt == 1) {
	include ('guild/colorFlag.php');
} else if ($dt == 2) {
	include ('guild/iconFlag.php');
}
?>
<!-- -->
<!-- -->
</tr>

</table></th></tr>

<tr><th>&nbsp;</th></tr>

</table></p></div></div></div>
