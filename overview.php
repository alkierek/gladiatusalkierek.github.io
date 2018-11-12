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
<td>
<a href="overview.php" class="awesome-tabs current">Vision general</a>
</td>
<td>
<a href="stats.php" class="awesome-tabs">Estadisticas<div class="navBG"></div></a>
</td>
<td>
<a href="achievements.php" class="awesome-tabs">Victorias<div class="navBG"></div></a>
</td>
<td>
<a href="buddylist.php" class="awesome-tabs">Familia<div class="navBG"></div></a>
</td>
</tr></table></li></ul></div>

<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<?php
if (isset($_GET['move'])) {
	echo "<body><script type='text/javascript'>window.location='overview.php';</script></body>";
}
include ('inc/userBless.php');
?>


				<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>
				<script type="text/javascript" src="8501/js/overview2.js"></script>
				<!--<div style="position: relative; height: 37px;">-->
				<div id="blackoutDialogsoulboundConfirm" class="cancel_confirm">
<div class="blackoutDialog_header pngfix">
	<div id="header_soulboundConfirm" style="font-size:large;text-align:center">Attention</div>
</div>
<div class="blackoutDialog_body pngfix">
	<div class="blackoutDialog_icon">
		<img src="8501/img/ui/blackoutDialog/icon_question.jpg"/>
	</div>
	<div id="dialogTxtsoulboundConfirm" class="blackoutDialog_text"><p>This item will become soul bound as soon as you put it on!</p></div>
	<br class="clearfloat" />
	<table class="blackoutDialog_buttons" cellspacing="0" cellpadding="0">
		<tr>
			<td id="buttonleftsoulboundConfirm" style="width:50%">
				<div class="al" style="padding:5px">
<input type="submit" class="awesome-button big" value="Put on item" onclick="doDragDrop()" id="linksoulboundConfirm" />
				</div>
			</td>
			<td id="buttonrightsoulboundConfirm" style="width:50%">
				<div class="ar" style="padding:5px">
<input type="submit" class="awesome-button big" value="Cancel" onclick="cancelDragDrop()" id="linkcancelsoulboundConfirm" />
				</div>
			</td>
		</tr>
	</table>
</div>
<div class="blackoutDialog_footer pngfix"></div>
				</div>
				<input type="hidden" id="doll" value="1" />
				<table width="100%">
<tr>
<?php
include ('overview/doll.php');
?>
	<td valign="top">     
							<input id="plDoll" type="hidden" name="doll" value="1" />
							<div id="char" style="background-image:url(8501/img/inv/doll.jpg)">
								<?php $id = $userID; echo addItemImagesToDoll($id); ?>
							</div>        
							<!-- Inventar -->
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
									</div>
								</div>
							</div>
							<div style="clear: both;"></div>        
						</td>
					</tr>
				</table>
				<script type="text/javascript" src="8501/js/dragdrop2.js"></script>
				<script type="text/javascript">
					var INIT_DHTML = true;
					var PICK_ITEM = false;
					SET_DHTML(CURSOR_MOVE, "p8_1_1" + NO_DRAG, "p2_1_1", "p3_1_1", "p4_1_1", "p5_1_1", "p6_1_1", "p7_1_1", "p9_1_1", "p10_1_1", "p11_1_1", "<?php echo $pInvN; ?>_1_1", "<?php echo $pInvN; ?>_1_2", "<?php echo $pInvN; ?>_1_3", "<?php echo $pInvN; ?>_1_4", "<?php echo $pInvN; ?>_1_5", "<?php echo $pInvN; ?>_2_1", "<?php echo $pInvN; ?>_2_2", "<?php echo $pInvN; ?>_2_3", "<?php echo $pInvN; ?>_2_4", "<?php echo $pInvN; ?>_2_5", "<?php echo $pInvN; ?>_3_1", "<?php echo $pInvN; ?>_3_2", "<?php echo $pInvN; ?>_3_3", "<?php echo $pInvN; ?>_3_4", "<?php echo $pInvN; ?>_3_5", "<?php echo $pInvN; ?>_4_1", "<?php echo $pInvN; ?>_4_2", "<?php echo $pInvN; ?>_4_3", "<?php echo $pInvN; ?>_4_4", "<?php echo $pInvN; ?>_4_5", "<?php echo $pInvN; ?>_5_1", "<?php echo $pInvN; ?>_5_2", "<?php echo $pInvN; ?>_5_3", "<?php echo $pInvN; ?>_5_4", "<?php echo $pInvN; ?>_5_5", "<?php echo $pInvN; ?>_6_1", "<?php echo $pInvN; ?>_6_2", "<?php echo $pInvN; ?>_6_3", "<?php echo $pInvN; ?>_6_4", "<?php echo $pInvN; ?>_6_5", "<?php echo $pInvN; ?>_7_1", "<?php echo $pInvN; ?>_7_2", "<?php echo $pInvN; ?>_7_3", "<?php echo $pInvN; ?>_7_4", "<?php echo $pInvN; ?>_7_5", "<?php echo $pInvN; ?>_8_1", "<?php echo $pInvN; ?>_8_2", "<?php echo $pInvN; ?>_8_3", "<?php echo $pInvN; ?>_8_4", "<?php echo $pInvN; ?>_8_5");var pickObj = new DDObj("");
					var aElts = [dd.elements.p8_1_1, dd.elements.p2_1_1, dd.elements.p3_1_1, dd.elements.p4_1_1, dd.elements.p6_1_1, dd.elements.p7_1_1, dd.elements.p5_1_1, dd.elements.p9_1_1, dd.elements.p10_1_1, dd.elements.p11_1_1, dd.elements.<?php echo $pInvN; ?>_1_1, dd.elements.<?php echo $pInvN; ?>_1_2, dd.elements.<?php echo $pInvN; ?>_1_3, dd.elements.<?php echo $pInvN; ?>_1_4, dd.elements.<?php echo $pInvN; ?>_1_5, dd.elements.<?php echo $pInvN; ?>_2_1, dd.elements.<?php echo $pInvN; ?>_2_2, dd.elements.<?php echo $pInvN; ?>_2_3, dd.elements.<?php echo $pInvN; ?>_2_4, dd.elements.<?php echo $pInvN; ?>_2_5, dd.elements.<?php echo $pInvN; ?>_3_1, dd.elements.<?php echo $pInvN; ?>_3_2, dd.elements.<?php echo $pInvN; ?>_3_3, dd.elements.<?php echo $pInvN; ?>_3_4, dd.elements.<?php echo $pInvN; ?>_3_5, dd.elements.<?php echo $pInvN; ?>_4_1, dd.elements.<?php echo $pInvN; ?>_4_2, dd.elements.<?php echo $pInvN; ?>_4_3, dd.elements.<?php echo $pInvN; ?>_4_4, dd.elements.<?php echo $pInvN; ?>_4_5, dd.elements.<?php echo $pInvN; ?>_5_1, dd.elements.<?php echo $pInvN; ?>_5_2, dd.elements.<?php echo $pInvN; ?>_5_3, dd.elements.<?php echo $pInvN; ?>_5_4, dd.elements.<?php echo $pInvN; ?>_5_5, dd.elements.<?php echo $pInvN; ?>_6_1, dd.elements.<?php echo $pInvN; ?>_6_2, dd.elements.<?php echo $pInvN; ?>_6_3, dd.elements.<?php echo $pInvN; ?>_6_4, dd.elements.<?php echo $pInvN; ?>_6_5, dd.elements.<?php echo $pInvN; ?>_7_1, dd.elements.<?php echo $pInvN; ?>_7_2, dd.elements.<?php echo $pInvN; ?>_7_3, dd.elements.<?php echo $pInvN; ?>_7_4, dd.elements.<?php echo $pInvN; ?>_7_5, dd.elements.<?php echo $pInvN; ?>_8_1, dd.elements.<?php echo $pInvN; ?>_8_2, dd.elements.<?php echo $pInvN; ?>_8_3, dd.elements.<?php echo $pInvN; ?>_8_4, dd.elements.<?php echo $pInvN; ?>_8_5];
					var maxcols = 8;
					var maxrows = 5;
					
					AddCharDiv("p8_1_1", 0, 0, 0, 0, 0, 64, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
					dd.elements.p8_1_1.contenttypeaccept = 64;dd.elements.p8_1_1.w = 168;
					dd.elements.p8_1_1.css.width = "168px";
					dd.elements.p8_1_1.h = 194;
					dd.elements.p8_1_1.css.height = "194px";
					
					<?php $id = $userID; echo addItemsToDoll($id); ?>

					<?php $id = $userID; echo addItemsToInventory($id); ?>
					changeShow();
				</script>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>