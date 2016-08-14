<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title>Connexion</title>
    </head>

    <?php include_once('../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("fonctions/librairie.php"); ?>

    <?php //sert a ajouter la classe active dans le menu
        $page = "index";
    ?>

    <body>
        <?php include_once("includes/header.php"); ?>


        <!-- code corps de page ici -->
        <section id="about-us">
            <div class="container about">

                <h2>description du site</h2>

                <div class="row">
                    <div class="col-sm-6 ">
                        <h3>Pendant la formation</h3>
                    </div>

                    <div class="col-sm-6">
                        <h3>Apres la Formation</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 ">
                        <div class="cadre">
                            <p>La vie en formation pas toujours facile...</p><br>
                            <p>L'innovation!!! Etre innovant...</p><br>
                            <p>1 salle aquarium pour des petits poissons qui souhaitent devenir grands, un jour...</p>
                        </div>
                    </div>

                    <div class="col-sm-6 ">
                        <div class="cadre">
                            <p>Des interrogations</p><br>
                            <p>Encore des interrogations</p><br>
                            <p>Que faire pour devenir un bon professionel...</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="sponsor">
            <h2>ils nous ont aidé et nous aide encore</h2>
            <div class="row">
                <div class="col-md-3">
                    <a href="#"><img src="images/simploniness.png" alt="" /></a>
                </div>

                <div class="col-md-3">
                    <a href="#"><img src="images/simploniness.png" alt="" /></a>
                </div>

                <div class="col-md-3">
                    <a href="#"><img src="images/simploniness.png" alt="" /></a>
                </div>

                <div class="col-md-3">
                    <a href="#"><img src="images/simploniness.png" alt="" /></a>
                </div>
            </div>
        </section>


        <?php include_once("includes/scripts.php"); ?>
    </body>
</html>