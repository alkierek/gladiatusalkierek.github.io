
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
<td><a href="gods.php" class="awesome-tabs current">Dioses</a></td>
<td><a href="mysterybox.php" class="awesome-tabs">Cámara misteriosa<div class="navBG"></div></a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">

<?php

if (isset($_GET['god'])) {
    $_GET['god'] = (int)($_GET['god']);
    $diosTw = $_GET['god'];
    if (empty($_GET['n'])) {
        echo "Seleccione un nivel";
    }else{
        $_GET['n'] = (int)($_GET['n']);
        $nivelTw = $_GET['n'];
        $continuar = 1;
        if ($nivelTw == 1) {
            $costoTw = 20;
        }elseif ($nivelTw == 2) {
            $costoTw = 60;
        }elseif ($nivelTw == 3) {
            $costoTw = 150;
        }else{
            $continuar = 0;
        }
        if ($continuar == 1) {
            if ($diosTw == 1) {
                $dcTw = $uDios1;
                if ($dcTw >= $costoTw) {
                    $dcTw = $dcTw-$costoTw;
                    $gracia1 = "UPDATE gods SET gods_1c = '".$dcTw."' WHERE gods_userID = '".$userID."' ";
                    $gracia2 = mysql_query($gracia1);
                    if ($gracia2) {
                        if ($nivelTw == 1) {
                            $gracia3 = "UPDATE godsa SET ga_g1n1 = ga_g1n1 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }elseif ($nivelTw == 2) {
                            $gracia3 = "UPDATE godsa SET ga_g1n2 = ga_g1n2 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }elseif ($nivelTw == 3) {
                            $gracia3 = "UPDATE godsa SET ga_g1n3 = ga_g1n3 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }
                        if ($gracia4) {
                            echo "<body><script type='text/javascript'>window.location='gods.php';</script></body>";
                        }
                    }
                }else{
                    echo "No tienes suficiente gracia para este nivel";
                }
            }elseif ($diosTw == 2) {
                $dcTw = $uDios2;
                if ($dcTw >= $costoTw) {
                    $dcTw = $dcTw-$costoTw;
                    $gracia1 = "UPDATE gods SET gods_2c = '".$dcTw."' WHERE gods_userID = '".$userID."' ";
                    $gracia2 = mysql_query($gracia1);
                    if ($gracia2) {
                        if ($nivelTw == 1) {
                            $gracia3 = "UPDATE godsa SET ga_g2n1 = ga_g2n1 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }elseif ($nivelTw == 2) {
                            $gracia3 = "UPDATE godsa SET ga_g2n2 = ga_g2n2 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }elseif ($nivelTw == 3) {
                            $gracia3 = "UPDATE godsa SET ga_g2n3 = ga_g2n3 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }
                        if ($gracia4) {
                            echo "<body><script type='text/javascript'>window.location='gods.php';</script></body>";
                        }
                    }
                }else{
                    echo "No tienes suficiente gracia para este nivel";
                }
            }elseif ($diosTw == 3) {
                $dcTw = $uDios3;
                if ($dcTw >= $costoTw) {
                    $dcTw = $dcTw-$costoTw;
                    $gracia1 = "UPDATE gods SET gods_3c = '".$dcTw."' WHERE gods_userID = '".$userID."' ";
                    $gracia2 = mysql_query($gracia1);
                    if ($gracia2) {
                        if ($nivelTw == 1) {
                            $gracia3 = "UPDATE godsa SET ga_g3n1 = ga_g3n1 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }elseif ($nivelTw == 2) {
                            $gracia3 = "UPDATE godsa SET ga_g3n2 = ga_g3n2 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }elseif ($nivelTw == 3) {
                            $gracia3 = "UPDATE godsa SET ga_g3n3 = ga_g3n3 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }
                        if ($gracia4) {
                            echo "<body><script type='text/javascript'>window.location='gods.php';</script></body>";
                        }
                    }
                }else{
                    echo "No tienes suficiente gracia para este nivel";
                }
            }elseif ($diosTw == 4) {
                $dcTw = $uDios4;
                if ($dcTw >= $costoTw) {
                    $dcTw = $dcTw-$costoTw;
                    $gracia1 = "UPDATE gods SET gods_4c = '".$dcTw."' WHERE gods_userID = '".$userID."' ";
                    $gracia2 = mysql_query($gracia1);
                    if ($gracia2) {
                        if ($nivelTw == 1) {
                            $gracia3 = "UPDATE godsa SET ga_g4n1 = ga_g4n1 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }elseif ($nivelTw == 2) {
                            $gracia3 = "UPDATE godsa SET ga_g4n2 = ga_g4n2 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }elseif ($nivelTw == 3) {
                            $gracia3 = "UPDATE godsa SET ga_g4n3 = ga_g4n3 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }
                        if ($gracia4) {
                            echo "<body><script type='text/javascript'>window.location='gods.php';</script></body>";
                        }
                    }
                }else{
                    echo "No tienes suficiente gracia para este nivel";
                }
            }elseif ($diosTw == 5) {
                $dcTw = $uDios5;
                if ($dcTw >= $costoTw) {
                    $dcTw = $dcTw-$costoTw;
                    $gracia1 = "UPDATE gods SET gods_5c = '".$dcTw."' WHERE gods_userID = '".$userID."' ";
                    $gracia2 = mysql_query($gracia1);
                    if ($gracia2) {
                        if ($nivelTw == 1) {
                            $gracia3 = "UPDATE godsa SET ga_g5n1 = ga_g5n1 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }elseif ($nivelTw == 2) {
                            $gracia3 = "UPDATE godsa SET ga_g5n2 = ga_g5n2 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }elseif ($nivelTw == 3) {
                            $gracia3 = "UPDATE godsa SET ga_g5n3 = ga_g5n3 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }
                        if ($gracia4) {
                            echo "<body><script type='text/javascript'>window.location='gods.php';</script></body>";
                        }
                    }
                }else{
                    echo "No tienes suficiente gracia para este nivel";
                }
            }elseif ($diosTw == 6) {
                $dcTw = $uDios6;
                if ($dcTw >= $costoTw) {
                    $dcTw = $dcTw-$costoTw;
                    $gracia1 = "UPDATE gods SET gods_6c = '".$dcTw."' WHERE gods_userID = '".$userID."' ";
                    $gracia2 = mysql_query($gracia1);
                    if ($gracia2) {
                        if ($nivelTw == 1) {
                            $gracia3 = "UPDATE godsa SET ga_g6n1 = ga_g6n1 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }elseif ($nivelTw == 2) {
                            $gracia3 = "UPDATE godsa SET ga_g6n2 = ga_g6n2 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }elseif ($nivelTw == 3) {
                            $gracia3 = "UPDATE godsa SET ga_g6n3 = ga_g6n3 + 1 WHERE ga_userID = '".$userID."' ";
                            $gracia4 = mysql_query($gracia3);
                        }
                        if ($gracia4) {
                            echo "<body><script type='text/javascript'>window.location='gods.php';</script></body>";
                        }
                    }
                }else{
                    echo "No tienes suficiente gracia para este nivel";
                }
            }
        }else{
            echo "Tienes que seleccionar un nivel valido";
        }
    }
}

?>

<!-- Revision -->
<?php

if ($uDios1 >= 150) {
    $ringD1 = 'ring_apollo_3';
    $dios1H3 = 'href="gods.php?god=1&n=3"';
    $dios1H2 = 'href="gods.php?god=1&n=2"';
    $dios1H1 = 'href="gods.php?god=1&n=1"';
}elseif ($uDios1 >= 60) {
    $ringD1 = 'ring_apollo_2';
    $dios1H3 = '';
    $dios1H2 = 'href="gods.php?god=1&n=2"';
    $dios1H1 = 'href="gods.php?god=1&n=1"';
}elseif ($uDios1 >= 20) {
    $ringD1 = 'ring_apollo_1';
    $dios1H3 = '';
    $dios1H2 = '';
    $dios1H1 = 'href="gods.php?god=1&n=1"';
}else{
    $ringD1 = 'ring_background';
    $dios1H3 = '';
    $dios1H2 = '';
    $dios1H1 = '';
}

if ($uDios2 >= 150) {
    $ringD2 = 'ring_diana_3';
    $dios2H3 = 'href="gods.php?god=2&n=3"';
    $dios2H2 = 'href="gods.php?god=2&n=2"';
    $dios2H1 = 'href="gods.php?god=2&n=1"';
}elseif ($uDios2 >= 60) {
    $ringD2 = 'ring_diana_2';
    $dios2H3 = '';
    $dios2H2 = 'href="gods.php?god=2&n=2"';
    $dios2H1 = 'href="gods.php?god=2&n=1"';
}elseif ($uDios2 >= 20) {
    $ringD2 = 'ring_diana_1';
    $dios2H3 = '';
    $dios2H2 = '';
    $dios2H1 = 'href="gods.php?god=2&n=1"';
}else{
    $ringD2 = 'ring_background';
    $dios2H3 = '';
    $dios2H2 = '';
    $dios2H1 = '';
}

if ($uDios3 >= 150) {
    $ringD3 = 'ring_mars_3';
    $dios3H3 = 'href="gods.php?god=3&n=3"';
    $dios3H2 = 'href="gods.php?god=3&n=2"';
    $dios3H1 = 'href="gods.php?god=3&n=1"';
}elseif ($uDios3 >= 60) {
    $ringD3 = 'ring_mars_2';
    $dios3H3 = '';
    $dios3H2 = 'href="gods.php?god=3&n=2"';
    $dios3H1 = 'href="gods.php?god=3&n=1"';
}elseif ($uDios3 >= 20) {
    $ringD3 = 'ring_mars_1';
    $dios3H3 = '';
    $dios3H2 = '';
    $dios3H1 = 'href="gods.php?god=3&n=1"';
}else{
    $ringD3 = 'ring_background';
    $dios3H3 = '';
    $dios3H2 = '';
    $dios3H1 = '';
}

if ($uDios4 >= 150) {
    $ringD4 = 'ring_merkur_3';
    $dios4H3 = 'href="gods.php?god=4&n=3"';
    $dios4H2 = 'href="gods.php?god=4&n=2"';
    $dios4H1 = 'href="gods.php?god=4&n=1"';
}elseif ($uDios4 >= 60) {
    $ringD4 = 'ring_merkur_2';
    $dios4H3 = '';
    $dios4H2 = 'href="gods.php?god=4&n=2"';
    $dios4H1 = 'href="gods.php?god=4&n=1"';
}elseif ($uDios4 >= 20) {
    $ringD4 = 'ring_merkur_1';
    $dios4H3 = '';
    $dios4H2 = '';
    $dios4H1 = 'href="gods.php?god=4&n=1"';
}else{
    $ringD4 = 'ring_background';
    $dios4H3 = '';
    $dios4H2 = '';
    $dios4H1 = '';
}

if ($uDios5 >= 150) {
    $ringD5 = 'ring_minerva_3';
    $dios5H3 = 'href="gods.php?god=5&n=3"';
    $dios5H2 = 'href="gods.php?god=5&n=2"';
    $dios5H1 = 'href="gods.php?god=5&n=1"';
}elseif ($uDios5 >= 60) {
    $ringD5 = 'ring_minerva_2';
    $dios5H3 = '';
    $dios5H2 = 'href="gods.php?god=5&n=2"';
    $dios5H1 = 'href="gods.php?god=5&n=1"';
}elseif ($uDios5 >= 20) {
    $ringD5 = 'ring_minerva_1';
    $dios5H3 = '';
    $dios5H2 = '';
    $dios5H1 = 'href="gods.php?god=5&n=1"';
}else{
    $ringD5 = 'ring_background';
    $dios5H3 = '';
    $dios5H2 = '';
    $dios5H1 = '';
}

if ($uDios6 >= 150) {
    $ringD6 = 'ring_vulcanus_3';
    $dios6H3 = 'href="gods.php?god=6&n=3"';
    $dios6H2 = 'href="gods.php?god=6&n=2"';
    $dios6H1 = 'href="gods.php?god=6&n=1"';
}elseif ($uDios6 >= 60) {
    $ringD6 = 'ring_vulcanus_2';
    $dios6H3 = '';
    $dios6H2 = 'href="gods.php?god=6&n=2"';
    $dios6H1 = 'href="gods.php?god=6&n=1"';
}elseif ($uDios6 >= 20) {
    $ringD6 = 'ring_vulcanus_1';
    $dios6H3 = '';
    $dios6H2 = '';
    $dios6H1 = 'href="gods.php?god=6&n=1"';
}else{
    $ringD6 = 'ring_background';
    $dios6H3 = '';
    $dios6H2 = '';
    $dios6H1 = '';
}

?>


<div id="gods">
<div id="daily_points" onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:250px\'>También la paciencia de los dioses tiene un límite. Al rezar o al completar misiones, puedes conseguir un máximo 60 de Gracia por día antes de que te den la espalda, aburridos.</div></td></tr></table>')">0 / 60</div>


<!-- DIOS 5 -->
<div id="minerva" class="god_box">
<map name="minerva">
<area shape="poly" coords="1,72, 19,72, 27,46, 46,27, 35,10, 3,38" <?php echo $dios5H1; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>El entendimiento de Minerva</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 20 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios5Nivel1A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Minerva te ilumina, con lo que tu Inteligencia aumenta 0.1%.</div></td></tr></table>')"/>
<area shape="poly" coords="37,0, 37,11, 47,27, 98,27, 109,11, 109,0" <?php echo $dios5H2; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Aceite bendito de Minerva</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 60 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios5Nivel2A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Los sacerdotes te bendicen y aumentan tu Carisma 0.3%.</div></td></tr></table>')"/>
<area shape="poly" coords="99,27, 125,73, 145,73, 138,28, 109,11" <?php echo $dios5H3; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Justicia de Minerva</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 150 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios5Nivel3A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>La justicia de Minerva aumenta tu Carisma +0.05 por nivel.</div></td></tr></table>')"/>
</map>
<img src="8501/img/ui/gods/<?php echo $ringD5; ?>.png" title="" usemap="#minerva" border="0" />
<div class="god_nameplate">
<div class="god_name">Minerva</div>
<div class="god_points"><?php echo "$uDios5/$uDios5"; ?></div>
</div>
</div>

<!-- DIOS 2 -->
<div id="diana" class="god_box">
<map name="diana">
<area shape="poly" coords="1,72, 19,72, 27,46, 46,27, 35,10, 3,38" <?php echo $dios2H1; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Protección de Diana</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 20 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios2Nivel1A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Diana te protege, con lo que tu Armadura se refuerza en +0.5 por nivel.</div></td></tr></table>')"/>
<area shape="poly" coords="37,0, 37,11, 47,27, 98,27, 109,11, 109,0" <?php echo $dios2H2; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Aceite bendito de Diana</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 60 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios2Nivel2A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Los sacerdotes te bendicen y aumenta tu Destreza un 0.3%.</div></td></tr></table>')"/>
<area shape="poly" coords="99,27, 125,73, 145,73, 138,28, 109,11" <?php echo $dios2H3; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Mano segura de Diana</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 150 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios2Nivel3A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Con la ayuda de Diana, aumenta en +0.05 tu Habilidad por nivel.</div></td></tr></table>')"/>
</map>
<img src="8501/img/ui/gods/<?php echo $ringD2; ?>.png" title="" usemap="#diana" border="0" />
<div class="god_nameplate">
<div class="god_name">Diana</div>
<div class="god_points"><?php echo "$uDios2/$uDios2"; ?></div>
</div>
</div>

<!-- DIOS 3 -->
<div id="mars" class="god_box">
<map name="mars">
<area shape="poly" coords="1,72, 19,72, 27,46, 46,27, 35,10, 3,38" <?php echo $dios3H1; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Ira de Marte</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 20 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios3Nivel1A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>La Ira de marte te acompaña, con lo que cada de tus golpes provoca +0.2 de Daño.</div></td></tr></table>')"/>
<area shape="poly" coords="37,0, 37,11, 47,27, 98,27, 109,11, 109,0" <?php echo $dios3H2; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Aceite bendito de Marte</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 60 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios3Nivel2A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Los sacerdotes te bendicen y aumentan tu Agilidad un 0.3%.</div></td></tr></table>')"/>
<area shape="poly" coords="99,27, 125,73, 145,73, 138,28, 109,11" <?php echo $dios3H3; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Balance de Marte</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 150 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios3Nivel3A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>El balance de Marte te aumenta tu Agilidad un +0.05 por nivel.</div></td></tr></table>')"/>
</map>
<img src="8501/img/ui/gods/<?php echo $ringD3; ?>.png" title="" usemap="#mars" border="0" />
<div class="god_nameplate">
<div class="god_name">Marte</div>
<div class="god_points"><?php echo "$uDios3/$uDios3"; ?></div>
</div>
</div>

<!-- DIOS 4 -->
<div id="merkur" class="god_box">
<map name="merkur">
<area shape="poly" coords="1,72, 19,72, 27,46, 46,27, 35,10, 3,38" <?php echo $dios4H1; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Sonrisa de Mercurio</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 20 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios4Nivel1A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Mercurio te regala su sonrisa ganadora, con lo que tu Carisma aumenta 0.1%.</div></td></tr></table>')"/>
<area shape="poly" coords="37,0, 37,11, 47,27, 98,27, 109,11, 109,0" <?php echo $dios4H2; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Aceite bendito de Mercurio</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 60 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios4Nivel2A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Los sacerdotes te bendicen y aumentan tu Inteligencia un 0.3%.</div></td></tr></table>')"/>
<area shape="poly" coords="99,27, 125,73, 145,73, 138,28, 109,11" <?php echo $dios4H3; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Maldición de Mercurio</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 150 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios4Nivel3A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>La maldicion de Mercurio aumenta en +0.05 tu Inteligencia por nivel.</div></td></tr></table>')"/>
</map>
<img src="8501/img/ui/gods/<?php echo $ringD4; ?>.png" title="" usemap="#merkur" border="0" />
<div class="god_nameplate">
<div class="god_name">Mercurio</div>
<div class="god_points"><?php echo "$uDios4/$uDios4"; ?></div>
</div>
</div>

<!-- DIOS 1 -->
<div id="apollo" class="god_box">
<map name="apollo">
<area shape="poly" coords="1,72, 19,72, 27,46, 46,27, 35,10, 3,38" <?php echo $dios1H1; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Velocidad de Apolo</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 20 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios1Nivel1A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Apolo te bendice con su velocidad, con lo que tu Agilidad aumenta un 0.1%.</div></td></tr></table>')"/>
<area shape="poly" coords="37,0, 37,11, 47,27, 98,27, 109,11, 109,0" <?php echo $dios1H2; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Aceite bendito de Apolo</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 60 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios1Nivel2A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Los sacerdotes te bendicen y provocas +0.4 de Daño.</div></td></tr></table>')"/>
<area shape="poly" coords="99,27, 125,73, 145,73, 138,28, 109,11" <?php echo $dios1H3; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Escudo de Apolo</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 150 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios1Nivel3A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>La influencia de Apolo aumenta tu Armadura en un +2.5 por nivel.</div></td></tr></table>')"/>
</map>
<img src="8501/img/ui/gods/<?php echo $ringD1; ?>.png" title="" usemap="#apollo" border="0" />
<div class="god_nameplate">
<div class="god_name">Apolo</div>
<div class="god_points"><?php echo "$uDios1/$uDios1"; ?></div>
</div>
</div>

<!-- DIOS 6 -->
<div id="vulcanus" class="god_box">
<map name="vulcanus">
<area shape="poly" coords="1,72, 19,72, 27,46, 46,27, 35,10, 3,38" <?php echo $dios6H1; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>La aptitud de Vulcano</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 20 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios6Nivel1A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Vulcano te bendice, de modo que tu Destreza aumenta 0.1%.</div></td></tr></table>')"/>
<area shape="poly" coords="37,0, 37,11, 47,27, 98,27, 109,11, 109,0" <?php echo $dios6H2; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Aceite bendito de Vulcano</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 60 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios6Nivel2A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Los sacerdotes te bendicen con el poder de Vulcano y aumentas tu Armadura +1.5 por nivel.</div></td></tr></table>')"/>
<area shape="poly" coords="99,27, 125,73, 145,73, 138,28, 109,11" <?php echo $dios6H3; ?>
onmouseover="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:330px\'>Armadura de Vulcano</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Costos: 150 Gracia</div></td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Acumulaciones actuales: <?php echo $Dios6Nivel3A; ?> acumulaciones</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:330px\'>Vulcano aumenta el valor de tu Armadura y tus Puntos de Vida aumentan en un 0.5%.</div></td></tr></table>')"/>
</map>
<img src="8501/img/ui/gods/<?php echo $ringD6; ?>.png" title="" usemap="#vulcanus" border="0" />
<div class="god_nameplate">
<div class="god_name">Vulcano</div>
<div class="god_points"><?php echo "$uDios6/$uDios6"; ?></div>
</div>
</div>



</div>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>