<?php 
session_start();
    $bdd = new PDO('mysql:host=localhost; dbname=Test; charset=utf8', 'test', 'root');

if(!$_SESSION['pseudo']){
    header('Location : login.php');
}

if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getID = $_GET['id'];
    $recupUser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $recupUser->execute(array($getID));
    if ($recupUser->rowCount() > 0){
           if(isset($_POST['envoyer'])){
        $message = htmlspecialchars($_POST['message']);
        $insererMessage = $bdd->prepare('INSERT INTO messages(message, id_destinataire, id_auteur) VALUES (?,?,?)');
        $insererMessage->execute(array($message, $getID, $_SESSION['id']));
    }

}else{
    echo "Aucun Identifiant trouve";
}

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
$recupMessage = $bdd->prepare('SELECT * FROM message WHERE id_auteur = ? AND id destinataire = ? OR id_auteur = ? AND id_destinataire = ?');
$recupMessage->execute(array($_SESSION['id'],$getID,$getID,$_SESSION['id']));
while($message = $recupMessage->fetch())
{
if($message['id_destinataire']== $_SESSION['id']){
    ?>
    <p style="color :red"><?= $message['message']; ?></p>
    <?php
}elseif ($message['id_destinataire'] == $getID){
    ?>
    <p style="color :green"><?= $message['message']; ?></p>
  <?php
}
?>
</section>
</body>
</html>