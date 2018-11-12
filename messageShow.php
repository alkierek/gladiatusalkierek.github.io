
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
<a href="messages.php" class="awesome-tabs">Vision general<div class="navBG"></div></a>
</td>
<td>
<a href="messageNew.php" class="awesome-tabs">escribir mensaje<div class="navBG"></div></a>
</td>
<td>
<a href="messageShow.php" class="awesome-tabs current">Carpetas</a>
</td>
</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">
<?php mysql_query("UPDATE users SET user_msgsN = 0 WHERE user_id = '".$userID."' "); ?>
<form action="messageMoveDelete.php" method="POST" accept-charset="utf-8">
<div style="padding:15px;">
<div class="title_box">
<div class="title_inner">
Bandeja de entrada</div>
</div>
<div class="title2_box">
<div class="title2_inner">
<input type="hidden" name="folder" value="0" />
<input type="hidden" name="page" value="" />
<table style="table-layout:fixed; width:100%">
<?php
$mensajes1 = mysql_query("SELECT * FROM messages WHERE msg_userID = '".$userID."' order by msg_id DESC ");
$mensajes2 = mysql_num_rows($mensajes1);
$sinM = 0;
if (empty($mensajes2)) {
    $sinM = 1;
}else{
    $conteo1 = 1;
    $conteo2 = $mensajes2;
    while ($conteo1 <= $conteo2) {
        if ($conteo1 == 1) {
            $tr1 = 'class="alt"';
        }
        $conteo1++;
        $datosMSJ = mysql_fetch_array($mensajes1);
        $id = $datosMSJ['msg_id'];
        $fecha = $datosMSJ['msg_date'];
        $tipo = $datosMSJ['msg_type'];
        if ($tipo == 3) {
            $nombreENV = $datosMSJ['msg_userNAME'];
        }
        if ($tipo == 2) {
            $nombreENV = $datosMSJ['msg_userNAME'];
            $env1 = mysql_query("SELECT * FROM users WHERE user_name = '".$nombreENV."' ");
            if (!empty($env1)) {
                $env3 = mysql_fetch_array($env1);
                $idENV = $env3['user_id'];
            } else {
                $idENV = $userID;
            }
            $asunto = $datosMSJ['msg_subj'];
        }
        $texto = $datosMSJ['msg_text'];
        if ($tipo == 1) {
?>

<tr <?php echo $tr1; ?>>
<td valign="top" width="30px"><input type="checkbox" name="x[]" value="<?php echo $id; ?>"><input type="hidden" name="y[]" value="<?php echo $id; ?>"></td>
<td valign="top" width="25%"><?php echo $fecha; ?></td>
<td class="tdn"><?php echo $texto; ?></td>
</tr>

<?php
        } elseif ($tipo == 2) {
?>


<tr>
<td valign="top" width="30px">
<input type="checkbox" name="x[]" value="<?php echo $id; ?>">
<input type="hidden" name="y[]" value="<?php echo $id; ?>">
</td>
<td valign="top" width="25%">
<?php echo $fecha; ?></td><td class="tdn"><table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
<td>Mensaje <a href="player.php?p=<?php echo $idENV; ?>"><?php echo $nombreENV; ?></a> | Asunto: <?php echo $asunto; ?> </td>
<td style="text-align: right;"><a href="messages.php?bad=3892650">(reportar)</a></td>
</tr>
<tr>
<td colspan="2"><textarea cols="35" rows="4" class="input"><?php echo $texto; ?></textarea></td>
</tr>
<tr>
<td colspan="3"><a href="messageNew.php?profileName=<?php echo $nombreENV; ?>">responder</a></td>
</tr>
</table></td>
</tr>


<?php
        } elseif ($tipo == 3) {
?>

<tr class="alt">
<td valign="top" width="30px"><input type="checkbox" name="x[]" value="4741292"><input type="hidden" name="y[]" value="4741292"></td>
<td valign="top" width="25%"><?php echo $fecha; ?></td><td class="tdn">Circular de: <?php echo $nombreENV; ?><br /><?php echo $texto; ?></td>
</tr>

<?php
        }
    }
}
?>
<?php
if ($sinM == 1) {
?>
<div class="title2_inner">
<input type="hidden" name="folder" value="0" />
<input type="hidden" name="page" value="" />
<div style="padding:20px;">No hay mensajes</div>
</div>
<?php
}else{
?>
<tr><td colspan="3" style="padding-top: 10px; border-top: 3px double #b28b60;">
<select class="input" name="messageSelection">
<option value="marked">mensajes seleccionados</option>
<option value="all">todos los mensajes</option>
<option value="unmarked">mensajes no seleccionados</option>
</select>
<select class="input" name="messageAction">
<option value="delete">borrar</option>
<option value="move1">mover a la carpeta Nuevo Nivel</option>s
</select>
</td></tr>
<tr><td class="tdn" colspan="3"><input type="submit" value="Ir!" class="button3"></td></tr>
<?php
}
?>
</table></div></div></div></form>

<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>