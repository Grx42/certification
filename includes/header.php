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
                                <form class='form-inline' action='formulaire/log.php' method='post'>
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
