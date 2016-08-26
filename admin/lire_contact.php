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
                <li><a href="lire_publies.php"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Consulter articles</a></li>
                <li><a href="lire_brouillon.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Brouillons</a></li>
                <li class="active"><a href="lire_contact.php"><svg class="glyph stroked open letter"><use xlink:href="#stroked-open-letter"/></svg> Messages</a></li>


                <li role="presentation" class="divider"></li>
                <li><a href="../index.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> revenir à l'accueil</a></li>
            </ul>

        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

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
                    $req->closeCursor();
                ?>

            </div>

                </div>
            </section>

        </div>	<!--/.main-->




        <?php include_once('includes/scripts.php'); ?>

    </body>

</html>
