

<ul>
    <li>
        <p>Nom 👇</p>
        <?= $_POST['name'] ?>
    </li>
    <li>
        <p>Mail 👇</p>
        <?= $_POST['mail'] ?>
    </li>
    <li>
        <p>Mot de passe 👇</p>
        <?= $_POST['password'] ?>
    </li>
</ul>




<?php

require 'template/database.php';

$insert = $database->prepare("INSERT INTO user (name, mail, password) VALUES (:bname, :bmail, :bpassword) ");

$insert->execute(
    [
        "bname" => $_POST["name"],
        "bmail" => $_POST["mail"],
        "bpassword" => $_POST["password"],
    ]
);

header("Location: bvn.php");

echo "<h1>escalope</h1>"

?>