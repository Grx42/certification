<?php
    session_start();
    include_once("../../../../pdo_blog.php");
    include_once("../../fonctions/librairie.php");

    $act_passwd = cleanPost($_POST['actual_passwd']);
    $new_passwd = cleanPost($_POST['new_passwd']);
    $new_passwd_confirm = cleanPost($_POST['new_passwd_confirm']);

    $verif_act_passwd = (isset($act_passwd) && !empty($act_passwd));
    $verif_new_passwd = (isset($new_passwd) && !empty($new_passwd));
    $verif_new_passwd_confirm = (isset($new_passwd_confirm) && !empty($new_passwd_confirm));

    if($verif_act_passwd && $verif_new_passwd && $verif_new_passwd_confirm) //teste si les champs sont remplis
    {
        $req = $bdd->prepare('SELECT password FROM comptes WHERE email = :email');
        $req->execute(array(
            'email' => $_SESSION['email']
        ));
        $user_data = $req->fetch();
        $req->closeCursor();

        if(password_verify($act_passwd, $user_data['password'])) //compare le mot de passe envoyé avec celui dans la bdd
        {
            if($new_passwd == $new_passwd_confirm) //verifie si les champs du nouveau mot de passe sont identiques
            {
                $hash = password_hash($new_passwd, PASSWORD_DEFAULT);
                $reqW = $bdd->prepare('UPDATE comptes SET password = :password WHERE email = :email');
                $reqW->execute(array(
                    'password' => $hash,
                    'email' => $_SESSION['email']
                ));
                $reqW->closeCursor();
                header('location: ../profil.php?pass=changed');
            }
            else
            {
                header('location: ../profil.php?errMdp=newPass_notEqual');
            }
        }

        else
        {
            header('location: ../profil.php?errMpd=wrongPassword');
        }
    }
    else
    {
        header('location: ../profil.php?errMdp=emptyField');
    }
?>
