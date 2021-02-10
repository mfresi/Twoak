<?php
include ('Class/ClassUser.php');
session_start();
try {
    $bdd = new PDO('mysql:host=localhost; dbname=Twoak; charset=utf8', 'Twoak', 'Twoak');
} catch (Exception $erreur) {
    echo 'Erreur : ' . $erreur->getMessage();
}
if (!$_SESSION['login']) {
    header('Location : login.php');
}
$message = new user();
$idDestination = $_GET['id'];

if ($_POST['envoyer']) {
    $bdd->query('INSERT INTO `Message`(`ID_Sender`, `ID_Receiver`, `texte`) VALUES ("' . $_SESSION['id'] . '", "'. $idDestination .'", "' . $_POST['message'] . '")');
    echo "message envoyé";
} else {
    echo "Veuillez cliquer sur le bouton";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>MESSAGE PRIVE</title>
    <meta charset="utf-8">
</head>

<body>

    <form method="POST" action="">
        <p> <textarea name="message"> </textarea> </p>
        <input type="submit" name="envoyer">
    </form>
    <section id="messages">
        <?php
        echo "Message Envoye :";
            $message->DisplayPrivateMsgSend($_SESSION['id'], $idDestination, $bdd);
        echo "Message Recu :" ;    
            $message->DisplayPrivateMsgRecv($_SESSION['id'], $idDestination, $bdd);
        ?>
    </section>
</body>

</html>