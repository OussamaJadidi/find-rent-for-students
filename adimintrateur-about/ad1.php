<?php
    
    $conn = new PDO("mysql:host=localhost;dbname=location_colocation_logement_db;port=3306;charset=utf8", 'root', '');

        $contenuannonce = $conn->query('SELECT * FROM annonce');

        while($ligne = $contenuannonce->fetch()){
            
            echo "<table border=1px>
            <tr><th>Id_annonce</th><th>Titre</th><th>Adresse</th><th>Type</th><th>Prix</th><th>Logement_meublé</th><th>Surface</th><th>N_chambre</th><th>Date_deposition</th><th>N_colocation_possible</th><th>Id_propriétaire</th><th>Description_logement</th><th>Description_logement</th><th>ville</th><th>Université</th></tr>
            <tr><br>
            <td>".$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td><td>".$ligne[3]."</td><td>".$ligne[4]."</td><td>".$ligne[6]."</td><td>".$ligne[6]."</td><td>".$ligne[7]."</td><td>".$ligne[8]."</td><td>".$ligne[9]."</td><td>".$ligne[15]."</td><td>".$ligne[16]."</td><td>".$ligne[16]."</td><td>".$ligne[17]."</td><td>".$ligne[18]."</td>
           
                 </tr>
                 </table>";
               
            }
    
?>