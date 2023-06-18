<?php 

require "template/database.php";

$requete = $database->prepare("SELECT * From tweets ORDER BY date_de_creation DESC");
$requete->execute();
$allTweet = $requete->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
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
        <div class="centered" style ="color:whitesmoke"><h1>TOUT LES AVIS DE RATIO</h1></div>

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

    <form method="GET" action="recherche.php">
        <input type="text" name="Recherche" placeholder="Recherche Tweet">
        <button type="submit"> Chercher </button>
    </form>

    <?php foreach($allTweet as $tweets) {  ?>
            <div>
                <p><?=$tweets['contenu_du_tweet']?></p>
                <p><?=$tweets['date_de_creation']?></p>
                <form action="delete.php" method="POST">
                    <input type="hidden" name="supp" value="<?= $tweets['id'] ?>">
                    <button type="submit">Supprimer</button>
                </form>
            </div>
        <?php } ?>

        <section class="container"> <!--Bouton du bas qui sont là pour se connecter/déconnecter et pub de mes réseaux-->
            <article class="menu2">
            <div class="bloc-1">
            <h1><a href="inscription.php"> Inscrit toi !</a></h1>
            </div>
            <div class="bloc-2">
            Connecte toi
            </div>
            <div class="bloc-3">
            <p> <a href="https://twitter.com/KuibyD">Retrouver moi sur mes réseaux</a></p>
            </div>
            </article>
            </section>
</body>
</html>