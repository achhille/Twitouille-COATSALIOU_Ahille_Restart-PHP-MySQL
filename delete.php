<?php

require 'template/database.php';

// va chercher l'id envoyé qui correspond pour pourvoir le supprimer de la database
$supp = $database->prepare("DELETE FROM twout WHERE id = :id");
$supp->execute(
    [
        "id" => $_POST['supp']
    ]
    );

// redirection vers l'index
header("Location: twitouille.php");

?>