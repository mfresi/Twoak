<?php
try {
    $bdd = new PDO('mysql:host=localhost; dbname=Twoak; charset=utf8', 'root', 'root');
} catch (Exception $erreur) {
    echo 'Erreur : ' . $erreur->getMessage();
}
?>