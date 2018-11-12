
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]><html class="ie7"> <![endif]-->
<!--[if IE 8 ]><html class="ie8"> <![endif]-->
<!--[if IE 9 ]><html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<?php
include ('db/root.php');
include ('index/head.php');
?>
<body id="startPage">
<script type="text/javascript" src="8501/js/zorn2.js"></script>
<script type="text/javascript">
// Return $ back to mootools
$.noConflict();
var pathToSWF = '8501/swf/';
</script>
<?php include ('index/netbar.php'); ?>
<div id="wrapper_start"><div id="container_start">

<div id="flash_header_animation"><div id="header_animation"></div></div>
<div id="flash_flagpole_left"><div id="flagpole_left"></div></div>
<div id="flash_flags_left"><div id="flags_left"></div></div>
<div id="flash_torch_left"><div id="torch_left"></div></div>
<div id="flash_flagpole_right"><div id="flagpole_right"></div></div>
<div id="flash_flags_right"><div id="flags_right"></div></div>
<div id="flash_torch_right"><div id="torch_right"></div></div>
<div id="banner_right" class="pngfix" style="top:330px;"></div>

<?php include ('ads/1.php'); ?>
<div id="header_start">
<h2 id="logoGladiatus"></h2>
<?php include ('inc/divLogin.php'); ?>
<ul id="mainnav"><li><table style="top: -23px; position: relative; height: 60px;"><tr style="vertical-align: bottom;"><td><a href="index.php" class="awesome-tabs current">Inicio</a></td><td><a href="media.php" class="awesome-tabs">Media<div class="navBG"></div></a></td><td><a href="highscore.php" class="awesome-tabs">Clasificación<div class="navBG"></div></a></td><td><a href="" target="_blank"  class="awesome-tabs">Foro<div class="navBG"></div></a></td></tr></table></li></ul>
</div>

<div id="main">
<div id="main_inner" class="pngfix">
<!-- -->
<?php include ('inc/divRegister.php'); ?>
<!-- -->
<div id="content">
<!-- -->
<table width="100%">

<tr>
<td valign="top"><div class="contentItem" style="width: 332px;margin-bottom:0px;"><h3 style="width: 308px;">Gladiatus – Hero of Rome</h3><div class="contentItem_content" style="width: 300px;"><?php echo $index19; ?></div></div></td>
<td rowspan="2" valign="top"><div class="contentItem" style="width: 192px;height:100%;"><h3 style="width: 168px;"><?php echo $index20; ?></h3><div class="contentItem_content" style="width: 160px;">
<a href="assets/img/screenshots/de/screenshot1.jpg" class="ceraBox"><img style="border: 1px solid black;" src="assets/img/screenshots/de/screenshot1_thumb.jpg" width="163px" alt="" /></a><br /><br />
<a href="assets/img/screenshots/de/screenshot2.jpg" class="ceraBox"><img style="border: 1px solid black;" src="assets/img/screenshots/de/screenshot2_thumb.jpg" width="163px" alt="" /></a><br /><br />
<a href="assets/img/screenshots/de/screenshot3.jpg" class="ceraBox"><img style="border: 1px solid black;" src="assets/img/screenshots/de/screenshot3_thumb.jpg" width="163px" alt="" /></a><br /><br />
</div></div></td>
</tr>

<tr>
<td valign="bottom"><div class="contentItem" style="width: 332px;"><h3 style="width: 308px;"><?php echo $index21; ?></h3><div class="contentItem_content" style="width: 300px;"><ul class="list_iconized">
<li><?php echo $index22; ?></li>
<li><?php echo $index23; ?></li>
<li><?php echo $index24; ?></li>
<li><?php echo $index25; ?></li>
</ul></div></div></td>
</tr>

</table>
<!-- -->
<?php include ('index/footer.php'); ?>
</html>