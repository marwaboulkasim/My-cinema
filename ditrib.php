<?php
include "DBconnect.php";
if(!empty($Distributor)){ ////Exécute une requête sur la base de données
			$reponse = $conn->query("SELECT *
            FROM distributor
            INNER JOIN movie ON movie.id_distributor = distributor.id
            WHERE distributor.name LIKE '%$Distributor%' LIMIT $limit");

			while ($recherche = $reponse->fetch_assoc()){ //Récupère la ligne suivante d'un ensemble de résultats sous forme de tableau associatif
                echo '<h2>' . $recherche['title'] . '</h2>';
                echo 'DISTRIBUTOR: ' . $recherche['name'] .' -- '. $recherche['duration'] . ' min -- ' . $recherche['director'] . ' -- ' ;
				$validation=1;
			}
			if($validation!=1){
				echo "Aucun Résultat".'<br />';
				}
				$reponse->close();
			}
			?>