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
            $id = $_GET['id'];

            $req = $bdd->prepare('SELECT idArticles, titre, contenu, date_redac, login FROM articles LEFT JOIN comptes ON comptes_idcomptes = idcomptes WHERE idArticles = :id');
            $req->execute(array(
                'id' => $id
            ));

            $article = $req->fetch();
            $req->closeCursor();
        ?>
            <div class="container">
                <div class="row">
                    <form class="col-lg-12" action="formulaires/edit_article.php" method="post">
                        <input type="text" name="titre" value="<?php echo $article['titre']; ?>">
                        <textarea name="contenu" rows="30" cols="70"><?php echo $article['contenu']; ?></textarea>
                        <input type="submit" name="valider" value="Modifier l'article">
                    </form>
                </div>
            </div>

        <?php include_once('includes/scripts.php'); ?>

    </body>

</html>
