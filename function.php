<?php

function UploadIMG($fileerror ,$filename , $filetempname ,$bdd , $querydebut, $queryfin, $dossier)
{

    $valideType = array('.jpg', '.jpeg', '.png', '.gif');

    if ($fileerror > 0) {
        echo "une erreur est survenue lors du transfert";
        die;
    }

    $fileType = "." . strtolower(substr(strrchr($filename, '.'), 1));

    if (!in_array($fileType, $valideType)) {
        echo "le fichier sélectionné n'est pas une image";
        die;
    }
    $tmpName = $filetempname;
    $Name = $filename;
    $fileName = $dossier."/" . $_SESSION['login'] . "/" . $Name;
    $résultUplod = move_uploaded_file($tmpName, $fileName);
    
    if ($résultUplod) {
        echo "transfere terminé";
    }
    $bdd->query($querydebut .$fileName .$queryfin);
}
?>