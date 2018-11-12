<script type="text/javascript" src="8501/js/misc.js"></script>

<?php if (isset($_GET['submod'])): ?>
    <?php if ($_GET['submod'] == 'suses'): ?>
        <div style="margin-bottom: 10px;"><div class="title2_box"><div class="title2_inner messageSuccess">Mensaje enviado.</div></div></div>
    <?php endif ?>
    <?php if ($_GET['submod'] == 'lowl'): ?>
        <div style="margin-bottom: 10px;"><div class="title2_box"><div class="title2_inner messageFail">Rango bajo.</div></div></div>
    <?php endif ?>
<?php endif ?>

<form action="admin.php?mod=adminMail" method="POST"><div id="mainbox"><div class="title_box"><div class="title_inner">Escribír circular</div></div><div class="title2_box"><div class="title2_inner"><table width="100%">
<tr><th colspan="4">Este correo va a la siguiente alianza: <?php echo $gname; ?></th></tr>
<tr><th colspan="4"><br />Texto (<span id="messageCounter">0</span> / 5000 Caracteres)<br /><textarea id="message" name="mailText" cols="50" rows="8" style="width:450px"></textarea></th></tr>
<tr><th colspan="4" align="center"><input type="submit" name="sendmails" value="enviar" class="button2"></th></tr>
</table></div></div></div></form>
