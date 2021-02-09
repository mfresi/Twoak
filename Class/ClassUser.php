<?php

class user
{
    private $_idUser;
    private $_nom;
    private $_prenom;
    private $_type;
    private $_login;
    private $_password;
    private $_date;
    private $_pseudo;
    private $_mail;
    private $_follower;
    private $_sexe;

    public function __construct()
    {
    }
    // Romain FLEMAL
    //Fonction de connexion avec la BDD
    public function connectbdd() 
    {
        try {
            $bdd = new PDO('mysql:host=192.168.65.245; dbname=TWOAK; charset=utf8', 'root', 'root');
        } catch (Exception $erreur) {
            echo 'Erreur : ' . $erreur->getMessage();
        }
        return $bdd;
    }
    //Fonction d'inscription a Twoak
    public function inscription($nom, $prenom, $mail, $date, $password, $bdd)
    {
        try {
            $bdd->query('INSERT INTO `User` (`ID_User`, `user_type`, `user_nom`, `user_prenom`, `user_password`, `user_dateNaissance`, `user_mail`, `user_avatar`, `user_banniere`, `user_bio`, `user_follower`, `user_sexe`) VALUES (NULL, 1, "'. $nom .'", "'. $prenom .'", "'. $password .'", "'. $date .'", "'. $mail .'", 0, 0, 0, 0, 0)');
        } catch (Exception $erreur) {
            echo 'Erreur : ' . $erreur->getMessage();
        }
    }
    //Fonction de connexion a Twoak
    public function connexion($login, $password, $bdd)
    {  // Romain FLEMAL
        // Vérifie si l'identifiant et le mdp sont les même que dans la bdd
        $request = $bdd->prepare("SELECT * FROM User WHERE user_login = ? AND user_password = ?");
        // mise dans un tableau
        $request->execute([$login, $password]);
        $userexist = $request->rowCount();
        if ($userexist == 1) {
            $userinfo = $request->fetch();
            // Verification avec la base de données
            $_SESSION['login'] = $userinfo['user_login'];
            $_SESSION['id'] = $userinfo['ID_User']
        ?>
            <meta http-equiv="refresh" content="0.01;URL=index.php">
        <?php
        } else {

            echo "Identifiant ou mot de passe incorrect ! ";
        }
    }

    //Faire une bio
    public function  setBio($newBio,$user,$bdd)
    {
        $sql = 'UPDATE `user` SET `user`.`user_bio`='.$newBio.' WHERE `user`.`user_pseudo`='.$user.';';
        $bdd->query($sql);
    }
    //Voir la bio
    public function  getBio($user,$bdd)
    {
        $sql    = 'SELECT `user_bio` FROM `user` WHERE `user`.`user_login` = '.$user.';';
        $reqBio = $bdd->query($sql);
        $bio    =  $reqBio->fetch();

        return $bio['user_bio'];
    }
    //Ajouter l'avatar
    public function setAvatar()
    {
    }
    //Voir l'avatar
    public function getAvatar()
    {
    }
    //Ajouter une banniere
    public function  setBanniere()
    {
    }
    //Voir l'avatar
    public function  getBanniere()
    {
    }

    //MATHIS CLERMONT

    public function sendMessage($dest,$message,$bdd)
    {

    }

    public function getFriends($idUser, $bdd)
    {
        $request = $bdd->query('SELECT User.user_login FROM Follow, User WHERE Follow.Fol_ID_Follower = User.ID_User AND Follow.Fol_ID_Owner = '. $idUser .'');
        while ($tabFriends = $request->fetch())
        {
            echo "<a href=''>". $tabFriends['user_login'] ."</a>";
        }
    }

    public function getAllUsers($bdd)
    {
        $request = $bdd->query('SELECT user_login FROM User');
        while ($tabFriends = $request->fetch())
        {
            echo "<aside class='sidebar static'><a href=''>". $tabFriends['user_login'] ."</a></aside>";
        }
    }
}
