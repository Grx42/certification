<header class='row'>
    <div class='col-lg-12'>
        <p>
            ici le titre + logo
        </p>

<?php

    if (!isset($_POST['email']) && !isset($_POST['password']))
    {
        if(!isset($_SESSION['logged']))
        {
            echo "
            <div class='row'>
                <div class='col-lg-12'>
                    <form class='form-inline' action='index.php' method='post'>
                        <div class='form-group'>
                            <label for='email'>Email</label>
                            <input type='text' class='form-control' id='email' name='email' placeholder='example@example.com'>
                        </div>

                        <div class='form-group'>
                            <label for='password'>Mot de passe</label>
                            <input type='password' class='form-control' id='password' name='password' placeholder=''>
                        </div>
                        <button type='submit' class='btn btn-default'>Connexion</button>
                    </form>
                </div>
            </div>
            ";
        session_destroy();
        }
    }

    else
    {

        if ((isset($_POST['email']) && empty($_POST['email'])) || (isset($_POST['password']) && empty($_POST['password'])))
        {
            logError();
        }
        else
        {
            $email = cleanPost($_POST['email']);
            $password = cleanPost($_POST['password']);

            //Recupere les infos par le mail ou le login(pseudo)
            $req = $bdd->prepare('SELECT login, email, password, priv_level FROM comptes WHERE email = :email OR login = :email');
            $req->execute(Array(
                'email' => $email
            ));

            $donnees = $req->fetch();

            // Authentification sur mail ou login et sur password
            if (($donnees['email'] == $email || $donnees['login'] == $email) && $donnees['password'] == $password)
            {
                logSucces($donnees);
            }
            else
            {
                logError();
            }
        }
    }

    if(isset($_SESSION['logged']))
    {
        echo "
            <div class='row'>
                <div class='col-lg-12'>
                    <p>Bienvenue a toi " .$_SESSION['login'] ."!</p>
                </div>
            </div>
        ";
    }
?>

    </div>

</header>
