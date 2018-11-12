<script type="text/javascript"></script>
<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>
<div id="blackoutDialognotification" class="cancel_confirm">
<div class="blackoutDialog_header pngfix"><div id="header_notification" style="font-size:large;text-align:center"><?php echo $dialog1; ?></div></div>
<div class="blackoutDialog_body pngfix"><div class="blackoutDialog_icon"><img src="8501/img/ui/blackoutDialog/icon_hint.jpg"/></div>
<div id="dialogTxtnotification" class="blackoutDialog_text"><p><p><?php echo $dialog2; ?><br /><br /><?php echo $dialog3; ?></p></p></div><br class="clearfloat" />
<table class="blackoutDialog_buttons" cellspacing="0" cellpadding="0"><tr><td id="buttonleftnotification" style="width:100%; text-align: center;"><input type="submit" class="awesome-button big" value="<?php echo $dialog4; ?>"  onclick="window.location.href = 'auction.php'" id="linknotification" /></td></tr></table>
</div><div class="blackoutDialog_footer pngfix"></div></div>
<script type="text/javascript">blackoutDialog(true, 'blackoutDialognotification', false, "window.location.href = 'auction.php'");</script>