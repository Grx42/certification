<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title>Consulter les messages de contact</title>
    </head>

    <?php include_once('../../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("../fonctions/librairie.php"); ?>

    <body>
        <?php $page_admin = "r_contacts"; //sert a ajouter la classe active dans le menu ?>
        <?php include_once('includes/header.php'); ?>
        <?php include_once('includes/menu_admin.php'); ?>
        <div id="div_get" style="background-color: #F6BB42; width: 100%; height: 10px; text-align: center;">
            <p id="message_get" style="color: black;"></p>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

            <div class="container articles">

                <div class="row">
                    <h2>Message de contact</h2>
                </div>

                <?php
                    include_once("../../../pdo_blog.php");

                    $req = $bdd->prepare('SELECT idcontact, pseudo, email, message, ip FROM contact ORDER BY idcontact DESC');
                    $req->execute(array());

                    $i = 0;
                    while($contact = $req->fetch())
                    {
                        $i++;
                ?>
                        <div class="row">
                            <div class="col-sm-3">
                                <h3>ID</h3>
                            </div>

                            <div class="col-sm-3">
                                <h3>Pseudo</h3>
                            </div>

                            <div class="col-sm-3">
                                <h3>Email</h3>
                            </div>

                            <div class="col-sm-3">
                                <h3>Adresse IP</h3>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-3" id="articleID">
                                <?php echo $contact['idcontact']; ?>
                            </div>

                            <div class="col-sm-3">
                                <?php echo $contact['pseudo']; ?>
                            </div>

                            <div class="col-sm-3">
                                <?php echo $contact['email']; ?>
                            </div>

                            <div class="col-lg-3">
                                <?php echo $contact['ip']; ?>
                            </div>

                            <div class="col-lg-12">
                                <h3>Message</h3>
                                <?php echo $contact['message']; ?>
                            </div>
                        </div>
                <?php
                    }
                    $i = 0;
                    $req->closeCursor();
                ?>

            </div>

                </div>
            </section>

        </div>	<!--/.main-->




        <?php include_once('includes/scripts.php'); ?>

    </body>

</html>
