<?php
    include_once 'connexionAuDataBase.php'; 
    if((count($_POST)>0 ||isset($_POST['connecter']))){
        $b=false;
        $emailID=$_POST['emailID'];
        $motPasseID=$_POST['motPasseID'];
        if(!empty($emailID) && !empty($motPasseID)){
            $contentEtudiant = $conn->prepare("SELECT * FROM etudiant");
            $contentEtudiant->execute();
            while($ligne1=$contentEtudiant->fetch()){
                $email1=$ligne1['Email'];
                $nom1=$ligne1['Nom_utilisateur'];
                $mp1=$ligne1['Mot_de_passe'];
                if(($email1==$emailID || $emailID==$nom1) && ($mp1==$motPasseID)){
                    global $b;
                    $b=true;
                    session_start();
                    $_SESSION['nomEtud']=$nom1;
                    $_SESSION['emailEtud']=$email1;
                    $_SESSION['id_etud']=$ligne1['Id_etudiant'];
                    header('location: ../php_files/accueil.php');
                }
            }
            $contentProp = $conn->prepare("SELECT * FROM propriétaire");
            $contentProp->execute();
            while($ligne2=$contentProp->fetch()){
                $email2=$ligne2['Email'];
                $nom2=$ligne2['Nom_utilisateur'];
                $mp2=$ligne2['Mot_de_passe'];
                if(($email2==$emailID || $emailID==$nom2) && ($mp2==$motPasseID)){
                    global $b;
                    $b=true;
                    session_start();
                    $_SESSION['id_prop']=$ligne2['Id_propriétaire'];
                    $_SESSION['nomProp']=$nom2;
                    $_SESSION['emailProp']=$email2;
                    header('location: ../php_files/pagePropriétaire.php');
                }
            }
            $contentAdmin = $conn->prepare("SELECT * FROM administrateur");
            $contentAdmin->execute();
            while($ligne3=$contentAdmin->fetch()){
                $email3=$ligne3['Email'];
                $nom3=$ligne3['Nom_utilisateur'];
                $mp3=$ligne3['Mot_de_passe'];
                if(($email3==$emailID || $emailID==$nom3) && ($mp3==$motPasseID)){
                    global $b;
                    $b=true;
                    session_start();
                    $_SESSION['id_admin']=$ligne3['Id_administrateur'];
                    $_SESSION['nomAdmin']=$nom3;
                    $_SESSION['emailAdmin']=$email3;
                    header('location: ../php_files/administrateur.php');
                }
            }
            if($b==false){    
                echo "<SCRIPT> 
                        alert('Email ou mot de passe incorrect !');
                        window.location.replace('../php_files/accueil.php');
                </SCRIPT>";
                exit();
            }
        }else{
            echo "<SCRIPT> 
                        alert('Email ou mot de passe est vide !');
                        window.location.replace('../php_files/accueil.php');
                </SCRIPT>";
        }
    
        

    }
    
?>