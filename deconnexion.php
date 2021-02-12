<?php include "database.php";
global $bdd;

    session_start();
	$deconnect = $bdd->prepare("UPDATE User SET user_status = 0 WHERE ID_User = ". $_SESSION['id']);
            $deconnect->execute();
    session_unset();
    session_destroy(); 
    include("index.php");
?>