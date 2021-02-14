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
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
    <div class="col-lg-6">
        <div class="central-meta">
            <div class="messages">
                <h5 class="f-title"><i class="ti-bell"></i>Tous vos messages </i>
                    </span>
                </h5>
                <div class="message-box">
                    <ul class="peoples">

                   <? $tabFriends = $friend->getFriendsMSg($_SESSION['id'], $bdd); ?>

                    </ul>
                    <div class="peoples-mesg-box">
                        <div class="conversation-head">
                            <figure><img src="" alt=""></figure>

                        </div>
                        <ul class="chatting-area">
                            <?php
        echo "Message Envoye :";
            $message->DisplayPrivateMsgSend($_SESSION['id'], $idDestination, $bdd);
        echo "Message Recu :" ;    
            $message->DisplayPrivateMsgRecv($_SESSION['id'], $idDestination, $bdd);
        ?>
                        </ul>
                        <div class="message-text-container">
                            <form method="post">
                                <textarea></textarea>
                                <button title="send"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>