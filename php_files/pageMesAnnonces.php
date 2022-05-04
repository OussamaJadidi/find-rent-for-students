<?php

    if(isset($_POST['modifierooo'])){
        $anno=$_POST['m'];
       header("location: ../php_files/modifierAnnonce.php?vjjj=" . $anno);
       exit();
    }

?>
<?php   
    session_start();
    if(!isset($_SESSION['pageProp']))header('locatoin:acceuil.php');
    include_once '../php_baseDonnée_files/connexionAuDataBase.php';
    include_once 'header.php';
    include_once 'annonceFomClient.php';
?>

    <!-- escape the head -->
    <div class="escape-head"></div>
    <div style="height:40px"></div>
    <div class="titre-ajouter-annonce">
        <h1>Mes Annonces</h1>
    </div>
    <div >
    <iframe name="hiddenFrame" style="width:0; height:0; margin: 0; padding:0;"></iframe>
        <?php
            $idPr=$_SESSION['id_prop'];
            $mesAnnonce= $conn->prepare("SELECT * FROM annonce WHERE Id_propriétaire=? ORDER BY Id_annonce DESC");
            $mesAnnonce->execute(array($idPr));
            while($annonce=$mesAnnonce->fetch()){
                ?>
                    <div class="mesAnnoncesContainer">
                        <?php
                            echo annonceFormClient($annonce['Photo1'],$annonce['Prix'],$annonce['Titre'],$annonce['Type'],$annonce['Date_deposition'],$annonce['Ville'],$annonce['N_colocation_possible']);
                            $ll=$annonce['Id_annonce'];
                        ?>
                        <div class="info-mesAnnonce">
                            
                            <div class="edit-delete" >
                                <form action="" method="post"><input type="hidden" name="m" value="<?php echo $annonce['Id_annonce'];?>"><button type="submit" name="modifierooo"><i class="fa -light fa-pen" ></i></button></form>
                                <a href="../php_baseDonnée_files/supprimerAnnonce.php?hh=<?php echo $ll;?>" onclick="return confirm('voulez vous vraiment supprimer cette annonce définitivement ?')" type="button" ><i class="fa -light fa-trash" ></i></a>
                                
                            </div>
                        </div>
                    </div>
                <?php
            }
        ?>
    </div>
<?php  
    include_once 'footer.php';
?>
