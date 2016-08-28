<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title>Editer un article</title>
    </head>

    <?php include_once('../../../pdo_blog.php'); //connexion a la bdd) ?>
    <?php include_once("../fonctions/librairie.php"); ?>

    <body>
        <?php $page_admin = "index"; //sert a ajouter la classe active dans le menu ?>
        <?php include_once('includes/header.php'); ?>
        <?php include_once('includes/menu_admin.php'); ?>
        <?php
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $req = $bdd->prepare('SELECT idArticles, titre, contenu, date_redac, login FROM articles LEFT JOIN comptes ON comptes_idcomptes = idcomptes WHERE idArticles = :id');
                $req->execute(array(
                    'id' => $id
                ));

                $article = $req->fetch();
                $req->closeCursor();
            }

        ?>
            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
                <form class="add_article" action="formulaires/edit_article.php" method="post">
                    <label for="title">Titre</label>
                    <input type="text" id="title" name="title" value="<?php if(isset($_GET['id'])){echo $article['titre'];} ?>"><br>
                    <label for="id">ID article</label>
                    <input type="text" name="id" value="<?php if(isset($_GET['id'])) {echo $id;} ?>"><br>
                    <div>
                        <p><label for="article">Article</label></p>
                    </div>
                    <textarea name='article' id="textarea" cols="150" rows="10"><?php if(isset($_GET['id'])){echo $article['contenu'];} ?></textarea><br>
                    <input type="submit" name="valider" value="Modifier l'article">
                </form>
            </div>

        <?php include_once('includes/scripts.php'); ?>

    </body>

</html>
