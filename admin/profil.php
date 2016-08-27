<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title>ecrire article</title>
    </head>
    <?php include_once('../../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("../fonctions/librairie.php"); ?>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span>Le Blog de la Certif</span> Admin</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="profil.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                                <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
                                <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div><!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

            <ul class="nav menu">
                <li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
                <li><a href="ecrire_article.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Ecrire un article</a></li>
                <li><a href="lire_publies.php"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Consulter articles</a></li>
                <li class="active"><a href="lire_brouillon.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Brouillons</a></li>
                <li><a href="lire_contact.php"><svg class="glyph stroked open letter"><use xlink:href="#stroked-open-letter"/></svg> Messages</a></li>


                <li role="presentation" class="divider"></li>
                <li><a href="../index.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> revenir à l'accueil</a></li>
            </ul>

        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


                    <section>
                        changement de mot de passe
                        <form class="" action="formulaires/chg_passwd.php" method="post">
                            <label for="actual_passwd">Mot de passe actuel</label>
                            <input type="password" name="actual_passwd" value="">
                            <label for="new_passwd">Nouveau mot de passe</label>
                            <input type="password" name="new_passwd" value="">
                            <label for="new_passwd_confirm">Confirmer le nouveau mot de passe</label>
                            <input type="password" name="new_passwd_confirm" value="">

                            <input type="submit" name="envoyer_mdp" value="Changer le mot de passe">
                        </form>
                    </section>

                    <section>
                        changement mail
                        <form class="" action="formulaires/chg_mail.php" method="post">
                            <label for="actual_passwd">Mot de passe actuel</label>
                            <input type="password" name="actual_passwd" value="">
                            <label for="new_email">Entrez votre email actuel</label>
                            <input type="email" name="actual_email" value="">
                            <label for="new_email">Entrez votre nouvelle adresse mail</label>
                            <input type="email" name="new_email" value="">

                            <input type="submit" name="envoyer_email" value="Changer l'email">
                        </form>
                    </section>

                    <section>
                        changement pseudo
                        <form class="" action="formulaires/chg_pseudo.php" method="post">
                            <label for="new_pseudo">Entrez votre nouveau pseudo</label>
                            <input type="text" name="new_pseudo" value="">

                            <input type="submit" name="envoyer_pseudo" value="Changer le pseudo">
                        </form>
                    </section>

                    <section>
                        changement avatar
                        <form action="formulaires/upload.php" method="post" enctype="multipart/form-data">
                            <label for="avatar_file">Envoyer votre avatar</label>
                            <p>Formats acceptés: .jpg .png .gif</p>
                            <p>Taille max: 1 Mo</p>
                            <input type="file" name="avatar_file">
                            <input type="submit" value="Envoyer le fichier">
                        </form>
                    </section>

                </div>
            </section>

        </div>	<!--/.main-->

        <?php include_once('includes/scripts.php'); ?>

    </body>

</html>
