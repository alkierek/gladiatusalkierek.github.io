<?php
    $p2item1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_user2 = 0 AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p2' ");
    if(!empty($p2item1)){
        $p2item2 = mysql_num_rows($p2item1);
    }else{
        $p2item2 = 0;
    }
    if($p2item2 == 0){
        $p2TEXTimg = "";
    }else{
        $p2item3 = mysql_fetch_array($p2item1);
        $p2IDele = $p2item3['iu_itemID'];
        $p2item4 = mysql_fetch_array(mysql_query("SELECT * FROM items WHERE item_id = '".$p2IDele."' "));
        $p2IMAGE = $p2item4['item_image'];
        $p2TEXTimg = "<img style='bottom:0px' src='8501/img/item/$p2IMAGE.gif' />";
        $p2IUid = $p2item3['iu_id'];
    }

    ## 

    $p3item1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_user2 = 0 AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p3' ");
    if(!empty($p3item1)){
        $p3item2 = mysql_num_rows($p3item1);
    }else{
        $p3item2 = 0;
    }
    if($p3item2 == 0){
        $p3TEXTimg = "";
    }else{
        $p3item3 = mysql_fetch_array($p3item1);
        $p3IDele = $p3item3['iu_itemID'];
        $p3item4 = mysql_fetch_array(mysql_query("SELECT * FROM items WHERE item_id = '".$p3IDele."' "));
        $p3IMAGE = $p3item4['item_image'];
        $p3TEXTimg = "<img style='bottom:0px' src='8501/img/item/$p3IMAGE.gif' />";
        $p3IUid = $p3item3['iu_id'];
    }

    ##

    $p4item1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_user2 = 0 AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p4' ");
    if(!empty($p4item1)){
        $p4item2 = mysql_num_rows($p4item1);
    }else{
        $p4item2 = 0;
    }
    if($p4item2 == 0){
        $p4TEXTimg = "";
    }else{
        $p4item3 = mysql_fetch_array($p4item1);
        $p4IDele = $p4item3['iu_itemID'];
        $p4item4 = mysql_fetch_array(mysql_query("SELECT * FROM items WHERE item_id = '".$p4IDele."' "));
        $p4IMAGE = $p4item4['item_image'];
        $p4TEXTimg = "<img style='bottom:0px' src='8501/img/item/$p4IMAGE.gif' />";
        $p4IUid = $p4item3['iu_id'];
    }

    ##

    $p5item1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_user2 = 0 AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p5' ");
    if(!empty($p5item1)){
        $p5item2 = mysql_num_rows($p5item1);
    }else{
        $p5item2 = 0;
    }
    if($p5item2 == 0){
        $p5TEXTimg = "";
    }else{
        $p5item3 = mysql_fetch_array($p5item1);
        $p5IDele = $p5item3['iu_itemID'];
        $p5item4 = mysql_fetch_array(mysql_query("SELECT * FROM items WHERE item_id = '".$p5IDele."' "));
        $p5IMAGE = $p5item4['item_image'];
        $p5TEXTimg = "<img style='bottom:0px' src='8501/img/item/$p5IMAGE.gif' />";
        $p5IUid = $p5item3['iu_id'];
    }

    ##

    $p6item1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_user2 = 0 AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p6' ");
    if(!empty($p6item1)){
        $p6item2 = mysql_num_rows($p6item1);
    }else{
        $p6item2 = 0;
    }
    if($p6item2 == 0){
        $p6TEXTimg = "";
    }else{
        $p6item3 = mysql_fetch_array($p6item1);
        $p6IDele = $p6item3['iu_itemID'];
        $p6item4 = mysql_fetch_array(mysql_query("SELECT * FROM items WHERE item_id = '".$p6IDele."' "));
        $p6IMAGE = $p6item4['item_image'];
        $p6TEXTimg = "<img style='bottom:0px' src='8501/img/item/$p6IMAGE.gif' />";
        $p6IUid = $p6item3['iu_id'];
    }

    ##

    $p7item1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_user2 = 0 AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p7' ");
    if(!empty($p7item1)){
        $p7item2 = mysql_num_rows($p7item1);
    }else{
        $p7item2 = 0;
    }
    if($p7item2 == 0){
        $p7TEXTimg = "";
    }else{
        $p7item3 = mysql_fetch_array($p7item1);
        $p7IDele = $p7item3['iu_itemID'];
        $p7item4 = mysql_fetch_array(mysql_query("SELECT * FROM items WHERE item_id = '".$p7IDele."' "));
        $p7IMAGE = $p7item4['item_image'];
        $p7TEXTimg = "<img style='bottom:0px' src='8501/img/item/$p7IMAGE.gif' />";
        $p7IUid = $p7item3['iu_id'];
    }

    ##

    $p9item1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_user2 = 0 AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p9' ");
    if(!empty($p9item1)){
        $p9item2 = mysql_num_rows($p9item1);
    }else{
        $p9item2 = 0;
    }
    if($p9item2 == 0){
        $p9TEXTimg = "";
    }else{
        $p9item3 = mysql_fetch_array($p9item1);
        $p9IDele = $p9item3['iu_itemID'];
        $p9item4 = mysql_fetch_array(mysql_query("SELECT * FROM items WHERE item_id = '".$p9IDele."' "));
        $p9IMAGE = $p9item4['item_image'];
        $p9TEXTimg = "<img style='bottom:0px' src='8501/img/item/$p9IMAGE.gif' />";
        $p9IUid = $p9item3['iu_id'];
    }

    ##

    $p10item1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_user2 = 0 AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p10' ");
    if(!empty($p10item1)){
        $p10item2 = mysql_num_rows($p10item1);
    }else{
        $p10item2 = 0;
    }
    if($p10item2 == 0){
        $p10TEXTimg = "";
    }else{
        $p10item3 = mysql_fetch_array($p10item1);
        $p10IDele = $p10item3['iu_itemID'];
        $p10item4 = mysql_fetch_array(mysql_query("SELECT * FROM items WHERE item_id = '".$p10IDele."' "));
        $p10IMAGE = $p10item4['item_image'];
        $p10TEXTimg = "<img style='bottom:0px' src='8501/img/item/$p10IMAGE.gif' />";
        $p10IUid = $p10item3['iu_id'];
    }

    ##

    $p11item1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_user2 = 0 AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p11' ");
    if(!empty($p11item1)){
        $p11item2 = mysql_num_rows($p11item1);
    }else{
        $p11item2 = 0;
    }
    if($p11item2 == 0){
        $p11TEXTimg = "";
    }else{
        $p11item3 = mysql_fetch_array($p11item1);
        $p11IDele = $p11item3['iu_itemID'];
        $p11item4 = mysql_fetch_array(mysql_query("SELECT * FROM items WHERE item_id = '".$p11IDele."' "));
        $p11IMAGE = $p11item4['item_image'];
        $p11TEXTimg = "<img style='bottom:0px' src='8501/img/item/$p11IMAGE.gif' />";
        $p11IUid = $p11item3['iu_id'];
    }
?>