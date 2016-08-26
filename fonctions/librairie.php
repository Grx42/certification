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

    // ecrit l'adresse ip actuelle dans la bdd
    function writeIP($bdd, $donnees, $current_ip)
    {
        $req = $bdd->prepare('UPDATE comptes SET last_ip = :last_ip WHERE idcomptes = :idcomptes');
        $req->execute(array(
            'last_ip' => $current_ip,
            'idcomptes' => $donnees['idcomptes']
        ));
        $req->closeCursor();
    }

    function checkIP($bdd, $donnees)
    {
        $last_ip = $donnees["last_ip"];
        $current_ip = $_SERVER["REMOTE_ADDR"];

        if ($last_ip == null)
        {
            writeIP($bdd, $donnees, $current_ip);
        }
        elseif ($last_ip != $current_ip)
        {
            //averti l'utilisateur si l'adresse actuelle est differente de la derniere connue.
            // a mettre en forme ! c'est tout crade comme ca.
            echo "<h1>ATTENTION : Votre adresse ip a change depuis votre derniere visite.</h1>";
            echo "<h1>Il est possible que vous vous soyez fait voler votre mot de passe.</h1>";
            writeIP($bdd, $donnees, $current_ip);

            echo "debug : la derniere adresse est " .$last_ip;
        }
        else
        {
            echo "Debug : c'est bon c'est la meme ip";
        }
    }

    function contactWrite($bdd, $pseudo, $email, $message, $your_timestamp, $current_ip)
    {
        $reqW = $bdd->prepare('INSERT INTO contact(pseudo, email, message, your_timestamp, ip) VALUES(:pseudo, :email, :message, :your_timestamp, :ip)');
        $reqW->execute(array(
            'pseudo' => $pseudo,
            'email' => $email,
            'message' => $message,
            'your_timestamp' => $your_timestamp,
            'ip' => $current_ip
        ));
        $reqW->closeCursor();
        
        header('location: ../contact.php?msg=ok');
    }



?>
