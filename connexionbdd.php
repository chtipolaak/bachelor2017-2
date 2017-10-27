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

$lettre = $_GET['lettre'];
$sql = $conn->prepare("UPDATE lettre SET nombrelettre=nombrelettre+1 WHERE lettre = '$lettre';");


$success = $sql->execute($donnees);


?>