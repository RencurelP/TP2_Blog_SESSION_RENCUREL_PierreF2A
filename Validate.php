   <?php
    //Définition du login a des fins de teste
    $pseudo_valide = "Dark_Roger";
    $MDP_valide = "Bernard421";

    //Teste des variables
    if (isset($_POST['pseudo']) && isset($_POST['MDP'])) {

    	//Vérification des informations du formulaire
    	if ($login_valide == $_POST['pseudo'] && $pwd_valide == $_POST['MDP']) {
    		//tout est ok, démarrage de la session

    		session_start ();
    		// enregistrement desparamètres
    		$_SESSION['pseudo'] = $_POST['pseudo'];
    		$_SESSION['MDP'] = $_POST['MDP'];

    		//renvoi vers la page d'accueil
    		header ('location: Blog.php');
    	}
    	else {
    		//Utilisateur non reconnu, renvoi sans connexion a la page d'accueil
    		echo 'Mauvais mot de passe';
    		echo '<meta http-equiv="refresh" content="0;URL=Blog.php">';
    	}
    }
    else {
    	echo 'Les variables du formulaire ne sont pas déclarées.';
    }
    ?>