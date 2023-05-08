<?php

// Ici on va  juste indiquer à la page où aller chercher dans phpMyAdmin
try {
    $database = new PDO(
        'mysql:host=localhost;dbname=twitouille',
        'root',
        'root'
    );   
} 

// et puis si il trouve pas il tue le site
catch(PDOException $error) {
    die("c'est mort xD)");
}

?>