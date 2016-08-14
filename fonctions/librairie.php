<?php

    function cleanPost($user_input) //nettoie les donnees des formulaires
    {
        $user_input = trim($user_input); // enleve les espace en debut et fin de string
        $user_input = strip_tags($user_input); // enleve les tags html <>
        $user_input = stripslashes($user_input); // enleve les caracteres d'echapement "\"
        $user_input = str_replace("'", "\'", $user_input); // echape les apostrophes pour eviter les injections sql
        $user_input = str_replace('"', '\"', $user_input); // echape les guillemets pour eviter les injections sql
        return $user_input;
    }

    function logError()
    {
        echo "<p>Erreur. Compte ou mot de passe incorrect.</p>";
        echo "<a href='index.php'>Retour a l'acceuil</a>";
        session_destroy();
    }

    function logSucces($donnees)
    {
        $_SESSION['logged'] = true;
        $_SESSION['login'] = $donnees['login'];
        $_SESSION['email'] = $donnees['email'];
        $_SESSION['priv_level'] = $donnees['priv_level'];
    }


?>
