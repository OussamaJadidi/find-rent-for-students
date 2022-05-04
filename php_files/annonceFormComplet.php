<?php
// $An1,$An2,$An3,$An4,$An5,$An6,$An7,$An8,$An9,$An10,$An11,$An12,$An13,$An14,$An15,$An16,$An17,$An18,$An19
    function annonceComplet(){
        ?>
        <div class="AnnonceComplet">
            <div class="information-annonce">
                <div class="information-annonce-image">
                    <img src="../Annonce_images/626371462739a2.84576576.jpg" alt="" height="100%" width="50%">
                    <img src="../Annonce_images/626371462739a2.84576576.jpg" alt="" height="100%" width="50%">
                    <img src="../Annonce_images/626371462739a2.84576576.jpg" alt="" height="100%" width="50%">
                    <img src="../Annonce_images/626371462739a2.84576576.jpg" alt="" height="100%" width="50%">
                    <img src="../Annonce_images/626371462739a2.84576576.jpg" alt="" height="100%" width="50%">
                </div>
                <div class="information-annonce-info">
                    <div class="prix-annonce">
                        <h2><?php echo"1500"." DH" ?></h2>
                    </div>
                    <div class="titre-annonce">
                        <b><?php echo"Une apppartement à louer a tanger aux étudiant de est tanger";?></b>
                    </div>
                    <div class="time-location2">
                                <?php $ddddd=explode(' ',"23/04/2022 99 33")?>
                                <i class="fa -light fa-calendar"></i>&nbsp<?php echo $ddddd[0];?>&nbsp&nbsp
                                <i class="fa -light fa-location-dot"></i>&nbsp<?php echo "tanger";?>
                    </div>
                    <div class="hr">
                    </div>
                    <div class="local-type-annoce">
                        <table>
                            <tr>
                                <td>
                                &nbsp&nbsp<span class="titre-m3lomat">Adresse: </span><span class="m3lomat"><?php echo"rue atlas lot talhaoui 15A"."&nbsp&nbsp&nbsp&nbsp"?></span>&nbsp&nbsp
                                </td>
                                <td>
                                &nbsp&nbsp<span  class="titre-m3lomat">Type: </span><span class="m3lomat"><?php echo"Maison"."&nbsp&nbsp&nbsp&nbsp"?></span>&nbsp&nbsp
                                </td>
                            </tr>
                            <div style="width: 100vw;border-bottom: 0.5 solid gray;"></div>
                            <tr>
                                <td>
                                &nbsp&nbsp<span  class="titre-m3lomat">Nombre des chambres: </span><span class="m3lomat"><?php echo"5"." chambres"."&nbsp&nbsp&nbsp&nbsp"?></span>&nbsp&nbsp
                                </td>
                                <td>
                                &nbsp&nbsp<span  class="titre-m3lomat">Surfacee: </span><span class="m3lomat"><?php echo"50"." m²"."&nbsp&nbsp&nbsp&nbsp"?></span>&nbsp&nbsp
                                </td>
                            </tr>
                            <tr>
                                <td>
                                &nbsp&nbsp<span  class="titre-m3lomat">Colocation disponible avec : </span><span class="m3lomat"><?php echo"3"." personnes"."&nbsp&nbsp&nbsp&nbsp"?></span>&nbsp&nbsp
                                </td>
                                <td>
                                &nbsp&nbsp<span  class="titre-m3lomat">Logement est meublé : </span><span class="m3lomat"><?php if(0==0){echo"Non";}else{echo"Oui";}echo "&nbsp&nbsp&nbsp&nbsp"?></span>&nbsp&nbsp
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="titre-m3lomat">Description :</span>
                                
                                    <span class="m3lomat"><?php echo "this is the best of the best , this is the best of the best"?></span>
                                </td>
                                <td>
                                &nbsp&nbsp<span  class="titre-m3lomat">Université la plus proche: </span><span class="m3lomat"><?php echo "ecole supérieure de technonlogie oujda"."&nbsp&nbsp&nbsp&nbsp"?></span>&nbsp&nbsp
                                </td>
                                
                            </tr>
                            <div style="width: 100vw;border-bottom: 0.5 solid gray;"></div>
                        </table>
                    </div>
                </div>
            </div>
            <div class="information-propriéitaire">
                <table>
                    <tr>
                        <td><span class="titre-m3lomat">Nom de propriétaire</span></td>
                    </tr>
                    <tr>
                        <td><?php echo" oussma jadidi";?></td>
                    </tr>
                    <tr>
                        <td><span class="titre-m3lomat">Ville</span></td>
                    </tr>
                    <tr>
                        <td><?php echo"oujda";?></td>
                    </tr>
                    <tr>
                        <td><span class="titre-m3lomat">Gmail</span></td>
                    </tr>
                    <tr>
                        <td><?php echo"oussama.jadidi20@ump.ac.ma"?></td>
                    </tr>
                    <tr>
                        <td><span class="titre-m3lomat">Numereau de telephone</span></td>
                    </tr>
                    <tr>
                        <td><?php echo"06 XX XX XX XX"?></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php
    }
?>