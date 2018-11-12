
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
if(isset($_POST['genderChangeUpdate'])){
    $gender = $_POST['gender'];
    if($gender == 1){
        $gender = 'm';
        $mysql1 = "UPDATE users SET user_gender = '".$gender."' WHERE user_id = ".$userID." ";
        $query = mysql_query($mysql1);
        if($query){
            ?>
            <script type="text/javascript">
            window.location="overview.php";
            </script>
            <?php
        }
    }else{
        $gender = 'f';
        $mysql1 = "UPDATE users SET user_gender = '".$gender."' WHERE user_id = ".$userID." ";
        $query = mysql_query($mysql1);
        if($query){
            ?>
            <script type="text/javascript">
            window.location="overview.php";
            </script>
            <?php
        }
    }
}
?>
                                <form action="genderchangeUPDATE.php"  method="POST" accept-charset="utf-8">    <div class="contentItem" style="margin-top: 20px;">
        <h3 style="text-align:center;">Elige tu genero aquí - pero elige sabiamente!</h3>
        <div class="contentItem_content" style="text-align:center;">
            <div style="width: 380px;margin-left:auto;margin-right:auto;">
                <div class="gender_box" id="gender_1" onclick="selectGender('1');">
                    <img src="8501/img/faces/gladiator_1_m.jpg" />
                </div>
                <div class="gender_box" id="gender_2" onclick="selectGender('2');">
                    <img src="8501/img/faces/gladiator_1_f.jpg" />
                </div>
            </div>
            <br class="clearfloat" />
            <br />
            <input type="submit" name="genderChangeUpdate" value="Elegir" class="button2"/>
            <br />
            <br />
        </div>
    </div>
    <input type="hidden" name="gender" id="gender" value="1" />
</form>

<script type="text/javascript">
    function selectGender(gender)
    {
        $('gender_1').removeClass('gender_selected');
        $('gender_2').removeClass('gender_selected');

        $('gender').value = gender;
        $('gender_' + gender).addClass('gender_selected');
    }
    selectGender('1');
</script>

<script type='text/javascript'>var tickerArray = new Array();function pad(n, width, z) {
  z = z || "0";
  n = n + "";
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}function doTicker(){
                                    n=new Date();
                                    if (tickerArray.length > 0)
                                    {
                                        for (i = 0; i < tickerArray.length; i++)
                                        {
                                            if (isNaN(document.getElementById(tickerArray[i]["id"])))
                                            {
                                                var e = document.getElementById(tickerArray[i]["id"]);
                                                s = tickerArray[i]["sek"];
                                                seconds = tickerArray[i]["sek"];
                                                m = 0;
                                                h = 0;
                                                d = 0;
                                                if (s < 0)
                                                    e.innerHTML = "---";
                                                else
                                                {
                                                    var timeTXT = s + " s";
                                                    if (s > 59)
                                                    {
                                                        m = Math.ceil(s / 60);
                                                        s = s-m * 60;
                                                        timeTXT = m + " m";
                                                    }
                                                    if (m > 59)
                                                    {
                                                        h = Math.ceil(m / 60);
                                                        m = m - h * 60;
                                                        timeTXT = h + " h";
                                                    }
                                                    if (h > 24)
                                                    {
                                                        d = Math.ceil(h / 24);
                                                        h = h-d * 24;
                                                        timeTXT = d + " d";
                                                    }

                                                    e.innerHTML = timeTXT;
var numdays    = Math.floor(seconds / 86400);
var numhours   = pad(Math.floor((seconds % 86400) / 3600), 2);
var numminutes = pad(Math.floor(((seconds % 86400) % 3600) / 60), 2);
var numseconds = pad(((seconds % 86400) % 3600) % 60, 2);

e.innerHTML = (numdays ? numdays + " d " : "") + numhours + ":" + numminutes + ":" + numseconds + "";
                                                    tickerArray[i]["sek"]--;
                                                }
                                            }
                                        }
                                    window.setTimeout("doTicker();",999);
                                }
                            }doTicker();</script>                        </div>
                    </div>
                </div>
<?php
include ('inc/footer.php');
?>