
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
        <?php include_once('includes/header.php'); ?>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

            <ul class="nav menu">
                <li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
                <li class="active"><a href="ecrire_article.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Ecrire un article</a></li>
                <li><a href="lire_publies.php"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg> Consulter articles</a></li>
                <li><a href="lire_brouillon.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Brouillons</a></li>
                <li><a href="lire_contact.php"><svg class="glyph stroked open letter"><use xlink:href="#stroked-open-letter"/></svg> Messages</a></li>


                <li role="presentation" class="divider"></li>
                <li><a href="../index.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> revenir à l'accueil</a></li>
            </ul>

        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">


            <h2 class="title-one">Ajouter un article</h2>
            <p>Crée ton article directement ici.
            <form class="add_article" action="formulaires/add_article.php" method="post">
                <label for="title">Titre</label>
                <input type="text" name="title" value="">
                <br>
                <label for="article">Article</label>
                <textarea name="article" rows="15" cols="50"></textarea>
            </br>
                <label for="brouillon">Etat de l'article</label>
                <input type="radio" name="brouillon" value="1">Brouillon
                <input type="radio" name="brouillon" value="0">Publié
                <input type="submit" name="add_article" value="Ajouter">
            </form>
        </div>	<!--/.main-->




        <?php include_once('includes/scripts.php'); ?>

    </body>

</html>
