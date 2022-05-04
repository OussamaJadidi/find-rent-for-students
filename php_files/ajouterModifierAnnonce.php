<?php
    function ajouterModifierAnnoce($t1='',$t2='',$t3='',$t4='',$t5='',$t6='',$t7='',$t8='',$t9='',$t10='',$t11='',$t12='',$t13='',$t14='',$t15='',$t16='',$t17=''){
        ?>
           <div>
                        <label for="up-im" class="upload-images">
                            <h3 class="upload-images-h3"> Photo d'annonce </h3>
                            <span onmouseover="changeicon()" onmouseout="changeiconRecursive()">
                            <img  <?php if($t1!='')echo "src=".$t1;?> id="imgload1" alt="" width="348px" height="242px" style="position: absolute; top: 30px; left:50px;">
                            <i class="fa -light fa-images" <?php if($t1!='')echo 'style="display:none"';?>id="icon1"></i>
                            <i class="fa -solid fa-plus" <?php if($t1!='')echo 'style="display:none"';?> id="icon2" ></i>
                            </span>
                            <span  class="imgNecAver">L'image d'annonce est nécessaire!</span>
                            <input type="file"  id="up-im" onchange="loadimage1(this)" accept="image/gif, image/jpeg,image/jpg, image/bmp, image/png" name="photoA1" <?php if($t1=='')echo "required"?>>
                        </label>
                    </div>
               
                    <div class="dataAnnonceNecess">
                        <table>
                            <tr>
                                <td>
                                    <h3>Titre d'annnonce : </h3>
                                </td>
                                <td>
                                    <input type="text" placeholder=" Titre d'anonnce" class="dataAnnonceNecess-input" name="titreA" required  <?php echo "value=".'"'.$t2.'"';?>>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Localisation du logement : </h3>
                                </td>
                                <td class="adresse">
                                    <select name="payAnnonce" class="payLog"  required>
                                            <option value="<?php $Marocff="Maroc";echo $Marocff;?>" <?php if($Marocff==$t3)echo "selected"?>>Maroc</option>
                                            <option value="<?php $Algérieff="Algérie";echo $Algérieff;?>" <?php if($Algérieff==$t3)echo "selected"?>>Algérie</option>
                                            <option value="<?php $Tunisieff="Tunisie";echo $Tunisieff;?>" <?php if($Tunisieff==$t3)echo "selected"?>>Tunisie</option>
                                            <option value="<?php $Franceff="France";echo $Franceff;?>" <?php if($Franceff==$t3)echo "selected"?>>France</option>
                                    </select>
                                    <input type="text" placeholder=" Ville" name="villeA" class="villeLog" required <?php echo "value=".'"'.$t4.'"';?>  >
                                    <input type="text" placeholder=" Adresse" name="adresseA" class="adresseLog" required <?php echo "value=".'"'.$t5.'"'?>  >
                                    
                                </td>
                            </tr>
                            <tr>
                                 <td>
                                     <h3>
                                        Type de logement :
                                     </h3>
                                 </td>
                                <td>
                                    <select name="typeA" class="dataAnnonceNecess-select" required >
                                        <option ></option>
                                        <option value="<?php $Appartementff="Appartement";echo $Appartementff;?>"<?php if($Appartementff==$t6)echo "selected";?>>Appartement</option>
                                        <option value="<?php $Maisonff="Maison";echo $Maisonff;?>"<?php if($Maisonff==$t6)echo "selected";?>>Maison</option>
                                        <option value="<?php $Immeubleff="Immeuble";echo $Immeubleff;?>"<?php if($Immeubleff==$t6)echo "selected";?>>Immeuble</option>
                                        <option value="<?php $Chambreff="Chambre";echo $Chambreff;?>"<?php if($Chambreff==$t6)echo "selected";?>>Chambre</option>
                                        <option value="<?php $Studioff="Studio";echo $Studioff;?>"<?php if($Studioff==$t6)echo "selected";?>>Studio</option>
                                        <option value="<?php $Bureauff="Bureau";echo $Bureauff;?>"<?php if($Bureauff==$t6)echo "selected";?> >Bureau</option>
                                        <option value="<?php $Villaff="Villa";echo $Villaff;?>"<?php if($Villaff==$t6)echo "selected";?>>Villa</option>
                                        <option value="<?php $Autreff="Autre";echo $Autreff;?>" <?php if($Autreff==$t6)echo "selected";?>>Autre</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>
                                        Prix de location : 
                                    </h3>
                                </td>
                                <td>
                                    <input type="text" placeholder=" Prix en DHs" class="dataAnnonceNecess-input" name="prixA" required <?php echo "value=".'"'.$t7.'"'?>  >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>
                                        Nombre de colocation disponible :
                                    </h3>
                                </td>
                                <td>
                                    <input type="text" placeholder=" Nombre disponible des personnes " class="dataAnnonceNecess-input" name="colocationA" required <?php echo "value=".'"'.$t8.'"'?> >
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="data-Supplementaire">
                        <b>Plus d'information sur votre logement, pour garantir plus des clients : </b>
                        <br><br>
                        <table>
                            <tr>
                                <td><h3>Nombre des chambres : </h3> </td>
                                <td>
                                    <input type="text" placeholder=" Nombre des chmabre" name="chambreA" <?php echo "value=".'"'.$t9.'"' ?>  >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Surface : </h3>
                                </td>
                                <td>
                                    <input type="text" placeholder=" Surface en m²" name="surfaceA" <?php echo "value=".'"'.$t10.'"'?> >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Le logement est meublé :</h3>
                                </td>
                                <td>
                                    <select name="meubleA"  <?php echo "value=".$t11;?> >
                                        <option value="<?php $nombre0="0";echo $nombre0;?>" <?php if($nombre0==$t11)echo "selected";?>>
                                            Non
                                        </option>
                                        <option value="<?php $nombre1="1";echo $nombre1;?>" <?php if($nombre1==$t11)echo "selected";?>>
                                            Oui
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>La plus proche université à vous : </h3>
                                </td>
                                <td>
                                    <input type="text" name="uuu" placeholder=" Nom de la plus proche université à vous"  <?php echo "value=".'"'.$t12.'"'?> >
                                </td>
                            </tr>
                            <tr>
                                <td><h3>Description : </h3></td>
                                <td>
                                    <textarea name="ddd" placeholder=" Plus d'information sur votre anonnce..."><?php echo $t13?> </textarea>
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                    <div class="plus-images">
                        
                        <table>
                            <tr>
                                <td>
                                    <h3>Plus d'images sur votre logement :</h3>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="imageA2">
                                        <img  id="imgload2" <?php if($t14!='')echo "src=".$t14;?> alt="" width="237px" height="200px"  style="position: absolute; top: 57px; left:2px; ">
                                        <i class="fa -solid fa-plus" class="plusicon" id="plusicon1" ></i>
                                        <input type="file" onchange="loadimage2(this)" id="imageA2" accept="image/gif, image/jpeg,image/jpg, image/bmp, image/png" name="photoA2"  >
                                    </label>
                                    <label for="imageA3">
                                        <img  id="imgload3" <?php if($t15!='')echo "src=".$t15;?> alt="" width="237px" height="200px"  style="position: absolute; top: 57px; left:243px; ">
                                        <i class="fa -solid fa-plus" class="plusicon" id="plusicon2"></i>
                                        <input type="file" onchange="loadimage3(this)" id="imageA3" accept="image/gif, image/jpeg,image/jpg, image/bmp, image/png" name="photoA3" >
                                    </label>
                                    <label for="imageA4">
                                        <img  id="imgload4" <?php if($t16!='')echo "src=".$t16;?> alt="" width="237px" height="200px" style="position: absolute; top: 57px; left:484px; ">
                                        <i class="fa -solid fa-plus" class="plusicon" id="plusicon3"></i>
                                        <input type="file" onchange="loadimage4(this)" id="imageA4" accept="image/gif, image/jpeg,image/jpg, image/bmp, image/png" name="photoA4"  >
                                    </label>
                                    <label for="imageA5">
                                    <img  id="imgload5" <?php if($t17!='')echo "src=".$t17;?> alt="" width="237px" height="200px" style="position: absolute; top: 57px; left:725px; ">
                                        <i class="fa -solid fa-plus" class="plusicon" id="plusicon4"></i>
                                        <input type="file" onchange="loadimage5(this)" id="imageA5" accept="image/gif, image/jpeg,image/jpg, image/bmp, image/png" name="photoA5" >
                                    </label>
                                </td>
                            </tr>
                        </table>
                    </div>
        <?php
    }
?>