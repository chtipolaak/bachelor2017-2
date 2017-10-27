<?php // Déclaration des différentes variables utiles à la connexion
$serveur = "172.29.20.212";
$base = 'lettre';
$utilisateur = 'root';
$motDePasse = 'root';

//création  d'une connexion
 try {
 $dns = "mysql:host=$serveur;dbname=$base";
 $conn = new PDO( $dns, $utilisateur, $motDePasse );
 } catch
( Exception $e )
 {   echo "Connexion MySQL impossible : ", $e->getMessage();
die(); }
?>