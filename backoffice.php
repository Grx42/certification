<?php session_start(); ?>

<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="utf-8">
        <title>Back Office</title>
    </head>


    <body>
        <?php include_once('../../pdo_blog.php'); //connexion a la bdd) ?>
        <?php include_once("fonctions/librairie.php"); ?>

        <div class="container">
            <?php include_once("includes/header.php"); ?>
            <?php include_once("includes/menu.php"); ?>

            <?php

                if(isset($_SESSION['priv_level']))
                {
                    //l'acces a la page ne se fait que si l'administrateur arrive sur cette page
                    if ($_SESSION['priv_level'] == 1)
                    {
                        include_once("includes/header.php");
                        include_once("includes/menu.php");

                        echo "<a href='index.php'>Retour a l'accueil</a>";
                    }

                    else
                    {
                        echo "<h1>Restricted Area</h1>";
                        echo "<a href='index.php'>Retour a l'accueil</a>";
                    }
                }

                else
                {
                    echo "<h1>Restricted Area</h1>";
                    echo "<a href='index.php'>Retour a l'accueil</a>";
                }

            ?>
        </div>

        <?php // Les test sont ici



        ?>



        <script type="text/javascript" src="./assets/js/script.js"></script>
    </body>
</html>
