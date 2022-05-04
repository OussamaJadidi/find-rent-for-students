<?php
    function annonceFormClient($a,$b,$c,$d,$e,$f,$g){
        ?>
                        <div class="image-Annonce">
                            <img src="<?php echo $a?>" alt="image d'annonce " width="300px" height="175px">
                        </div>
                        <div class="info-mesAnnonce">
                            <div class="prix-annonce">
                                <h2><?php echo $b;?> DH</h2>
                            </div>
                            <div class="titre-annonce">
                                <?php echo $c;?>
                            </div>
                            <div class="type-annonce">
                            <?php echo $d;?>
                            </div>
                            <div class="time-location">
                                <br>
                                <?php $ddddd=explode(' ',$e)?>
                                <i class="fa -light fa-calendar"></i>&nbsp<?php echo $ddddd[0];?>&nbsp&nbsp
                                <i class="fa -light fa-location-dot"></i>&nbsp<?php echo $f;?>
                            </div>
                            <?php
                                if($g!=0){
                                    ?>
                                        <div class="colocation_stick">
                                            <i class="fa -solid fa-people-roof"></i>&nbsp<?php if($g==1){echo "colocation avec une seule personne";}else{echo "colocation avec ".$g."personnes";}?>
                                        </div>
                                    <?php
                                }
                            
                            ?>
                        </div>
        <?php
    }
?>