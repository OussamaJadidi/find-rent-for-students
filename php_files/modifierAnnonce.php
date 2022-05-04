<?php
    session_start();
    if(!isset($_SESSION['pageProp']))header('locatoin:acceuil.php');
    include_once '../php_baseDonnée_files/connexionAuDataBase.php';
    include_once '../php_baseDonnée_files/modifierDataAnnonce.php';
    include_once 'header.php';
    include_once 'ajouterModifierAnnonce.php';
?>
        <!-- escape the head -->
        <div class="escape-head"></div>


        <?php
            $vk= $conn->prepare('SELECT * FROM annonce WHERE Id_annonce=?');
            $vk->execute(array($_REQUEST['vjjj']));
            $v=$vk->fetch();            
        ?>
        <!-- Ajouter Anonnce -->
        <iframe name="hiddenFrame" style="width:0; height:0; margin: 0; padding:0;"></iframe>
        <div class="titre-ajouter-annonce">
            <h1>Modifier une annonce</h1>
        </div>
        <div class="ajouter-annonce">
            <div class="ajouter-annonce-content">
                <form action="" method="post" enctype="multipart/form-data" target="hiddenFrame" onsubmit="show_pop_up_validation()">
                    <?php 
                        ajouterModifierAnnoce($v['Photo1'],$v['Titre'],$v['Pays'],$v['Ville'],$v['Adresse'],$v['Type'],$v['Prix'],$v['N_colocation_possible'],$v['N_chambre'],$v['Surface'],$v['Logement_meublé'],$v['Université'],$v['Description_logement'],$v['Photo2'],$v['Photo3'],$v['Photo4'],$v['Photo5']);
                    ?>
                    <input type="submit"  value="Modifier" name="modifierA" >
                </form>
            </div>
        </div>

        <div class="pop-up-validation">
        <div class="pop-up-cadre">
            <i class="fa -solid fa-circle-check" style="color:blue; font-size: 35px;"></i> <span>l'annonce a été Modifier avec succes!</span>
        </div>
    </div>
<?php include_once 'footer.php';?>
       
