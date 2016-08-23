<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title>contact</title>
    </head>

    <?php include_once('../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("fonctions/librairie.php"); ?>

    <?php //sert a ajouter la classe active dans le menu
        $page = "contact";
    ?>

    <body>
        <?php include_once("includes/header.php"); ?>


        <!-- code corps de page ici -->

        <?php include_once("includes/scripts.php"); ?>
        <?php include_once("includes/footer.php"); ?>

    </body>
</html>
