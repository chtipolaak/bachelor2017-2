<?php
$serveur = "localhost";
$base = 'lettre';
$utilisateur = 'root';
$motDePasse = 'root';

try {
    $dns = "mysql:host=$serveur;dbname=$base";
    $conn = new PDO( $dns, $utilisateur, $motDePasse );
}
catch ( Exception $e )
{   echo "Connexion MySQL impossible : ", $e->getMessage();
    die();

}





$success = $sql->execute($donnees);

$chiffrev = rand (0,5);
$chiffrec = rand (0,19);
$consonne = array ("Z","R","T","P","Q","S","D","F","G","H","J","K","L","M","W","X","C","V","B","N");
$voyelle = array ("A","E","Y","U","I","O");

//le if regarde si la touche est voyelle ou non et alors il choisit une valeur aléatoire dans le tableau
if ($_GET['type'] == 'voyelle')
{
    $lvoyelle = $voyelle[$chiffrev];
    echo $lvoyelle ;

    $requete = "UPDATE lettre SET nombrelettre=nombrelettre+1 WHERE numAuteur = '$lvoyelle'";
}
//le if regarde si la touche est consonne ou non et alors il choisit une valeur aléatoire dans le tableau
if ($_GET['type'] == 'consonne') {
    $lconsonne = $consonne[$chiffrec];
    echo $lconsonne;


    $requete = "UPDATE lettre SET nombrelettre=nombrelettre+1 WHERE numAuteur = '$lconsonne'";


}


?>



