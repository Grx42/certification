<?php
    include_once('../../../pdo_blog.php');
    include_once('../fonctions/librairie.php');


    $pseudo = cleanPost($_POST['pseudo']);
    $email = cleanPost($_POST['email']);
    $message = cleanPost($_POST['message']);
    $your_timestamp = time();
    $current_ip = $_SERVER["REMOTE_ADDR"];


    //Tente de recuperer l'ip et son timestamp associé
    $req_verif = $bdd->prepare('SELECT your_timestamp, ip FROM contact WHERE ip = :current_ip');
    $req_verif->execute(array(
        'current_ip' => $current_ip
    ));
    $verif = $req_verif->fetch();
    $req_verif->closeCursor();


    if(!isset($verif['ip'])) //si l'ip n'y est pas, ecrit les donnees du formulaire de contact dans la bdd
    {
        contactWrite($bdd, $pseudo, $email, $message, $your_timestamp, $current_ip);
    }
    else
    {
        if(($verif['your_timestamp'] + 3600) < $your_timestamp) //si le dernier timestamp associé a plus d'une heure, ecrit dans la bdd.
        {
            contactWrite($bdd, $pseudo, $email, $message, $your_timestamp, $current_ip);
        }
        else
        {
            header('location: ../contact.php?err=flood'); //sinon renvoi sur la page de formulaire avec une erreur a gerer par $_GET
        }
    }


?>
