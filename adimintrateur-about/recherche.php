<?php
 $conn = new PDO("mysql:host=localhost;dbname=db1;port=3306;charset=utf8", 'root', '');

 $contenuannonce = $conn->query('SELECT * FROM annonce');
  
 while($ligne = $contenuannonce->fetch()){

    echo "<table border=1px>
      <H1><i> Voila l'annonce disponible<//i><//H1><br>
    <tr><th>Id_annonce</th><th>Titre</th><th>N_chambre</th><th>Prix</th><th>Discription_logement</th><th>Date_de_diposition</th></tr>
    <tr><br><br><br><br><br><br><br><br>
    <td>".$ligne[0]."</td><br><td>".$ligne[3]."</td><td>".$ligne[7]."</td><td>".$ligne[4]."</td><td>".$ligne[16]."</td><td>".$ligne[8]."</td>
         </tr>
         </table>";
       
    }

 

?>