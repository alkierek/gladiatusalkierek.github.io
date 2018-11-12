<div id="myWorkContent">

<div id='cssmenu'>
<ul>
<?php
if($itemH == 1){
    $count = 1;
    while($count <= $mysql2){
        $mysql3 = mysql_fetch_array($mysql1);
        $itemIID = $mysql3['iu_id'];
        $itemID = $mysql3['iu_itemID'];
        $itemSOUL = $mysql3['iu_soul'];
        $itemIFconsumible = $mysql3['iu_consumibleItem'];
        $itemIFmercy = $mysql3['iu_mercyItem'];
        $itemIFrare = $mysql3['iu_rareItem'];
        if($itemIFconsumible != 0){

        }elseif($itemIFmercy != 0){
            $mercyID = $itemIFmercy;
            $itemTYPE = 15;
            include ('inc/mercytipbox.php');
        }elseif($itemIFrare != 0){

        }elseif($itemID != 0){
            include ('inc/tooltipbox.php');
        }
        if($itemID == 0 && $itemIFmercy == 0){
            $itemTYPE = 0;
        }
        if($itemTYPE == 6){

        }else{
            $ringIf = '';
        }

        $loquetoque = '';
        if ($usandoT1 == 1 && $itemTYPE == 1) {
            $loquetoque = '<td>'.$tableWEAPONu.'</td>';
        }elseif ($usandoT2 == 1 && $itemTYPE == 2) {
            $loquetoque = '<td>'.$tableSHIELDu.'</td>';
        }elseif ($usandoT3 == 1 && $itemTYPE == 3) {
            $loquetoque = '<td>'.$tableCHESTSu.'</td>';
        }elseif ($usandoT4 == 1 && $itemTYPE == 4) {
            $loquetoque = '<td>'.$tableHELMETu.'</td>';
        }elseif ($usandoT5 == 1 && $itemTYPE == 5) {
            $loquetoque = '<td>'.$tableGLOVESu.'</td>';
        }elseif ($usandoT8 == 1 && $itemTYPE == 8) {
            $loquetoque = '<td>'.$tableSHOESu.'</td>';
        }elseif ($usandoT9 == 1 && $itemTYPE == 9) {
            $loquetoque = '<td>'.$tableAMULETu.'</td>';
        }

        if ($usandoP6 == 1 && $itemTYPE == 6) {
            $loquetoque = '<td>'.$tableRINGp6u.'</td>';
            if ($usandoP7 == 1) {
                $loquetoque .= '<td>'.$tableRINGp7u.'</td>';
            }
        }
        if ($usandoP7 == 1 && $itemTYPE == 6) {
            $loquetoque = '<td>'.$tableRINGp7u.'</td>';
            if ($usandoP6 == 1) {
                $loquetoque .= '<td>'.$tableRINGp6u.'</td>';
            }
        }


        ?>
        <li class='active has-sub'><a><span><?php if($itemID != 0 || $itemIFmercy != 0){ ?><div onMouseOver="return escape('<?php echo $tableC; ?><?php echo $loquetoque; ?>')"><img src="8501/img/item/<?php echo $itemIMAGE; ?>.gif"/></div>

        <?php } ?></span></a>
            <ul>
            <li><br><li>
            <?php
            if($itemTYPE != 7 && $itemTYPE <= 9){
                ?>
                <?php if($itemTYPE != 6 && $itemTYPE != 9){ ?>
                <li><br><li>
                <li><br><li>
                <?php } ?>
                <?php if($itemTYPE == 6) {?>
                <li class='has-sub'><a href='overview.php?equip=<?php echo $itemIID; ?>&dollH=<?php echo $dollH; ?>&ringP=1'><span>Equipar(Izq.)</span></a>
                <li class='has-sub'><a href='overview.php?equip=<?php echo $itemIID; ?>&dollH=<?php echo $dollH; ?>&ringP=2'><span>Equipar(Der.)</span></a>
                <?php }else{ ?>
                <?php if($itemID != 0 || $itemIFmercy != 0){ ?>
                <li class='has-sub'><a href='overview.php?equip=<?php echo $itemIID; ?>&dollH=<?php echo $dollH; ?><?php echo $ringIf; ?>'><span>Equipar</span></a>
                </li>
                <?php } ?>
                <?php } ?>
                <?php
            }
            ?>
                <?php if($itemID != 0 || $itemIFmercy != 0){ ?>
                <?php } ?>
                <?php
                if($itemSOUL != 1){
                    if($itemTYPE == 7 || $itemTYPE >= 10){

                    }else{
                        ?>
                        <?php if($itemID != 0){ ?>
                        <li><a href='#'><span>Vincular</span></a></li>
                        <?php } ?>
                        <?php
                    }
                }
                ?>
            </ul>
        </li>
        <?php
        $count++;
    }
}else{

}
?>
</ul>
</div>


</div>
<!-- end myWorkContent -->