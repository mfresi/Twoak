<?php
//Danel
function SQLSanitizer($entryForm){
    if(strpos($entryForm,"select" || "update" || ";" || "--" || "delete" || "insert",0) !== False){
        echo "Chaine non autorisée.\n";
    }else{
        return $entryForm;
    }
}

function CSRFToken(){
    if (!isset($_SESSION['token'])) {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(6));
     }
     //En se déconnectant on doit unset($_SESSION['token']);
     //Utilisation : 
     //Si il n'y a pas de jeton, on ne peut pas faire l'action
}
?>

/*
Sécurité :
    -Injection SQL : Fait
    Filtrer les entrées
    -XSS (cross-site-scripting) : A faire
    Utiliser la fonction php htmlspecialchars() ou htmlentities().
    -CSRF (cross-site-request-forgery) :
    Création de jeton
    
*/
