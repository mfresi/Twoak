<?php session_start();
	include ("database.php");
	global $bdd;
	extract($_POST);  
    //on extracte les informations reçu en js pour traitement en php après on le décode est on le mais dans tabreturn.
    $tabReturn = json_decode($_POST['json'],true);
    echo json_encode($tabReturn);

	$requete = $bdd->prepare("INSERT INTO `Loak`(`ID_User`, `ID_Loak`) VALUES (".$_SESSION['id'].",".$tabReturn['a'].")");
	$requete->execute(

	);

?>