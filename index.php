<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>Title of the document</title>
		<script src="script.js"></script>
	</head>
	<body>
		<p>
		Veuillez cliquer sur le bouton de connexion
		<br/>
		<br/>
		Pseudo = Dark_Roger
		<br/>
		Mot de passe = Bernard421

		</p>

		<div>

<!-- formulaire -->
<form action="Validate.php" method="POST">	<!-- l'utilisation du "required" rend un champ obligatoire -->
Votre login : <input type="text" name="pseudo">
<br />
Votre mot de passe : <input type="password" name="MDP">	<!-- Le type "password" remplace les entrées par des puces -->
<br />
<input type="submit" value="connexion">	<!-- Bouton de connexion -->

</form>
	
</div>

</body>
</html>