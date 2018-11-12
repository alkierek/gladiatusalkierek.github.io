<div id="login"><h2>Login:</h2><form method="post" accept-charset="utf-8" action="login.php"><fieldset>
<p><input type="text" name="name" alt="<?php echo $index9; ?>" id="login_username" class="input-text"/></p>
<p><input type="password" name="pass" alt="<?php echo $index10; ?>" id="login_password" class="input-text" /></p>
<p class="input-select"><span><select name="login_server" id="login_server"><optgroup label="Server <?php echo $serverNAME; ?>">
<?php
$mysql1 = mysql_query("SELECT * FROM provinces"); //Edit by charles
$mysql2 = mysql_num_rows($mysql1);
$mysql3 = 1;
while ($mysql3 <= $mysql2) {
	$mysql4 = mysql_fetch_array($mysql1);
	$provinID = $mysql4['provin_id'];
	$provinNAME = $mysql4['provin_name'];
	?>
	<option value="<?php echo $provinID; ?>" <?php if($mysql3 == 1){ ?>selected="selected"<?php }?>><?php echo $provinNAME; ?></option>
	<?php
	$mysql3++;
}
?>
</optgroup></select></span></p>
<p><input type="submit" id="loginsubmit" name="loginform"/></p>
<p id="loginTOC"><?php echo $index5; ?><a href="" target="_blank" class="copyright"><?php echo $index6; ?></a><?php echo $index7; ?> | <a href="recoverPassword.php"><?php echo $index8; ?></a></p>
</fieldset></form></div>