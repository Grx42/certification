<?php

    session_start();

    include_once('../../../pdo_blog.php');
    include_once('../fonctions/librairie.php');

    if ((isset($_POST['email']) && empty($_POST['email'])) || (isset($_POST['password']) && empty($_POST['password'])))
    {
        logError();
    }
    else
    {   //securise les données du formulaire avant les requetes sql
        $email = cleanPost($_POST['email']);
        $password = cleanPost($_POST['password']);
        //$hash = password_hash($password, PASSWORD_DEFAULT); //a ajouter lors de l'inscription ou changement de mot de passe

        //Recupere les infos par le mail ou le login(pseudo)
        $req = $bdd->prepare('SELECT * FROM comptes WHERE email = :email OR login = :email');
        $req->execute(Array(
            'email' => $email
        ));

        $donnees = $req->fetch();
        $req->closeCursor();
        // Authentification sur mail ou login et sur password
        if (($donnees['email'] == $email || $donnees['login'] == $email) && password_verify($password, $donnees['password']))
        {
            logSucces($donnees);
            checkIP($bdd, $donnees);
        }
        else
        {
            logError();
        }
    }

    header("location: ../index.php"); ?>
