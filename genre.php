<?php
include "DBconnect.php";
if(!empty($Genre)){
			$reponse = $conn->query("SELECT *
            FROM genre
            INNER JOIN movie_genre ON movie_genre.id_genre = genre.id
            INNER JOIN movie ON movie_genre.id_movie = movie.id
            WHERE genre.name LIKE '%$Genre%' LIMIT $limit");

			while ($recherche = $reponse->fetch_assoc()){ //Récupère la ligne suivante d'un ensemble de résultats sous forme de tableau associatif
                echo '<h2>' . $recherche['title'] . '</h2>'; //déclaration de titre enveloppée dans une balise h2.
                echo 'GENRE: ' . $recherche['name'] .' -- '. $recherche['duration'] . ' min -- ' . $recherche['director'] . ' -- ' ;
				$validation=1;
			}
			if($validation!=1){
				echo "Aucun Résultat".'<br />';
				}
				$reponse->close();
			}
			
		

        
        