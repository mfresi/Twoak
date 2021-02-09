<?php

class Twoak
{
    private $_id;
    private $_twoak;
    private $_published;
    private $_retwoak;
    private $_commentaire;
    private $_user;

    public function __construct($id, $twoak, $published, $retwoak, $commentaire, $user)
    {
        $this->_id = $id;
        $this->_twoak = $twoak;
        $this->_published = $published;
        $this->_retwoak = $retwoak;
        $this->_commentaire =$commentaire;
        $this->_user = $user;
    }

    public function setId(){
        return $this->_id;
    }
    public function setTwoak(){
        return $this->_twoak;
    }
    public function setPublished(){
        return $this->_published;
    }
    public function setRetwoak(){
        return $this->_retwoak;
    }
    public function setCommentaire(){
        return $this->_commentaire;
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
  
}
