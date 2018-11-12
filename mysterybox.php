
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

<td><a href="quests.php" class="awesome-tabs">Misiones<div class="navBG"></div></a></td>
<td><a href="missions.php" class="awesome-tabs">Objetivos<div class="navBG"></div></a></td>
<td><a href="gods.php" class="awesome-tabs">Dioses<div class="navBG"></div></a></td>
<td><a href="mysterybox.php" class="awesome-tabs current">Cámara misteriosa</a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<?php
if (isset($_GET['pick1'])) {
	$ubox1 = mysql_query("SELECT * FROM premiuminv WHERE pi_userID = '".$userID."' ");
	$ubox2 = mysql_fetch_array($ubox1);
	$box1h = $ubox2['pi_box1'];
	if ($box1h > 0) {
		$price0 = rand(1,10000);
		if ($price0 < 8500) {
			$price1 = rand(1,10);
			if ($price1 == 1) {
				$price2 = rand(1,3);
			} elseif ($price1 >= 2 && $price1 <= 4) {
				$price2 = rand(2,20);
			} elseif ($price1 >= 5) {
				$price2 = 1;
			}
			$tt1 = "pi_";
			$tt2 = ''.$price1.'';
			$tt = $tt1 . $tt2;
			mysql_query("UPDATE premiuminv SET ". $tt ." = ". $tt ." + ". $price2 .", pi_box1 = pi_box1 - 1 WHERE pi_userID = '".$userID."' ");
		} elseif ($price0 < 9500) {
			$price1 = rand(10000,200000);
			if ($price1 >= 190000) {
				$price2 = 200000;
			} elseif ($price1 >= 150000) {
				$price2 = 150000;
			} elseif ($price1 >= 70000) {
				$price2 = 100000;
			} elseif ($price1 >= 30000) {
				$price2 = 50000;
			} elseif ($price1 >= 15000) {
				$price2 = 20000;
			} elseif ($price1 >= 10000) {
				$price2 = 10000;
			}
			$price2n = number_format($price2, 0, ",", ".");
			mysql_query("UPDATE premiuminv SET pi_box1 = pi_box1 - 1 WHERE pi_userID = '".$userID."' ");
			$pseT = "Gran botín para $userNAME";
			$pseTx = 'Despues de tras gran intento al abrir una caja misteriosa, <b>'.$userNAME.'</b> se ha llevado gran botín! Si, se ha ganado: '.$price2n.' de oro! ¿Que esperas para ganar un premio tu tambien?';
			mysql_query("INSERT INTO serverevents SET se_image = 'news/microevent.jpg', se_title = '".$pseT."', se_text = '".$pseTx."'  ");
			mysql_query("UPDATE users SET user_seN = user_seN + 1 ");
			mysql_query("UPDATE users SET user_gold = user_gold + $price2 WHERE user_id = '".$userID."' ");
		} elseif ($price0 < 10000) {
			$price1 = rand(1,8);
			if ($price1 == 1) {
				$pseI = 'ui/loginbonus/weapon.png';
				$pseT = '¡'.$userNAME.' ha conseguido un Arma Legendaria!';
				$pseTx = 'Tras intentar abrir un cofre misterioso, '.$userNAME.' consiguio un Arma Legendaria, cuanta suerte tiene! ¿Que esperas para buscar la tuya?';
				mysql_query("INSERT INTO serverevents SET se_image = '".$pseI."', se_title = '".$pseT."', se_text = '".$pseTx."' ");
				mysql_query("UPDATE users SET user_seN = user_seN + 1 ");
				mysql_query("UPDATE users SET user_packN = user_packN + 1 WHERE user_id = '".$userID."' ");
				mysql_query("INSERT INTO packages SET pack_userID = '".$userID."', pack_itemID = 2 ");
			}
		}
	}
}
include ('engine/mbox1.php');
?>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>