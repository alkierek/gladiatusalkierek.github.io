<script type="text/javascript" src="8501/js/blackoutdialog.js"></script><div id="blackoutDialognotification" class="cancel_confirm">
<div class="blackoutDialog_header pngfix"><div id="header_notification" style="font-size:large;text-align:center"><?php echo $congrats; ?></div></div><div class="blackoutDialog_body pngfix">
<div class="blackoutDialog_icon"><img style="width: 65px;" src="8501/img/premium/box/box_small.jpg"/></div>
<div id="dialogTxtnotification" class="blackoutDialog_text"><p><p><?php echo $dialog29; ?></p><p><?php echo $dialog30; ?></p></p></div>
<br class="clearfloat" /><table class="blackoutDialog_buttons" cellspacing="0" cellpadding="0"><tr>
<td id="buttonleftnotification" style="width:50%"><div class="al" style="padding:5px"><input type="submit" class="awesome-button big" value="Si" onclick="window.location.href = 'mysterybox'" id="linknotification" /></div></td>
<td id="buttonrightnotification" style="width:50%"><div class="ar" style="padding:5px"><input type="submit" class="awesome-button big" value="No" onclick="sendRequest('get', 'ajax.php', 'mod=notification&submod=removeNotification&notification=8');blackoutDialog(false);" id="linkcancelnotification" /></div></td>
</tr></table></div><div class="blackoutDialog_footer pngfix"></div></div>
<script type="text/javascript">blackoutDialog(true, 'blackoutDialognotification', false, "window.location.href = 'index.php?mod=mysterybox&sh=acc8a7e22ab9cb4e2fb94e2f55f05660' + '&notification=8'");</script>