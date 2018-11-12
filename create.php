
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

<td><a href="guild.php" class="awesome-tabs current">Alianza</a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">
<?php

if ($guser == 1) {
    echo "<body><script type='text/javascript'>window.location='guild.php';</script></body>";
}

if (isset($_POST['guildFound'])) {
    $tag = $_POST['tag'];
    $name = $_POST['name'];
    $creacion1 = mysql_num_rows(mysql_query("SELECT * FROM guilds_data WHERE gd_name = '".$name."' "));
    if (empty($creacion1)) {
        $creacion2 = mysql_num_rows(mysql_query("SELECT * FROM guilds WHERE g_masterID = '".$userID."' "));
        if (empty($creacion2)) {
            mysql_query("INSERT INTO guilds SET g_masterID = '".$userID."' ");
            mysql_query("INSERT INTO guilds_data SET gd_name = '".$name."', gd_tag = '".$tag."' ");
            $creacion3 = mysql_fetch_array(mysql_query("SELECT * FROM guilds WHERE g_masterID = '".$userID."' "));
            $idG = $creacion3['g_id'];
            mysql_query("INSERT INTO guilds_members SET gmb_userID = '".$userID."', gmb_guildID = '".$idG."', gmb_rank = 99 ");
            echo "listo";
        } else {
            echo "Ya usted pertenece a una Alianza.";
        }
    } else {
        echo "Este nombre de Alianza ya esta en uso.";
    }
}
?>

                                <div style="margin:20px">
    <div class="title_box">
        <div class="title_inner">Fundar alianza</div>
    </div>
    <div class="title2_box">
        <div class="title2_inner">
            <p>
                <form action="create.php" method="POST">
                    <table width="100%">
                        <tr>
                            <th>Etiqueta de la alianza (max 8 Caracteres)</th>
                            <th><input type="text" name="tag" maxlength="8" size="8" value="" /></th>
                        </tr>
                        <tr>
                            <th>Nombre (max 35 Caracteres)</th>
                            <th><input type="text" name="name" maxlength="35" size="20" value="" /></th>
                        </tr>
                        <tr>
                            <th colspan="2"><input type="submit" value="fundar" class="button3" name="guildFound" /></th>
                        </tr>
                    </table>
                </form>
            </p>
       </div>
   </div>
</div>


<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>