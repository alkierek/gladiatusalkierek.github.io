<div id="changeNameForm" class="cancel_confirm" style="width:450px">
<script type="text/javascript"> function resetMercName() { document.location.href = 'overview.php?resetMercName=1&doll=1&inv=0'; } </script>
<form method="POST" accept-charset="utf-8" action="overview.php?changeMercName=1&doll=1&inv=0" style="display:inline">
<div class="title_box"><div class="title_inner"><div style="text-align:center;font-size:large;height:27px"><?php echo $dialog12; ?></div></div></div>
<div class="title2_box"><div class="title2_inner"><div id="change_name_popup"><span><?php echo $dialog13; ?></span><input type="text" size="15" maxlength="15" name="newName" /></div>
<div style="position:relative;margin-top:5px;margin-bottom:5px"><table width="100%"><tr><td style="text-align:center"><input class="button2" type="submit" value="<?php echo $change; ?>" /></td><td style="text-align:center"><input class="button2" type="button" value="<?php echo $cancel; ?>" onClick="blackoutDialog(false)" /></td></tr></table></div></div></div></form></div>