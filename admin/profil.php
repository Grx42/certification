<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title></title>
    </head>
    <body>
        <?php include_once('includes/menu_admin.php'); ?>

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
            changement pseudo
        </section>

        <section>
            changement mail
        </section>

        <section>
            changement avatar
        </section>


        <?php include_once('includes/scripts.php'); ?>
    </body>
</html>
