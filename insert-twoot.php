


<ul>
    <li>
        <p>Name 👇</p>
        <?= $_POST['name'] ?>
    </li>
    <li>
        <p>Twoot 👇</p>
        <?= $_POST['twout'] ?>
    </li>
</ul>

<?php

require 'template/database.php';

$insert = $database->prepare("INSERT INTO twout (name, twout) VALUES (:bname, :btwoot) ");
$insert->execute(
    [
        "bname" => $_POST["name"],
        "btwoot" => $_POST["twout"],
    ]
);

header("Location: twitouille.php");

echo "<h1>escalope</h1>"

?>