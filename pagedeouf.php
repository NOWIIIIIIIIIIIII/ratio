<?php

    require "template/database.php";
    //on va aller chercher le dernier post
    $requete = $database->prepare("SELECT * From tweets ORDER BY date_de_creation DESC LIMIT 1");
    $requete->execute();
    $LastTweet = $requete->fetchAll(PDO::FETCH_ASSOC);

    echo Json_encode($LastTweet);
?>

