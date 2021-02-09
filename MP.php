<?php 
session_start();
    $bdd = new PDO('mysql:host=localhost; dbname=Test; charset=utf8', 'test', 'root');

if(!$_SESSION['pseudo']){
    header('Location : login.php');
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
            $recupUser = $bdd->query('SELECT * FROM users');
            while($user = $recupUser->fetch())
            {
                ?>
                <a href="Message.php?id=<?php echo $user['id'];?>">
                <p> <?php echo $user['login']; ?>  </p></a> 
                <?php 
            }
                ?>
            </body>
        </html> 