<script type="text/javascript" src="8501/js/blackoutdialog.js"></script><div id="blackoutDialognotification" class="cancel_confirm">
<div class="blackoutDialog_header pngfix"><div id="header_notification" style="font-size:large;text-align:center"><?php echo $dialog20; ?></div></div>
<div class="blackoutDialog_body pngfix"><div class="blackoutDialog_icon"><img src="8501/img/ui/blackoutDialog/icon_hint.jpg"/></div>
<div id="dialogTxtnotification" class="blackoutDialog_text"><p><p><?php echo $dialog21; ?></p></p></div><br class="clearfloat" />
<table class="blackoutDialog_buttons" cellspacing="0" cellpadding="0"><tr>
<td id="buttonleftnotification" style="width:50%"><div class="al" style="padding:5px"><input type="submit" class="awesome-button big" value="<?php echo $missions; ?>" onclick="window.location.href = 'missions.php'" id="linknotification" /></div></td>
<td id="buttonrightnotification" style="width:50%"><div class="ar" style="padding:5px"><input type="submit" class="awesome-button big" value="<?php echo $accept; ?>" onclick="sendRequest('get', 'ajax.php', 'mod=notification&submod=removeNotification&notification=7');blackoutDialog(false);" id="linkcancelnotification" /></div></td>
</tr></table></div><div class="blackoutDialog_footer pngfix"></div></div>
<script type="text/javascript">blackoutDialog(true, 'blackoutDialognotification', false, "window.location.href = 'missions.php'");</script>