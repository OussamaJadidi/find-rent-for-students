<?php
    session_start();
    include_once 'connexionAuDataBase.php';
    if(isset($_POST['modifierA'])){
        $titre=$_POST['titreA'];
        $adresse=$_POST['adresseA'];
        $type=$_POST['typeA'];
        $prix=$_POST['prixA'];
        $photos=$_FILES['photoA1'];
        $colocation=$_POST['colocationA'];
        $chambre=$_POST['chambreA'];
        $surface=$_POST['surfaceA'];
        $ville=$_POST['villeA'];
        $universite=$_POST['uuu'];
        $pay=$_POST['payAnnonce'];
        $description=$_REQUEST['ddd'];
        $meuble=$_POST['meuble1'];
        $m = $conn->prepare("UPDATE annonce SET Titre=?,Pays=?,Ville=?,Adresse=?,Type=?,Prix=?,N_colocation_possible=?,N_chambre=?,Surface=?,Logement_meublé=?,Université=?,Description_logement=? WHERE Id_annonce=? ");
        $m->execute(array($titre,$pay,$ville,$adresse,$type,$prix,$colocation,$chambre,$surface,$meuble,$universite,$description,$_REQUEST['vjjj']));
        if($_FILES['photoA1']['name']!=''){
            $fichier = $_FILES['photoA1'];
            $image_name= $_FILES['photoA1']['name'];
            $image_ext=explode('.',$image_name);
            $image_real_ext=end($image_ext);
            if($fichier['error'] == 0){
                $newNameImage=uniqid('',true).".".$image_real_ext; 
                $destination1="../Annonce_images/".$newNameImage;
                move_uploaded_file($fichier['tmp_name'],$destination1);
            }
            $modifierphoto1= $conn->prepare("UPDATE annonce SET Photo1=? WHERE Id_annonce=?");
            $modifierphoto1->execute(array($destination1,$_REQUEST['vjjj']));
        }
        if($_FILES['photoA2']['name']!=''){
            $fichier = $_FILES['photoA2'];
            $image_name= $_FILES['photoA2']['name'];
            $image_ext=explode('.',$image_name);
            $image_real_ext=end($image_ext);
            if($fichier['error'] == 0){
                $newNameImage=uniqid('',true).".".$image_real_ext; 
                $destination2="../Annonce_images/".$newNameImage;
                move_uploaded_file($fichier['tmp_name'],$destination2);
            }
            $modifierphoto2= $conn->prepare("UPDATE annonce SET Photo2=? WHERE Id_annonce=?");
            $modifierphoto2->execute(array($destination2,$_REQUEST['vjjj']));
        }
        if($_FILES['photoA3']['name']!=''){
            $fichier = $_FILES['photoA3'];
            $image_name= $_FILES['photoA3']['name'];
            $image_ext=explode('.',$image_name);
            $image_real_ext=end($image_ext);
            if($fichier['error'] == 0){
                $newNameImage=uniqid('',true).".".$image_real_ext; 
                $destination3="../Annonce_images/".$newNameImage;
                move_uploaded_file($fichier['tmp_name'],$destination3);
            }
            $modifierphoto3= $conn->prepare("UPDATE annonce SET Photo3=? WHERE Id_annonce=?");
            $modifierphoto3->execute(array($destination3,$_REQUEST['vjjj']));
        }
        if($_FILES['photoA4']['name']!=''){
            $fichier = $_FILES['photoA4'];
            $image_name= $_FILES['photoA4']['name'];
            $image_ext=explode('.',$image_name);
            $image_real_ext=end($image_ext);
            if($fichier['error'] == 0){
                $newNameImage=uniqid('',true).".".$image_real_ext; 
                $destination4="../Annonce_images/".$newNameImage;
                move_uploaded_file($fichier['tmp_name'],$destination4);
            }
            $modifierphoto4= $conn->prepare("UPDATE annonce SET Photo4=? WHERE Id_annonce=?");
            $modifierphoto4->execute(array($destination4,$_REQUEST['vjjj']));
        }
        if($_FILES['photoA5']['name']!=''){
            $fichier = $_FILES['photoA5'];
            $image_name= $_FILES['photoA5']['name'];
            $image_ext=explode('.',$image_name);
            $image_real_ext=end($image_ext);
            if($fichier['error'] == 0){
                $newNameImage=uniqid('',true).".".$image_real_ext; 
                $destination5="../Annonce_images/".$newNameImage;
                move_uploaded_file($fichier['tmp_name'],$destination5);
            }
            $modifierphoto5= $conn->prepare("UPDATE annonce SET Photo5=? WHERE Id_annonce=?");
            $modifierphoto5->execute(array($destination5,$_REQUEST['vjjj']));
        }
        
    }
?>