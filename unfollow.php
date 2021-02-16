<?php
session_start();
$user_id = $_SESSION['id'];

if (isset($_GET['unfollow'])) {
    $unfollow = $bdd->prepare('DELETE FROM Follow WHERE `Fol_ID_Follower` = :Fol_ID_Follower AND `Fol_ID_Owner` = :Fol_ID_Owner LIMIT 1');
    $unfollow->execute();
    $this->$bdd->bind('Fol_ID_Follower', $unfollower_id);
    $this->$bdd->bind('Fol_ID_Owner', $unfollowing_id);
    if ($this->$bdd->execute()) {
        return true;
    } else {
        return false;
    }
}