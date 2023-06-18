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
        <div class="centered" style ="color:whitesmoke"><h1>RATIO</h1></div>

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

    <div class="Phrasedaccroche"> 
        <div class="logo"><!--Balise ou il y a le logo-->
            <img src="img/Logo.png" alt="logo couronne" name="Bouton" onMouseOver="Bouton.src = LogoVar.src"
            onMouseOut="Bouton.src = Logo.src"> <!--"onMouseOver/out" lie le script JavaScript au logo afin qu'il change avec sa variante quand la souris passe dessus-->
        </div> 
        <!--Grand texte qui explique ce qu'est ce site--><p>Êtes vous prêt pour la plus grande aventure dont vous pouvez rêver ? <br>Il est temps jeune homme/femme, de ratio le monde ! En passant par ta Famille, tes amis, ton patron, des policiticiens, ...</p>
    </div>

    <div class="description">
        <!--Grand texte qui explique ce qu'est ce site--><p>Le but de Ratio est comme son nom l'indique, inspiré de son feu modèle Twitter et de son concept le plus incroyable, celui de ratio les gens <br>Discutez de plusieurs choses incroyable de la vie de tout les jours en mettant vos avis les plus tranchés ! A la fin, si personne ne vous a ratio.. <br>Vous êtes le meilleur et votre avis est celui qui compte le plus au point où on le marquera sur le tableau des réussites <br>Mais si vous réussissez à ratio quelqu'un, votre message sera préservé dans la catégorie des successfull ratios !</p>
    </div>

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