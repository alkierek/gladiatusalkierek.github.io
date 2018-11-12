
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
<td>
<a href="quests.php" class="awesome-tabs current">Misiones</a>
</td>
<td>
<a href="missions.php" class="awesome-tabs">Objetivos<div class="navBG"></div></a>
</td>
<td>
<a href="gods.php" class="awesome-tabs">Dioses<div class="navBG"></div></a>
</td>
<td>
<a href="mysterybox.php" class="awesome-tabs">Cámara del tesoro<div class="navBG"></div></a>
</td>
</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<?php

if (isset($_GET['startQuest'])) {
    $_GET['startQuest'] = (int)($_GET['startQuest']);
    $Qid = $_GET['startQuest'];
    $revision1 = mysql_query("SELECT * FROM quests WHERE quest_id = '".$Qid."' ");
    $revision2 = mysql_num_rows($revision1);
    if (empty($revision2)) {
        echo "No existe esta misión";
    }else{
        $revision3 = mysql_fetch_array($revision1);
        $userSTQ = $revision3['quest_userID'];
        if ($userSTQ != $userID) {
            echo "Esta mision no te pertenece";
        }else{
            $continuar = 1;
        }
    }
    if ($continuar == 1) {
        $conteo1 = mysql_query("SELECT * FROM quests WHERE quest_userID = '".$userID."' AND quest_accept = 1 ");
        $conteo2 = mysql_num_rows($conteo1);
        if ($conteo2 >= $maxQA) {
            echo 'No puedes aceptar más misiones';
        }else{
            $nuevaM1 = "UPDATE quests SET quest_accept = 1 WHERE quest_id = '".$Qid."' ";
            $nuevaM2 = mysql_query($nuevaM1);
            if ($nuevaM2) {
                echo "<body><script type='text/javascript'>window.location='quests.php';</script></body>";
            }
        }
    }
}

if (isset($_GET['cancelQuest'])) {
    $_GET['cancelQuest'] = (int)($_GET['cancelQuest']);
    $Qid = $_GET['cancelQuest'];
    $revision1 = mysql_query("SELECT * FROM quests WHERE quest_id = '".$Qid."' ");
    $revision2 = mysql_num_rows($revision1);
    if (empty($revision2)) {
        echo "No existe esta misión";
    }else{
        $revision3 = mysql_fetch_array($revision1);
        $userSTQ = $revision3['quest_userID'];
        if ($userSTQ != $userID) {
            echo "Esta mision no te pertenece";
        }else{
            $continuar = 1;
        }
    }
    if ($continuar == 1) {
        $cancelarM1 = "UPDATE quests SET quest_accept = 0 WHERE quest_id = '".$Qid."' ";
        $cancelarM2 = mysql_query($cancelarM1);
        if ($cancelarM2) {
            echo "<body><script type='text/javascript'>window.location='quests.php';</script></body>";
        }
    }
}

if (isset($_GET['finishQuest'])) {
    $_GET['finishQuest'] = (int)($_GET['finishQuest']);
    $Qid = $_GET['finishQuest'];
    $revision1 = mysql_query("SELECT * FROM quests WHERE quest_id = '".$Qid."' ");
    $revision2 = mysql_num_rows($revision1);
    if (empty($revision2)) {
        echo "No existe esta misión";
    }else{
        $revision3 = mysql_fetch_array($revision1);
        $userSTQ = $revision3['quest_userID'];
        if ($userSTQ != $userID) {
            echo "Esta mision no te pertenece";
        }else{
            $continuar = 1;
        }
    }
    if ($continuar == 1) {
        $reclamar1 = mysql_fetch_array(mysql_query("SELECT * FROM quests WHERE quest_id = '".$Qid."' "));
        $reclamar2 = $reclamar1['quest_accept'];
        if ($reclamar2 == 1) {
            $reclamar3 = $reclamar1['quest_enemyK'];
            $reclamar4 = $reclamar1['quest_enemyKM'];
            if ($reclamar3 == $reclamar4) {
                $reclamarORO = $reclamar1['quest_gold'];
                $reclamarHONOR = $reclamar1['quest_honor'];
                $reclamarDIOS1 = $reclamar1['quest_god1'];
                $reclamarCDIOS1 = $reclamar1['quest_cgod1'];
                $reclamarDIOS2 = $reclamar1['quest_god2'];
                $reclamarCDIOS2 = $reclamar1['quest_cgod2'];
                $reclamarEXP  = $reclamar1['quest_exp'];
                mysql_query("UPDATE users SET user_quests = user_quests + 1 WHERE user_id = '".$userID."' ");
                ## ORO, HONOR Y EXP ## 
                $añadir1 = "UPDATE users SET user_gold = user_gold + '".$reclamarORO."' WHERE user_id = '".$userID."' ";
                $añadir2 = mysql_query($añadir1);
                $añadir3 = "UPDATE users SET user_honor = user_honor + '".$reclamarHONOR."' WHERE user_id = '".$userID."' ";
                $añadir4 = mysql_query($añadir3);
                $añadir5 = "UPDATE users SET user_exp = user_exp + '".$reclamarEXP."' WHERE user_id = '".$userID."' ";
                $añadir6 = mysql_query($añadir5);
                ## DIOS 1 ##
                if ($reclamarDIOS1 == 1) {
                    $añadir7 = "UPDATE gods SET gods_1c = gods_1c + '".$reclamarCDIOS1."' WHERE gods_userID = '".$userID."' ";
                }elseif ($reclamarDIOS1 == 2) {
                    $añadir7 = "UPDATE gods SET gods_2c = gods_2c + '".$reclamarCDIOS1."' WHERE gods_userID = '".$userID."' ";
                }elseif ($reclamarDIOS1 == 3) {
                    $añadir7 = "UPDATE gods SET gods_3c = gods_3c + '".$reclamarCDIOS1."' WHERE gods_userID = '".$userID."' ";
                }elseif ($reclamarDIOS1 == 4) {
                    $añadir7 = "UPDATE gods SET gods_4c = gods_4c + '".$reclamarCDIOS1."' WHERE gods_userID = '".$userID."' ";
                }elseif ($reclamarDIOS1 == 5) {
                    $añadir7 = "UPDATE gods SET gods_5c = gods_5c + '".$reclamarCDIOS1."' WHERE gods_userID = '".$userID."' ";
                }elseif ($reclamarDIOS1 == 6) {
                    $añadir7 = "UPDATE gods SET gods_6c = gods_6c + '".$reclamarCDIOS1."' WHERE gods_userID = '".$userID."' ";
                }
                $añadir8 = mysql_query($añadir7);
                ## DIOS 2 ##
                if ($reclamarDIOS2 == 1) {
                    $añadir9 = "UPDATE gods SET gods_1c = gods_1c + '".$reclamarCDIOS2."' WHERE gods_userID = '".$userID."' ";
                }elseif ($reclamarDIOS2 == 2) {
                    $añadir9 = "UPDATE gods SET gods_2c = gods_2c + '".$reclamarCDIOS2."' WHERE gods_userID = '".$userID."' ";
                }elseif ($reclamarDIOS2 == 3) {
                    $añadir9 = "UPDATE gods SET gods_3c = gods_3c + '".$reclamarCDIOS2."' WHERE gods_userID = '".$userID."' ";
                }elseif ($reclamarDIOS2 == 4) {
                    $añadir9 = "UPDATE gods SET gods_4c = gods_4c + '".$reclamarCDIOS2."' WHERE gods_userID = '".$userID."' ";
                }elseif ($reclamarDIOS2 == 5) {
                    $añadir9 = "UPDATE gods SET gods_5c = gods_5c + '".$reclamarCDIOS2."' WHERE gods_userID = '".$userID."' ";
                }elseif ($reclamarDIOS2 == 6) {
                    $añadir9 = "UPDATE gods SET gods_6c = gods_6c + '".$reclamarCDIOS2."' WHERE gods_userID = '".$userID."' ";
                }
                $añadir10 = mysql_query($añadir9);
                ## MISION BORRON Y NUEVA ##
                $borron1 = "DELETE FROM quests WHERE quest_id = '".$Qid."' ";
                $borron2 = mysql_query($borron1);
                if ($borron2) {
                    $crear1 = 1;
                }
                if ($crear1 == 1) {
                    $umisiones2 = $umisiones2-1;
                    $crearQ = 1;
                    include ('db/quests.php');
                }
            }else{
                echo "No esta completada";
            }
        }else{
            echo "Esta mision no esta activa";
        }
    }
}

if (isset($_GET['resetQuests'])) {
    $borron1 = mysql_query("SELECT * FROM quests WHERE quest_userID = '".$userID."' AND quest_accept = 0 ");
    $borron2 = mysql_num_rows($borron1);
    $umisiones2 = $umisiones2-$borron2;
    $borron3 = "DELETE FROM quests WHERE quest_userID = '".$userID."' AND quest_accept = 0 ";
    $borron4 = mysql_query($borron3);
    if ($borron4) {
        $crearQ = 1;
        include ('db/quests.php');
    }
}

?>

<div>
<div class="contentboard_start">
<div class="contentboard_header_long">
<div class="contentboard_inner">
<div id="quest_header_accepted">Misiones aceptadas: <?php echo $uAmisiones2; ?> / <?php echo $maxQA; ?></div>
<div></div>
</div>
</div>

<?php

$misiones1 = mysql_query("SELECT * FROM quests WHERE quest_userID = '".$userID."' ");
$misiones2 = mysql_num_rows($misiones1);
$misiones3 = 1;
while ($misiones3 <= $misiones2) {
    $misiones3++;
    $misiones4 = mysql_fetch_array($misiones1);
    $idQ = $misiones4['quest_id'];
    $tipoQ  = $misiones4['quest_type'];
    if ($tipoQ == 1) {
        $iconT = 'combat';
    }elseif ($tipoQ == 2) {
        $iconT = 'arena';
    }
    $nombreQ = $misiones4['quest_name'];
    $oroQ = $misiones4['quest_gold'];
    $oroQ = number_format($oroQ, 0, ",", ".");
    $dios1 = $misiones4['quest_god1'];
    $cdios1 = $misiones4['quest_cgod1'];
    if ($dios1 == 1) {
        $diosN1 = 'apollo';
        $diosNN1 = 'Apolo';
    }elseif ($dios1 == 2) {
        $diosN1 = 'diana';
        $diosNN1 = 'Diana';
    }elseif ($dios1 == 3) {
        $diosN1 = 'mars';
        $diosNN1 = 'Marte';
    }elseif ($dios1 == 4) {
        $diosN1 = 'merkur';
        $diosNN1 = 'Mercurio';
    }elseif ($dios1 == 5) {
        $diosN1 = 'minerva';
        $diosNN1 = 'Minerva';
    }elseif ($dios1 == 6) {
        $diosN1 = 'vulcanus';
        $diosNN1 = 'Vulcan';
    }
    $dios2 = $misiones4['quest_god2'];
    $cdios2 = $misiones4['quest_cgod2'];
    if ($dios2 == 1) {
        $diosN2 = 'apollo';
        $diosNN2 = 'Apolo';
    }elseif ($dios2 == 2) {
        $diosN2 = 'diana';
        $diosNN2 = 'Diana';
    }elseif ($dios2 == 3) {
        $diosN2 = 'mars';
        $diosNN2 = 'Marte';
    }elseif ($dios2 == 4) {
        $diosN2 = 'merkur';
        $diosNN2 = 'Mercurio';
    }elseif ($dios2 == 5) {
        $diosN2 = 'minerva';
        $diosNN2 = 'Minerva';
    }elseif ($dios2 == 6) {
        $diosN2 = 'vulcanus';
        $diosNN2 = 'Vulcan';
    }
    $honorQ = $misiones4['quest_honor'];
    $honorQ = number_format($honorQ, 0, ",", ".");
    $expQ = $misiones4['quest_exp'];
    $idI = $misiones4['quest_itemID'];
    $enemigoID = $misiones4['quest_enemyID'];
    $enemigoC = $misiones4['quest_enemyK'];
    $enemigoCM = $misiones4['quest_enemyKM'];
    $completo = 0;
    if ($enemigoC >= $enemigoCM) {
        $completo = 1;
    }
    $aceptada = $misiones4['quest_accept'];
    if ($aceptada == 1) {
        $actQ = 'active';
    }else{
        $actQ = 'inactive';
    }

?>

<div class="contentboard_slot contentboard_slot_<?php echo $actQ; ?>">
<div class="quest_slot_icon" style="background-image:url(8501/img/ui/quest/icon_<?php echo $iconT; ?>_<?php echo $actQ; ?>.jpg)"></div>
<div class="quest_slot_title"><?php echo $nombreQ; ?></div>
<div class="quest_slot_reward_box">
<span class="quest_slot_reward_text">Recompensa:</span>
<div class="quest_slot_reward quest_slot_reward_gold">
<span onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Oro</td></tr></table>')">
<?php echo $oroQ; ?> <img src="8501/img/res2.gif" title="" align="absmiddle" border="0" /></span>
</div>

<div class="quest_slot_reward quest_slot_reward_god">
<span onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'><?php echo $cdios1; ?> de Gracia de <?php echo $diosNN1; ?></td></tr></table>')">
<img src="8501/img//ui/gods/<?php echo $diosN1; ?>_s16.png" title="" align="absmiddle" border="0" /></span>
</div>

<div class="quest_slot_reward quest_slot_reward_god">
<span onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'><?php echo $cdios2; ?> de Gracia de <?php echo $diosNN2; ?></td></tr></table>')">
<img src="8501/img//ui/gods/<?php echo $diosN2; ?>_s16.png" title="" align="absmiddle" border="0" /></span>
</div>

<div class="quest_slot_reward quest_slot_reward_honor">
<span onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'><?php echo $honorQ; ?> Honor</td></tr></table>')">
<img src="8501/img//ui/icon_honor_small.gif" title="" align="absmiddle" border="0" /></span>
</div>

<div class="quest_slot_reward quest_slot_reward_xp">
<span onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'><?php echo $expQ; ?> Experiencia</td></tr></table>')">
<img src="8501/img//ui/icon_level_small.gif" title="" align="absmiddle" border="0" />                        </span>
</div>


<div class="quest_slot_reward quest_slot_reward_item">
<?php if ($idI != 0) { ?>
<img src="8501/img/ui/icon_drop_small.gif" width="16" height="16" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Pan del veneno</td></tr><tr><td style=\'color:#DDD;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Usándose: Cura 730 de vida</td></tr><tr><td style=\'color:#DDD;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Por Inteligencia: +100 punto(s) de vida</td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Nivel 21</td></tr><tr><td style=\'color:#DDD;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Valor 227 <img src=\'8501/img/res2d.gif\' alt=\'Oro\' title=\'Oro\' align=\'absmiddle\' border=\'0\' /></td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Consejo: Usar un artículo</td></tr><tr><td style=\'color:#808080;font-weight:bold;font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Arrastralo por encima de la imagen de caracteres en la pantalla general.</td></tr></table>')" />
<?php } ?>
</div>


<br class="clearfloat" />
</div>

<?php if ($aceptada == 0) { ?>
<a class="quest_slot_button quest_slot_button_accept" href="quests.php?startQuest=<?php echo $idQ; ?>" title="Aceptar misión"></a>
<?php }elseif ($aceptada == 1 && $completo == 0) { ?>
<a class="quest_slot_button quest_slot_button_cancel" href="quests.php?cancelQuest=<?php echo $idQ; ?>" title="Cancelar la misión"></a>
<div class="quest_slot_progress"><?php echo $enemigoC; ?> / <?php echo $enemigoCM; ?></div>
<?php }elseif ($aceptada == 1 && $completo == 1) { ?>
<a class="quest_slot_button quest_slot_button_finish" href="quests.php?finishQuest=<?php echo $idQ; ?>" title="Reclamar"></a>
<?php } ?>

</div>

<?php

}

?>

<div class="contentboard_footer_long"><div class="contentboard_inner"><div id="quest_footer_reroll">
<input type="button" class="button1" value="Misiones nuevas" onclick="document.location.href='quests.php?resetQuests'" />
<br />
(Activa tiempo de espera)</div>
</div></div></div></div>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>