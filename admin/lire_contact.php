<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title></title>
    </head>
    <body>
        <?php include_once('includes/menu_admin.php'); ?>

        <div class="container articles">

            <div class="row">
                <h2>Message de contact</h2>

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
            ?>

        </div>


        <?php include_once('includes/scripts.php'); ?>
    </body>
</html>
