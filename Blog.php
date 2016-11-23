
<?php

	   
    //Démarrage de la session
    session_start ();

    // Récupération des identifiants
    if (isset($_SESSION['pseudo']) && isset($_SESSION['MDP'])) {

    	echo 'Votre login est '.$_SESSION['pseudo'].' et votre mot de passe est '.$_SESSION['MDP'].'.';
    	echo '<br />';

    	// On affiche un lien pour fermer notre session
    	echo '<a href="Destroy.php"/> Lien de déconnexion menant a Destroy.php</a>';	//Lien vers le code déconnectant l'uilisateur
    }
    else {
    	echo 'Les variables ne sont pas déclarées.';
    	echo '<a href="Index.php"/> Lien de connexion menant a Index.php</a>';
    }
    
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>TP_Blog</title>
	<link rel="stylesheet" href="TP_blog_CSS.css">
	<script src="script.js"></script>
</head>
<body>
<h1>Blog du futur</h1>
<header>

	<div id="header">
	
		<?php
			include("index.php");
			include("TP2_blog_cible.php");	//Appel du fichier cible
		?>	
	
	</div>


</header>


<footer>
		<pre>
			<?php
				print_r($_SESSION); //affiche les variables d'environnement $_SESSION si, isset()
			?>
		</pre>

<div>
<form action="Ecriture_Texte_TP2.php" method="POST">	<!-- renvoi vers une autre page contenant le formulaire -->
<input type="submit" value="Ecrire_Message" />
</form>
</div>
<p>
RENCUREL Pierre, F2A
</p>
</footer>
</body>
</html>