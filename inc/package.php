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
<a class="awesome-tabs" href="index.php?mod=packages&inv=0&page=1&f=0&fq=-1&qry=&sh=d2babb56f62cc637004ceef5f77a655c">&#x2160;</a>
<a class="awesome-tabs current" href="#">&#x2161;</a>
<a class="awesome-tabs" href="index.php?mod=packages&inv=2&page=1&f=0&fq=-1&qry=&sh=d2babb56f62cc637004ceef5f77a655c">&#x2162;</a>
<a class="awesome-tabs" href="index.php?mod=packages&inv=3&page=1&f=0&fq=-1&qry=&sh=d2babb56f62cc637004ceef5f77a655c">&#x2163;</a>
<a class="awesome-tabs" href="index.php?mod=packages&inv=4&page=1&f=0&fq=-1&qry=&sh=d2babb56f62cc637004ceef5f77a655c">&#x2164;</a>
<a class="awesome-tabs" href="index.php?mod=packages&inv=5&page=1&f=0&fq=-1&qry=&sh=d2babb56f62cc637004ceef5f77a655c">&#x2165;</a>
<a class="awesome-tabs" href="index.php?mod=packages&inv=6&page=1&f=0&fq=-1&qry=&sh=d2babb56f62cc637004ceef5f77a655c">&#x2166;</a>
<a class="awesome-tabs" href="index.php?mod=packages&inv=7&page=1&f=0&fq=-1&qry=&sh=d2babb56f62cc637004ceef5f77a655c">&#x2167;</a>
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
<td width="50%" style="border:1px solid #b28b60">
<span style="float:left;margin-right:5px">
<a id="paketDel516017" href="javascript:blackoutDialogFlex('window.location.href = \'packages.php?deletePackage=516017\'', '', true, 'DeletePackage');">borrar</a>
</span>
<div id="paketWindow516017" style="position:relative;width:64px;height:96px;background-image:url(8501/img/shop/shop_zelle.gif);float:left">
<div id="paket_516017" style="position:absolute;width:64px;height:64px" onMouseOver="return escape(dd.elements.paket_516017.tooltip)"><img style="bottom:0px" src="8501/img/item/4_2.gif" /></div></div>
</td>

<?php

$p1 = mysql_query("SELECT * FROM forge WHERE forge_userID = '".$falt."' ");

if (!empty($p1)) {
	mysql_fetch_array($p1);
}else{
	echo "vacio";
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
SET_DHTML(CURSOR_MOVE, "paket_516017", "p512_1_1", "p512_1_2", "p512_1_3", "p512_1_4", "p512_1_5", "p512_2_1", "p512_2_2", "p512_2_3", "p512_2_4", "p512_2_5", "p512_3_1", "p512_3_2", "p512_3_3", "p512_3_4", "p512_3_5", "p512_4_1", "p512_4_2", "p512_4_3", "p512_4_4", "p512_4_5", "p512_5_1", "p512_5_2", "p512_5_3", "p512_5_4", "p512_5_5", "p512_6_1", "p512_6_2", "p512_6_3", "p512_6_4", "p512_6_5", "p512_7_1", "p512_7_2", "p512_7_3", "p512_7_4", "p512_7_5", "p512_8_1", "p512_8_2", "p512_8_3", "p512_8_4", "p512_8_5");
var pickObj = new DDObj("");
var aElts = [dd.elements.paket_516017, dd.elements.p512_1_1, dd.elements.p512_1_2, dd.elements.p512_1_3, dd.elements.p512_1_4, dd.elements.p512_1_5, dd.elements.p512_2_1, dd.elements.p512_2_2, dd.elements.p512_2_3, dd.elements.p512_2_4, dd.elements.p512_2_5, dd.elements.p512_3_1, dd.elements.p512_3_2, dd.elements.p512_3_3, dd.elements.p512_3_4, dd.elements.p512_3_5, dd.elements.p512_4_1, dd.elements.p512_4_2, dd.elements.p512_4_3, dd.elements.p512_4_4, dd.elements.p512_4_5, dd.elements.p512_5_1, dd.elements.p512_5_2, dd.elements.p512_5_3, dd.elements.p512_5_4, dd.elements.p512_5_5, dd.elements.p512_6_1, dd.elements.p512_6_2, dd.elements.p512_6_3, dd.elements.p512_6_4, dd.elements.p512_6_5, dd.elements.p512_7_1, dd.elements.p512_7_2, dd.elements.p512_7_3, dd.elements.p512_7_4, dd.elements.p512_7_5, dd.elements.p512_8_1, dd.elements.p512_8_2, dd.elements.p512_8_3, dd.elements.p512_8_4, dd.elements.p512_8_5];
var maxcols = 8;
var maxrows = 5;
AddCharDiv("paket_516017", 0, 0, 2, 16, 32, 0, 516017, 0, 0, 0, 0, 0, 0, 0, 0, "<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Gorra de hierro</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Armadura +7</td></tr><tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Nivel 1</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Valor 9 <img src=\'8501/img/res2d.gif\' alt=\'Oro\' title=\'Oro\' align=\'absmiddle\' border=\'0\' /></td></tr></table>", [ ]);
<?php $id = $userID; echo addItemsToPackages($id); ?>
<?php $id = $userID; echo addItemsToInventory($id); ?>
changeShow();</script>
