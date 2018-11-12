<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>
<div id="blackoutDialogsoulboundConfirm" class="cancel_confirm">
<div class="blackoutDialog_header pngfix">
<div style="font-size:large;text-align:center;" id="header_soulboundConfirm">Atención</div>
</div>
<div class="blackoutDialog_body pngfix">
<div class="blackoutDialog_icon">
<img src="8501/img/ui/blackoutDialog/icon_question.jpg" align="left" vspace="0" hspace="20" />
    </div>
<div style="padding:5px;min-height:60px;" id="dialogTxtsoulboundConfirm">¡Este objeto quedara vinculado al alma tan pronto como te lo pongas!</div>
<table cellspacing="0" cellpadding="0" style="border-spacing:0px;width:80%;margin-top:20px;margin-left: 50px;">
<tr>
<td style="width:50%">
<div class="al" style="padding:5px">
<input type="submit" class="button1" value="Ponelo en un objeto" onclick="doDragDrop()" id="linksoulboundConfirm" />
</div>
</td>
<td style="width:50%">
<div class="ar" style="padding:5px">
<input type="submit" class="button1" value="Cancelar" onclick="cancelDragDrop()" />
</div>
</td>
</tr>
</table>
</div>
        <div class="blackoutDialog_footer pngfix"></div>
</div>



<input type="hidden" id="doll" value="1"/>

<table width="100%" cellpadding="0" cellspacing="0" style="margin-top:5px;">
<tr>
<td valign="top">
<div style="background-image:url(8501/img/shop/shop_avatar_0_1.png); width:217px; height:212px;" class="pngfix"></div>
<div class="background_trader pngfix">
<div id="shop_nav">
<a href="" class="shop_nav_element"><img src="8501/img/shop/shop_reiter1.gif" border="0" /></a>
<a href=""><img src="8501/img/shop/shop_reiter2.gif" border="0" class="shop_nav_element" /></a>
<div class="shop_nav_element">
    <div class="shop_nav_dyn_left shop_nav_dyn_left_active"></div>
    <div class="shop_nav_dyn_repeat shop_nav_dyn_repeat_active">vender</div>
    <div class="shop_nav_dyn_right shop_nav_dyn_right_active"></div>
</div>
</div><div id="shop" style="width:192px;height:256px;">
<!-- SHOP -->  
<?php $id = $userID; echo addItemImagesToSShop1($id); ?>
</div>
</div>
<div style="text-align: center; margin-top: 5px;">
    <p>
        <span class="new_inventory_timer"><center>Borra la tienda y genera una vacia:</center></span>
    </p>
<form action=""  method="POST" accept-charset="utf-8"><span style="clear:both;width:200px;valign:center">
<input type="submit" class="awesome-button" value="Empty" name="bestechen">&nbsp;
        </span>
    </form>
</div>
</td>
        <td valign="top" style="padding-top:20px;">
<input id="plDoll" type="hidden" name="doll" value="1"/><div id="char" style="background-image:url(8501/img/inv/doll.jpg)" />
  <?php $id = $userID; echo addItemImagesToDoll($id); ?>
</div>
<!-- Inventar -->
<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>
<script type="text/javascript" src="8501/js/blackoutdialog.js"></script>
<div id="blackoutDialogbuyBagConfirmation" class="cancel_confirm">
<div class="blackoutDialog_header pngfix">
<div style="font-size:large;text-align:center;" id="header_buyBagConfirmation">Bolsa mágica</div>
</div>
<div class="blackoutDialog_body pngfix">
<div class="blackoutDialog_icon">
<img src="8501/img/premium/token/15.jpg" align="left" vspace="0" hspace="20" style="width: 65px;" />
    </div>
<div style="padding:5px;min-height:60px;" id="dialogTxtbuyBagConfirmation">Al activarla se crea una bolsa adicional en el inventario o, si ya existe, se prorroga una semana.</div>
<table cellspacing="0" cellpadding="0" style="border-spacing:0px;width:80%;margin-top:20px;margin-left: 50px;">
<tr>
<td style="width:50%">
<div class="al" style="padding:5px">
<input type="submit" class="button1" value="Comprar" id="linkbuyBagConfirmation" />
</div>
</td>
<td style="width:50%">
<div class="ar" style="padding:5px">
<input type="submit" class="button1" value="No" onclick="blackoutDialog(false)" />
</div>
</td>
</tr>
</table>
</div>
        <div class="blackoutDialog_footer pngfix"></div>
</div>
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
        <div class="bag_buy_extend" style="width: 256px;">
    
<span class="">
    </span>
        </div>
    </div>
</div>
<div style="clear: both;"></div>
        </td>
    </tr>
</table>
<script type="text/javascript" src="8501/js/inventory2.js"></script>
        <script type="text/javascript" src="8501/js/dragdrop2.js"></script>
<script type="text/javascript">

var INIT_DHTML = true;
var PICK_ITEM = false;
SET_DHTML(CURSOR_MOVE, "p274_1_1", "p274_1_2", "p274_1_3", "p274_1_4", "p274_1_5", "p274_1_6", "p274_1_7", "p274_1_8", "p274_2_1", "p274_2_2", "p274_2_3", "p274_2_4", "p274_2_5", "p274_2_6", "p274_2_7", "p274_2_8", "p274_3_1", "p274_3_2", "p274_3_3", "p274_3_4", "p274_3_5", "p274_3_6", "p274_3_7", "p274_3_8", "p274_4_1", "p274_4_2", "p274_4_3", "p274_4_4", "p274_4_5", "p274_4_6", "p274_4_7", "p274_4_8", "p274_5_1", "p274_5_2", "p274_5_3", "p274_5_4", "p274_5_5", "p274_5_6", "p274_5_7", "p274_5_8", "p274_6_1", "p274_6_2", "p274_6_3", "p274_6_4", "p274_6_5", "p274_6_6", "p274_6_7", "p274_6_8", "p2_1_1", "p3_1_1", "p4_1_1", "p6_1_1", "p7_1_1", "p5_1_1", "p9_1_1", "p10_1_1", "p11_1_1", "<?php echo $pInvN; ?>_1_1", "<?php echo $pInvN; ?>_1_2", "<?php echo $pInvN; ?>_1_3", "<?php echo $pInvN; ?>_1_4", "<?php echo $pInvN; ?>_1_5", "<?php echo $pInvN; ?>_2_1", "<?php echo $pInvN; ?>_2_2", "<?php echo $pInvN; ?>_2_3", "<?php echo $pInvN; ?>_2_4", "<?php echo $pInvN; ?>_2_5", "<?php echo $pInvN; ?>_3_1", "<?php echo $pInvN; ?>_3_2", "<?php echo $pInvN; ?>_3_3", "<?php echo $pInvN; ?>_3_4", "<?php echo $pInvN; ?>_3_5", "<?php echo $pInvN; ?>_4_1", "<?php echo $pInvN; ?>_4_2", "<?php echo $pInvN; ?>_4_3", "<?php echo $pInvN; ?>_4_4", "<?php echo $pInvN; ?>_4_5", "<?php echo $pInvN; ?>_5_1", "<?php echo $pInvN; ?>_5_2", "<?php echo $pInvN; ?>_5_3", "<?php echo $pInvN; ?>_5_4", "<?php echo $pInvN; ?>_5_5", "<?php echo $pInvN; ?>_6_1", "<?php echo $pInvN; ?>_6_2", "<?php echo $pInvN; ?>_6_3", "<?php echo $pInvN; ?>_6_4", "<?php echo $pInvN; ?>_6_5", "<?php echo $pInvN; ?>_7_1", "<?php echo $pInvN; ?>_7_2", "<?php echo $pInvN; ?>_7_3", "<?php echo $pInvN; ?>_7_4", "<?php echo $pInvN; ?>_7_5", "<?php echo $pInvN; ?>_8_1", "<?php echo $pInvN; ?>_8_2", "<?php echo $pInvN; ?>_8_3", "<?php echo $pInvN; ?>_8_4", "<?php echo $pInvN; ?>_8_5");
var pickObj = new DDObj("");
var aElts = [dd.elements.p274_1_1, dd.elements.p274_1_2, dd.elements.p274_1_3, dd.elements.p274_1_4, dd.elements.p274_1_5, dd.elements.p274_1_6, dd.elements.p274_1_7, dd.elements.p274_1_8, dd.elements.p274_2_1, dd.elements.p274_2_2, dd.elements.p274_2_3, dd.elements.p274_2_4, dd.elements.p274_2_5, dd.elements.p274_2_6, dd.elements.p274_2_7, dd.elements.p274_2_8, dd.elements.p274_3_1, dd.elements.p274_3_2, dd.elements.p274_3_3, dd.elements.p274_3_4, dd.elements.p274_3_5, dd.elements.p274_3_6, dd.elements.p274_3_7, dd.elements.p274_3_8, dd.elements.p274_4_1, dd.elements.p274_4_2, dd.elements.p274_4_3, dd.elements.p274_4_4, dd.elements.p274_4_5, dd.elements.p274_4_6, dd.elements.p274_4_7, dd.elements.p274_4_8, dd.elements.p274_5_1, dd.elements.p274_5_2, dd.elements.p274_5_3, dd.elements.p274_5_4, dd.elements.p274_5_5, dd.elements.p274_5_6, dd.elements.p274_5_7, dd.elements.p274_5_8, dd.elements.p274_6_1, dd.elements.p274_6_2, dd.elements.p274_6_3, dd.elements.p274_6_4, dd.elements.p274_6_5, dd.elements.p274_6_6, dd.elements.p274_6_7, dd.elements.p274_6_8, dd.elements.p2_1_1, dd.elements.p3_1_1, dd.elements.p4_1_1, dd.elements.p6_1_1, dd.elements.p7_1_1, dd.elements.p5_1_1, dd.elements.p9_1_1, dd.elements.p10_1_1, dd.elements.p11_1_1, dd.elements.<?php echo $pInvN; ?>_1_1, dd.elements.<?php echo $pInvN; ?>_1_2, dd.elements.<?php echo $pInvN; ?>_1_3, dd.elements.<?php echo $pInvN; ?>_1_4, dd.elements.<?php echo $pInvN; ?>_1_5, dd.elements.<?php echo $pInvN; ?>_2_1, dd.elements.<?php echo $pInvN; ?>_2_2, dd.elements.<?php echo $pInvN; ?>_2_3, dd.elements.<?php echo $pInvN; ?>_2_4, dd.elements.<?php echo $pInvN; ?>_2_5, dd.elements.<?php echo $pInvN; ?>_3_1, dd.elements.<?php echo $pInvN; ?>_3_2, dd.elements.<?php echo $pInvN; ?>_3_3, dd.elements.<?php echo $pInvN; ?>_3_4, dd.elements.<?php echo $pInvN; ?>_3_5, dd.elements.<?php echo $pInvN; ?>_4_1, dd.elements.<?php echo $pInvN; ?>_4_2, dd.elements.<?php echo $pInvN; ?>_4_3, dd.elements.<?php echo $pInvN; ?>_4_4, dd.elements.<?php echo $pInvN; ?>_4_5, dd.elements.<?php echo $pInvN; ?>_5_1, dd.elements.<?php echo $pInvN; ?>_5_2, dd.elements.<?php echo $pInvN; ?>_5_3, dd.elements.<?php echo $pInvN; ?>_5_4, dd.elements.<?php echo $pInvN; ?>_5_5, dd.elements.<?php echo $pInvN; ?>_6_1, dd.elements.<?php echo $pInvN; ?>_6_2, dd.elements.<?php echo $pInvN; ?>_6_3, dd.elements.<?php echo $pInvN; ?>_6_4, dd.elements.<?php echo $pInvN; ?>_6_5, dd.elements.<?php echo $pInvN; ?>_7_1, dd.elements.<?php echo $pInvN; ?>_7_2, dd.elements.<?php echo $pInvN; ?>_7_3, dd.elements.<?php echo $pInvN; ?>_7_4, dd.elements.<?php echo $pInvN; ?>_7_5, dd.elements.<?php echo $pInvN; ?>_8_1, dd.elements.<?php echo $pInvN; ?>_8_2, dd.elements.<?php echo $pInvN; ?>_8_3, dd.elements.<?php echo $pInvN; ?>_8_4, dd.elements.<?php echo $pInvN; ?>_8_5];
var maxcols = 8;
var maxrows = 5;
InvAddCharDiv(513,8,5);
InvAddShopDiv(274,6,8,63359);
<?php $id = $userID; echo addItemsToDoll($id); ?>
<?php $id = $userID; echo addItemsToSShop1($id); ?>
<?php $id = $userID; echo addItemsToInventory($id); ?>
var aktShopPage = 274;
var res1 = 409
var res2 = 0
checkBuy();
changeShow();
</script>