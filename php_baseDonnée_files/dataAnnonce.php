<?php
    include_once 'connexionAuDataBase.php';
    session_start();
    if(isset($_POST['ajouterA'])){
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
        $meuble=$_POST['meubleA'];
        $id_prop=$_SESSION['id_prop'];
        if(!empty($photos) && !empty($titre) && !empty($adresse) && !empty($type) && !empty($prix) && !empty($colocation)){
            
           $destination2='';
           $destination3='';
           $destination4='';
           $destination5='';
            $fichier = $_FILES['photoA1'];
            $image_name= $_FILES['photoA1']['name'];
            $image_ext=explode('.',$image_name);
            $image_real_ext=end($image_ext);
            if($fichier['error'] == 0){
                $newNameImage=uniqid('',true).".".$image_real_ext; 
                $destination="../Annonce_images/".$newNameImage;
                move_uploaded_file($fichier['tmp_name'],$destination);
            }
            if(isset($_FILES['photoA2'])){
                $fichier = $_FILES['photoA2'];
                $image_name= $_FILES['photoA2']['name'];
                $image_ext=explode('.',$image_name);
                $image_real_ext=end($image_ext);
                if($fichier['error'] == 0){
                    $newNameImage=uniqid('',true).".".$image_real_ext; 
                    $destination2="../Annonce_images/".$newNameImage;
                    move_uploaded_file($fichier['tmp_name'],$destination2);
                }
            }
            if(isset($_FILES['photoA3'])){
                $fichier = $_FILES['photoA3'];
                $image_name= $_FILES['photoA3']['name'];
                $image_ext=explode('.',$image_name);
                $image_real_ext=end($image_ext);
                if($fichier['error'] == 0){
                    $newNameImage=uniqid('',true).".".$image_real_ext; 
                    $destination3="../Annonce_images/".$newNameImage;
                    move_uploaded_file($fichier['tmp_name'],$destination3);
                }
            }
            if(isset($_FILES['photoA4'])){
                $fichier = $_FILES['photoA4'];
                $image_name= $_FILES['photoA4']['name'];
                $image_ext=explode('.',$image_name);
                $image_real_ext=end($image_ext);
                if($fichier['error'] == 0){
                    $newNameImage=uniqid('',true).".".$image_real_ext; 
                    $destination4="../Annonce_images/".$newNameImage;
                    move_uploaded_file($fichier['tmp_name'],$destination4);
                }
            }
            
            if(isset($_FILES['photoA5'])){
                $fichier = $_FILES['photoA5'];
                $image_name= $_FILES['photoA5']['name'];
                $image_ext=explode('.',$image_name);
                $image_real_ext=end($image_ext);
                if($fichier['error'] == 0){
                    $newNameImage=uniqid('',true).".".$image_real_ext; 
                    $destination5="../Annonce_images/".$newNameImage;
                    move_uploaded_file($fichier['tmp_name'],$destination5);
                }
            }
            $insertionDataA= $conn->prepare("INSERT INTO annonce (Titre,Adresse,Ville,Type,Prix,N_colocation_possible,Id_propriétaire,Photo1,N_chambre,Surface,Description_logement,Université,Photo2,Photo3,Photo4,Photo5,Pays,Logement_meublé) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $insertionDataA->execute(array($titre,$adresse,$ville,$type,$prix,$colocation,$id_prop,$destination,$chambre,$surface,$description,$universite,$destination2,$destination3,$destination4,$destination5,$pay,$meuble));
        }
    }
    if($conn){
        $conn=null;
    }
?>