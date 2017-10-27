<?php

$chiffrev = rand (0,5);
$chiffrec = rand (0,19);
$consonne = array ("Z","R","T","P","Q","S","D","F","G","H","J","K","L","M","W","X","C","V","B","N");
$voyelle = array ("A","E","Y","U","I","O");


if ($_GET['type'] == 'voyelle')
{
    $lvoyelle = $voyelle[$chiffrev];
    echo $lvoyelle ;
}

if ($_GET['type'] == 'consonne')
{
    $lconsonne = $consonne[$chiffrec];
    echo $lconsonne;
}

else {

}

?>



