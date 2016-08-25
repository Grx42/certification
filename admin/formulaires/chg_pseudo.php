<?php
    session_start();
    include_once("../../../../pdo_blog.php");
    include_once("../../fonctions/librairie.php");

    $new_pseudo = cleanPost($_POST['new_pseudo']);
    $verif_new_pseudo = (isset($new_pseudo) && !empty($new_pseudo));

    if($verif_new_pseudo)
    {
        $new_pseudo = strtolower($new_pseudo);
        $match = false;

        $req = $bdd->prepare('SELECT login FROM comptes');
        $req->execute(array());

        while($log_data = $req->fetch())
        {
            if($new_pseudo == $log_data['login'])
            {
                $match = true;
            }
        }
        $req->closeCursor();

        if($match == false)
        {
            $reqW = $bdd->prepare('UPDATE comptes SET login = :pseudo WHERE email = :email');
            $reqW->execute(array(
                'pseudo' => $new_pseudo,
                'email' => $_SESSION['email']
            ));
            $reqW->closeCursor();
            $_SESSION['login'] = $new_pseudo;
            header('location: ../profil.php?pseudo=changed');
        }
        else
        {
            header('location: ../profil.php?errLog=alreadyUsed');
        }
    }
    else
    {
        header('location: ../profil.php?errLog=emptyField');
    }
?>
