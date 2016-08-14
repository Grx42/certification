<!-- ------------------ HEADER ------------------ -->

<header id="navigation">

    <div class="row haed">
        <div class="photo">
            <img src="images/header.png" alt="" />

            <div class="bouton-connexion">
                <a class="btn btn-default slider-btn animated fadeIn" href="#">Connexion</a>
            </div>

            <div class="titre">
                <h1>Avant et apres</h1>
            </div>

            <?php /*formulaire de connexion */
                if (!isset($_POST['email']) && !isset($_POST['password']))
                {
                    if(!isset($_SESSION['logged'])) //s'il n'y a pas de connexion active, s'affiche.
                    {
                        echo "
                        <div class='row'>
                            <div class='col-lg-12'>
                                <form class='form-inline' action='log.php' method='post'>
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
                {   //teste si les champs sont envoyés vides
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
                        $req = $bdd->prepare('SELECT login, email, password, priv_level FROM comptes WHERE email = :email OR login = :email');
                        $req->execute(Array(
                            'email' => $email
                        ));

                        $donnees = $req->fetch();

                        // Authentification sur mail ou login et sur password
                        if (($donnees['email'] == $email || $donnees['login'] == $email) && password_verify($password, $donnees['password']))
                        {
                            logSucces($donnees);
                        }
                        else
                        {
                            logError();
                        }
                    }
                }

                //message de bienvenue avec le login si la connexion est active
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

                include_once("includes/menu.php");
            ?>

        </div>
    </div>

</header>
