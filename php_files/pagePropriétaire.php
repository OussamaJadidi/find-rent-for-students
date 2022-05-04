<?php
    session_start();
    if(!isset($_SESSION['pageProp']))header('locatoin:acceuil.php');
    include_once '../php_baseDonnée_files/connexionAuDataBase.php';
    include_once 'header.php';
    include_once 'ajouterModifierAnnonce.php';
    include_once '../php_baseDonnée_files/dataAnnonce.php';
?>

        <!-- escape the head -->
        <div class="escape-head"></div>



        <!-- Ajouter Anonnce -->
        <iframe name="hiddenFrame" style="width:0; height:0; margin: 0; padding:0;"></iframe>
        <div class="titre-ajouter-annonce">
            <h1>Ajouter une annonce</h1>
        </div>
        <div class="ajouter-annonce">

            <div class="ajouter-annonce-content">
            
                <form  action="pagePropriétaire.php" method="post" enctype="multipart/form-data" target="hiddenFrame" onsubmit="show_pop_up_validation()">
                    <?php 
                        ajouterModifierAnnoce();
                    ?>
                    <input type="submit"  value="Ajouter" name="ajouterA"  >
                </form>
            </div>
        </div>
        <div class="pop-up-validation">
        <div class="pop-up-cadre">
            <i class="fa -solid fa-circle-check" style="color:blue; font-size: 35px;"></i> <span>l'annonce a été ajouté avec succes!</span>
        </div>
    </div>
<?php include_once 'footer.php';?>
       
