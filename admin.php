
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

<td><a href="guild.php" class="awesome-tabs">Alianza<div class="navBG"></div></a></td>
<td><a href="forumGladiatorius.php" class="awesome-tabs">Foro de Gladiadores<div class="navBG"></div></a></td>
<td><a href="admin.php" class="awesome-tabs current">Administracion</a></td>
<td><a href="buildings.php" class="awesome-tabs">Edificio<div class="navBG"></div></a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<?php
if ($guser != 1 || $guserRANK != 98 && $guserRANK != 99) {
	echo "<body><script type='text/javascript'>window.location='guild.php';</script></body>";
} else {
	$gadmin1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_data WHERE gd_id = '".$guserID."' "));
	$gdesc = $gadmin1['gd_desc'];
	$gfc = $gadmin1['gd_color'];
	$gfs = $gadmin1['gd_flag'];
	$glink = $gadmin1['gd_link'];
	if ($glink == NULL) {
		$glink = 'http://';
	}
	$gname = $gadmin1['gd_name'];
	$gtag = $gadmin1['gd_tag'];
}
$descACEP = 0;
$descLOWL = 0;
if (isset($_POST['save'])) {
	$descNEW = $_POST['description'];
   	if ($guserRANK == 98 || $guserRANK == 99) {
   		mysql_query("UPDATE guilds_data SET gd_desc = '".$descNEW."' WHERE gd_id = '".$guserID."' ");
   		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminDescription&submod=suses';</script></body>";
   	} else {
   		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminDescription&submod=lowl';</script></body>";
   	}
}

if (isset($_GET['submod'])) {
	$_GET['submod'] = $_GET['submod'];
	if ($_GET['submod'] == 'suses') {
		$descACEP = 1;
	} else if ($_GET['submod'] == 'lowl') {
		$descLOWL = 1;
	}
}

if (isset($_POST['design'])) {
	if ($guserRANK == 98 || $guserRANK == 99) {
		$dt = $_POST['design'];
		if ($dt == 1) {
			$color = $_POST['color'];
			mysql_query("UPDATE guilds_data SET gd_color = '".$color."' WHERE gd_id = '".$guserID."' ");
			echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminLogo&design=1';</script></body>";
		} else if ($dt == 2) {
			$flag = $_POST['flag'];
			mysql_query("UPDATE guilds_data SET gd_flag = '".$flag."' WHERE gd_id = '".$guserID."' ");
			echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminLogo&design=2';</script></body>";
		}
	}
}

if (isset($_POST['newpage'])) {
	$linkNEW = $_POST['newpage'];
	if ($guserRANK == 98 || $guserRANK == 99) {
   		mysql_query("UPDATE guilds_data SET gd_link = '".$linkNEW."' ");
   		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminHomepage&submod=suses';</script></body>";
   	} else {
   		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminHomepage&submod=lowl';</script></body>";
   	}
}

if (isset($_POST['adminNameEdit'])) {
	$nameNEW = $_POST['newname'];
	$tagNEW = $_POST['newtag'];
	if ($guserRANK == 98 || $guserRANK == 99) {
		mysql_query("UPDATE guilds_data SET gd_name = '".$nameNEW."' ");
		mysql_query("UPDATE guilds_data SET gd_tag = '".$tagNEW."' ");
		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminName&submod=suses';</script></body>";
   	} else {
   		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminName&submod=lowl';</script></body>";
   	}
}

$gname = $gadmin1['gd_name'];
$pem = 0;
$rpm1 = mysql_query("SELECT * FROM guilds_ranks WHERE gr_guildID = '".$guserID."' AND gr_pMessages2 = 1 ");
$rpm2 = mysql_num_rows($rpm1);
if ($rpm2 != 0) {
	$rpm3 = 1;
	while ($rpm3 <= $rpm2) {
		$rpm4 = mysql_fetch_array($rpm1);
		$rpm5 = $rpm4['gr_id'];
		if ($guserRANK == $rpm5) {
			$pem = 1;
		}
		$rpm3++;
	}
}

if (isset($_POST['sendmails'])) {
	if ($guserRANK == 1) {
		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminMail&submod=lowl';</script></body>";
	} elseif ($guserRANK == 99 || $guserRANK == 98 || $pem == 1) {
		$text = $_POST['mailText'];
		$envio1 = mysql_fetch_array(mysql_query("SELECT * FROM guilds_members WHERE gmb_rank = 99 "));
		$envu = $envio1['gmb_userID'];
		mysql_query("INSERT INTO messages SET msg_userID = '".$envu."', msg_type = 3, msg_userNAME = '".$userNAME."', msg_text = '".$text."' ");
		mysql_query("UPDATE users SET user_msgsN = user_msgsN + 1 WHERE user_id = '".$envu."' ");
		$envio2 = mysql_query("SELECT * FROM guilds_members WHERE gmb_rank = 98 ");
		$envio3 = mysql_num_rows($envio2);
		if ($envio3 != 0) {
			$envio4 = 1;
			while ($envio4 <= $envio3) {
				$envio5 = mysql_fetch_array($envio2);
				$envu = $envio5['gmb_userID'];
				mysql_query("INSERT INTO messages SET msg_userID = '".$envu."', msg_type = 3, msg_userNAME = '".$userNAME."', msg_text = '".$text."' ");
				mysql_query("UPDATE users SET user_msgsN = user_msgsN + 1 WHERE user_id = '".$envu."' ");
				$envio4++;
			}
		}
		$envio6 = mysql_query("SELECT * FROM guilds_ranks WHERE gr_guildID = '".$guserID."' AND gr_pMessages1 = 1 ");
		$envio7 = mysql_num_rows($envio6);
		if ($envio7 != 0) {
			$envio8 = 1;
			while ($envio8 <= $envio7) {
				$envio9 = mysql_fetch_array($envio6);
				$envr = $envio9['gr_id'];
				$envio10 = mysql_query("SELECT * FROM guilds_members WHERE gmb_rank = '".$envr."' AND gmb_guildID = '".$guserID."' ");
				$envio11 = mysql_num_rows($envio10);
				if ($envio11 != 0) {
					$envio12 = 1;
					while ($envio12 <= $envio11) {
						$envio13 = mysql_fetch_array($envio10);
						$envu = $envio13['gmb_userID'];
						mysql_query("INSERT INTO messages SET msg_userID = '".$envu."', msg_type = 3, msg_userNAME = '".$userNAME."', msg_text = '".$text."' ");
						mysql_query("UPDATE users SET user_msgsN = user_msgsN + 1 WHERE user_id = '".$envu."' ");
						$envio12++;
					}
				}
				$envio8++;
			}
		}
		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminMail&submod=suses';</script></body>";	
	}
}

if (isset($_GET['saveRights'])) {
	$rankEDIT1 = $_GET['saveRights'];
	$rankEDIT2 = explode("-", $rankEDIT1);
	$rankID = $rankEDIT2[0];
	$rankP = $rankEDIT2[1];
	$rankA = $rankEDIT2[2];
	if ($guserRANK == 98 || $guserRANK == 99) {
		if ($rankP == 1) {
			mysql_query("UPDATE guilds_ranks SET gr_pMessages1 = '".$rankA."' WHERE gr_id = '".$rankID."' ");
		} elseif ($rankP == 2) {
			mysql_query("UPDATE guilds_ranks SET gr_pMessages2 = '".$rankA."' WHERE gr_id = '".$rankID."' ");
		} elseif ($rankP == 3) {
			mysql_query("UPDATE guilds_ranks SET gr_pAccept = '".$rankA."' WHERE gr_id = '".$rankID."' ");
		} elseif ($rankP == 4) {
			mysql_query("UPDATE guilds_ranks SET gr_pBuilds = '".$rankA."' WHERE gr_id = '".$rankID."' ");
		}
		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminMembers&submod=suses';</script></body>";
	} else {
		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminMembers&submod=lowl';</script></body>";
	}
}

if (isset($_GET['deleteRank'])) {
	$rankID = $_GET['deleteRank'];
	mysql_query("DELETE FROM guilds_ranks WHERE gr_id = '".$rankID."' ");
	mysql_query("UPDATE guilds_members SET gmb_rank = 1 WHERE gmb_rank = '".$rankID."' ");
	echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminMembers&submod=suses';</script></body>";
}

if (isset($_POST['newRank'])) {
	$rankNAME = $_POST['newRankName'];
	$maxRanks1 = mysql_num_rows(mysql_query("SELECT * FROM guilds_ranks WHERE gr_guildID = '".$guserID."' "));
	if ($maxRanks1 >= 10) {
		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminMembers&submod=cant';</script></body>";
	} else {
		if ($guserRANK == 98 || $guserRANK == 99) {
			mysql_query("INSERT INTO guilds_ranks SET gr_guildID = '".$guserID."', gr_name = '".$rankNAME."' ");
			echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminMembers&submod=suses';</script></body>";
		} else {
			echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminMembers&submod=lowl';</script></body>";
		}
	}
}

if (isset($_GET['saveMembersRank'])) {
	$newRankM1 = explode("-", $_GET['saveMembersRank']);
	$nruserID = $newRankM1[0];
	$guildID = $newRankM1[1];
	$rankID = $newRankM1[2];
	if ($rankID != 99 || $rankID != 98) {
		if (($guserRANK == 99 || $guserRANK == 98) && $guserID == $guildID) {
			if ($rankID != 99) {
				mysql_query("UPDATE guilds_members SET gmb_rank = '".$rankID."' WHERE gmb_guildID = '".$guildID."' AND gmb_userID = '".$nruserID."' ");
				echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminMembers&submod=suses';</script></body>";
			} else {
				echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminMembers&submod=cant';</script></body>";
			}
		}
	} else if ($guserRANK == 99 && $guserID == $guildID) {
		mysql_query("UPDATE guilds_members SET gmb_rank = '".$rankID."' WHERE gmb_guildID = '".$guildID."' AND gmb_userID = '".$nruserID."' ");
		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminMembers&submod=suses';</script></body>";
	} else {
		echo "<body><script type='text/javascript'>window.location='admin.php?mod=adminMembers&submod=cant';</script></body>";
	}
}

if (isset($_GET['mod'])) {
	$mod = ''.$_GET['mod'].'';
	include ('guild/'.$mod.'.php');
} else {
	include ('guild/admin.php');
}
?>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>