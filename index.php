<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="utf-8">
        <title></title>
    </head>

    <body>
        <?php include('../../pdo_blog.php'); //connexion a la bdd) ?>
        <?php include_once("fonctions/librairie.php"); ?>

        <div class="container">
            <?php include_once("includes/header.php"); ?>
            <?php include_once("includes/menu.php"); ?>
        </div>

        <script type="text/javascript" src="./assets/js/script.js"></script>
    </body>
</html>
