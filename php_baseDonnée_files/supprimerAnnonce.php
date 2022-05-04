<?php
    include_once 'connexionAuDataBase.php';
    
    $suupp = $conn->prepare("DELETE FROM annonce WHERE Id_annonce=?");
    $suupp->execute(array($_GET['hh'])); 
    header('location: ../php_files/pageMesAnnonces.php')
        
?>
