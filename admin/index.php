<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title>Zone Admin</title>
    </head>

    <?php include_once('../../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("../fonctions/librairie.php"); ?>

    <body>
        <?php $page_admin = "index"; //sert a ajouter la classe active dans le menu ?>
        <?php include_once('includes/header.php'); ?>
        <?php include_once('includes/menu_admin.php'); ?>
        <div id="div_get" style="background-color: #F6BB42; width: 100%; height: 10px; text-align: center;">
            <p id="message_get" style="color: black;"></p>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
            </div><!--/.row-->

        <?php include_once('includes/scripts.php'); ?>

    </body>

</html>
