<?php 
session_start();
include "Class/ClassUser.php";
include "database.php";

$user = new user();

$user->afficheip($bdd);

if ($_POST['Envoyer'])
{
    
    echo "L'IP " . $_POST['IP'] . " ban avec succès :)";
}
else
{
    echo "Selectionner une IP à bannir";
}
?>