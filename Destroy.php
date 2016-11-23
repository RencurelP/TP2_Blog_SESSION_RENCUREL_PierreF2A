    <?php
    //Démarrage de la session
    session_start ();

    //Destruction des variables de session
    session_unset ();

    //Destruction de la session
    session_destroy ();

    //Renvoi de l'utilisateur vers la page d'accueil du blog
    header ('location: Blog.php');
    ?>