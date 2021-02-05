<?php

class Twoak
{
    private $_comment;
    private $_like;
    private $_retwoak;
    private $_photo;
    private $_twoak;
    private $_share;

    public function __construct()
    {
    }
    //Faire un twoak
    public function setTwoak($newTwoak)
    {
        $this->_twoak = $newTwoak;
    }
    //Voir le twoak
    public function getTwoak()
    {
        return $this->_twoak;
    }
    //Commenter un twoak
    public function setComment($newComment)
    {
        $this->_comment = $newComment;
    }
    //Voir le commentaire du twoak
    public function getComment()
    {
        return $this->_comment;
    }
    //Liker un twoak
    public function setLike($newlike)
    {
        $this->_like = $newlike;
    }
    //Voir qui a like le twoak
    public function getLike()
    {
        return $this->_like;
    }
    //Partager le twoak
    public function setShare($newshare)
    {
        $this->_share = $newshare;
    }
    //Voir qui a partagé le twoak
    public function getShare()
    {
        return $this->_share;
    }
    //Ajouter une photo dans le twoak
    public function setPhoto($newphoto)
    {
        $this->_photo = $newphoto;
    }
    //Voir la photo du twoak
    public function getPhoto()
    {
        return $this->_photo;
    }
}
