<?php
session_start();
$user_id = $_SESSION['id'];
include('database.php');
?>
<?php
if ($_GET['id']  && $_GET['user_login']) {
    if ($_GET['id'] != $user_id) {
        $unfollow_userid = $_GET['id'];
        $unfollow_username = $_GET['user_login'];
        $query = $bdd->query("SELECT ID_User FROM Follow WHERE Fol_ID_Owner='$user_id' AND Fol_ID_Follower='$unfollow_userid'");
        if (($query) >= 1) {
            $bdd->query("DELETE FROM Follow WHERE Fol_ID_Owner='$user_id' AND Fol_ID_Follower='$unfollow_userid'");
            $bdd->query("UPDATE User SET Follow = Follow - 1 WHERE ID_User='$user_id'");
            $bdd->query("UPDATE User SET user_follower = follower - 1 WHERE ID_User='$unfollow_userid'");
        }
    }
}
?>