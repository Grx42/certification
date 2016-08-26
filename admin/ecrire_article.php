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
        

        <div class="row">
            <div class="col-sm-3">
<?php include_once('includes/menu_admin.php'); ?>
            </div>
            <div class="col-sm-9">
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
            </div>
        </div>



        <?php include_once('includes/scripts.php'); ?>
        <?php include_once("includes/footer.php"); ?>
    </body>

</html>
