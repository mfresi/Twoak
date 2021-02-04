<?php

class Twoak
{
    private $comment;
    private $like;
    private $retwoak;
    private $photo;

    public function __construct()
    {
    }
    //Faire un twoak
    public function setTwoak()
    {
    ?>
        <form>
            <textarea name="nom" rows=4 cols=40>Ecrivez un Twoak</textarea>
        </form>

    <?php
    }
    //Voir le twoak
    public function getTwoak()
    {
    }
    //Commenter un twoak
    public function setComment()
    {
    }
    //Voir le commentaire du twoak
    public function getComment()
    {
    }
    //Liker un twoak
    public function setLike()
    {
    }
    //Voir qui a like le twoak
    public function getLike()
    {
    }
    //Partager le twoak
    public function setShare()
    {
    }
    //Voir qui a partagé le twoak
    public function getShare()
    {
    }
    //Ajouter une photo dans le twoak
    public function setPhoto()
    {
    }
    //Voir la photo du twoak
    public function getPhoto()
    {
    }
}
