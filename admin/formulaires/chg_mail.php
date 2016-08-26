<?php
    session_start();
    include_once("../../../../pdo_blog.php");
    include_once("../../fonctions/librairie.php");

    $actual_passwd = cleanPost($_POST['actual_passwd']);
    $actual_email = cleanPost($_POST['actual_email']);
    $new_email = cleanPost($_POST['new_email']);

    $verif_actual_passwd = (isset($actual_passwd) && !empty($actual_passwd));
    $verif_actual_email = (isset($actual_email) && !empty($actual_email));
    $verif_new_email = (isset($new_email) && !empty($new_email));


    if($verif_actual_passwd && $verif_actual_email && $verif_new_email)
    {
        $req = $bdd->prepare('SELECT password FROM comptes WHERE login = :login');
        $req->execute(array(
            'login' => $_SESSION['login']
        ));
        $user_data = $req->fetch();
        $req->closeCursor();

        if(password_verify($actual_passwd, $user_data['password'])) //compare le mot de passe envoyé avec celui dans la bdd
        {
            $new_email = strtolower($new_email);

            $reqW = $bdd->prepare('UPDATE comptes SET email = :email WHERE login = :login');
            $reqW->execute(array(
                'email' => $new_email,
                'login' => $_SESSION['login']
            ));
            $reqW->closeCursor();
            header('location: ../profil.php?email=changed');
        }
        else
        {
            header('location: ../profil.php?errMail=wrongPassword');
        }
    }
    else
    {
        header('location: ../profil.php?errMail=emptyFields');
    }
?>
