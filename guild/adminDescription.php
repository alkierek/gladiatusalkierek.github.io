<script type="text/javascript" src="8501/js/misc.js"></script>
<script type="text/javascript" src="8501/js/bbcode.js"></script>


<form action="admin.php?mod=adminDescription" method="POST" accept-charset="utf-8" ><div id="mainbox">

<?php if ($descACEP == 1) { ?>
<div style="margin-bottom: 10px;"><div class="title2_box"><div class="title2_inner messageSuccess">Valor guardado.</div></div></div>
<?php } ?>
<?php if ($descLOWL == 1) { ?>
<div style="margin-bottom: 10px;"><div class="title2_box"><div class="title2_inner messageFail">Rango bajo.</div></div></div>
<?php } ?>

<div class="title_box"><div class="title_inner">Aquí podes describir tu alianza y sus objetivos</div></div>

<div class="title2_box"><div class="title2_inner"><p><table width="100%">

<tr><th>Descripción (<span id="descCounter">0</span> / 10000 Caracteres))</th></tr>

<tr><th><div style="width: 462px; *width: 464px;">
<!-- -->
<div class="bbcode_toolbar">
<!-- -->
<div style="float: left;">

<img title="Negrita" class="bbcode_button" src="8501/img/bbcode/bbcode_bold.gif" onclick="insertBBCode('description', '<b>', '</b>')" />
<img title="Cursiva" class="bbcode_button" src="8501/img/bbcode/bbcode_italic.gif" onclick="insertBBCode('description', '<i>', '</i>')" />
<img title="Subrayar" class="bbcode_button" src="8501/img/bbcode/bbcode_underline.gif" onclick="insertBBCode('description', '<u>', '</u>')" />
<img title="Tachado" class="bbcode_button" src="8501/img/bbcode/bbcode_strike.gif" onclick="insertBBCode('description', '<s>', '</s>')" />

<div id="toggleContainerLink" style="float: left;"><a id="toggleLinkLink" href="#"><img title="Link interno" class="bbcode_button" src="8501/img/bbcode/bbcode_link.gif" /></a><div id="togglePanelLink" class="linkPickerTogglePanel"><div class="linkPicker"><div class="linkPickerTitle">Link interno</div>
<div><a href='javascript:insertBBCode("description", "[p n=\"", "\"]")'>Jugador - Nombre</a></div>
<div><a href='javascript:insertBBCode("description", "[g n=\"", "\"]")'>Alianza - Nombre</a></div>
<div><a href='javascript:insertBBCode("description", "[g t=\"", "\"]")'>Alianza - Etiqueta de la alianza</a></div>
</div></div></div>

<div id="toggleContainerColor" style="float: left;">
<a id="toggleLinkColor" href="#"><img title="Color de Fuente" class="bbcode_button" src="8501/img/bbcode/bbcode_color.gif" /></a>
<div id="togglePanelColor" class="colorPickerTogglePanel"><div class="colorPicker"><ul>

<li><a title="#000000" style="background-color: #000000;" href='javascript:insertBBCode("description", "[f c=#000000]", "[/f]")'></a></li>
<li><a title="#222222" style="background-color: #222222;" href='javascript:insertBBCode("description", "[f c=#222222]", "[/f]")'></a></li>
<li><a title="#444444" style="background-color: #444444;" href='javascript:insertBBCode("description", "[f c=#444444]", "[/f]")'></a></li>
<li><a title="#666666" style="background-color: #666666;" href='javascript:insertBBCode("description", "[f c=#666666]", "[/f]")'></a></li>
<li><a title="#999999" style="background-color: #999999;" href='javascript:insertBBCode("description", "[f c=#999999]", "[/f]")'></a></li>
<li><a title="#cccccc" style="background-color: #cccccc;" href='javascript:insertBBCode("description", "[f c=#cccccc]", "[/f]")'></a></li>
<li><a title="#ffffff" style="background-color: #ffffff;" href='javascript:insertBBCode("description", "[f c=#ffffff]", "[/f]")'></a></li>
<li><a title="#000066" style="background-color: #000066;" href='javascript:insertBBCode("description", "[f c=#000066]", "[/f]")'></a></li>
<li><a title="#006666" style="background-color: #006666;" href='javascript:insertBBCode("description", "[f c=#006666]", "[/f]")'></a></li>
<li><a title="#006600" style="background-color: #006600;" href='javascript:insertBBCode("description", "[f c=#006600]", "[/f]")'></a></li>
<li><a title="#666600" style="background-color: #666600;" href='javascript:insertBBCode("description", "[f c=#666600]", "[/f]")'></a></li>
<li><a title="#663300" style="background-color: #663300;" href='javascript:insertBBCode("description", "[f c=#663300]", "[/f]")'></a></li>
<li><a title="#660000" style="background-color: #660000;" href='javascript:insertBBCode("description", "[f c=#660000]", "[/f]")'></a></li>
<li><a title="#660066" style="background-color: #660066;" href='javascript:insertBBCode("description", "[f c=#660066]", "[/f]")'></a></li>
<li><a title="#000099" style="background-color: #000099;" href='javascript:insertBBCode("description", "[f c=#000099]", "[/f]")'></a></li>
<li><a title="#009999" style="background-color: #009999;" href='javascript:insertBBCode("description", "[f c=#009999]", "[/f]")'></a></li>
<li><a title="#009900" style="background-color: #009900;" href='javascript:insertBBCode("description", "[f c=#009900]", "[/f]")'></a></li>
<li><a title="#999900" style="background-color: #999900;" href='javascript:insertBBCode("description", "[f c=#999900]", "[/f]")'></a></li>
<li><a title="#993300" style="background-color: #993300;" href='javascript:insertBBCode("description", "[f c=#993300]", "[/f]")'></a></li>
<li><a title="#990000" style="background-color: #990000;" href='javascript:insertBBCode("description", "[f c=#990000]", "[/f]")'></a></li>
<li><a title="#990099" style="background-color: #990099;" href='javascript:insertBBCode("description", "[f c=#990099]", "[/f]")'></a></li>
<li><a title="#0000ff" style="background-color: #0000ff;" href='javascript:insertBBCode("description", "[f c=#0000ff]", "[/f]")'></a></li>
<li><a title="#00ffff" style="background-color: #00ffff;" href='javascript:insertBBCode("description", "[f c=#00ffff]", "[/f]")'></a></li>
<li><a title="#00ff00" style="background-color: #00ff00;" href='javascript:insertBBCode("description", "[f c=#00ff00]", "[/f]")'></a></li>
<li><a title="#ffff00" style="background-color: #ffff00;" href='javascript:insertBBCode("description", "[f c=#ffff00]", "[/f]")'></a></li>
<li><a title="#ff6600" style="background-color: #ff6600;" href='javascript:insertBBCode("description", "[f c=#ff6600]", "[/f]")'></a></li>
<li><a title="#ff0000" style="background-color: #ff0000;" href='javascript:insertBBCode("description", "[f c=#ff0000]", "[/f]")'></a></li>
<li><a title="#ff00ff" style="background-color: #ff00ff;" href='javascript:insertBBCode("description", "[f c=#ff00ff]", "[/f]")'></a></li>
<li><a title="#9999ff" style="background-color: #9999ff;" href='javascript:insertBBCode("description", "[f c=#9999ff]", "[/f]")'></a></li>
<li><a title="#99ffff" style="background-color: #99ffff;" href='javascript:insertBBCode("description", "[f c=#99ffff]", "[/f]")'></a></li>
<li><a title="#99ff99" style="background-color: #99ff99;" href='javascript:insertBBCode("description", "[f c=#99ff99]", "[/f]")'></a></li>
<li><a title="#ffff99" style="background-color: #ffff99;" href='javascript:insertBBCode("description", "[f c=#ffff99]", "[/f]")'></a></li>
<li><a title="#ffcc99" style="background-color: #ffcc99;" href='javascript:insertBBCode("description", "[f c=#ffcc99]", "[/f]")'></a></li>
<li><a title="#ff9999" style="background-color: #ff9999;" href='javascript:insertBBCode("description", "[f c=#ff9999]", "[/f]")'></a></li>
<li><a title="#ff99ff" style="background-color: #ff99ff;" href='javascript:insertBBCode("description", "[f c=#ff99ff]", "[/f]")'></a></li>

</ul></div></div>
</div>

</div>
<!-- -->
<div style="float: right;">
<select name="fontsize" class="bbcode_dropdown" onchange='bbDropdown("description", this, "[f s=$var]", "[\/f]")'>
<option value="none" selected="selected">Tamaño de fuente</option>
<option value="8" style="font-size: 8pt;">8</option>
<option value="10" style="font-size: 10pt;">10</option>
<option value="12" style="font-size: 12pt;">12</option>
<option value="14" style="font-size: 14pt;">14</option>
<option value="18" style="font-size: 18pt;">18</option>
<option value="24" style="font-size: 24pt;">24</option>
<option value="36" style="font-size: 36pt;">36</option>
</select>

<select name="fontface" class="bbcode_dropdown" onchange='bbDropdown("description", this, "[f f=\"$var\"]", "[\/f]")'>
<option value="none" selected="selected">Tipo de letra</option>
<option value="arial" style="font-family: Arial, Helvetica, sans-serif;">Arial</option>
<option value="chicago" style="font-family: Chicago, Impact, Compacta, sans-serif;">Chicago</option>
<option value="comic sans ms" style="font-family: Comic Sans MS, sans-serif;">Comic Sans MS</option>
<option value="courier new" style="font-family: Courier New, Courier, mono;">Courier New</option>
<option value="geneva" style="font-family: Geneva, Arial, Helvetica, sans-serif;">Geneva</option>
<option value="georgia" style="font-family: Georgia, Times New Roman, Times, serif;">Georgia</option>
<option value="helvetica" style="font-family: Helvetica, Verdana, sans-serif;">Helvetica</option>
<option value="impact" style="font-family: Impact, Compacta, Chicago, sans-serif;">Impact</option>
<option value="lucida sans" style="font-family: Lucida Sans, Monaco, Geneva, sans-serif;">Lucida Sans</option>
<option value="tahoma" style="font-family: Tahoma, Arial, Helvetica, sans-serif;">Tahoma</option>
<option value="times new roman" style="font-family: Times New Roman, Times, Georgia, serif;">Times New Roman</option>
<option value="trebuchet ms" style="font-family: Trebuchet MS, Arial, sans-serif;">Trebuchet MS</option>
<option value="verdana" style="font-family: Verdana, Helvetica, sans-serif;">Verdana</option>
</select>
</div>
<!-- -->
</div>

<script type="text/javascript">
var panelOverseer = new PanelOverseer();
panelOverseer.registerPanelContainer('Color', 1500);
panelOverseer.registerPanelContainer('Link', 1500);
</script>

<textarea id="description" name="description" style="width: 458px;" rows=20><?php echo $gdesc; ?></textarea>
<!-- -->
</div></th></tr>

<tr><th><table width="100%"><tr><th align="right"><input type=submit name="save" value="Cambiar" class="button2"></th><th align="left"><input type=submit name="delete" value="borrar" class="button2"></th></tr></table></th></tr>

<tr><th>Podes poner links dentro del juego asi:</th></tr>
<tr><th>Alianza: [g t="Etiqueta de la alianza"] / [g n="Nombre"]</th></tr>
<tr><th>Jugador: [p n="Nombre"]</th></tr>
<tr><th>Al guardar se complementa automáticamente el ID interno. Una vez completado el ID, también es posible cambiar el nombre sin que cambie el enlace.</th></tr>

</table></p></div></div>

</div>
</form>