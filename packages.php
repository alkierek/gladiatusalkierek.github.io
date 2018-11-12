
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]><html class="ie7"> <![endif]-->
<!--[if IE 8 ]><html class="ie8"> <![endif]-->
<!--[if IE 9 ]><html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<?php
include ('db/root.php');
include ('db/user.php');
include ('inc/head.php');
?>
<body id="undergroundPage">
<?php
include ('inc/intervalPremium.php');
?>
<div>
<?php
include ('inc/netbar.php');
?>
<div id="wrapper_game">
<div id="container_game">
<?php
include ('inc/buffbar.php');
include ('inc/banner_top.php');
include ('inc/header_game.php');
include ('inc/header_values.php');
include ('inc/cooldown_bar.php');
?>
<ul id="mainnav"><li><table style="top: -23px; position: relative; height: 60px;"><tr style="vertical-align: bottom;">

<td><a href="messages.php" class="awesome-tabs">Visión general<div class="navBG"></div></a></td>
<td><a href="messageNew.php" class="awesome-tabs">escribir mensajes<div class="navBG"></div></a></td>
<td><a href="packages.php" class="awesome-tabs current">Paquetes</a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">
<?php
if (isset($_GET['move'])) {
	echo "<body><script type='text/javascript'>window.location='packages.php';</script></body>";
}
mysql_query("UPDATE users SET user_packN = 0 WHERE user_id = '".$userID."' "); ?>
<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>
<div id="blackoutDialogDeletePackage" class="cancel_confirm">
<div class="blackoutDialog_header pngfix">
<div id="header_DeletePackage" style="font-size:large;text-align:center">Borrar paquete</div>
</div>
<div class="blackoutDialog_body pngfix">
<div class="blackoutDialog_icon">
<img src="8501/img/ui/blackoutDialog/icon_question.jpg"/>
</div>
<div id="dialogTxtDeletePackage" class="blackoutDialog_text"><p>Realmente queres borrar el paquete?</p></div>
<br class="clearfloat" />
<table class="blackoutDialog_buttons" cellspacing="0" cellpadding="0">
<tr>
<td id="buttonleftDeletePackage" style="width:50%">
<div class="al" style="padding:5px">
<input type="submit" class="awesome-button big" value="Si" id="linkDeletePackage" />
</div>
</td>
<td id="buttonrightDeletePackage" style="width:50%">
<div class="ar" style="padding:5px">
<input type="submit" class="awesome-button big" value="No" onclick="blackoutDialog(false)" id="linkcancelDeletePackage" />
</div>
</td>
</tr>
</table>
</div>
<div class="blackoutDialog_footer pngfix">
</div>
</div>



<table width="500" style="margin-left:auto;margin-right:auto">
<tr>
<td style="padding: 0 82px;">
<div class="contentItem" style="margin-bottom: 0px; margin-top: 5px; width: 100%;">
<div class="inventoryBox" style="position: relative;">
<div id="inventory_nav">
<a class="awesome-tabs<?php echo $currentIC1; ?>" href="<?php echo $urla; ?>?invC=1">&#x2160;</a>
<a class="awesome-tabs<?php echo $currentIC2; ?>" href="<?php echo $urla; ?>?invC=2">&#x2161;</a>
<a class="awesome-tabs" href="">&#x2162;</a>
<a class="awesome-tabs" href="">&#x2163;</a>
<a class="awesome-tabs" href="">&#x2164;</a>
<a class="awesome-tabs" href="">&#x2165;</a>
<a class="awesome-tabs" href="">&#x2166;</a>
<a class="awesome-tabs" href="">&#x2167;</a>
</div>
<div id="inv" class="inventory_box " style="background-color: #4F371E; width: 256px; height: 160px;">
<?php $id = $userID; echo addItemImagesToInventory($id); ?>
<div class="bag_buy_extend" style="width: 256px;">

<span class="">
</span>
</div>
</div>
</div>
<div style="clear: both;"></div></td>
</tr>

<tr>

<td>
<div class="title2_box">
<div class="title2_inner">
<table width="100%">
<tr>

<?php
// CONNECT TO MYSQL
mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
// SELECT DATABASE
mysql_select_db(MYSQL_SERVER_DB);
// MAKE A QUERY
$p1 = mysql_query("SELECT * FROM packages WHERE pack_userID = '".$userID."' ORDER BY pack_id DESC LIMIT 4 ");
$p2 = mysql_num_rows($p1);
if (!empty($p2)) {
	$pc = 1;
	while ($pc <= $p2) {
		$pc++;
		$p3 = mysql_fetch_array($p1);
		$pid = $p3['pack_id'];
		$piid = $p3['pack_itemID'];
		$item = getItemByID($piid);
		if ($item != null)	$script = $item['image'];
		$script2 = $pid;
?>

<td width="50%" style="border:1px solid #b28b60">
<span style="float:left;margin-right:5px">
<a id="paketDel<?php echo $script2; ?>" href="javascript:blackoutDialogFlex('window.location.href = \'packages.php?deletePackage=<?php echo $script2; ?>\'', '', true, 'DeletePackage');">borrar</a>
</span>
<div id="paketWindow<?php echo $script2; ?>" style="position:relative;width:64px;height:96px;background-image:url(8501/img/shop/shop_zelle.gif);float:left">
<div id="paket_<?php echo $script2; ?>" style="position:absolute;width:64px;height:64px" onMouseOver="return escape(dd.elements.paket_<?php echo $script2; ?>.tooltip)"><img style="bottom:0px" src="8501/img/item/<?php echo $script; ?>.gif" /></div></div>
</td>

<?php
if ($pc == 3 || $pc == 5 || $pc == 7 || $pc == 9 || $pc == 11 || $pc == 13 || $pc == 15) {
	echo "<tr>";
}
	}
} else {
	echo "No tienes objetos en paquetes";
}
?>

<td>&nbsp;</td>
</tr>

</table>
</div>
</div>
</td>
</tr>

</table>
<script type="text/javascript" src="8501/js/dragdrop2.js"></script><script type="text/javascript">
var INIT_DHTML = true;
var PICK_ITEM = false;
SET_DHTML(CURSOR_MOVE, <?php
// CONNECT TO MYSQL
mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
// SELECT DATABASE
mysql_select_db(MYSQL_SERVER_DB);
// MAKE A QUERY
$p1 = mysql_query("SELECT * FROM packages WHERE pack_userID = '".$userID."' ORDER BY pack_id DESC ");
$p2 = mysql_num_rows($p1);
if (!empty($p2)) {
	$pc = 1;
	while ($pc <= $p2) {
		$pc++;
		$p3 = mysql_fetch_array($p1);
		$pid = $p3['pack_id'];
		$script2 = $pid;
		echo '"paket_'.$script2.'", ';
	}
}
?>"<?php echo $pInvN; ?>_1_1", "<?php echo $pInvN; ?>_1_2", "<?php echo $pInvN; ?>_1_3", "<?php echo $pInvN; ?>_1_4", "<?php echo $pInvN; ?>_1_5", "<?php echo $pInvN; ?>_2_1", "<?php echo $pInvN; ?>_2_2", "<?php echo $pInvN; ?>_2_3", "<?php echo $pInvN; ?>_2_4", "<?php echo $pInvN; ?>_2_5", "<?php echo $pInvN; ?>_3_1", "<?php echo $pInvN; ?>_3_2", "<?php echo $pInvN; ?>_3_3", "<?php echo $pInvN; ?>_3_4", "<?php echo $pInvN; ?>_3_5", "<?php echo $pInvN; ?>_4_1", "<?php echo $pInvN; ?>_4_2", "<?php echo $pInvN; ?>_4_3", "<?php echo $pInvN; ?>_4_4", "<?php echo $pInvN; ?>_4_5", "<?php echo $pInvN; ?>_5_1", "<?php echo $pInvN; ?>_5_2", "<?php echo $pInvN; ?>_5_3", "<?php echo $pInvN; ?>_5_4", "<?php echo $pInvN; ?>_5_5", "<?php echo $pInvN; ?>_6_1", "<?php echo $pInvN; ?>_6_2", "<?php echo $pInvN; ?>_6_3", "<?php echo $pInvN; ?>_6_4", "<?php echo $pInvN; ?>_6_5", "<?php echo $pInvN; ?>_7_1", "<?php echo $pInvN; ?>_7_2", "<?php echo $pInvN; ?>_7_3", "<?php echo $pInvN; ?>_7_4", "<?php echo $pInvN; ?>_7_5", "<?php echo $pInvN; ?>_8_1", "<?php echo $pInvN; ?>_8_2", "<?php echo $pInvN; ?>_8_3", "<?php echo $pInvN; ?>_8_4", "<?php echo $pInvN; ?>_8_5");
var pickObj = new DDObj("");
var aElts = [<?php
// CONNECT TO MYSQL
mysql_connect(MYSQL_SERVER_HOST, MYSQL_SERVER_USER, MYSQL_SERVER_PASS) or die("Could not connect: " . mysql_error());
// SELECT DATABASE
mysql_select_db(MYSQL_SERVER_DB);
// MAKE A QUERY
$p1 = mysql_query("SELECT * FROM packages WHERE pack_userID = '".$userID."' ORDER BY pack_id DESC ");
$p2 = mysql_num_rows($p1);
if (!empty($p2)) {
	$pc = 1;
	while ($pc <= $p2) {
		$pc++;
		$p3 = mysql_fetch_array($p1);
		$pid = $p3['pack_id'];
		$script2 = $pid;
		echo 'dd.elements.paket_'.$script2.', ';
	}
}
?>dd.elements.<?php echo $pInvN; ?>_1_1, dd.elements.<?php echo $pInvN; ?>_1_2, dd.elements.<?php echo $pInvN; ?>_1_3, dd.elements.<?php echo $pInvN; ?>_1_4, dd.elements.<?php echo $pInvN; ?>_1_5, dd.elements.<?php echo $pInvN; ?>_2_1, dd.elements.<?php echo $pInvN; ?>_2_2, dd.elements.<?php echo $pInvN; ?>_2_3, dd.elements.<?php echo $pInvN; ?>_2_4, dd.elements.<?php echo $pInvN; ?>_2_5, dd.elements.<?php echo $pInvN; ?>_3_1, dd.elements.<?php echo $pInvN; ?>_3_2, dd.elements.<?php echo $pInvN; ?>_3_3, dd.elements.<?php echo $pInvN; ?>_3_4, dd.elements.<?php echo $pInvN; ?>_3_5, dd.elements.<?php echo $pInvN; ?>_4_1, dd.elements.<?php echo $pInvN; ?>_4_2, dd.elements.<?php echo $pInvN; ?>_4_3, dd.elements.<?php echo $pInvN; ?>_4_4, dd.elements.<?php echo $pInvN; ?>_4_5, dd.elements.<?php echo $pInvN; ?>_5_1, dd.elements.<?php echo $pInvN; ?>_5_2, dd.elements.<?php echo $pInvN; ?>_5_3, dd.elements.<?php echo $pInvN; ?>_5_4, dd.elements.<?php echo $pInvN; ?>_5_5, dd.elements.<?php echo $pInvN; ?>_6_1, dd.elements.<?php echo $pInvN; ?>_6_2, dd.elements.<?php echo $pInvN; ?>_6_3, dd.elements.<?php echo $pInvN; ?>_6_4, dd.elements.<?php echo $pInvN; ?>_6_5, dd.elements.<?php echo $pInvN; ?>_7_1, dd.elements.<?php echo $pInvN; ?>_7_2, dd.elements.<?php echo $pInvN; ?>_7_3, dd.elements.<?php echo $pInvN; ?>_7_4, dd.elements.<?php echo $pInvN; ?>_7_5, dd.elements.<?php echo $pInvN; ?>_8_1, dd.elements.<?php echo $pInvN; ?>_8_2, dd.elements.<?php echo $pInvN; ?>_8_3, dd.elements.<?php echo $pInvN; ?>_8_4, dd.elements.<?php echo $pInvN; ?>_8_5];
var maxcols = 8;
var maxrows = 5;

<?php $id = $userID; echo addItemsToPackages($id); ?>
<?php $id = $userID; echo addItemsToInventory($id); ?>
changeShow();</script>

<?php
include ('inc/pak.php');
?>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>