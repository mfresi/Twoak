<?php
include('../database.php');
class Twoak
{
    private $_id;
    private $_twoak;
    private $_published;
    private $_retwoak;
    private $_commentaire;
    private $_user;

    public function __construct()
    {
        
    }

    public function setadd($text){
        
    }
    public function setId(){
        return $this->_id;
    }
    public function setTwoak($twoak){
        return $this->_twoak;
    }
    public function setPublished(){
        return $this->_published;
    }

    public function setUser(){
        return $this->_user;
    }

    public function getId(){
        return $this->_id;
    }
    public function getTwoak(){
        return $this->_twoak;
    }
    public function getPublished(){
        return $this->_published;
    }
    public function getRetwoak(){
        return $this->_retwoak;
    }
    public function getCommentaire(){
        return $this->_commentaire;
    }
    public function getUser(){
        return $this->_user;
    }
    // Méthodes pour ajouter un twoak
    public function addTwoak($idUser, $text, $bdd)
    {
        $date = date("Y-m-d H:i:s");
        $bdd->query('INSERT INTO `Twoak`(`Twoak_texte`, `Twoak_published`, `ID_User`) VALUES ("'. $text .'", "'. $date .'", "'. $idUser .'")');
    }
  
}
