<?php
include('Class/ClassUser.php');
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
$friend  = new user();
$idDestination = $_GET['id'];

$localtime = getdate(date("U"));
$Date = "$localtime[year]-$localtime[mon]-$localtime[mday] $localtime[hours]:$localtime[minutes]:$localtime[seconds]";

if ($_POST['envoyer']) {
    $bdd->query('INSERT INTO `Message`(`ID_Sender`, `ID_Receiver`, `texte`,`Date`) VALUES ("' . $_SESSION['id'] . '", "' . $idDestination . '", "' . $_POST['message'] . '", "' . $Date . '")');
    echo "";
} else {
    echo "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Message Prive</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
</head>

<body>
    <div class="col-lg-6">
        <div class="central-meta">
            <div class="messages">
                <h5 class="f-title"><i class="ti-bell"></i>Tous vos messages </i>
                </h5>
                <div class="message-box">
                    <ul class="peoples">
                        <?php
                        $tabFriends = $friend->getFriendsMSg($_SESSION['id'], $bdd);
                        ?>
                    </ul>
                    <div class="peoples-mesg-box">
                        <div class="conversation-head">
                            <div id="mp">
                                <?php $message->DisplayPrivateMsgSend($_SESSION['id'], $idDestination, $bdd); ?>
                            </div>
                        </div>
                        <form method="POST" action="">
                            <p> <textarea name="message"> </textarea> </p>
                            <button id="reloader">Recharger</button>
                            <input type="submit" name="envoyer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

<script>

    $("#reloader").click(function(){
        $("#mp").load(" #mp");
        console.log("bien reload");
    });
</script>