<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once("includes/head.php"); ?>
        <title>blog</title>
    </head>

    <?php include_once('../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("fonctions/librairie.php"); ?>

    <?php //sert a ajouter la classe active dans le menu
        $page = "blog";
    ?>

    <body>
        <?php include_once("includes/header.php"); ?>


        <!-- code corps de page ici -->
        <?php include_once("includes/articles.php"); ?>

        <?php include_once("includes/footer.php"); ?>
        <?php include_once("includes/scripts.php"); ?>
    </body>
</html>
