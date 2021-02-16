<?php
session_start();
$user_id = $_SESSION['user_id'];
include('database.php');
?>
<?php
if ($_GET['id']  && $_GET['user_login']) {
    if ($_GET['id'] != $user_id) {
        $follow_userid = $_GET['id'];
        $follow_username = $_GET['user_login'];
        $query = $bdd->query("SELECT ID_User FROM Follow WHERE Fol_ID_Owner='$user_id' AND Fol_ID_Follower='$follow_userid'");
        if (!(($query) >= 1)) {
            $bdd->query("INSERT INTO Follow (Fol_ID_Owner, Fol_ID_Follower)  VALUES ('$user_id', '$follow_userid')");
            $bdd->query("UPDATE User SET Follow = Follow + 1 WHERE ID_User='$user_id'");
            $bdd->query("UPDATE User SET user_follower = follower + 1 WHERE ID_User='$follow_userid'");
        }
    }
}
?>