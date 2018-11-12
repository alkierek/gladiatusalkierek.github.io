
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]><html class="ie7"> <![endif]-->
<!--[if IE 8 ]><html class="ie8"> <![endif]-->
<!--[if IE 9 ]><html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<?php
include ('db/root.php');
include ('inc/head.php');
include ('db/user.php');
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

<td><a href="highscore.php" class="awesome-tabs current">Jugador</a></td>
<td><a href="" class="awesome-tabs">Calabozos<div class="navBG"></div></a></td>
<td><a href="" class="awesome-tabs">Alianzas<div class="navBG"></div></a></td>
<td><a href="suche.php" class="awesome-tabs">Buscar<div class="navBG"></div></a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<div style="position:relative;text-align:center;padding:10px">
<h1>Estadísticas de Jugadores</h1>
<!--(<a href="index.php?mod=highscore&t=5&amp;d=1&amp;a=7&sh=aa2ab8ad6c0c7267b0e8de5a7635a2e7">Jugador - Clasificación - 7 días</a>) -->
    (<a href="highscore.php?t=5">Jugador - Clasificación - 7 días</a>)
</div>

<div id="highscore_range">
<form action="highscore.php"  method="POST" accept-charset="utf-8">    
<select class="input" name="a" size="1" onchange="submit()" >
    <option value="1">1-50    <option value="2">51-100    <option value="3">101-150    <option value="4">151-200    <option value="5">201-250    <option value="6">251-300    <option value="7" selected="selected">301-350    <option value="8">351-400    <option value="9">401-450    <option value="10">451-500    <option value="11">501-550    <option value="12">551-600    <option value="13">601-650    <option value="14">651-700    <option value="15">701-750    <option value="16">751-800    <option value="17">801-850    <option value="18">851-900    <option value="19">901-950    <option value="20">951-1000    </select>
<!--</form>-->
</div>

<div class="title_box" style="margin:10px;">
<div class="title_inner"  style="padding: 0px;">
<div id="highscore_table">
    <table cellpadding="4" cellspacing="0">
    <tr>
    <th>Rango</th>
    <th>Nombre</th>
    <th><a href="highscore.php?a=7&amp;d=1&amp;o=l">Nivel</a></th>
<th><a href="highscore.php?a=7&amp;d=1&amp;o=b">Honor</a></th>
<th><a href="highscore.php?a=7&amp;d=1&amp;o=r">Fama</a></th>
<th><a href="highscore.php?a=7&amp;d=1&amp;o=s">Victorias</a></th>
<th><a href="highscore.php?a=7&amp;d=1&amp;o=ach">Victorias</a></th>
<th><a href="highscore.php?a=7&amp;d=1&amp;o=g">Oro</a></th>
    </tr>
    
    
<?php
$csf1 = mysql_query("SELECT * FROM users ORDER BY user_honor DESC LIMIT 50 ");
$csf2 = mysql_num_rows($csf1);
$c = 1;
while ($c <= $csf2) {
	$csf3 = mysql_fetch_array($csf1);
	$pos = $c;
	$level = $csf3['user_level'];
	$honor = $csf3['user_honor'];
	$honor1 = number_format($honor, 0, ",", ".");
	$fame = $csf3['user_fame'];
	$fame1 = number_format($fame, 0, ",", ".");
	$s = 0;
	$ach = 0;
	$g = 0;
	$uid = $csf3['user_id'];
	$uacid = $csf3['user_accID'];
	$uname1 = mysql_fetch_array(mysql_query("SELECT * FROM accounts WHERE acc_id = '".$uacid."' "));
	$uname = $uname1['acc_name'];
	$ch = '';
	$class = 0;
	if ($uid == $userID) {
		$class = 1;
	}
	if ($class == 1) {
		$ch = 'class="highlight"';
	}
?>
    <tr class="alt">
    <th <?php echo $ch; ?>><?php echo $c; ?></th>
    <td <?php echo $ch; ?>><div  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Ningún título seleccionado</td></tr></table>')" ><a href="player.php?p=<?php echo $uid; ?>"><?php if ($userID == $uid){ ?><span style="color:blue;font-weight:bold;"><?php } ?><?php echo $uname; ?><?php if ($userID == $uid){ ?></span><?php } ?></a></div></td>
    
    <td <?php echo $ch; ?>><?php echo $level; ?></td>
    <td <?php echo $ch; ?>><?php echo $honor1; ?></td>
    <td <?php echo $ch; ?>><?php echo $fame1; ?></td>
    <td <?php echo $ch; ?>>0</td>
    <td <?php echo $ch; ?>><a href="player.php?p=<?php echo $uid; ?>">0</a></td>
    <td <?php echo $ch; ?>>0</td>
</tr>
<?php
$c++;
}
?>
    </table>
    </div>
    </div>
</div>



<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>