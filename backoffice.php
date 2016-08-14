<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once("includes/head.php"); ?>
        <title>Back Office</title>
    </head>

    <?php include_once('../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("fonctions/librairie.php"); ?>

    <?php //sert a ajouter la classe active dans le menu
        $page = "backoffice";
    ?>

    <body>
        <?php include_once("includes/header.php"); ?>


        <?php
            if(isset($_SESSION['priv_level']))
            {
                //l'acces a la page ne se fait que si l'administrateur arrive sur cette page
                if ($_SESSION['priv_level'] == 1)
                {
                    echo "<a href='index.php'>Retour a l'accueil</a>";
                    //ici tout le code du back office
                    // possiblement le gerer avec include_once pour plus de lisibilitée

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

        <?php include_once("includes/scripts.php"); ?>
    </body>
</html>
