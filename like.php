<?php session_start();
include("database.php");
global $bdd;
extract($_POST);
//on extracte les informations reçu en js pour traitement en php après on le décode est on le mais dans tabreturn.
$tabReturn = json_decode($_POST['json'], true);
echo json_encode($tabReturn);
$requeteSelect = $bdd->prepare("SELECT * FROM Loak WHERE `ID_User` = " . $_SESSION['id'] . " AND `ID_Twoak` = " . $tabReturn['a'] . "");
$requeteSelect->execute();
if ($requeteSelect->rowCount() == 0) {
	$requete = $bdd->prepare("INSERT INTO `Loak`(`ID_User`, `ID_Twoak`) VALUES (" . $_SESSION['id'] . "," . $tabReturn['a'] . ")");
	$requete->execute();
} else {
	$requeteDelete = $bdd->prepare("DELETE FROM `Loak` WHERE `ID_User` = " . $_SESSION['id'] . " AND `ID_Twoak` = " . $tabReturn['a'] . "");
	$requeteDelete->execute();
}
