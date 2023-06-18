<?php

require "template/database.php";

 

$search = $database->prepare("SELECT * FROM tweets WHERE contenu_du_tweet LIKE '%".$_GET['Recherche']."%' ORDER BY date_de_creation DESC");
$search->execute();
$searchTweet = $search->fetchAll(PDO::FETCH_ASSOC);

?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Ratio</title>
</head>
<body>

    <div class="container"> <!--bannière du haut-->
        <img src="img/JAPBG.jpg" alt="Image japonaise pour mieux te RATIO" style="width:100%;">
        <div class="centered" style ="color:whitesmoke"><h1>RECHERCHE</h1></div>

        <section class="container"> <!--Les 4 boutons principaux du site-->
        <article class="menu">
        <a href="envoyervosavis.php">
        <div class="bloc-1">
            <input class="favorite styled"
            type="button"
            value="Envoie ton Avis">
        </div>
        </a>
        <div class="bloc-2">
        <a href="index.php">
        <input class="favorite styled"
            type="button"
            value="Index">
        </div>
        </a>
        <div class="bloc-3">
        <a href="ratio.php">
        <input class="favorite styled"
            type="button"
            value="Avis Ratio">
        </a>
        </div>
        <div class="bloc-4">
        <a href="avis.php">
        <input class="favorite styled"
            type="button"
            value="Liste des Avis">
        </a>
        </div>
        </article>
        </section>
    </div>

<?php foreach ($searchTweet as $twit) { ?>
    <div>
        <p><?= $twit['contenu_du_tweet'] ?></p>
        <p><?=$twit['date_de_creation']?></p>
        <form action="delete.php" method="POST">
            <input type="hidden" name="supp" value="<?= $twit['id'] ?>">
            <button type="submit">Supprimer</button>
        </form>
    </div>
<?php } ?>

</body>