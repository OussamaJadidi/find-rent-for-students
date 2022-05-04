
<?php
    $conn= mysqli_connect("localhost","root","","location_colocation_logement_db");
    if(!$conn){
        echo'Erreur dans la connexion a la base de donné';
    }

    $email=$_POST['email'];
    $nom=$_POST['nomEtulisateur'];
    $ville=$_POST['ville'];
    $gmail=$_POST['gmail'];
    $telephone=$_POST['telephone'];
    $motpasse=$_POST['motPasse'];
    $motpasseC=$_POST['motPasseC'];
    if($motpasse==$motpasseC && !empty($motpasse)){
        if(empty($ville) && empty($gmail) && empty($telephone)){
            $req1= $conn->prepare('INSERT INTO etudiant(Nom_utilisateur,Email,Mot_de_passe) VALUES (?,?,?)');
            $req1->execute(array($nom,$email,$motpasse));
            session_start();
            $lastId=mysqli_insert_id($conn);
            $_SESSION['nomEtud']=$nom;
            $_SESSION['emailEtud']=$email;
            
            $_SESSION['id_etud']=$lastId;
            header('location:../php_files/accueil.php');
        }else{
            $req2= $conn->prepare('INSERT INTO propriétaire(Nom_utilisateur,Email,ville,Gmail,Telephone,Mot_de_passe) values (?,?,?,?,?,?)');
            $req2->execute(array($nom,$email,$ville,$gmail,$telephone,$motpasse));
            session_start();
            $lastId=mysqli_insert_id($conn);
            $_SESSION['nomProp']=$nom;
            $_SESSION['emailProp']=$email;
            
            $_SESSION['id_prop']=$lastId;
            header('location: ../php_files/pagePropriétaire.php');
        }
    }
   if($conn){
       $conn=null;
   }
?>