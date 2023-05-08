

<?php
//ETAPE 0 : Charger la base de donnée (c'est plus pratique)
require "template/database.php";

// ETAPE 1 - PREPARATION
$requete = $database->prepare("SELECT * FROM user");
// ETAPE 2 - EXECUTION
$requete->execute();
// ETAPE 3 - ON EN FAIT UN TRUC
// Toutes les données : tu en fais un tableau de bdg
$donnees = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitouille: Connection</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php require "template/navigation.php" ?>


    <main>

        <div class="container">
            <img class="banner" src="https://i.imgur.com/jEPV2Pw.jpg" alt="banner">
        </div>

        <h1>Sign Up</h1>

        <!-- formulaire pour entrer ses infoxs perso -->
        <form class="form" method="POST" action="insert.php">

            <input type="text" name="name" placeholder="Name">
            <input type="email" name="mail" placeholder="E-mail">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password" placeholder="Repeat Password">

            <button class="send" type="submit">Create Account</button>

        </form> 
    </main>
</body>
</html>