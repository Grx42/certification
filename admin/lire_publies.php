
<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title>ecrire article</title>
    </head>
    <?php include_once('../../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("../fonctions/librairie.php"); ?>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span>Le Blog de la Certif</span> Admin</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="profil.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
                                <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
                                <li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div><!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

            <ul class="nav menu">
                <li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
                <li><a href="ecrire_article.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Ecrire un article</a></li>
                <li class="active"><a href="lire_publies.php"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Consulter articles</a></li>
                <li><a href="lire_brouillon.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Brouillons</a></li>
                <li><a href="lire_contact.php"><svg class="glyph stroked open letter"><use xlink:href="#stroked-open-letter"/></svg> Messages</a></li>


                <li role="presentation" class="divider"></li>
                <li><a href="../index.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> revenir à l'accueil</a></li>
            </ul>

        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

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
