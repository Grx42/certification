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


        <section id="contact">
            <div class="container">
                <div class="row text-center clearfix">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="contact-heading">
                            <h2 class="title-one">envie de nous contacter?</h2>
                            <p>Si vous voulez plus de renseignement sur nous où toute autre questions, adresser un petit message via ce formulaire ou en passant sur nos réseau sociaux.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="contact-details">
                    <div class="pattern"></div>
                    <div class="row text-center clearfix">
                        <div class="col-sm-6">
                            <div class="contact-address"><address><p><span>Dédicace</span> à l'équipe</p><strong>Isabelle<br>Gwen<br>Greg<br>Ben</strong><br><small>(ainsi que les liens de nos résaux sociaux)</small></address>
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-github-square fa-3x" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div id="contact-form-section">
                                <div class="status alert alert-success" style="display: none"></div>
                                <form id="contact-form" class="contact" name="contact-form" method="post" action="formail.php">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control name-field" required="required" placeholder="Votre Nom"></div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Votre Email">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Envoyer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!--/#contact-->

        <?php include_once("includes/scripts.php"); ?>
        <?php include_once("includes/footer.php"); ?>

    </body>
</html>
