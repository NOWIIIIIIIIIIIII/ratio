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
        <div class="centered" style ="color:whitesmoke"><h1>INSCRIPTION</h1></div>

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

<form method="POST" action="JeMeSuisInscrit.php">
        <input type="text" name="Nom" placeholder="Nom">
        <input type="text" name="Pseudonyme" placeholder="Pseudonyme">
        <input type="email" name="mail" placeholder="mail">
        <input type="password" name="Mot_de_passe" placeholder="mot de passe">
        <input type="url" name="Photo_de_profil" placeholder="Photo de profil">
        <button type="submit"> Finir l'inscription </button>
    </form>