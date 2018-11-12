
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

<td><a href="news.php" class="awesome-tabs current">Novedades</a></td>
<td><a href="serverEvents.php" class="awesome-tabs">Eventos<div class="navBG"></div></a></td>
<td><a href="surveys.php" class="awesome-tabs">Encuentas<div class="navBG"></div></a></td>

</tr></table></li></ul></div>
<?php
include ('inc/chat.php');
include ('inc/mainmenu.php');
?>
<div id="content">
<?php
$news1 = mysql_query("SELECT * FROM news ORDER BY news_id DESC LIMIT 10 ");
$news2 = mysql_num_rows($news1);
if (!empty($news2)) {
    $newsc = 1;
    while ($newsc <= $news2) {
        $newsc++;
        $news3 = mysql_fetch_array($news1);
        $newsTYPE = $news3['news_type'];
        $newsTITLE = $news3['news_title'];
        $newsDATE = $news3['news_date'];
        $newsTEXT = $news3['news_text'];
        $newsLINK = $news3['news_link'];
?>
<div class="news_post">
    <div class="contentItem">
        <h3>
            <div class="news_box_icon">
                <div class="news_icon news_icon_<?php echo $newsTYPE; ?>"></div>
            </div>
            <div class="news_box_title">
                <div class="news_title"><?php echo $newsTITLE; ?></div>
                <div class="news_date">
                    <?php echo $newsDATE; ?>                </div>
            </div>
        </h3>
        <div class="contentItem_content">
            <div class="news_content"><?php echo $newsTEXT; ?>  </div>
            <div class="news_footer">
                <div><a href="<?php echo $newsLINK; ?>" target="_blank" class="news_readmore">Continuar leyendo</a></div>
                <br class="clearfloat" />
            </div>
        </div>
    </div>
</div>
<?php
    }
}
?>
<?php
include ('inc/pre-footer.php');
include ('inc/footer.php');
?>