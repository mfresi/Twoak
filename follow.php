<?php
session_start();
$user_id = $_SESSION['user_id'];

if (isset($_GET['follow'])) {
    $follow = $bdd->prepare('INSERT INTO `Follow`(`Fol_ID_Owner`, `Fol_ID_Follower`) VALUES (:Fol_ID_Owner,:Fol_ID_Follower)');
    $follow->execute();
    $this->$bdd->bind('Fol_ID_Follower', $follower_id);
    $this->$bdd->bind('Fol_ID_Owner', $following_id);
    if ($this->$bdd->execute()) {
        return true;
    } else {
        return false;
    }
}