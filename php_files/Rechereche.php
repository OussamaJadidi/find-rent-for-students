<?php
    session_start();
    include_once '../php_BaseDonnée_files/connexionAuDataBase.php';
    include_once 'header.php';
    include_once 'annonceFomClient.php';
?>
        <!-- head espcape -->
        <div style="width: 100%; height: 80px"></div>
        <!-- les annonce -->
        <?php
            if(isset($_POST['chercheranonc'])){
                if(!isset($_POST['colocation'])){
                    $_POST['colocation']=1;
                }
                if(!isset($_POST['meublée'])){
                    $_POST['meublée']=1;
                }
                if($_POST['colocation']==1){
                    if($_POST['meublée']==1){
                        $rech= $conn->prepare("SELECT * FROM annonce WHERE Ville=? || Université=? || Prix<=? || Prix>=? || Type=? || Surface<=? || Surface>=? || N_chambre=? || Logement_meublé=? || N_colocation_possible=?");
                        $rech->execute(array($_POST['v'],$_POST['u'],$_POST['pma'],$_POST['pmi'],$_POST['t'],$_POST['sma'],$_POST['smi'],$_POST['ch'],$_POST['meublée'],$_POST['colocation']));
                    }else{
                        $rech= $conn->prepare("SELECT * FROM annonce WHERE Ville=? || Université=? || Prix<=? || Prix>=? || Type=? || Surface<=? || Surface>=? || N_chambre=? || N_colocation_possible=?");
                    $rech->execute(array($_POST['v'],$_POST['u'],$_POST['pma'],$_POST['pmi'],$_POST['t'],$_POST['sma'],$_POST['smi'],$_POST['ch'],$_POST['colocation']));
                    }
                }else{
                   if($_POST['meublée']==1){
                        $rech= $conn->prepare("SELECT * FROM annonce WHERE Ville=? || Université=? || Prix<=? || Prix>=? || Type=? || Surface<=? || Surface>=? || N_chambre=? || Logement_meublé=?");
                        $rech->execute(array($_POST['v'],$_POST['u'],$_POST['pma'],$_POST['pmi'],$_POST['t'],$_POST['sma'],$_POST['smi'],$_POST['ch'],$_POST['meublée']));
                   }else{
                    $rech= $conn->prepare("SELECT * FROM annonce WHERE Ville=? || Université=? || Prix<=? || Prix>=? || Type=? || Surface<=? || Surface>=? || N_chambre=?");
                    $rech->execute(array($_POST['v'],$_POST['u'],$_POST['pma'],$_POST['pmi'],$_POST['t'],$_POST['sma'],$_POST['smi'],$_POST['ch']));
                   }
                }
            }
            while($ligness=$rech->fetch()){
                ?>
                    <div style="display:flex; width: 96vw; margin: 1vw">
                    <?php
                        annonceFormClient($ligness['Photo1'],$ligness['Prix'],$ligness['Titre'],$ligness['Type'],$ligness['Date_deposition'],$ligness['Ville'],$ligness['N_colocation_possible']);
                    ?>
                    </div>
                <?php
            }
        ?>
<?php include_once 'footer.php'?>
