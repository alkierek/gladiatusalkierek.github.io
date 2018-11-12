<div id="sidebar"><div id="sidebar_inner"><h2><?php echo $index11; ?></h2><form action="login.php" method="post"><fieldset>
<input type="hidden" name="fatherId" value="0" id="fatherId" />
<input type="hidden" name="fatherMessage" value="0" id="fatherMessage" />
<div class="input-text"><label for="register_server"><?php echo $index12; ?></label><div class="input_wrap"><select name="register_server" id="register_server">
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
</select></div></div>
<div class="input-text"><label for="name"><?php echo $index13; ?></label><div class="input_wrap"><input type="text" id="name" name="name" value="" /><div id="error_name_box" class="registerError_Box"><div class="registerError_Content"><div class="registerError_Icon" id="error_name"></div></div><div class="registerError_Arrow"></div></div></div></div>
<div class="input-text"><label for="email"><?php echo $index14; ?></label><div class="input_wrap"><input type="text" id="email" name="email" value="" /><div id="error_email_box" class="registerError_Box"><div class="registerError_Content"><div class="registerError_Icon" id="error_email"></div></div><div class="registerError_Arrow"></div></div></div></div>
<div class="input-text"><label for="password"><?php echo $index15; ?></label><div class="input_wrap"><input type="password" id="password" name="pass" value="" /><div id="error_password_box" class="registerError_Box"><div class="registerError_Content"><div class="registerError_Icon" id="error_password"></div></div><div class="registerError_Arrow"></div></div></div></div>
<div class="input"><div style="position:relative;width: 195px;"><label for="tnc"><?php echo $index16; ?><a href="" target="_blank"><?php echo $index17; ?><a href= "" target="_blank"><?php echo $index18; ?></a>.</label><div id="error_tnc_box" class="registerError_Box"><div class="registerError_Content"><div class="registerError_Icon" id="error_tnc"></div></div><div class="registerError_Arrow"></div></div></div></div>
<p><input type="submit" id="registersubmit" value="Registrarse" name="signUpform" /></p>
</fieldset></form></div><div id="sidebar_footer"></div></div>