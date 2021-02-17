<?php 
session_start();
include "Class/ClassUser.php";
include "database.php";

$user = new user();

$user->afficheip($bdd);


if ($_POST['Bannir'])
{
    
    echo "L'IP " . $_POST['IP'] . " a été ban avec succès :)";
    $bdd->query('UPDATE `User` SET `user_ban` = 1 WHERE `user_ip` = "'.$_POST['IP'].'"');
    $ipuser = $user->getIp($bdd);
} 
else if ($_POST['Débannir'])
{
    echo "L'IP " . $_POST['IP'] . " a été déban avec succès :)";
    $bdd->query('UPDATE `User` SET `user_ban` = 0 WHERE `user_ip` = "'.$_POST['IP'].'"');
    $ipuser = $user->getIp($bdd);
}

else
{
    echo "Selectionner une IP à bannir";
}

$user->getipban($bdd);
?>

