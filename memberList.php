
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

<td><a href="guild.php<?php if (isset($_GET['g'])) { ?>?g=<?php echo $_GET['g']; } else { ?> <?php } ?>" class="awesome-tabs">Alianza<div class="navBG"></div></a></td>
<?php
if ($guser == 0) {
    
} elseif ($guser == 1) {
    ?>
    <?php if (isset($_GET['g'])) { ?>
<td><a href="forumGladiatorius.php?g=<?php echo $_GET['g']; ?>" class="awesome-tabs current">Foro de Gladiadores</a></td>    	
    <?php } else { ?>
<td><a href="forumGladiatorius.php" class="awesome-tabs current">Foro de Gladiadores</a></td>
<td><a href="admin.php" class="awesome-tabs">Administracion<div class="navBG"></div></a></td>
<td><a href="buildings.php" class="awesome-tabs">Edificio<div class="navBG"></div></a></td>
    <?php
	}
}
?>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">
<?php
if ($guser == 0) {
	$gid = 0;
} else if ($guser == 1) {
	$gid = $guserID;
}
if (isset($_GET['g'])) {
	$gid = $_GET['g'];
}

$datos1 = mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$gid."' ");
if (empty($datos1)) {
	# code...
} else {
	$datos2 = mysql_fetch_array($datos1);
	$gname = $datos2['gd_name'];
	$gtag = $datos2['gd_tag'];
}

?>

<div id="mainbox">
<div class="title_box">
<div class="title_inner">
Lista de miembros Alianza <?php echo $gname; ?> [<?php echo $gtag; ?>]</div>
</div>
<div class="title2_box">
<div class="title2_inner">
<table width="100%">
<tr>
<td><a href="memberList.php?oder=s">Jugador</a></td>
<td><a href="memberList.php?oder=r">Rango</a></td>
<td align="right"><a href="memberList.php?oder=l" >Nivel</a></td>
<td align="right"><a href="memberList.php?oder=p">Honor</a></td>
</tr>
<!-- -->
<?php
$miembros1 = mysql_query("SELECT * FROM guilds_members WHERE gmb_guildID = '".$gid."' ORDER BY gmb_id ASC ");
if (empty($miembros1)) {
	# code...
} else {
	$miembros2 = mysql_num_rows($miembros1);
	$contando = 1;
	while ($contando <= $miembros2) {
		$contando++;
		$miembros3 = mysql_fetch_array($miembros1);
		$muid = $miembros3['gmb_userID'];
		$murank = $miembros3['gmb_rank'];
		if ($murank == 99) {
			$murankn = 'Fundador';
		} else if ($murank == 98) {
			$murankn = 'Admin';
		} else if ($murank == 1) {
			$murankn = 'Miembro';
		} else {
			$rank1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_ranks WHERE gr_id = '".$murank."' "));
			$murankn = $rank1['gr_name'];
		}
		$miembro0 = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE user_id = '".$muid."' "));
		$muname1 = $miembro0['user_accID'];
		$miembroAcc = mysql_fetch_array(mysql_query("SELECT * FROM accounts WHERE acc_id = '".$muname1."' "));
		$muname = $miembroAcc['acc_name'];
		$mulevel = $miembro0['user_level'];
		$muhonor = $miembro0['user_honor'];
?>
<tr>
<td><a href="player.php?p=21759"><?php echo $muname; ?></a></td>
<td><?php echo $murankn; ?></td>
<td><?php echo $mulevel; ?></td>
<td align="right"><?php echo $muhonor; ?></td>
</tr>

<?php
	}
}
?>

<!-- -->
<tr><th colspan="5"></th></tr>
<tr><th colspan="5"></th></th>

</tr>
</table>
</div>
</div>
</div>


<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>