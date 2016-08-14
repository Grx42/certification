<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Deconnexion</title>
    </head>

    <?php include_once("../fonctions/librairie.php"); ?>

    <body>
        <!-- code corps de page ici -->
        <?php
            unset($_SESSION['logged']);
            unset($_SESSION['login']);
            unset($_SESSION['email']);
            unset($_SESSION['priv_level']);
            session_destroy();
            echo "Deconnexion reussi !</br>";
            echo "<a href='../index.php'><br>Retour a l'acceuil</a>";
        ?>

        <?php include_once("../includes/scripts.php"); ?>
    </body>
</html>
