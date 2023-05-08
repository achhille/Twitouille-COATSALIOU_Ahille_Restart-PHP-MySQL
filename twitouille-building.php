
<?php
//ETAPE 0 : Charger la base de donnée (c'est plus pratique)
require "template/database.php";

// ETAPE 1 - PREPARATION
$requete = $database->prepare("SELECT * FROM twout ORDER BY date DESC");
// ETAPE 2 - EXECUTION
$requete->execute();
// ETAPE 3 - ON EN FAIT UN TRUC
// Toutes les données : tu en fais un tableau de bdg
$allTwoots = $requete->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitouille</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <?php require "template/navigation.php" ?>

<main>
    
    <div class="container">
        <img class="banner" src="https://i.imgur.com/Xo4VWzX.jpg" alt="banner">
    </div>

    <h1>🚧 [En construction] 🚧</h1>

</main>

</body>
</html>