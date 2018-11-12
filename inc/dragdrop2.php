<script type="text/javascript" src="8501/js/dragdrop2.js"></script><script type="text/javascript">
                    var INIT_DHTML = true;
                    var PICK_ITEM = true;
                    SET_DHTML(CURSOR_MOVE, "p8_1_1" + NO_DRAG, "p2_1_1", "p3_1_1", "p4_1_1", "p6_1_1", "p7_1_1", "p5_1_1", "p9_1_1", "p10_1_1", "p11_1_1", "p512_1_1", "p512_1_2", "p512_1_3", "p512_1_4", "p512_1_5", "p512_2_1", "p512_2_2", "p512_2_3", "p512_2_4", "p512_2_5", "p512_3_1", "p512_3_2", "p512_3_3", "p512_3_4", "p512_3_5", "p512_4_1", "p512_4_2", "p512_4_3", "p512_4_4", "p512_4_5", "p512_5_1", "p512_5_2", "p512_5_3", "p512_5_4", "p512_5_5", "p512_6_1", "p512_6_2", "p512_6_3", "p512_6_4", "p512_6_5", "p512_7_1", "p512_7_2", "p512_7_3", "p512_7_4", "p512_7_5", "p512_8_1", "p512_8_2", "p512_8_3", "p512_8_4", "p512_8_5");
                    var pickObj = new DDObj("");
                    var aElts = [dd.elements.p8_1_1, dd.elements.p2_1_1, dd.elements.p3_1_1, dd.elements.p4_1_1, dd.elements.p6_1_1, dd.elements.p7_1_1, dd.elements.p5_1_1, dd.elements.p9_1_1, dd.elements.p10_1_1, dd.elements.p11_1_1, dd.elements.p512_1_1, dd.elements.p512_1_2, dd.elements.p512_1_3, dd.elements.p512_1_4, dd.elements.p512_1_5, dd.elements.p512_2_1, dd.elements.p512_2_2, dd.elements.p512_2_3, dd.elements.p512_2_4, dd.elements.p512_2_5, dd.elements.p512_3_1, dd.elements.p512_3_2, dd.elements.p512_3_3, dd.elements.p512_3_4, dd.elements.p512_3_5, dd.elements.p512_4_1, dd.elements.p512_4_2, dd.elements.p512_4_3, dd.elements.p512_4_4, dd.elements.p512_4_5, dd.elements.p512_5_1, dd.elements.p512_5_2, dd.elements.p512_5_3, dd.elements.p512_5_4, dd.elements.p512_5_5, dd.elements.p512_6_1, dd.elements.p512_6_2, dd.elements.p512_6_3, dd.elements.p512_6_4, dd.elements.p512_6_5, dd.elements.p512_7_1, dd.elements.p512_7_2, dd.elements.p512_7_3, dd.elements.p512_7_4, dd.elements.p512_7_5, dd.elements.p512_8_1, dd.elements.p512_8_2, dd.elements.p512_8_3, dd.elements.p512_8_4, dd.elements.p512_8_5];
                    var maxcols = 0;
                    var maxrows = 0;
                    AddCharDiv("p8_1_1", 0, 0, 0, 0, 0, 64, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    dd.elements.p8_1_1.contenttypeaccept = 64;
                    dd.elements.p8_1_1.w = 168;
                    dd.elements.p8_1_1.css.width = "168px";
                    dd.elements.p8_1_1.h = 194;
                    dd.elements.p8_1_1.css.height = "194px";

                    <?php
                    $tablep2 = "";
                    $tablep3 = "";
                    $tablep4 = "";
                    $tablep5 = "";
                    $tablep6 = "";
                    $tablep7 = "";
                    $tablep9 = "";
                    $tablep10 = "";
                    $tablep11 = "";
                    ?>

                    //p2=CASCO
                    //siempre son 100,18 (porque son 2x2)
                    //16,16 (siempre)
                    //AddCharDiv("pX_1_1", corX, corY, 0, tamX, tamY, posDoll(type), idItem, sellCost, 0, 0, 0, 0, soulItem, levelI, X, "", [ ]);

                    <?php
                    $dditem1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p2' ");
                    $dditem2 = mysql_num_rows($dditem1);
                    if($dditem2 == 0){

                    }else{
                         $dditem3 = mysql_fetch_array($dditem1);
                         $itemID = $dditem3['iu_itemID'];
                         $itemP = 2;
                         $itemSOUL = $dditem3['iu_soul'];
                         $itemIID = $dditem3['iu_id'];
                         include ('inc/dragtipbox.php');
                    }
                    ?>

                    AddCharDiv("p2_1_1", 100, 18, 0, 16, 16, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, "<?php echo $tablep2; ?>", [ ]);
                    
                    //p3=ARMA
                    //37,89 (si es 1x3), 37,105 (si es 1x2), 21,89 (si es 2x3)

                    <?php
                    $dditem1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p3' ");
                    $dditem2 = mysql_num_rows($dditem1);
                    if($dditem2 == 0){
                         $corX = 37;
                         $corY = 89;
                    }else{
                         $dditem3 = mysql_fetch_array($dditem1);
                         $itemID = $dditem3['iu_itemID'];
                         $itemP = 2;
                         $itemSOUL = $dditem3['iu_soul'];
                         $itemIID = $dditem3['iu_id'];
                         include ('inc/dragtipbox.php');
                         $corX = 37;
                         $corY = 89;
                         if($itemSP == 2){
                              $corX = 37;
                              $corY = 105;
                         }elseif($itemSP == 3){
                              $corX = 37;
                              $corY = 89;
                         }elseif($itemSP == 6){
                              $corX = 21;
                              $corY = 89;
                         }else{
                              $corX = 37;
                              $corY = 89;
                         }
                    }
                    ?>

                    AddCharDiv("p3_1_1", <?php echo $corX; ?>, <?php echo $corY; ?>, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, "<?php echo $tablep3; ?>", [ ]);
                    
                    //p4=ESCUDOS
                    //181,105 (si es 2x2) 181,89 (si es 2x3)

                    <?php
                    $dditem1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p4' ");
                    $dditem2 = mysql_num_rows($dditem1);
                    if($dditem2 == 0){

                    }else{
                         $dditem3 = mysql_fetch_array($dditem1);
                         $itemID = $dditem3['iu_itemID'];
                         $itemP = 2;
                         $itemSOUL = $dditem3['iu_soul'];
                         $itemIID = $dditem3['iu_id'];
                         include ('inc/dragtipbox.php');
                         $corX = 181;
                         $corY = 105;
                         if($itemSP == 4){
                              $corX = 181;
                              $corY = 105;
                         }elseif($itemSP == 6){
                              $corX = 181;
                              $corY = 89;
                         }
                    }
                    ?>

                    AddCharDiv("p4_1_1", <?php echo $corX; ?>, <?php echo $corY; ?>, 0, 32, 32, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, "<?php echo $tablep4; ?>", [ ]);
                    

                    //p5=PETO
                    //100,105 (si es 2x2) 100,89 (si es 2x3)

                    <?php
                    $dditem1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p5' ");
                    $dditem2 = mysql_num_rows($dditem1);
                    if($dditem2 == 0){

                    }else{
                         $dditem3 = mysql_fetch_array($dditem1);
                         $itemID = $dditem3['iu_itemID'];
                         $itemP = 2;
                         $itemSOUL = $dditem3['iu_soul'];
                         $itemIID = $dditem3['iu_id'];
                         include ('inc/dragtipbox.php');
                         if($itemSP == 4){
                              $corX = 100;
                              $corY = 105;
                         }elseif($itemSP == 6){
                              $corX = 100;
                              $corY = 89;
                         }
                    }
                    ?>

                    AddCharDiv("p5_1_1", <?php echo $corX; ?>, <?php echo $corY; ?>, 0, 32, 32, 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, "<?php echo $tablep5; ?>", [ ]);


                    //p6=ANILLO-IZQUIERDO
                    //181,199 (siempre)
                    //1,1 (siempre)

                    <?php
                    $dditem1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p6' ");
                    $dditem2 = mysql_num_rows($dditem1);
                    if($dditem2 == 0){

                    }else{
                         $dditem3 = mysql_fetch_array($dditem1);
                         $itemID = $dditem3['iu_itemID'];
                         $itemP = 6;
                         include ('inc/dragtipbox.php');
                    }
                    ?>

                    AddCharDiv("p6_1_1", 181, 199, 0, 1, 1, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, "<?php echo $tablep6; ?>", [ ]);
                    
                    //p7=ANILLO-DERECHO
                    //213,199 (siempre)
                    //1,1 (siempre)

                    <?php
                    $dditem1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p7' ");
                    $dditem2 = mysql_num_rows($dditem1);
                    if($dditem2 == 0){

                    }else{
                         $dditem3 = mysql_fetch_array($dditem1);
                         $itemID = $dditem3['iu_itemID'];
                         $itemP = 7;
                         $itemSOUL = $dditem3['iu_soul'];
                         $itemIID = $dditem3['iu_id'];
                         include ('inc/dragtipbox.php');
                    }
                    ?>

                    AddCharDiv("p7_1_1", 213, 199, 0, 1, 1, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, "<?php echo $tablep7; ?>", [ ]);


                    //p9=GUANTES
                    //21,199 (siempre)
                    //16,16 (siempre)

                    <?php
                    $dditem1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p9' ");
                    $dditem2 = mysql_num_rows($dditem1);
                    if($dditem2 == 0){

                    }else{
                         $dditem3 = mysql_fetch_array($dditem1);
                         $itemID = $dditem3['iu_itemID'];
                         $itemP = 2;
                         $itemSOUL = $dditem3['iu_soul'];
                         $itemIID = $dditem3['iu_id'];
                         include ('inc/dragtipbox.php');
                    }
                    ?>

                    AddCharDiv("p9_1_1", 21, 199, 0, 16, 16, 256, 0, 0, 0, 0, 0, 0, 0, 0, 0, "<?php echo $tablep9; ?>", [ ]);
                    
                    //p10=BOTAS
                    //100,199 (siempre)
                    //16,16 (siempre)

                    <?php
                    $dditem1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p10' ");
                    $dditem2 = mysql_num_rows($dditem1);
                    if($dditem2 == 0){

                    }else{
                         $dditem3 = mysql_fetch_array($dditem1);
                         $itemID = $dditem3['iu_itemID'];
                         $itemP = 2;
                         $itemSOUL = $dditem3['iu_soul'];
                         $itemIID = $dditem3['iu_id'];
                         include ('inc/dragtipbox.php');
                    }
                    ?>

                    AddCharDiv("p10_1_1", 100, 199, 0, 16, 16, 512, 0, 0, 0, 0, 0, 0, 0, 0, 0, "<?php echo $tablep10; ?>", [ ]);
                    
                    //p11=PENDIENTE
                    //181,50 (siempre)
                    //1,1 (siempre)

                    <?php
                    $dditem1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_mercyID = 0 AND iu_onUse = 1 AND iu_pos = 'p11' ");
                    $dditem2 = mysql_num_rows($dditem1);
                    if($dditem2 == 0){

                    }else{
                         $dditem3 = mysql_fetch_array($dditem1);
                         $itemID = $dditem3['iu_itemID'];
                         $itemP = 2;
                         $itemSOUL = $dditem3['iu_soul'];
                         $itemIID = $dditem3['iu_id'];
                         include ('inc/dragtipbox.php');
                    }
                    ?>

                    AddCharDiv("p11_1_1", 181, 50, 0, 1, 1, 1024, 0, 0, 0, 0, 0, 0, 0, 0, 0, "<?php echo $tablep11; ?>", [ ]);
                    

                    //INVETARIO
                    //1 si es 1x1 cuadrito, 2 si es 1x2, 4 si es 2x1, 8 si es 1x3, 16 si es 2x2, 32 si es 2x3
                    //AddCharDiv("p512_X_X", X, X, type, tam, X, userid, idItem, sellCost, 0, 0, 0, 0, soulItem, levelI, ifItem(-1)ORnotItem(0), "", [ ]);
                    //types caso=1, arma=2, escudo=4, anillos=48, peto=8, guantes=256, botas=512, pendiente=1024

                    <?php
                    $dditem1 = mysql_query("SELECT * FROM item_user WHERE iu_userID = '".$userID."' AND iu_onUse = 0");
                    $dditem2 = mysql_num_rows($dditem1);
                    if($dditem2 == 0){

                    }else{
                         $conteoI = 1;
                         while ($conteoI <= $dditem2) {
                              $dditem3 = mysql_fetch_array($dditem1);
                              $itemID = $dditem3['iu_itemID'];
                              $itemP = 2;
                              $itemP2 = 512;
                              $itemSOUL = $dditem3['iu_soul'];
                              $itemIID = $dditem3['iu_id'];
                              $itemPOS = $dditem3['iu_pos'];
                              include ('inc/dragtipbox.php');
                              ?>
                              AddCharDiv("<?php echo ?>", 0, 32, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "<?php echo $table512; ?>", [ ]);
                              <?php
                              $conteoI++;
                         }
                    }
                    ?>
                    AddCharDiv("p512_1_2", 0, 32, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_1_3", 0, 64, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_1_4", 0, 96, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_1_5", 0, 128, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_2_1", 32, 0, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_2_2", 32, 32, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_2_3", 32, 64, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_2_4", 32, 96, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_2_5", 32, 128, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_3_1", 64, 0, 64, 1, 1, 16777215, 2454909, 4, 0, 0, 0, 0, 1, 1, -1, "<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Manzana</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>(Vinculado al alma)</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Usándose: Cura 37 de vida</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Por Inteligencia: +25 punto(s) de vida</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Combinado con: Bananas, Pollo</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Max. nivel del objeto: 1</td></tr><tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Nivel 1</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Valor 4 <img src=\'8501/img/res2d.gif\' alt=\'Oro\' title=\'Oro\' align=\'absmiddle\' border=\'0\' /></td></tr><tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Consejo: Usar un artículo</td></tr><tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Arrastralo por encima de la imagen de caracteres en la pantalla general.</td></tr></table>", [ ]);
                    AddCharDiv("p512_3_2", 64, 32, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_3_3", 64, 64, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_3_4", 64, 96, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_3_5", 64, 128, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_4_1", 96, 0, 64, 1, 1, 16777215, 2454910, 11, 0, 0, 0, 0, 1, 1, -1, "<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Pan</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>(Vinculado al alma)</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Usándose: Cura 55 de vida</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Por Inteligencia: +25 punto(s) de vida</td></tr><tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Nivel 1</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Valor 11 <img src=\'8501/img/res2d.gif\' alt=\'Oro\' title=\'Oro\' align=\'absmiddle\' border=\'0\' /></td></tr><tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Consejo: Usar un artículo</td></tr><tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Arrastralo por encima de la imagen de caracteres en la pantalla general.</td></tr></table>", [ ]);
                    AddCharDiv("p512_4_2", 96, 32, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_4_3", 96, 64, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_4_4", 96, 96, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_4_5", 96, 128, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_5_1", 128, 0, 64, 1, 1, 16777215, 2454911, 8, 0, 0, 0, 0, 1, 1, -1, "<table cellspacing=2 cellpadding=2 valign=middle class=\'tooltipBox\'><tr><td style=\'color:white; font-weight: bold; font-size:9pt\' colspan=\'2\' nowrap=\'nowrap\'>Pescado</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>(Vinculado al alma)</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Usándose: Cura 49 de vida</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Por Inteligencia: +25 punto(s) de vida</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Combinado con: Rollos de pan, Pan</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Max. nivel del objeto: 1</td></tr><tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Nivel 1</td></tr><tr><td style=\'color:#DDD; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Valor 8 <img src=\'8501/img/res2d.gif\' alt=\'Oro\' title=\'Oro\' align=\'absmiddle\' border=\'0\' /></td></tr><tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Consejo: Usar un artículo</td></tr><tr><td style=\'color:#808080; font-weight: bold; font-size:8pt\' colspan=\'2\' nowrap=\'nowrap\'>Arrastralo por encima de la imagen de caracteres en la pantalla general.</td></tr></table>", [ ]);
                    AddCharDiv("p512_5_2", 128, 32, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_5_3", 128, 64, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_5_4", 128, 96, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_5_5", 128, 128, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_6_1", 160, 0, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_6_2", 160, 32, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_6_3", 160, 64, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_6_4", 160, 96, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_6_5", 160, 128, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_7_1", 192, 0, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_7_2", 192, 32, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_7_3", 192, 64, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_7_4", 192, 96, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_7_5", 192, 128, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_8_1", 224, 0, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_8_2", 224, 32, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_8_3", 224, 64, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_8_4", 224, 96, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    AddCharDiv("p512_8_5", 224, 128, 0, 0, 0, 16777215, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", [ ]);
                    changeShow();
                    </script><script type="text/javascript"></script>