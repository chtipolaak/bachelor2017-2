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
$req = $conn->prepare('UPDATE lettre SET lettre = lettre +1 WHERE id = :champs');






$chiffrev = rand (0,5);
$chiffrec = rand (0,19);
$consonne = array ("Z","R","T","P","Q","S","D","F","G","H","J","K","L","M","W","X","C","V","B","N");
$voyelle = array ("A","E","Y","U","I","O");

//le if regarde si la touche est voyelle ou non et alors il choisit une valeur aléatoire dans le tableau
if ($_GET['type'] == 'voyelle')
{
    $lvoyelle = $voyelle[$chiffrev];
    echo $lvoyelle ;

    $req->execute(array( 'champs' => $lvoyelle));


}
//le if regarde si la touche est consonne ou non et alors il choisit une valeur aléatoire dans le tableau
if ($_GET['type'] == 'consonne') {
    $lconsonne = $consonne[$chiffrec];
    echo $lconsonne;
    $req->execute(array( 'champs' => $lconsonne));




}


?>



