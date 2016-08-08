<?php

    function cleanPost($user_input) //nettoie les donnees des forumulaires
    {
        $user_input = trim($user_input); // enleve les espace en debut et fin de string
        $user_input = strip_tags($user_input); // enleve les tags html <>
        $user_input = stripslashes($user_input); // enleve les caracteres d'echapement "\"
        $user_input = str_replace("'", "", $user_input); // supprime les apostrophes pour eviter les injections sql
        $user_input = str_replace('"', '', $user_input); // supprime les guillemets pour eviter les injections sql
        return $user_input;
    }

    function logError()
    {
        echo "Erreur. Compte ou mot de passe incorrect. <br>";
        session_destroy();
        echo "<a href='index.php'>Retour a l'acceuil</a>";
    }
?>
