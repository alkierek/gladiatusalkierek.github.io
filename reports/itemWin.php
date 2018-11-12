<?php

if ($uinv == 1) {
	include_once("engine/functions.php");
	include_once("engine/functions4.php");
} elseif ($uinv == 2) {
	include_once("engine/functions3.php");
	include_once("engine/functions5.php");
}
$item = getItemByID($itemG);
if ($item != null)
{
	$item_description_html_layout = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'>";
	foreach ($item as $key => $value)
	{
// ITEM DESCRIPTION (VISIBLE TO USER)
		$item_description_html_layout .= itemDescriptionIdentifier($key, $value);
		$iimgw = $item['image'];
	}
	$item_description_html_layout .= "</table>'";
}


?>