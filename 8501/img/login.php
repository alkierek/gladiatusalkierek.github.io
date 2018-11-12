
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
var pathToSWF = 'http://ar.gladiatus.gameforge.com/game/8501/swf/';
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
<!-- -->
<div id="adHolder" class="banner1" style="top:333px;"></div>
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
<table width="100%"><tr><td valign="top">
<!-- Conectandos -->
<!-- 0 -->
<script type="text/javascript" src="../8501/js/jquery-1.11.2.min.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
setTimeout(function() {
$(".conectando0").fadeOut(1000);
},1000);
});
</script>
<!-- 2 -->
<!--<script type="text/javascript" src="../jquery.js"></script> Remove duplicated by charles-->
<script type="text/javascript">
$(document).ready(function() {   
setTimeout(function() {
$(".conectando2").fadeIn(500);
},1000);
});
</script>
<!-- 3 -->
<!--<script type="text/javascript" src="../jquery.js"></script> Remove duplicated by charles-->
<script type="text/javascript">
$(document).ready(function() {   
setTimeout(function() {
$(".conectando3").fadeIn(1000);
},1000);
});
</script>
<!-- 4 -->
<!--<script type="text/javascript" src="../jquery.js"></script> Remove duplicated by charles-->
<script type="text/javascript">
$(document).ready(function() {   
setTimeout(function() {
$(".conectando4").fadeIn(1500);
},1500);
});
</script>
<!-- 5 -->
<!--<script type="text/javascript" src="../jquery.js"></script> Remove duplicated by charles-->
<script type="text/javascript">
$(document).ready(function() {   
setTimeout(function() {
$(".conectando5").fadeIn(2000);
},2000);
});
</script>
<!-- 6 -->
<!--<script type="text/javascript" src="../jquery.js"></script> Remove duplicated by charles-->
<script type="text/javascript">
$(document).ready(function() {   
setTimeout(function() {
$(".conectando6").fadeIn(3000);
},3000);
});
</script>

<div class="contentItem_content" style="width: 300px;">
<?php include ('inc/prelogin.php'); ?>
<div class="conectando1">Conectando...</div>
<div class="conectando2" style="display:none;"><?php echo $serverTEXTO; ?></div>
<?php if ($serverON == 1) { ?>
<div class="conectando3" style="display:none;"><?php echo $basedatosTEXTO; ?></div>
<?php } if ($basedatosON == 1) { ?>
<div class="conectando4" style="display:none;">Conexion completada...</div>
<?php } if ($register1 == 1) { ?>
<div class="conectando5" style="display:none;"><?php echo $registroTEXTO; ?></div>
<?php } elseif ($login1 == 1) { ?>
<div class="conectando5" style="display:none;"><?php echo $loginTEXTO; ?></div>
<?php
}
if($conectado == 1){
?>
<div class="conectando6" style="display:none;">Redireccionando... Espere...</div>
<script LANGUAGE="JavaScript">
function redireccionar() 
{
location.href="overview.php"
}
setTimeout ("redireccionar()", 4500);//cada mil es 1s
</script>
<?php
}
?>
</div>
</td></tr></table>
<?php include ("index/footer.php"); ?>
</html>