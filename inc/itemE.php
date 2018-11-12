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
        if($itemTYPE == 6){

        }
        ?>
        <li class='active has-sub'><a><span><div onMouseOver="return escape('<?php echo $tableC; ?>')"><img src="8501/img/item/<?php echo $itemIMAGE; ?>.gif"/></div></span></a>
            <ul>
            <li><br><li>
            <?php
            if($itemTYPE != 7 && $itemTYPE <= 9){
                ?>
                <?php if($itemTYPE != 6 && $itemTYPE != 9){ ?>
                <li><br><li>
                <li><br><li>
                <?php } ?>
                <li><a href="overview.php?desequip=<?php echo $itemIID; ?>"><span>Desequipar</span></a></li>
                <?php
            }
            ?>
                <?php
                if($itemSOUL != 1){
                    if($itemTYPE == 7 || $itemTYPE >= 10){

                    }else{
                        ?>
                        <li><a href='#'><span>Vincular</span></a></li>
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