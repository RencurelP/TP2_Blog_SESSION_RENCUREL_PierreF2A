<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>TP_Blog</title>
	<link rel="stylesheet" href="TP_blog_CSS.css">
	<script src="script.js"></script>
</head>

<div>

<!-- formulaire -->
<form action="index.php" method="POST">	<!-- l'utilisation du "required" rend un champ obligatoire -->
	<label for="Pseudo">Pseudo : </label><input type="text" name="Pseudo" required/>	<!-- renseignement du pseudo -->
	<br/>
	<br/>
	<label for="Title">Titre : </label><input type="text" name="Title" required/>	<!-- entrée du titre -->
	<br/>
	<br/>
	<label for="Text">Texte : </label>
	<textarea id="texte" name="Message" placeholder="Ecrivez votre message" rows="8" cols="60" required></textarea>	<!-- zone d'écriture du texte -->
	<br/>
	<br/>
	<input type="submit" value="Valider" />	<!--Validation du message -->
	<br/>

	

</form>
</div>

</html>