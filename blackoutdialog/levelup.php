<?php

$newUlvln1 = "UPDATE users SET user_newLn = '0' WHERE user_id = '".$userID."' ";
$newUlvln2 = mysql_query($newUlvln1);
$userEXPmax = $userEXPmax+(int)(5*$userLEVEL);
$newUlvl1 = "UPDATE users SET user_expMAX = '".$userEXPmax."' WHERE user_id = '".$userID."' ";
$newUlvl2 = mysql_query($newUlvl1);
$userLEVEL++;
$newUlvl1 = "UPDATE users SET user_level = '".$userLEVEL."' WHERE user_id = '".$userID."' ";
$newUlvl2 = mysql_query($newUlvl1);
$userEXP -= $userEXPmax;
$newUlvl1 = "UPDATE users SET user_exp = '".$userEXP."' WHERE user_id = '".$userID."' ";
$newUlvl2 = mysql_query($newUlvl1);
$userGOLD += $userLEVEL*50;
$userNEWgold = $userLEVEL*50;
$newUgold1 = "UPDATE users SET user_gold = '".$userGOLD."' WHERE user_id = '".$userID."' ";
$newUgold2 = mysql_query($newUgold1);
$newUlife1 = "UPDATE users SET user_life = '999999999999999' WHERE user_id = '".$userID."' ";
$newUlife2 = mysql_query($newUlife1);

?>
<script type="text/javascript" src="8501/js/blackoutdialog.js"></script><div id="blackoutDialognotification" class="cancel_confirm">
<div class="blackoutDialog_header pngfix"><div id="header_notification" style="font-size:large;text-align:center"><?php echo $level; ?> <?php echo $userLEVEL; ?></div></div>
<div class="blackoutDialog_body pngfix"><div class="blackoutDialog_icon"><img src="8501/img/ui/blackoutDialog/icon_levelup.jpg"/></div>
<div id="dialogTxtnotification" class="blackoutDialog_text"><p><p><?php echo $dialog8; ?> <?php echo $userLEVEL; ?> <?php echo $dialog22; ?> <?php echo $userNEWgold; ?> <img src="8501/img/res2.gif" title="Oro" align="absmiddle" border="0" /> <?php echo $dialog23; ?></p><p><?php echo $dialog24; ?></p><p><?php echo $dialog25; ?></p><p><?php echo $dialog26; ?></p></p></div>
<br class="clearfloat" /><table class="blackoutDialog_buttons" cellspacing="0" cellpadding="0"><tr><td id="buttonleftnotification" style="width:100%; text-align: center;">
<input type="submit" class="awesome-button big" value="<?php echo $accept; ?>"  onclick="window.location.href = document.location.href" id="linknotification" /></td></tr></table></div>
<div class="blackoutDialog_footer pngfix"></div></div><script type="text/javascript">blackoutDialog(true, 'blackoutDialognotification', false, "window.location.href = document.location.href");</script>