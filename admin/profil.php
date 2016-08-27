<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title>Editer le profil</title>
    </head>

    <?php include_once('../../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("../fonctions/librairie.php"); ?>

    <body>
        <?php $page_admin = "profil"; //sert a ajouter la classe active dans le menu ?>
        <?php include_once('includes/header.php'); ?>
        <?php include_once('includes/menu_admin.php'); ?>

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
