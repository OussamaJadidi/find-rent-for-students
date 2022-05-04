<?php
    session_start();
    if(isset($_SESSION['pageEtud']))header('locatoin:pageEtudiant.php');
    if(isset($_SESSION['pageProp']))header('locatoin:pagePropiétaire.php');
    if(isset($_SESSION['pageEtud']))header('locatoin:pageAdministrateur.php'); 
    include_once 'header.php';
    include_once '../php_baseDonnée_files/connexionAuDataBase.php';
?>

        <!-- highbody -->
        <div class="high-body">
            <div class="backgroundbody">
                <img src="../photo_files/a.jpg" alt="" height="" width="">
                <img src="../photo_files/b.jpg" alt="" height="" width="">
                <img src="../photo_files/d.jpg" alt="" height="" width="100%">
                <img src="../photo_files/c.jpg" alt="" height="" width="100%">
            </div>
            <div class="textPublicitaire">
                <h1>Location des logements : </h1>
                <h2>trouvez votre logement a louez !</h2>
            </div>
            <div class="formulaire">
                <form action="Rechereche.php" method="post">
                    <h2> Où cherchez-vous ?</h2><br>
                    <table>
                        <tr>
                            <td>
                               <h4> Localisation:</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="pay" id="" class="pos" >
                                        <option value="Maroc">Maroc</option>
                                        <option value="Algérie">Algérie</option>
                                        <option value="Tunisie">Tunisie</option>
                                        <option value="France">France</option>
                                </select>
                            </td>
                            <td>
                            &nbsp<input type="text" placeholder=" Ville" class="pos" id="ville" name="v">
                            </td>
                        </tr>
        
                        <tr>
                            <td>
                                <h4>Université:</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder=" Uninversité" class="autoApi" id="univ" name="u">
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <h4>Budget :</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input class="pos" type="text" placeholder=" prix min                 DH" name="pmi">
                                <input class="pos" type="text" placeholder=" prix max                 DH" name="pma">
                            </td>
                        </tr>
                        <tr class="plusDeFormulaire">
                            <td>
                                <h4>Type :</h4>
                            </td>
                        </tr>
                        <tr class="plusDeFormulaire">
                            <td>
                                <select name="t" id="" class="autoApi">
                                        <option ></option>
                                        <option value="Appartement">Appartement</option>
                                        <option value="Maison">Maison</option>
                                        <option value="Immeuble">Immeuble</option>
                                        <option value="Chambre">Chambre</option>
                                        <option value="Studio">Studio</option>
                                        <option value="Bureau">Bureau</option>
                                        <option value="Villa">Villa</option>
                                        <option value="Logement" >Autre</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="plusDeFormulaire">
                            <td>
                                <h4>Surface : </h4>
                            </td>
                        </tr>
                        <tr class="plusDeFormulaire">
                            <td>
                                <input type="text" class="pos" placeholder=" Min                          m²" name="smi">
                                <input type="text" class="pos" placeholder=" Max                          m²" name="sma">
                            </td>
                        </tr>
                        <tr class="plusDeFormulaire">
                            <td>
                                <h4>Nombre des chambres :</h4>
                            </td>
                        </tr>
                        <tr class="plusDeFormulaire">
                            <td>
                                <input class="autoApi" type="text" placeholder=" Nombre des chambres" name="ch">
                            </td>
                        </tr>
                        <tr class="plusDeFormulaire">
                            <td>
                                <h4>colocation :</h4>
                            </td>
                        </tr>
                        <tr class="plusDeFormulaire">
                            <td>
                                <label class="checkformlabel" onclick="checkform(0)" ><input type="radio"  class="checkform"  name="colocation" value="1">&nbsp &nbspoui</label>
                                <label class="checkformlabel" onclick="checkform(1)" ><input type="radio"  class="checkform"  name="colocation" value="0">&nbsp &nbspnon</label>
                            </td>
                        </tr>
                        <tr class="plusDeFormulaire">
                            <td>
                                <h4>logements meublée :</h4>
                            </td>
                        </tr>
                        <tr class="plusDeFormulaire">
                            <td>
                                <label class="checkformlabel" onclick="checkform(2)"><input type="radio"  class="checkform"  name="meublée" value="1">&nbsp &nbspoui</label>
                                <label class="checkformlabel" onclick="checkform(3)"><input type="radio"  class="checkform"  name="meublée" value="0">&nbsp &nbspnon</label>
                            </td>
                        </tr>
                    </table>
                    <div  class="divcherchebtn"><button class="cherchebtn" type="submit" name="chercheranonc">Rechercher</button></div>
                    <button type="button" class="buttonPlusInfo" onmousedown="agrandirFormulaire()">Plus d'information</button>
                </form>
            </div>
        </div>


        <!-- C'est annonce peuvent vous interessé -->
        <div class="titre-pub-annonce">
        Des annonces qui peuvent vous intéresser :
        </div>
        <!--3 forumalaire D'annonce -->
        <?php
            
            $annonces= $conn->prepare("SELECT * FROM annonce ORDER BY Id_annonce DESC LIMIT 1");
            $annonces->execute();
           
            $annonce1=$annonces->fetch();
            
            
            $Titre1=$annonce1['Titre'];
            $photo1=$annonce1['Photo1'];
            $prix1=$annonce1['Prix'];
            $ville1=$annonce1['Ville'];
            $type1=$annonce1['Type'];
            $colocation1=$annonce1['N_colocation_possible'];
            $chambre1=$annonce1['N_chambre'];
            if(isset($annonce1['Université'])){
                $université1=$annonce1['Université'];
            }
            if(isset($annonce1['N_chambre'])){
                $chambre1=$annonce1['N_chambre'];
            }
           
            $annonces2= $conn->prepare("SELECT * FROM annonce WHERE Id_annonce=?");
            $nb=$annonce1['Id_annonce'];
            do{
                $nb=$nb-1;
                $annonces2->execute(array($nb));
                $annonce2=$annonces2->fetch();
            }while(empty($annonce2['Id_annonce']));
            
            $Titre2=$annonce2['Titre'];
            $photo2=$annonce2['Photo1'];
            $prix2=$annonce2['Prix'];
            $ville2=$annonce2['Ville'];
            $type2=$annonce2['Type'];
            $colocation2=$annonce2['N_colocation_possible'];
            $chambre2=$annonce2['N_chambre'];
            if(isset($annonce2['Université'])){
                $université2=$annonce2['Université'];
            }
            if(isset($annonce2['N_chambre'])){
                $chambre2=$annonce2['N_chambre'];
            }

            $annonces3= $conn->prepare("SELECT * FROM annonce WHERE Id_annonce=?");
            do{
                $nb=$nb-1;
                $annonces3->execute(array($nb));
                $annonce3=$annonces3->fetch();
            }while(empty($annonce3['Id_annonce']));
            
            $Titre3=$annonce3['Titre'];
            $photo3=$annonce3['Photo1'];
            $prix3=$annonce3['Prix'];
            $ville3=$annonce3['Ville'];
            $type3=$annonce3['Type'];
            $colocation3=$annonce3['N_colocation_possible'];
            $chambre3=$annonce3['N_chambre'];
            if(isset($annonce3['Université'])){
                $université3=$annonce3['Université'];
            }
            if(isset($annonce3['N_chambre'])){
                $chambre3=$annonce3['N_chambre'];
            }

            $annonces4= $conn->prepare("SELECT * FROM annonce WHERE Id_annonce=?");
            do{
                $nb=$nb-1;
                $annonces4->execute(array($nb));
                $annonce4=$annonces4->fetch();
            }while(empty($annonce4['Id_annonce']));
            $Titre4=$annonce4['Titre'];
            $photo4=$annonce4['Photo1'];
            $prix4=$annonce4['Prix'];
            $ville4=$annonce4['Ville'];
            $type4=$annonce4['Type'];
            $colocation4=$annonce4['N_colocation_possible'];
            $chambre4=$annonce4['N_chambre'];
            if(isset($annonce4['Université'])){
                $université4=$annonce4['Université'];
            }
            if(isset($annonce4['N_chambre'])){
                $chambre4=$annonce4['N_chambre'];
            }
        ?>
        <div class="AnonncePublicitaire">
            <?php if (isset($annonce1)){?>
            <div class="annonce" >
                    <div class="photo-annonce"><img src="<?php echo $photo1; ?>" alt="photo annonce" width="100%" height="200px"></div>
                    <div class="info-annonce"><?php echo "<h2>".$prix1." DH</h2>"."<br>".$type1." à louer à ".$ville1."<br>";if($colocation1!=0){echo"a colocation de ".$colocation1." personnes";}if(!empty($chambre1)){echo $chambre1."chambres <br>";}if(!empty($université1)){echo"Prés de ".$université1;}?></div>
            </div>  
            <?php } if(isset($annonce2)){ ?>   
            <div class="annonce">
                    <div class="photo-annonce"><img src="<?php echo $photo2; ?>" alt="photo annonce" width="100%" height="200px"></div>
                    <div class="info-annonce"><?php echo "<h2>".$prix2." DH</h2>"."<br>".$type2." à louer à ".$ville2."<br>";if($colocation2!=0){echo"a colocation de ".$colocation2." personnes";}if(!empty($chambre2)){echo $chambre2."chambres <br>";}if(!empty($université2)){echo"Prés de ".$université2;}?></div>
            </div>
            <?php } if(isset($annonce3)){ ?>  
            <div class="annonce">
                    <div class="photo-annonce"><img src="<?php echo $photo3; ?>" alt="photo annonce" width="100%" height="200px"></div>
                    <div class="info-annonce"><?php echo "<h2>".$prix3." DH</h2>"."<br>".$type3." à louer à ".$ville3."<br>";if($colocation3!=0){echo"a colocation de ".$colocation3." ";}if(!empty($chambre3)){echo $chambre3."chambres <br>";}if(!empty($université3)){echo"Prés de ".$université3;}?></div>
            </div>
            <?php } if(isset($annonce4)){ ?>  
            <div class="annonce">
                    <div class="photo-annonce"><img src="<?php echo $photo4; ?>" alt="photo annonce" width="100%" height="200px"></div>
                    <div class="info-annonce"><?php echo "<h2>".$prix4." DH</h2>"."<br>".$type4." à louer à ".$ville4."<br>";if($colocation4!=0){echo"a colocation de ".$colocation4." ";}if(!empty($chambre4)){echo $chambre4."chambres <br>";}if(!empty($université4)){echo"Prés de ".$université4;}?></div>
            </div>
            <?php }  ?>
        </div>

<?php
    include 'footer.php';
?>