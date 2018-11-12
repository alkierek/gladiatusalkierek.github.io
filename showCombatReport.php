
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<?php
include ('db/root.php');
include ('db/user.php');
include ('inc/head.php');
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
            <ul id="mainnav">
            <li>
            <table style="top: -23px; position: relative; height: 60px;">
            <tr style="vertical-align: bottom;">
            <td>
            <a href="reports.php" class="awesome-tabs">Visión general<div class="navBG"></div></a>
            </td>
            <td>
            <a href="showExpeditions.php" class="awesome-tabs current">Expediciones</a>
            </td>
            <td>
            <a href="showDungeons.php" class="awesome-tabs">Mazmorras<div class="navBG"></div></a>
            </td>
            </tr>
            </table>
            </li>
            </ul>
        </div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">
<script type="text/javascript" src="8501/js/mootools-forge.js"></script>
<?php
if(isset($_GET['t'])){
    $t = (int)($_GET['t']);
    switch ($t) {
        case '0':
            if(!empty($_GET['reportId'])){
                $reportID = $_GET['reportId'];
                $buscar1 = mysql_query("SELECT * FROM mob_reports WHERE mr_id = '".$reportID."' ");
                $buscar2 = mysql_num_rows($buscar1);
                if($buscar2 != 0){
                    $buscar3 = mysql_fetch_array($buscar1);
                    $parte1 = $buscar3['mr_winner'];
                    $parte2 = $buscar3['mr_price'];
                    $parte2n2 = $buscar3['mr_price2'];
                    $parte2n3 = $buscar3['mr_price3'];
                    $parte3 = $buscar3['mr_vs'];
                    $parte4 = $buscar3['mr_report0'];
                    $ronda1 = $buscar3['mr_round1'];
                    $ronda2 = $buscar3['mr_round2'];
                    $ronda3 = $buscar3['mr_round3'];
                    $ronda4 = $buscar3['mr_round4'];
                    $ronda5 = $buscar3['mr_round5'];
                    $ronda6 = $buscar3['mr_round6'];
                    $ronda7 = $buscar3['mr_round7'];
                    $ronda8 = $buscar3['mr_round8'];
                    $ronda9 = $buscar3['mr_round9'];
                    $ronda10 = $buscar3['mr_round10'];
                    $fecha = $buscar3['mr_date'];
                    $itemG = $buscar3['mr_item'];
                    $boxG = $buscar3['mr_mbox'];
                    $parte2n2i2 = '';
                    if ($itemG > 0) {
                        include ('reports/itemWin.php');
                        $parte2n2i2 = '<div class="reportReward"><div style="background-image:url(8501/img/shop/shop_zelle.gif); width:64px; height: 64;float:left;" onMouseOver="return escape('.$item_description_html_layout.')"><img style="bottom:0px" src="8501/img/item/'.$iimgw.'.gif"/></div></div>';
                    } elseif ($boxG > 0) {
                        $ubox1 = mysql_query("SELECT * FROM premiuminv WHERE pi_userID = '".$userID."' ");
                        $ubox2 = mysql_fetch_array($ubox1);
                        $box1h = $ubox2['pi_box1'];
                        $mbt = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:#BA9700;font-weight:bold;font-size:9pt\' colspan=\'2\'><div style=\'width:300px\'>Baúl de la providencia divina</div></td></tr><tr><td style=\'color:#00B712;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:300px\'>Posees: $box1h</div></td></tr><tr><td style=\'color:white;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:300px\'>En este baúl se ocultan 12 tesoros posibles que podrías conseguir. Pero no sabrás qué te depara la providencia divina hasta que lo abras.</div></td></tr></table>'";
                        $parte2n2i2 = '<div class="reportReward" onmouseover="return escape('.$mbt.')"><img src="8501/img/premium/token/16.jpg" title="" style="width: 80px; height:92px;" /></div>';
                    }
                    $parte2n2b2 = '';
                    $bonusG = $buscar3['mr_bonus'];
                    if ($bonusG > 0) {
                        if ($bonusG == 1) {
                            $bgot = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Desguazador</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>Gracias a tu experiencia encuentras todo lo que el enemigo tenía de valor y aumentas así tu ganancia de oro en 30%.</div></td></tr></table>'";
                            $bwt = '<p><div style="height:26px;line-height:26px;float:left;padding-right:8px">Bonus aprendido</div><div class="expedition_bonus" style="background-image:url(8501/img/expedition/bonus1.jpg);" onMouseOver="return escape('.$bgot.')"></div></p>';
                        } elseif ($bonusG == 2) {
                            $beot = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Batalla analítica</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>Debido a tu mejor análisis de tu enemigo consigues 30% más de experiencia en las batallas contra el.</div></td></tr></table>'";
                            $bwt = '<p><div style="height:26px;line-height:26px;float:left;padding-right:8px">Bonus aprendido</div><div class="expedition_bonus" style="background-image:url(8501/img/expedition/bonus2.jpg);" onMouseOver="return escape('.$beot.')"></div></p>';
                        } elseif ($bonusG == 3) {
                            $bdot = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Olfato del Refugio</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>El conocimiento sobre las costumbre de tu enemigo aumentan la probabilidad de encontrar un objeto en un 10%.</div></td></tr></table>'";
                            $bwt = '<p><div style="height:26px;line-height:26px;float:left;padding-right:8px">Bonus aprendido</div><div class="expedition_bonus" style="background-image:url(8501/img/expedition/bonus3.jpg);" onMouseOver="return escape('.$bdot.')"></div></p>';
                        } elseif ($bonusG == 4) {
                            $bhot = "'<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:lime;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Narrador de historias</td></tr><tr><td style=\'color:#DDDDDD;font-weight:bold;font-size:8pt\' colspan=\'2\'><div style=\'width:250px\'>Tus historias sobre el enemigo derrotado aumentan tu Honor en un 20%.</div></td></tr></table>'";
                            $bwt = '<p><div style="height:26px;line-height:26px;float:left;padding-right:8px">Bonus aprendido</div><div class="expedition_bonus" style="background-image:url(8501/img/expedition/bonus4.jpg);" onMouseOver="return escape('.$bhot.')"></div></p>';
                        }
                        $parte2n2b2 = $bwt;
                    }
                    ## PUBLICAMOS

                    echo
                    "
                    $parte1
                    $parte2
                    $parte2n2b2
                    $parte2n2
                    $parte2n2i2
                    $parte2n3

                    $parte3
                    ";
                    ## SACAMOS DATOS
                    $reportTable1 = '
                    <div style="clear:both"><div class="title_box"><div class="title_inner">Reporte de batalla '.$fecha.'</div></div>
                    <div class="title2_box"><div class="title2_inner"><table cellpadding="2" cellspacing="2" border="0" width="100%" style="text-align:center;">

                    <table cellpadding="2" cellspacing="2" border="0" width="100%" style="text-align:center;">
                    ';
                    echo "$reportTable1";
                    ?>
                    <tr>
                    <td><b>Nombre</b></td><td><b>Alianza</b></td>
                    <td><b><span  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Daño hecho</td></tr></table>')">Puntos de golpe</span></b></td>
                    <td><b><span  onMouseOver="return escape('<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white;font-weight:bold;font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Puntos de vida restantes</td></tr></table>')">Puntos de vida</span></b></td>
                    </tr>
                    <?php
                    ## SEGUIMOS PUBLICANDO
                    echo "$parte4";
                    ## PUBLICAMOS LAS RONDAS
                    echo
                    "
                    <div style='margin-top:10px; clear:both' class='dungeon_report_statistic'><div class='title_box'>
                    <div class='title_inner'>Reporte de batalla</div></div><div class='title2_box'>
                    <div class='title2_inner' style='padding-left: 0px; margin: 0px;'>
                    <table width='100%' border='0' cellspacing='0' cellpadding='3' class='table_border_bottom'>
                    $ronda1
                    $ronda2
                    $ronda3
                    $ronda4
                    $ronda5
                    $ronda6
                    $ronda7
                    $ronda8
                    $ronda9
                    $ronda10
                    </table></div></div></div>
                    ";


                }else{
                    echo "Este reporte no existe";
                }
            }else{

            }
            break;
        
        default:
            # code...
            break;
    }
}
?>
<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>