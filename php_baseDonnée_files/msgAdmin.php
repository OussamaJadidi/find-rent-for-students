<?php
    header("Cache-Control: no-store, no-cache,must-revalidate");
    include_once 'connexionAuDataBase.php';
    
    if(isset($_POST['msg_pour_admin_submit'])){
        session_start();
        $personne;
        $id;
        if(isset($_SESSION['id_prop'])){
            $personne="Propriétaire";
            $id=$_SESSION['id_prop'];
        }elseif(isset($_SESSION['id_admin'])){
            $personne="Administrateur";
            $id=$_SESSION['id_admin'];
        }elseif(isset($_SESSION['id_etud'])){
            $personne="Etudiant";
            $id=$_SESSION['id_etud'];
        }else{
            $personne="Annonyme";
            $id=0;
        }
        $msgenv= $conn->prepare("INSERT INTO messages(Personne,Id_personne,Email,Message) values(?,?,?,?)");
        $msgenv->execute(array($personne,$id,$_POST['msg_pour_admin_email'],$_POST['msg_pour_admin_content']));
        header('location: ../php_files/accueil.php');
    }
?>