<?php
include('Class/ClassUser.php');
session_start();
$friend = new user();

try {
    $bdd = new PDO('mysql:host=localhost; dbname=Twoak; charset=utf8', 'Twoak', 'Twoak');
} catch (Exception $erreur) {
    echo 'Erreur : ' . $erreur->getMessage();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title> MP </title>
    <meta charset="utf-8">
</head>

<body>
    <?php
        $tabFriends = $friend->getFriendsMSg($_SESSION['id'], $bdd);
    ?>
</body>
</html>