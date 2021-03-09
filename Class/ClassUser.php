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
    private $_ip;

    public function __construct()
    {
    }
    // Romain FLEMAL
    //Fonction de connexion avec la BDD
    public function connectbdd()
    {
        try {
            $bdd = new PDO('mysql:host=localhost; dbname=Twoak; charset=utf8', 'root', 'root');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // mode de fetch par défaut : FETCH_ASSOC / FETCH_OBJ / FETCH_BOTH
            $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (Exception $erreur) {
            echo 'Erreur : ' . $erreur->getMessage();
        }
        return $bdd;
    }
    //Fonction d'inscription a Twoak
    public function inscription($nom, $prenom, $mail, $date, $password, $bdd)
    {
        try {
            $bdd->query('INSERT INTO `User` (`ID_User`, `user_type`, `user_nom`, `user_prenom`, `user_password`, `user_dateNaissance`, `user_mail`, `user_avatar`, `user_banniere`, `user_bio`, `user_follower`, `user_sexe`) VALUES (NULL, 1, "' . $nom . '", "' . $prenom . '", "' . $password . '", "' . $date . '", "' . $mail . '", "images/resources/user-avatar2.jpg", "images/resources/timeline-1.jpg", 0, 0, 0)');
        } catch (Exception $erreur) {
            echo 'Erreur : ' . $erreur->getMessage();
        }
    }
    //Fonction de connexion a Twoak
    public function connexion($login, $password, $bdd)
    {  
            try{
                $req = $bdd->prepare("SELECT `user_login`, `user_password`, `ID_User` FROM `User` WHERE `User`.`user_login` = :username");
                $req->bindParam('username', $login, PDO::PARAM_STR);
                $req->execute();
                $result = $req->fetch(PDO::FETCH_ASSOC);
    
                if(password_verify($password,$result['user_password']) == TRUE){
                    $_SESSION['login'] = $result['user_login'];
                    $_SESSION['id']    = $result['ID_User'];
                    header("Location:index.php");
                }else{
                    echo "<div style='color:white'>Identifiants incorrects !</div>";
                }
            }catch(Exception $err){
                echo "Erreur ! ".$err->getMessage();
            }

        /*
        $request = $bdd->prepare("SELECT * FROM User WHERE user_login = ? AND user_password = ?");
        $request->execute([$login, $password]);
        $userexist = $request->rowCount();
        if ($userexist == 1) {
            $userinfo = $request->fetch();
            $_SESSION['login'] = $userinfo['user_login'];
            $_SESSION['id'] = $userinfo['ID_User'];
            $connect = $bdd->prepare("UPDATE User SET user_status = 1 WHERE ID_User = " . $userinfo['ID_User']);
            $connect->execute();

?>
            <meta http-equiv="refresh" content="0.01;URL=index.php">
<?php
        } else {

            echo "Identifiant ou mot de passe incorrect ! ";
        } */
    }
    //fonction qui permet de recupéré les ip en base a chaque connexion
    public function getIp($bdd)
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $bdd->query('UPDATE `User` SET `user_ip` = "' . $ip . '" WHERE `ID_User` = "' . $_SESSION['id'] . '"');
        return $ip;
    }
    //fonction qui affiche les bannisement d'ip dans la page admin.php
    public function afficheip($bdd)
    {
        $request = $bdd->query('SELECT `user_login`, `user_ip` FROM User');
        echo "<form method='POST'>";
        while ($tabIp = $request->fetch()) {
            echo "<p><input type='radio' name='IP' value='" . $tabIp['user_ip'] . "'> le user " . $tabIp['user_login'] . " a pour IP machine " . $tabIp['user_ip'] . "</input></p>";
        }

        echo "<input type='submit' name='Bannir' value='Bannir'>";
        echo "<input type='submit' name='Débannir' value='Débannir'></form>";
    }

    public function displayipban($bdd)
    {

        $request = $bdd->query('SELECT `user_ip`, `user_login`  FROM User WHERE `user_ban` = 1 ');
        ?>
        <h3>Liste des IP bannies : </h3>
        <?php
        while($tabban = $request->fetch()){
            echo "<p>". $tabban['user_login'] . " (". $tabban['user_ip'] .")</p>";
        }
    }

    public function getIpBan($bdd)
    {
        $request = $bdd->query('SELECT `user_ip`, `user_login`  FROM User WHERE `user_ban` = 1 ');
        ?>
        <?php
        while($tabban = $request->fetch()){
            echo "'" . $tabban['user_ip'] . ",";
        }
    }

    //Faire une bio
    public function  setBio($newBio, $user, $bdd)
    {
        $sql = 'UPDATE `user` SET `user`.`user_bio`=' . $newBio . ' WHERE `user`.`user_pseudo`=' . $user . ';';
        $bdd->query($sql);
    }
    //Voir la bio
    public function  getBio($user, $bdd)
    {
        $sql    = 'SELECT `user_bio` FROM `user` WHERE `user`.`user_login` = ' . $user . ';';
        $reqBio = $bdd->query($sql);
        $bio    =  $reqBio->fetch();

        return $bio['user_bio'];
    }
    //Ajouter l'avatar
    public function setAvatar()
    {
    }
    //Voir l'avatar
    public function getAvatar($idUser, $bdd)
    {
        $request = $bdd->query('SELECT `user_avatar` FROM `User` WHERE ID_User = "' . $idUser . '"');

        $imgUser = $request->fetch();

        echo $imgUser['user_avatar'];
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

    public function sendMessage($dest, $message, $bdd)
    {
    }

    public function getFriends($idUser, $bdd)
    {
        $request = $bdd->query('SELECT User.user_login FROM Follow, User WHERE Follow.Fol_ID_Follower = User.ID_User AND Follow.Fol_ID_Owner = ' . $idUser . '');
        while ($tabFriends = $request->fetch()) {
            echo "<a href=''>" . $tabFriends['user_login'] . "</a>";
        }
    }

    public function getFriendsMSg($idUser, $bdd)
    {
        $request = $bdd->query('SELECT User.user_login, User.ID_User FROM Follow, User WHERE Follow.Fol_ID_Follower = User.ID_User AND Follow.Fol_ID_Owner = ' . $idUser . '');
        while ($tabFriends = $request->fetch()) {
            echo "<p><a href='Message.php?id=" . $tabFriends['ID_User'] . "'>" . $tabFriends['user_login'] . "</a></p>";
        }
    }

    public function DisplayPrivateMsgSend($idUserSource, $idUserDest, $bdd)
    {
        $request = $bdd->query('SELECT `texte`, User.user_login FROM `Message`, User WHERE `ID_Sender` = ' . $idUserDest . ' AND `ID_Receiver` = ' . $idUserSource . ' AND User.ID_User = Message.ID_Sender 
        OR `ID_Sender` = ' . $idUserSource . ' AND `ID_Receiver` = ' . $idUserDest . ' AND User.ID_User = Message.ID_Sender ORDER BY Date');

        while ($tabMessage = $request->fetch()) {
            echo "<p>" . $tabMessage['user_login'] . " : " . $tabMessage['texte'] . "</p>";
        }
    }


    public function getAllUsers($bdd)
    {
        $request = $bdd->query('SELECT user_login FROM User');
        while ($tabFriends = $request->fetch()) {
            echo "<aside class='sidebar static'><a href=''>" . $tabFriends['user_login'] . "</a></aside>";
        }
    }
}
