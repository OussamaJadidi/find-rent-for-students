<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <meta name="google-signin-client_id" content="79694809327-hv9jcgd2vo5theucc4h7vrbnsvtf5jfm.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>

        <title>Accueil</title>
        <link rel="icon" href="../photo_files/dar4.png" type="image/icon type">
        <link rel="stylesheet" href="../css_files/Accueil.css" type="text/css">
        <link rel="stylesheet" href="../css_files/Header.css" type="text/css">
        <link rel="stylesheet" href="../css_files/highbody.css" type="text/css">
        <link rel="stylesheet" href="../css_files/textPublicitaitreAccueil.css" type="text/css">
        <link rel="stylesheet" href="../css_files/formulaireAcceuil.css" type="text/css">
        <link rel="stylesheet" href="../css_files/loginFormulaire.css" type="text/css">
        <link rel="stylesheet" href="../css_files/ajouterAnnonce.css" type="text/css">
        <link rel="stylesheet" href="../css_files/voirAnnonce.css" type="text/css">
        <link rel="stylesheet" href="../css_files/span.css" type="text/css">
        <link rel="stylesheet" href="../css_files/indexAnnonce.css" type="text/css">
        <link rel="stylesheet" href="../css_files/connexion.css" type="text/css">
        <link rel="stylesheet" href="../css_files/annonceFormatClient.css" type="text/css">
        <link rel="stylesheet" href="../css_files/pop-up-validation-annonce.css" type="text/css">
        <link rel="stylesheet" href="../css_files/annonceFormatComplet.css" type="text/css">
        <link rel="stylesheet" href="../css_files/testadmin1.css">
        <link rel="stylesheet" href="../css_files/testadmin2.css">
        <link rel="stylesheet" href="../css_files/testadmin3.css">
        <link rel="stylesheet" href="../css_files/testadmin.css">
        <link rel="stylesheet" herf="css/all.css">
        <script src="../javascript_files/Header.js"></script>
        <script src="../javascript_files/formulaire.js"></script>
        <script src="../javascript_files/loginInscription.js"></script>
        <script src="../javascript_files/inscription.js"></script>
        <script src="../javascript_files/redirectHelp.js"></script>
        <script src="../javascript_files/ajouterAnnonce.js"></script>
        <script src="../javascript_files/pop-up-validation.js"></script>
        <script src="../javascritp_files/modifier-delete-annonce.js"></script>
        <script src="https://kit.fontawesome.com/c6da55cc0b.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <!--header-->
        <header class="head">
            <div class="logo">
                <!-- <i class="fa -light fa-bars"></i>&nbsp&nbsp -->
                <a href="accueil.php"><img src="../photo_files/dar4.png " width="25px"></a>
                <a href="accueil.php"><b><h5>Logement-</h5></b><h3>Etudiant</h3></a>
            </div>
            <nav>
                <ul class="headLinks">
                    <li class="li1 li1122"><a href="accueil.php">Accueil</a></li>
                    <li class="li1 li1122"><a href="about.php">Apropos</a></li>
                    <?php
                        if(isset($_SESSION['nomProp']) || isset($_SESSION['nomAdmin'])){
                    ?>
                        <?php if(isset($_SESSION['nomAdmin'])){?><li class="li1"><a href="../php_files/administrateur.php">Gestion admin</a></li><?php } ?>
                        <a href="pagePropriétaire.php"><li ><button class="buttonDéposition">Déposer une annonce</button></li></a>
                    <?php
                        }elseif(isset($_SESSION['nomEtud'])){
                    ?>
                    <?php
                        }else{
                    ?>
                        <li ><button class="buttonDéposition" onclick="afficherPage1()">Déposer une annonce</button></li>
                        
                    <?php   }?>
                    
                    <span class="id" >
                        <li class="li1"><button class="iconLog" onclick="change()" onblur="demiChange()"><img src="../photo_files/iconlog.png" alt="icon" width="26px" height="26px" ></button></li>
                        <?php 
                            if(isset($_SESSION['nomEtud'])){
                        ?>
                                <li ><button onclick="change()" onblur="demiChange()"><span><?php echo $_SESSION['nomEtud'];?></span></button></li>
                        <?php
                            }
                            if(isset($_SESSION['nomProp'])){
                        ?>
                               <li ><button onclick="change()" onblur="demiChange()"><span><?php echo $_SESSION['nomProp'];?></span></button></li>
                        <?php
                            }
                            if(isset($_SESSION['nomAdmin'])){
                        ?>
                                <li ><button onclick="change()" onblur="demiChange()"><span><?php echo $_SESSION['nomAdmin'];?></span></button></li>
                        <?php
                            }
                        ?>
                        <li ><button class="iconUpDown"  onclick="change()" onblur="demiChange()"><img id="iconUpDownID" src="../photo_files/icondown.png" alt="icon" width="10px" height="10px" ></button></li>
                    </span>
                </ul>
            </nav>
        
            <div class="box_login">
                <table cellspacing="0">
                   
                <tr onmousedown="mailto()"><td class="li_login" >Contactez-nous</td></tr>
                    <?php
                    if(isset($_SESSION['nomProp']) || isset($_SESSION['nomAdmin'])){
                    ?>
                    <tr><td class="li_login" onmousedown="afficherMesAnnonce()">Mes annonces</td></tr>
                    <tr><td class="li_login" >Modifier mon compte</td></tr>
                    <tr><td class="li_login" onmousedown="page_deconnecter()" >Se déconnncter</td></tr>
                    <?php
                    }elseif(isset($_SESSION['nomEtud'])){
                    ?>
                    <tr><td class="li_login" >Modifier mon compte</td></tr>
                    <tr><td class="li_login" onmousedown="page_deconnecter()" >Se déconnecter</td></tr>
                    <?php
                    }else{
                    ?>
                    <tr><td class="li_login" onmousedown="afficherPage2()">Se connecter</td></tr>
                    <tr><td class="li_login" onmousedown="afficherPage1()">Créer un compte</td></tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </header>
        
        
        <!-- login inscription formulaires -->
        <div class="login-page" >
            <div class="login-formulaire" >
                <div class="contenur-formulaire" >
                    
                        <div class="inscription-fixed">
                            <h1>S'inscrire</h1>
                            <div class="deja-membre">
                                <h4>Vous êtes déjà membre ?<a href="#" onclick="nAfficherPasPage();afficherPage2()">&nbspSe connecter</a></h4>
                            </div>
                        </div>
                    <form action="../php_baseDonnée_files/inscription.php" method="post"  >
                        <div class="inscription-1">
                            <button class="close" onmousedown="nAfficherPasPage()">+</button>
                            <button type="button"  class="g-signin2 google-connexion" ><img src="../photo_files/google.png " alt="google icon" width="20px" height="20px">&nbsp&nbsp&nbsp&nbsp&nbsp<h3>Continue avec google</h3></button>
                            <div class="span-ou">
                                <span>ou</span>
                            </div>
                            <input type="text" placeholder=" Entrez votre Email" class="inputform" name="email" >
                            <span class="emailVide">Insérez votre email</span>
                            <input type="text" placeholder=" Choisissez un nom d'utilisateur" class="inputform" name="nomEtulisateur" >
                            <span class="nomVide">Insérez votre nom d'utilisation</span>
                            <button type="button" onmousedown="form1()" class="button-connexion">Continuer</button>
                    
                        </div>
                        <div class="inscription-2">
                            <button class="close" onmousedown="nAfficherPasPage()">+</button>
                            <h4> Remplir ce formulaire pour que vous pouvez déposer des annonces !</h4>
                            <input type="text" placeholder=" Ville" class="inputform" name="ville" >
                            <span class="villeVide">Insérez votre ville</span>
                            <input type="text" placeholder=" Gmail" class="inputform" name="gmail" >
                            <span class="gmailVide">Insérez votre Gmail</span>
                            <input type="text" placeholder=" Numereau de téléphone" class="inputform" name="telephone" >
                            <span class="telephoneVide">Insérez votre telephone</span>
                            <div class="Two-buttons">
                                <button type="button" onmousedown="form3()"class="button-ignore">ignorer</button>
                                <button type="button" onmousedown="form2()" class="button-continue">continuer</button>
                            </div>
                            
                        </div>
                        <div class="inscription-3">
                            <button class="close" onmousedown="nAfficherPasPage()">+</button>
                            <input type="password" onmouseout="form4()" placeholder=" Choisir un mot de passe" class="inputform" name="motPasse" >
                            <span class="motpasseVide">Insérez votre mot de passe</span>
                            <input type="password" onmouseout="form4()" placeholder=" Confirmer le mot de passe" class="inputform" name="motPasseC" >
                            <span class="motpasseIncorrect" >Mot de passe incorrect!</span>
                            <input type="submit" value="rejoignez-nous" name="continue3" onchange="form4()" class="button-connexion" id="aaahhh"  >
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- login-formulaire -->
        <div class="login-page2">
            <div class="login-formulaire2">
               <div class="conteneur-formulaire">
                    <form action="../php_baseDonnée_files/seConnecter.php" method="post" >
                        <div class="inscription-fixed">
                            <h1 style="width: 210px;">Se connecter</h1>
                            <div class="deja-membre">
                                <h4>Vous êtes pas encore membre ?<a href="#" onclick="nAfficherPasPage();afficherPage1()">&nbspS'inscrire</a></h4>
                            </div>
                        </div>
                        <div class="inscription-4">
                            <button class="close" onmousedown="nAfficherPasPage()">+</button>
                            <button type="button" class="g-signin2 google-connexion" ><img src="../photo_files/google.png " alt="google icon" width="20px" height="20px">&nbsp&nbsp&nbsp&nbsp&nbsp<h3>Continue avec google</h3></button>
                            <div class="span-ou">
                                <span>ou</span>
                            </div>
                            <input type="text" placeholder=" Email / Nom d'utilisateur" class="inputform" name="emailID">
                            <input type="password" onmouseout="form5()" placeholder=" Mot de passe" class="inputform" name="motPasseID">
                            <span class="dataIncorrect">Email et le mot de passe sont vide</span>
                            <input type="submit" value="Se connecter" onchange="form5()" name="connecter" class="button-connexion" id="hhhaaa">
                        </div>
                    </form>
               </div>
            </div>
        </div>
</html>