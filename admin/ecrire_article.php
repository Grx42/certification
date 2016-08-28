<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <link href="../assets/css/gw_lire_articles.css" rel="stylesheet">
        <title>ecrire article</title>
    </head>

    <?php include_once('../../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("../fonctions/librairie.php"); ?>

    <?php include_once('../../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("../fonctions/librairie.php"); ?>

    <body>
        <?php $page_admin = "w_articles"; //sert a ajouter la classe active dans le menu ?>
        <?php include_once('includes/header.php'); ?>
        <?php include_once('includes/menu_admin.php'); ?>

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <h2 class="title-one">Ajouter un article</h2>
                <form class="add_article" action="formulaires/add_article.php" method="post">
                <label for="title">Titre</label>
                <input type="text" id="title" name="title" placeholder="Saisissez votre titre ici" >
                <br>
                <div>
                    <p>
                        <label for="article">Article</label>
                        <input type="button" value="G" onclick="insertTag('<gras>','</gras>','textarea');"/>
                        <input type="button" value="I" onclick="insertTag('<italique>','</italique>','textarea');"/>
                        <input type="button" value="Lien" onclick="insertTag('<lien>','</lien>','textarea');" />
                        <input type="button" value="Image" onclick="insertTag('<img>','</img>','textarea');"/>
                        <img src="../images/smilies/smile.png" alt=":)" id="smiley" onclick="insertTag(':)', '', 'textarea');" />
                        <img src="../images/smilies/angry.png" alt=":colere:" id="angry" onclick="insertTag(':colere:', '', 'textarea');" />
                    </p>
                    <p>
                        <input name="previsualisation" type="checkbox" id="previsualisation" value="previsualisation" />
                        <label for="previsualisation">Prévisualisation automatique</label>
                    </p>
                </div>

                <textarea onkeyup="preview(this, 'previewDiv');" name='article' onselect="preview(this, 'previewDiv');" id="textarea" cols="150" rows="10"></textarea>
                <div id="previewDiv"></div>
    	        <p> <input type="button" value="Visualiser" onclick="view('textarea', 'viewDiv');" /> </p>
                <div id="viewDiv"></div>
                </br>
                <label for="brouillon">Etat de l'article</label>
                <input type="radio" id="brouillon" name="brouillon" value="1">  Brouillon
                <input type="radio" id="publie" name="brouillon" value="0">  Publié
                <input type="submit" id="ajouter" name="add_article" value="Ajouter">
            </form>
        </div>	<!--/.main-->

        <script type="text/javascript" src="assets/js/w_article.js"></script>
        <?php include_once('includes/scripts.php'); ?>

    </body>

</html>
