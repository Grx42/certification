
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <link href="../assets/css/gw_lire_articles.css" rel="stylesheet">
        <title>Consulter les articles publiés</title>
    </head>

    <?php include_once('../../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("../fonctions/librairie.php"); ?>

    <body>
        <?php $page_admin = "r_articles"; //sert a ajouter la classe active dans le menu ?>
        <?php include_once('includes/header.php'); ?>
        <?php include_once('includes/menu_admin.php'); ?>

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

            <section id="gerer_articles">
                <div class="container articles">

                    <div class="row">
                        <h2>Mes articles publiés</h2>

                        <div class="row">
                            <div class="col-sm-3">
                                <h3>ID</h3>
                            </div>

                            <div class="col-sm-3">
                                <h3>Titre</h3>
                            </div>

                            <div class="col-sm-3">
                                <h3>Date</h3>
                            </div>

                            <div class="col-sm-3">
                                <h3>Auteur</h3>
                            </div>

                        </div>
                    </div>

                        <?php
                            include_once("../../../pdo_blog.php");

                            $req = $bdd->prepare('SELECT idArticles, titre, contenu, date_redac FROM articles WHERE brouillon = :est_un_brouillon ORDER BY date_redac DESC');
                            $req->execute(array(
                                'est_un_brouillon' => 0
                            ));

                            $i = 0;
                            while($articles = $req->fetch())
                            {
                                $i++;
                        ?>
                                <div class="row">
                                    <div class="col-sm-3" id="articleID">
                                        <?php echo $articles['idArticles']; ?>
                                    </div>

                                    <div class="col-sm-3">
                                        <?php echo $articles['titre']; ?>
                                    </div>

                                    <div class="col-sm-3">
                                        <?php echo $articles['date_redac']; ?>
                                    </div>

                                    <div class="col-sm-3">
                                        <p>Admin</p>
                                    </div>

                                <div class="row">
                                    <div class="col-sm-9 ">
                                        <h3>Article</h3>
                                    </div>

                                    <div class="col-sm-3">
                                        <h3>Etat</h3>
                                    </div>

                                </div>

                                    <div class="col-sm-9">
                                        <?php echo $articles['contenu']; ?>
                                    </div>

                                    <div class="col-sm-3">

                                        <div class="onoffswitch">
                                            <input type="checkbox" name="onoffswitch<?php echo $i; ?>" class="onoffswitch-checkbox" id="myonoffswitch<?php echo $i; ?>" checked>
                                            <label class="onoffswitch-label" for="myonoffswitch<?php echo $i; ?>">
                                                <span class="onoffswitch-inner"></span>
                                                <span class="onoffswitch-switch"></span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                        <?php
                            }
                            $i = 0;
                            $req->closeCursor();
                        ?>

                        <div class="row">
                            <div class="col-lg-offset-11 col-lg-1">
                                <button type="button" name="validation" id="validation_modif">Valider les changements</button>
                            </div>
                        </div>

                </div>
            </section>

        </div>	<!--/.main-->




        <?php include_once('includes/scripts.php'); ?>

    </body>

</html>
