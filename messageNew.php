
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
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
            <ul id="mainnav">
            <li>
            <table style="top: -23px; position: relative; height: 60px;">
            <tr style="vertical-align: bottom;">
            <td>
            <a href="messages.php" class="awesome-tabs">Vision general<div class="navBG"></div></a>
            </td>
            <td>
            <a href="messageNew.php" class="awesome-tabs current">escribir mensaje</a>
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
<?php

if (isset($_GET['profileName'])) {
    $pfn = $_GET['profileName'];
}else{
    $pfn = '';
}

if (isset($_POST['sent'])) {
    $un = $userNAME;
    $us = $_POST['messageRecipient'];
    $usDATA = mysql_query("SELECT * FROM accounts WHERE acc_name = '".$us."' ");
    if (empty($usDATA)) {
        echo "Este usuario no existe";
    }else{
        $usDATA2 = mysql_fetch_array($usDATA);
        $usID1 = $usDATA2['acc_id'];
        $usDATA3 = mysql_query("SELECT * FROM users WHERE user_accID = '".$usID1."' ");
        if (empty($usDATA3)) {
            echo "Este usuario no existe";
        }else{
            $usDATA4 = mysql_fetch_array($usDATA3);
            $usID = $usDATA4['user_id'];
            $subj = $_POST['messageSubject'];
            $text = $_POST['messageContent'];
            $enviar1 = "INSERT INTO messages SET msg_userID = '".$usID."', msg_type = 2, msg_userNAME = '".$un."', msg_subj = '".$subj."', msg_text = '".$text."' ";
            $enviar2 = mysql_query($enviar1);
            if ($enviar2) {
                echo "Mensaje enviado";
            }
        }
    }
}

?>

                                <script type="text/javascript" src="8501/js/misc.js"></script>
<div style="margin-top: 20px;">
<div style=";margin-left:auto;margin-right:auto;width:469px;display:block"><div><div class="scroll_top_left"></div><div class="scroll_top_center" style="width:400px;"></div><div class="scroll_top_right"></div></div><div><div class="scroll_body_left"  style="height:375px;"></div><div class="scroll_body_center" style="width:400px;height:375px;">    <form id="messageForm" action="messageNew.php" method="POST" accept-charset="utf-8">
            <table width="100%">
            <tr>
                <td><span style="font-weight: bold;">Remitente:</span> <?php echo $userNAME; ?></td>
            </tr>
            <tr>
                <td><span style="font-weight: bold;">Jugador</span></td>
            </tr>
            <tr>
                <td>
                                    <input type="text" name="messageRecipient" size="30" maxlength="30" class="input" tabindex="1"  value="<?php echo $pfn; ?>">
                                </td>
            </tr>
            <tr>
                <td><span style="font-weight: bold;">Asunto</span></td>
            </tr>
            <tr>
                <td>
                                    <input type="text" id="messageSubject" name="messageSubject" size="30" maxlength="30" class="input" tabindex="2"  value="">
                                </td>
            </tr>
            <tr>
                <td valign="top"><span style="font-weight: bold;">Mensaje</span> (<span id="messageCounter">0</span> / 4000 Caracteres)</td>
            </tr>
            <tr>
                <td><textarea id="message" name="messageContent" class="input" tabindex="3" style="width:95%;height:150px" ></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" name="sent" value="enviar" class="button3" tabindex="4" ></td>
            </tr>
        </table>
    </form>
</div><div class="scroll_body_right"  style="height:375px;"></div></div><div><div class="scroll_bottom_left"></div><div class="scroll_bottom_center" style="width:400px;"></div><div class="scroll_bottom_right"></div></div></div><div class="clearfloat"></div></div>
<script type="text/javascript">
    addCharCounter('message', 'messageCounter');
            setFocus('messageForm');
    </script>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>