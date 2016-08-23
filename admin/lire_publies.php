<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <link href="../assets/css/gw_lire_articles.css" rel="stylesheet">
        <title></title>
    </head>

    <body>
        <section id="gerer_articles">
            <div class="container articles">

                <div class="row">
                    <h2>Mes articles publiés</h2>

                    <div class="row">
                        <div class="col-sm-1">
                            <h3>ID</h3>
                        </div>

                        <div class="col-sm-2">
                            <h3>Titre</h3>
                        </div>

                        <div class="col-sm-4 ">
                            <h3>Article</h3>
                        </div>

                        <div class="col-sm-2">
                            <h3>Date</h3>
                        </div>

                        <div class="col-sm-1">
                            <h3>Auteur</h3>
                        </div>

                        <div class="col-sm-2">
                            <h3>Etat</h3>
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
                                <div class="col-sm-1" id="articleID">
                                    <?php echo $articles['idArticles']; ?>
                                </div>

                                <div class="col-sm-2">
                                    <?php echo $articles['titre']; ?>
                                </div>

                                <div class="col-sm-4">
                                    <?php echo $articles['contenu']; ?>
                                </div>

                                <div class="col-lg-2">
                                    <?php echo $articles['date_redac']; ?>
                                </div>

                                <div class="col-lg-1">
                                    <p>Admin</p>
                                </div>

                                <div class="col-sm-2">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch<?php echo $i; ?>" checked>
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
                    ?>

            </div>
        </section>

        <?php include_once('includes/scripts.php'); ?>
        <script type="text/javascript" src="assets/js/editState.js"></script>

    </body>
</html>
