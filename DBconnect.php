
<?php
    $host = "localhost";
    $username = "phpmyadmin";
    $password = "B476296";
    $dbname = "cinema";
    
    // créer une connection avec mysqli 
    $conn = new mysqli($host, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) { //Retourne une description de la dernière erreur de connexion
        die("Connection echoué: " . $conn->connect_error);
    }    


    //stock les données de la requete sql dans les variables
    $limit = $_GET['limit'];
    $Genre = $_GET['genre'];
    $Date = $_GET['date'];
    $Titre = $_GET['film'];
    $NomMembre = $_GET['nom'];
    $PrenomMembre = $_GET['prenom'];
    $Distributor = $_GET['distrib'];

 if (empty($Titre) && empty($Genre) && empty($Distributor)  //Détermine si une variable est vide
 && empty($NomMembre) && empty($PrenomMembre) && empty($Date)) {
    echo '...';
}
    ?>

    