<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="">
        <meta name="description" content="">
        <meta name="keywords" content="" />
        <meta name="author" content="">
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/css/prettyPhoto.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
        <link href="assets/css/articles.css" rel="stylesheet">
    </head>
    <body>
        <section id="gerer_articles">
            <div class="container articles">


                <div class="row">

                    <h2>Mes articles publiés</h2>

                    <div class="row">
                        <div class="col-sm-2">
                            <h3>Titre</h3>
                        </div>

                        <div class="col-sm-4 ">
                            <h3>Article</h3>
                        </div>

                        <div class="col-sm-1">
                            <h3>Auteur</h3>
                        </div>

                        <div class="col-sm-1">
                            <h3>Date</h3>
                        </div>

                        <div class="col-sm-4">
                            <h3>Publié</h3>
                        </div>
                    </div>
                </div>

                    <?php
                        include_once("../../../pdo_blog.php");

                        $req = $bdd->prepare('SELECT titre, contenu, date_redac FROM articles WHERE brouillon = :est_un_brouillon');
                        $req->execute(array(
                            'est_un_brouillon' => 0
                        ));


                        $i = 0;
                        while($articles = $req->fetch())
                        {
                            $i++;
                    ?>
                            <div class="row">

                                <div class="col-sm-2">
                                    <?php echo $articles['titre']; ?>
                                </div>

                                <div class="col-sm-4">
                                    <?php echo $articles['contenu']; ?>
                                </div>

                                <div class="col-lg-1">
                                    <p>Admin</p>
                                </div>

                                <div class="col-lg-1">
                                    <?php echo $articles['date_redac']; ?>
                                </div>

                                <div class="col-sm-4 ">
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

        <script type="text/javascript" src="assets/js/jquery.js"></script>
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
        <script type="text/javascript" src="assets/js/jquery.isotope.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>


    </body>
</html>


        <!-- code corps de page ici -->


                <div class="row">
                    <div class="col-sm-4 ">
                        <div class="liste">
                            <p>nom</p><br>
                            <p>autre nom</p><br>
                            <p>nom</p>
                        </div>
                    </div>

                    <div class="col-sm-4 ">
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
                                <label class="onoffswitch-label" for="myonoffswitch1">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>

                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
                                <label class="onoffswitch-label" for="myonoffswitch2">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>
                            <div class="onoffswitch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                                <label class="onoffswitch-label" for="myonoffswitch3">
                                    <span class="onoffswitch-inner"></span>
                                    <span class="onoffswitch-switch"></span>
                                </label>
                            </div>

                    </div>

                    <div class="col-sm-4 ">
                        <div class="liste">
                            <p>auteur</p><br>
                            <p>autre auteur</p><br>
                            <p> another auteur</p>
                        </div>
                </div>

            </div>
        </section>

        <section id="more_articles">
            <button type="button" class="plus" onclick="alert('Ajoutez un article')">+</button>
            <h2>Ajouter un article</h2>

        </section>


        <?php include_once("includes/scripts.php"); ?>
    </body>
</html>
