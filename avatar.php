<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <title>Détail du film Avatar</title>
</head>
<body>

<header class="header">

    <div class="l-container">
        <a href="index.php" class="header-logo">
            Cinélive
        </a>
        <nav class="menu">
            <a href="index.php" class="menu-item is-active">Accueil</a>
            <a href="lastfilm.php" class="menu-item">Derniers films</a>

            <div class="header-social">
                <a href="#"><img src="img/facebook.png" class="fb"></a>
                <a href="#"><img src="img/instagram.png" class="in"></a>
                <a href="#"><img src="img/twitter.png" class="tw"></a>
            </div>

        </nav>

        <div class="cb"></div>
        <div class="header-baseline">Avatar</div>
        <div class="text">Détail du film</div>

        <center><img class="img_afi"
                     src="http://t3.gstatic.com/images?q=tbn:ANd9GcTA4nJB9z9llRSjgDa4SrU-Jwtb-3dwzkt90rF7KkCka1H90HDt">
        </center>

        <div class="cb"></div>

    </div>
</header>

<section class="section">
    <div class="l-container">
        <h2>Laissez un commentaire :</h2>

        <form>
            Pseudo:<br>
            <input type="text" name="pseudo"><br>
            Votre Commentaire:<br>
            <textarea name="message" rows="5" cols="30"></textarea><br>
            <input type="submit" value="Valider">
        </form>
    </div>
</section>

<?php

// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;port=3307;dbname=ppe', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
//Fix d'accentuation
$bdd->exec("set names utf8");
//Requête sql
$req1 = $bdd->query('SELECT * FROM film');
while ($donnees1 = $req1->fetch()) {
    $film = array($donnees1['Titre_Film'], $donnees1['Resume_Film'], $donnees1['Lien_AfficheFilm'], $donnees1['Date_Film'], $donnees1['lien_detail'])
    ?>

    <?php
} // Fin de la boucle des billets
$req1->closeCursor();
?>

<br><br><br><br><br>
</body>
</html>