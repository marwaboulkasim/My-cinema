
<?php
include "DBconnect.php";
if (!empty($Titre)) {
    $reponse = $conn->query("SELECT * FROM movie WHERE title LIKE '%$Titre%' LIMIT $limit");
    while ($recherche = $reponse->fetch_assoc()) {   //Récupère la ligne suivante d'un ensemble de résultats sous forme de tableau associatif
        echo '<h2>' . $recherche['title'] . '</h2>';
        echo ' ' . $recherche['director'] .' -- '. $recherche['duration'] . ' min ' . $recherche['release_date'] . '  ' ; 
        $validation = 1;
    }
    if ($validation != 1) {
        echo "Aucun Résultat";
    }
    
    $reponse->close();


/*     UPDATE `movie` SET `release_date` = '2022-03-31 00:00:00' WHERE `movie`.`id` = 2413; 
 */}
