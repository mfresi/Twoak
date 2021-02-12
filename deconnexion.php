<?php include "database.php";
global $bdd;

$deconnect = $bdd->prepare("UPDATE User SET user_status = 0 WHERE ID_User = ". $_SESSION['id']);
            $deconnect->execute();
    session_start();
    session_unset();
    session_destroy(); 
    include("index.php");
?>