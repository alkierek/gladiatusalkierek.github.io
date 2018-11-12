<?php
if(isset($_GET['inv'])){
    $invN = $_GET['inv'];
    $mysql1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_onUse = 0 AND iu_box = '".$invN."' ");
    $mysql2 = mysql_num_rows($mysql1);
    if($mysql2 == 0){
        $itemH = 1;
    }else{
        $itemH = 1;
    }
    $itemH = 1;
    if($invN <= 8){
        if($invN == 1){
            $current1 = ' current';
            $current2 = '';
            $current3 = '';
            $current4 = '';
            $current5 = '';
            $current6 = '';
            $current7 = '';
            $current8 = '';
            $current9 = '';
        }elseif($invN == 2){
            $current1 = '';
            $current2 = ' current';
            $current3 = '';
            $current4 = '';
            $current5 = '';
            $current6 = '';
            $current7 = '';
            $current8 = '';
            $current9 = '';
        }elseif($invN == 3){
            $current1 = '';
            $current2 = '';
            $current3 = ' current';
            $current4 = '';
            $current5 = '';
            $current6 = '';
            $current7 = '';
            $current8 = '';
            $current9 = '';
        }elseif($invN == 4){
            $current1 = '';
            $current2 = '';
            $current3 = '';
            $current4 = ' current';
            $current5 = '';
            $current6 = '';
            $current7 = '';
            $current8 = '';
            $current9 = '';
        }elseif($invN == 5){
            $current1 = '';
            $current2 = '';
            $current3 = '';
            $current4 = '';
            $current5 = ' current';
            $current6 = '';
            $current7 = '';
            $current8 = '';
            $current9 = '';
        }elseif($invN == 6){
            $current1 = '';
            $current2 = '';
            $current3 = '';
            $current4 = '';
            $current5 = '';
            $current6 = ' current';
            $current7 = '';
            $current8 = '';
            $current9 = '';
        }elseif($invN == 7){
            $current1 = '';
            $current2 = '';
            $current3 = '';
            $current4 = '';
            $current5 = '';
            $current6 = '';
            $current7 = ' current';
            $current8 = '';
            $current9 = '';
        }elseif($invN == 8){
            $current1 = '';
            $current2 = '';
            $current3 = '';
            $current4 = '';
            $current5 = '';
            $current6 = '';
            $current7 = '';
            $current8 = ' current';
            $current9 = '';
        }elseif($invN == 9){
            $current1 = '';
            $current2 = '';
            $current3 = '';
            $current4 = '';
            $current5 = '';
            $current6 = '';
            $current7 = '';
            $current8 = '';
            $current9 = ' current';
        }
    }elseif($invN == 9){
        $mysql1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_onUse = 1 ");
        $mysql2 = mysql_num_rows($mysql1);
        if($mysql2 == 0){
            $itemE = 1;
        }else{
            $itemE = 0;
        }
        $current1 = '';
        $current2 = '';
        $current3 = '';
        $current4 = '';
        $current5 = '';
        $current6 = '';
        $current7 = '';
        $current8 = '';
        $current9 = ' current';
    }else{
        $invN = 1;
        $current1 = ' current';
        $current2 = '';
        $current3 = '';
        $current4 = '';
        $current5 = '';
        $current6 = '';
        $current7 = '';
        $current8 = '';
        $current9 = '';
    }
}else{
    $invN = 1;
    $mysql1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_onUse = 0 AND iu_box = '".$invN."' ");
    $mysql2 = mysql_num_rows($mysql1);
    if($mysql2 == 0){
        $itemH = 0;
    }else{
        $itemH = 1;
    }
    $current1 = ' current';
    $current2 = '';
    $current3 = '';
    $current4 = '';
    $current5 = '';
    $current6 = '';
    $current7 = '';
    $current8 = '';
    $current9 = '';
}
?>