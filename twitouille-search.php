
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
    <title>Twitouille - Search</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <?php require "template/navigation.php" ?>
    




<main>


    <div class="container">
        <img class="banner" src="https://i.imgur.com/xLIvSZh.jpg" alt="banner">
    </div>

    <!-- barre de recherche (pas encore fonctionelle 😕) -->
    <form class="form" method="POST" action="insert-twoot.php">
        <h1>What are you looking for ?</h1>
        <input type="text" name="searchBar" placeholder="Search on Twitouille">

        <button class="send" name="searchButton" type="submit">Search</button>

    </form>



    <!-- récupération de tous les tweets -->
    <div class="twoot">
        <?php foreach ($allTwoots as $twoot) { ?>
        <p class="twootName"><?= $twoot['name']; ?></p>
        <p class="twootContent"><?=$twoot['twout'] ?></p>
        <p class="twootDate">Twooted : <?=$twoot['date'] ?></p>

        <!-- ajout d'un bouton "supprimer" -->
        <form action="delete.php" method="POST">
            <input type="hidden" name="supp" value="<?= $twoot['id'] ?>">
            <button class="btn_del" type="submit">Delete</button>
        </form>
        <?php } ?>  
    </div>




</main>

</body>
</html>