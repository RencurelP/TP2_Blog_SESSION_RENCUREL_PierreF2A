<div class="corps" >

<?php

	date_default_timezone_set('Europe/Paris');   //récupération de la date
	$jour = date("F j, Y, g:i a");    

	if(isset($_POST['Pseudo']) AND isset($_POST['Title']) AND isset($_POST['Message']) ) //traitement du formulaire
	{
		$file = fopen("messages.txt", "a+");  //lecture du fichier texte (a+ permet de créer le fichier si celui ci n'existe pas)
		fwrite($file,"<br/> Titre : "./*empèche l'utilisateur de rajouter du code*/htmlspecialchars($_POST['Title'])."<br/>");	//écriture du titre
		fwrite($file,"<div class=\"row\">"."<div class=\"container-fluid\">"." <br/>Pseudo : ".htmlspecialchars($_POST['Pseudo'])."<br/>");	//écriture du pseudo
		fwrite($file,"Message : ".htmlspecialchars($_POST['Message'])."<br/>");	//écriture du messaeg
		fwrite($file,"Date : ".$jour."</div></div><br/>");	//écriture de la date
		fwrite($file,"------------------------------------------------------------------");
		
		$lines = file("messages.txt");	//Lines est un tableau qui permet d'afficher le contenu du fichier texte
		
		foreach($lines as $n => $line)
		{
		echo $line . "<br/>";
		}
	}

?>