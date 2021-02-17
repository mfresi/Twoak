<?php 
session_start();
include "Class/ClassUser.php";
include "database.php";

$user = new user();

$user->afficheip($bdd);

if ($_POST['Envoyer'])
{
    
    echo "L'IP " . $_POST['IP'] . " ban avec succès :)";
    $bdd->query('UPDATE `User` SET `user_ban` = 1 WHERE `user_ip` = "'.$_POST['IP'].'"'); //mise à jour du ban en base de données
    $ipuser = $user->getIp($bdd); //on recupere l'ip du user depuis la methode liée
?>
<script>
	banipfct(<?php echo "'".$ipuser."'" ?>); //on passe l'ip courante de l'utilisateur à la fonction js chargée de rediriger si l'ip est bannie
</script>

<?php
}
else
{
    echo "Selectionner une IP à bannir";
}


?>