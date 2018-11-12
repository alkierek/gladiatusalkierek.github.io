<?php
if(isset($_GET['equip'])){
    $itemEQUIP = (int)($_GET['equip']);
    $dollEQUIP = (int)($_GET['dollH']);
    if(!empty($_GET['ringP'])){
        $ringP = (int)($_GET['ringP']);
    }
    if($dollH == 0){
        $equip1 = mysql_query("SELECT * FROM item_user WHERE iu_id = '".$itemEQUIP."' AND iu_userID = '".$userID."' ");
        $equip2 = mysql_num_rows($equip1);
        if($equip2 != 0){
            $equip3 = mysql_fetch_array($equip1);
            $iuID = $equip3['iu_id'];
            $iuUSE = $equip3['iu_onUse'];
            if($iuUSE == 0){
                $iuITEM = $equip3['iu_itemID'];
                $equip4 = mysql_fetch_array(mysql_query("SELECT * FROM items WHERE item_id = '".$iuITEM."' "));
                $itemTYPE = $equip4['item_type'];
                if($itemTYPE == 1){
                    $pN = 'p3';
                    $preEquip1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_pos = 'p3' AND iu_onUse = '1' ");
                    $preEquip2 = mysql_num_rows($preEquip1);
                    if($preEquip2 != 0){
                        $reemplazar1 = 1;
                    }else{
                        $reemplazar1 = 0;
                    }
                }elseif($itemTYPE == 2){
                    $pN = 'p4';
                    $preEquip1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_pos = 'p4' AND iu_onUse = '1' ");
                    $preEquip2 = mysql_num_rows($preEquip1);
                    if($preEquip2 != 0){
                        $reemplazar1 = 1;
                    }else{
                        $reemplazar1 = 0;
                    }
                }elseif($itemTYPE == 3){
                    $pN = 'p5';
                    $preEquip1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_pos = 'p5' AND iu_onUse = '1' ");
                    $preEquip2 = mysql_num_rows($preEquip1);
                    if($preEquip2 != 0){
                        $reemplazar1 = 1;
                    }else{
                        $reemplazar1 = 0;
                    }
                }elseif($itemTYPE == 4){
                    $pN = 'p2';
                    $preEquip1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_pos = 'p2' AND iu_onUse = '1' ");
                    $preEquip2 = mysql_num_rows($preEquip1);
                    if($preEquip2 != 0){
                        $reemplazar1 = 1;
                    }else{
                        $reemplazar1 = 0;
                    }
                }elseif($itemTYPE == 5){
                    $pN = 'p9';
                    $preEquip1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_pos = 'p9' AND iu_onUse = '1' ");
                    $preEquip2 = mysql_num_rows($preEquip1);
                    if($preEquip2 != 0){
                        $reemplazar1 = 1;
                    }else{
                        $reemplazar1 = 0;
                    }
                }elseif($itemTYPE == 6){
                    if($ringP == 1){
                        $pN = 'p6';
                        $preEquip1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_pos = 'p6' AND iu_onUse = '1' ");
                        $preEquip2 = mysql_num_rows($preEquip1);
                        if($preEquip2 != 0){
                            $reemplazar1 = 1;
                        }else{
                            $reemplazar1 = 0;
                        }
                    }elseif($ringP == 2){
                        $pN = 'p7';
                        $preEquip1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_pos = 'p7' AND iu_onUse = '1' ");
                        $preEquip2 = mysql_num_rows($preEquip1);
                        if($preEquip2 != 0){
                            $reemplazar1 = 1;
                        }else{
                            $reemplazar1 = 0;
                        }
                    }
                }elseif($itemTYPE == 8){
                    $pN = 'p10';
                    $preEquip1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_pos = 'p10' AND iu_onUse = '1' ");
                    $preEquip2 = mysql_num_rows($preEquip1);
                    if($preEquip2 != 0){
                        $reemplazar1 = 1;
                    }else{
                        $reemplazar1 = 0;
                    }
                }elseif($itemTYPE == 9){
                    $pN = 'p11';
                    $preEquip1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_pos = 'p11' AND iu_onUse = '1' ");
                    $preEquip2 = mysql_num_rows($preEquip1);
                    if($preEquip2 != 0){
                        $reemplazar1 = 1;
                    }else{
                        $reemplazar1 = 0;
                    }
                }
                if($reemplazar1 == 1){
                    $preEquip3 = mysql_fetch_array($preEquip1);
                    $preEquip4 = $preEquip3['iu_id'];
                    $desequip7 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_onUse = '0' ");
                    $desequip8 = mysql_num_rows($desequip7);
                    if($desequip8 <= 10){
                        $newBOX = 1;
                    }elseif($desequip8 <= 20){
                        $newBOX = 2;
                    }elseif($desequip8 <= 30){
                        $newBOX = 3;
                    }elseif($desequip8 <= 40){
                        $newBOX = 4;
                    }elseif($desequip8 <= 50){
                        $newBOX = 5;
                    }elseif($desequip8 <= 60){
                        $newBOX = 6;
                    }elseif($desequip8 <= 70){
                        $newBOX = 7;
                    }elseif($desequip8 <= 80){
                        $newBOX = 8;
                    }
                    $reemplazar2 = "UPDATE item_user SET iu_onUse = '0' WHERE iu_id = '".$preEquip4."' ";
                    $reemplazar3 = "UPDATE item_user SET iu_pos = '' WHERE iu_id = '".$preEquip4."' ";
                    $reemplazar4 = "UPDATE item_user SET iu_box = '".$newBOX."' WHERE iu_id = '".$preEquip4."' ";
                    $reemplazarQ1 = mysql_query($reemplazar2);
                    $reemplazarQ2 = mysql_query($reemplazar3);
                    $reemplazarQ3 = mysql_query($reemplazar4);
                    $equip5 = "UPDATE item_user SET iu_onUse = '1' WHERE iu_id = '".$iuID."' ";
                    $equip6 = "UPDATE item_user SET iu_pos = '".$pN."' WHERE iu_id = '".$iuID."' ";
                    $equip7 = "UPDATE item_user SET iu_box = '0' WHERE iu_id = '".$iuID."' ";
                    $equip8 = mysql_query($equip5);
                    $equip9 = mysql_query($equip6);
                    $equip10 = mysql_query($equip7);
                    if($equip8 && $equip9 && $equip10){
                        echo "<body><script type='text/javascript'>window.location='overview.php?dollH=$dollH';</script></body>";
                    }
                }else{
                    $equip5 = "UPDATE item_user SET iu_onUse = '1' WHERE iu_id = '".$iuID."' ";
                    $equip6 = "UPDATE item_user SET iu_pos = '".$pN."' WHERE iu_id = '".$iuID."' ";
                    $equip7 = "UPDATE item_user SET iu_box = '0' WHERE iu_id = '".$iuID."' ";
                    $equip8 = mysql_query($equip5);
                    $equip9 = mysql_query($equip6);
                    $equip10 = mysql_query($equip7);
                    if($equip8 && $equip9 && $equip10){
                        echo "<body><script type='text/javascript'>window.location='overview.php?dollH=$dollH';</script></body>";
                    }
                }
            }
        }
    }
}

if(isset($_GET['desequip'])){
    $iuIDtoD = $_GET['desequip'];
    $desequip1 = mysql_query("SELECT * FROM item_user WHERE iu_id = '".$iuIDtoD."' ");
    $desequip2 = mysql_num_rows($desequip1);
    if($desequip2 == 0){

    }else{
        $desequip3 = "UPDATE item_user SET iu_user2 = 0 WHERE iu_id = '".$iuIDtoD."' ";
        $desequip4 = "UPDATE item_user SET iu_mercyID = 0 WHERE iu_id = '".$iuIDtoD."' ";
        $desequip5 = "UPDATE item_user SET iu_onUse = 0 WHERE iu_id = '".$iuIDtoD."' ";
        $desequip6 = "UPDATE item_user SET iu_pos = '' WHERE iu_id = '".$iuIDtoD."' ";
        $desequip7 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_onUse = '0' ");
        $desequip8 = mysql_num_rows($desequip7);
        if($desequip8 <= 10){
            $newBOX = 1;
            $desequip9 = "UPDATE item_user SET iu_box = '".$newBOX."' ";
            $query1 = mysql_query($desequip3);
            $query2 = mysql_query($desequip4);
            $query3 = mysql_query($desequip5);
            $query4 = mysql_query($desequip6);
            $query5 = mysql_query($desequip9);
            if($query1 && $query2 && $query3 && $query4 && $query5){
                echo "<body><script type='text/javascript'>window.location='overview.php?dollH=$dollH&inv=9';</script></body>";
            }
        }elseif($desequip8 <= 20){
            $newBOX = 2;
            $desequip9 = "UPDATE item_user SET iu_box = '".$newBOX."' ";
            $query1 = mysql_query($desequip3);
            $query2 = mysql_query($desequip4);
            $query3 = mysql_query($desequip5);
            $query4 = mysql_query($desequip6);
            $query5 = mysql_query($desequip9);
            if($query1 && $query2 && $query3 && $query4 && $query5){
                echo "<body><script type='text/javascript'>window.location='overview.php?dollH=$dollH&inv=9';</script></body>";
            }
        }elseif($desequip8 <= 30){
            $newBOX = 3;
            $desequip9 = "UPDATE item_user SET iu_box = '".$newBOX."' ";
            $query1 = mysql_query($desequip3);
            $query2 = mysql_query($desequip4);
            $query3 = mysql_query($desequip5);
            $query4 = mysql_query($desequip6);
            $query5 = mysql_query($desequip9);
            if($query1 && $query2 && $query3 && $query4 && $query5){
                echo "<body><script type='text/javascript'>window.location='overview.php?dollH=$dollH&inv=9';</script></body>";
            }
        }elseif($desequip8 <= 40){
            $newBOX = 4;
            $desequip9 = "UPDATE item_user SET iu_box = '".$newBOX."' ";
            $query1 = mysql_query($desequip3);
            $query2 = mysql_query($desequip4);
            $query3 = mysql_query($desequip5);
            $query4 = mysql_query($desequip6);
            $query5 = mysql_query($desequip9);
            if($query1 && $query2 && $query3 && $query4 && $query5){
                echo "<body><script type='text/javascript'>window.location='overview.php?dollH=$dollH&inv=9';</script></body>";
            }
        }elseif($desequip8 <= 50){
            $newBOX = 5;
            $desequip9 = "UPDATE item_user SET iu_box = '".$newBOX."' ";
            $query1 = mysql_query($desequip3);
            $query2 = mysql_query($desequip4);
            $query3 = mysql_query($desequip5);
            $query4 = mysql_query($desequip6);
            $query5 = mysql_query($desequip9);
            if($query1 && $query2 && $query3 && $query4 && $query5){
                echo "<body><script type='text/javascript'>window.location='overview.php?dollH=$dollH&inv=9';</script></body>";
            }
        }elseif($desequip8 <= 60){
            $newBOX = 6;
            $desequip9 = "UPDATE item_user SET iu_box = '".$newBOX."' ";
            $query1 = mysql_query($desequip3);
            $query2 = mysql_query($desequip4);
            $query3 = mysql_query($desequip5);
            $query4 = mysql_query($desequip6);
            $query5 = mysql_query($desequip9);
            if($query1 && $query2 && $query3 && $query4 && $query5){
                echo "<body><script type='text/javascript'>window.location='overview.php?dollH=$dollH&inv=9';</script></body>";
            }
        }elseif($desequip8 <= 70){
            $newBOX = 7;
            $desequip9 = "UPDATE item_user SET iu_box = '".$newBOX."' ";
            $query1 = mysql_query($desequip3);
            $query2 = mysql_query($desequip4);
            $query3 = mysql_query($desequip5);
            $query4 = mysql_query($desequip6);
            $query5 = mysql_query($desequip9);
            if($query1 && $query2 && $query3 && $query4 && $query5){
                echo "<body><script type='text/javascript'>window.location='overview.php?dollH=$dollH&inv=9';</script></body>";
            }
        }elseif($desequip8 <= 80){
            $newBOX = 8;
            $desequip9 = "UPDATE item_user SET iu_box = '".$newBOX."' ";
            $query1 = mysql_query($desequip3);
            $query2 = mysql_query($desequip4);
            $query3 = mysql_query($desequip5);
            $query4 = mysql_query($desequip6);
            $query5 = mysql_query($desequip9);
            if($query1 && $query2 && $query3 && $query4 && $query5){
                echo "<body><script type='text/javascript'>window.location='overview.php?dollH=$dollH&inv=9';</script></body>";
            }
        }else{

        }
    }
}
?>