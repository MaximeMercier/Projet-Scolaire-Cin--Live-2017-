<!Doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>mini-chat</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
            
<body>
      
<?php
    try
	{
		$bdd = new PDO('mysql:host=localhost;port=3307;dbname=test', 'root', '');
    }
    catch (Exception $e)
	{
		die ('Erreur : ' .$e->GetMessage());
    }
                     
    $req = $bdd->prepare('INSERT INTO commentaires (auteur, commentaire, id_billet, date_commentaire) VALUES(?, ?, ?, NOW())');
	$req->execute(array($_POST['auteur'], $_POST['commentaire'], $_POST['id_billet']));
	while ($donnees = $req->fetch())
	
	header('Location: commentaires.php?billet='.$_POST["billet"]);
?>
      
		<p>Bravo, votre commentaire à bien été enregistré, <a href="index.php">cliquez-ici</a> pour revenir à l'article commenté</p>
</body>
      
</html>