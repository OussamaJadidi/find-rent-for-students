<?php
    
    $conn = new PDO("mysql:host=localhost;dbname=location_colocation_logement_db;port=3306;charset=utf8", 'root', '');

        $contenupropriétaire = $conn->query('SELECT * FROM propriétaire');
        while($ligne = $contenupropriétaire->fetch()){

        echo "<table border=1px>
        <tr><th>Id_propriétaire</th><th>Nom_utilisateur</th><th>Email</th><th>ville</th><th>Telephone</th><th>Mot de passe</th></tr>
        <tr><br>
        <td>".$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td><td>".$ligne[3]."</td><td>".$ligne[4]."</td><td>".$ligne[5]."</td>
       
             </tr>
             </table>";
           
        }
    
               
        


    
    
?>