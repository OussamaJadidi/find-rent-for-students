
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Accueil</title>
        <link rel="stylesheet" href="../css_files/Footer.css" type="text/css">
        <link rel="stylesheet" herf="css/all.css">
        <script src="https://kit.fontawesome.com/c6da55cc0b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--footer-->
        <div class="footer">
                <div class="logo-footer ggg" >
                            <a href="Acceuil.php"><b><h5 >Logement-</h5></b><h3>Etudiant</h3></a>
                        </div>
                <div class="footer-content">
                <!-- partie 1 footer-->
                
               <div class="footer-part1 fff">
                    <div class="logo-footer" >
                        <a href="Acceuil.php"><b><h5 >Logement-</h5></b><h3>Etudiant</h3></a>
                    </div>
                    <div class="description-footer">
                        Log- etudiant est un site web qui donner le moyen de rechercher et déposer des logements pour la location et la colocation<br>
                        Rechercher et contacter des propriétaires sans se déplacer de votre maison ! 
                    </div>
                </div> 
                <!-- partie 2 footer-->
                <div class="footer-part2 fff"> 
                    <h2>Liens rapides</h2>
                    <div class="footer-links">
                        <ul>
                            <li><i class="fa -thin fa-phone"></i>&nbsp&nbsp&nbsp 0611436239</li>
                            <li><i class="fa -light fa-envelope"></i>&nbsp&nbsp&nbsp oussama.jadidi20@ump.ac.ma</li>
                            <li>
                                <a href="https://m.facebook.com/jadidi.oussama.1"><i class="fa-brands fa-facebook-square"></i></a>
                                <a href="https://www.instagram.com/jadidi_oussama/"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://twitter.com/jadidi_oussama"><i class="fa-brands fa-twitter"></i></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- partie 3 footer-->
                <div class="footer-part3 fff">
                    <h2>Contactez-nous</h2>
                    <form action="../php_baseDonnée_files/msgAdmin.php" method="post">
                        <input type="text" placeholder="  Email" name="msg_pour_admin_email" required>
                        <textarea name="msg_pour_admin_content" id=""  rows="4" placeholder=" Message..." required></textarea>
                        <button type="submit" name="msg_pour_admin_submit">Envoyer</button>
                    </form>
                </div>
            </div>
            <!-- partie bas footer -->
            <div class="lower-footer"> &copy; conçu par Logement-Etudiant</div>
        </div>
    </body>
</html>