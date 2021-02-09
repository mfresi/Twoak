<?php
function SQLSanitizer($entryForm){
    if(strpos($entryForm,"select" || "update" || ";" || "--" || "delete" || "insert",0) !== False){
        echo "Chaine non autorisée.\n";
    }else{
        return $entryForm;
    }
}
?>