<header class='row'>
    <div class='col-lg-12'>
        <p>
            ici le titre + logo
        </p>

<?php

    if (!isset($_POST['email']) && !isset($_POST['password']))
    {
        echo "
        <div class='row'>
            <div class='col-lg-12'>
                <form class='form-inline' action='index.php' method='post'>
                    <div class='form-group'>
                        <label for='email'>Email</label>
                        <input type='email' class='form-control' id='email' name='email' placeholder='example@example.com'>
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

        unset($_SESSION['logged']);
        session_destroy();
    }

    else
    {

        if ((isset($_POST['email']) && empty($_POST['email'])) || (isset($_POST['password']) && empty($_POST['password'])))
        {
            logError();
        }
        else
        {

            include('../../pdo_blog.php'); //connexion a la bdd

            $email = cleanPost($_POST['email']);

            $req = $bdd->prepare('SELECT login, email, password, priv_level FROM comptes WHERE email = :email');
            $req->execute(Array(
                'email' => $email
            ));

            $donnees = $req->fetch();

            if ($donnees['email'] == cleanPost($_POST['email']) && $donnees['password'] == cleanPost($_POST['password']))
            {
                $_SESSION['logged'] = true;
                $_SESSION['login'] = $donnees['login'];


                echo "
                    <div class='row'>
                        <div class='col-lg-12'>
                            <p>Bienvenue a toi" .$_SESSION['login'] ."!</p>
                        </div>
                    </div>
                ";

            }
            else
            {
                logError();
            }
        }
    }
?>


    </div>

</header>
