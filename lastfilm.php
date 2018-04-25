<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <title>Derniers films</title>
</head>
<body>

<header class="header">

    <div class="l-container">
        <a href="index.php" class="header-logo">
            Cinélive
        </a>
        <nav class="menu">
            <a href="index.php" class="menu-item">Accueil</a>
            <a href="lastfilm.php" class="menu-item is-active>Derniers films</a>

            <div class="header-social">
                <a href="#"><img src="img/facebook.png" class="fb"></a>
                <a href="#"><img src="img/instagram.png" class="in"></a>
                <a href="#"><img src="img/twitter.png" class="tw"></a>
            </div>

        </nav>

        <div class="cb"></div>
        <div class="header-baseline">Cinélive</div>
        <div class="text">Le cinéma pour tous</div>

        <center><a href="index.php/#top3" class="btn">A l'affiche</a></center>

        <div class="cb"></div>
        <center><a href="#screen" class="btn-down"><img src="img/scroll_down.png"/></a></center>
    </div>
</header>

<section class="section">
    <div class="l-container">
        <div class="section-title">
            <h1 id="top3">Détails des films</h1>
            <h4>Tout les films en détails</h4>
        </div>
    </div>
    <p><span class="span1">Image</span><span class="span2">Titre</span><span class="span3">Résumé</span><span class="span4">Date de sortie</span></p>
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
    $film = array($donnees1['Titre_Film'], $donnees1['Resume_Film'],$donnees1['Lien_AfficheFilm'],$donnees1['Date_Film'],$donnees1['lien_detail'])
    ?>
    <div>
        <center>
            <table class="tableau">
                <tr>
                    <td class="tablimg"><a href="<?php echo $film[4]; ?>"><img src="<?php echo $film[2]; ?>" ></a></td>
                    <td class="tabl1"><?php echo $film[0]; ?></td>
                    <td class="tabl2"><?php echo $film[1]; ?></td>
                    <td class="tabl1"><?php echo $film[3]; ?></td>
                </tr>
            </table>


        </center>
    </div>
    <?php
} // Fin de la boucle des billets
$req1->closeCursor();
?>

<br><br><br><br><br>
</body>
</html>