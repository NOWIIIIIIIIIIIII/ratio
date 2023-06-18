<?php

require "template/database.php";

$insert = $database -> prepare("INSERT INTO tweets (contenu_du_tweet) VALUES (:tweets)");
$insert -> excecute(
    [
        "contenu_du_tweet" => "Cette incroyable Tweet à été réaliser via un bouton"
    ]
);

header("location: index.php");