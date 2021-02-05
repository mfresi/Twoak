<?php session_start();

class user
{
    private $_nom;
    private $_prenom;
    private $_login;
    private $_password;
    private $_administrateur;
    private $pseudo;
    private $mail;
    private $follower;
    private $sexe;

    public function __construct()
    {
    }

    public function connectbdd() // Romain FLEMAL
    {
        try {
            $bdd = new PDO('mysql:host=192.168.65.245; dbname=TWOAK; charset=utf8', 'Twoak', 'Twoak');
        } catch (Exception $erreur) {
            echo 'Erreur : ' . $erreur->getMessage();
        }
        return $bdd;
    }
    public function inscription($login, $password, $bdd)
    {
        try {
            $bdd->query('INSERT INTO `user`(`login`, `password`) VALUES ("' . $login . '","' . $password . '")');
        } catch (Exception $erreur) {
            echo 'Erreur : ' . $erreur->getMessage();
        }
    }
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
           
?>
            <meta http-equiv="refresh" content="0.01;URL=index.php">
<?php
        } else {

            echo "Identifiant ou mot de passe incorrect ! ";
        }
    }

    //---------Profil---------DANEL

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
}
