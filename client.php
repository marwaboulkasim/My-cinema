<?php
include "DBconnect.php";
if(!empty($NomMembre)){
    $reponse = $conn->query("SELECT * FROM user WHERE lastname LIKE '%$NomMembre%' LIMIT $limit"); //Exécute une requête sur la base de données
    while ($recherche = $reponse->fetch_assoc()){  //Récupère la ligne suivante d'un ensemble de résultats sous forme de tableau associatif
        
        echo 'NOM: ' . $recherche['lastname'] .' -- '.'PRENOM: '. $recherche['firstname'] . ' -- ' . $recherche['email']. ' -- ' .  $recherche['city'] . ' -- ' .  $recherche['country']. '<br />';
     //permet d'affciher  dans la page html le prenom et nom séparer d'un espace 
        $validation=1;
    }
    $reponse->close();
    if($validation!=1){
        echo "Aucun Résultat";
    }
    
}

if(!empty($PrenomMembre)){
    $reponse = $conn->query("SELECT * FROM user WHERE firstname LIKE '%$PrenomMembre%' LIMIT $limit");
    while ($recherche = $reponse->fetch_assoc()){
        
        echo 'PRENOM: ' . $recherche['firstname'] .' -- '.'NOM: '. $recherche['lastname'] . ' -- ' . $recherche['email']. ' -- ' .  $recherche['city'] . ' -- ' .  $recherche['country']. '<br />';
     
        $validation=1;
    }
    $reponse->close();
    if($validation!=1){
        echo "Aucun Résultat";
    }
    
}

