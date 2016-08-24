<!DOCTYPE html>
<html>
    <head>
        <?php include_once('includes/head.php'); ?>
        <title></title>
    </head>
    <body>
        <?php include_once('includes/menu_admin.php'); ?>
        <h2>Ajouter un article</h2>
        <form class="add_article" action="formulaires/add_article.php" method="post">
            <label for="title">Titre</label>
            <input type="text" name="title" value="">
            <label for="article">Article</label>
            <textarea name="article" rows="15" cols="50"></textarea>
            <label for="brouillon">Etat de l'article</label>
            <input type="radio" name="brouillon" value="1">Brouillon
            <input type="radio" name="brouillon" value="0">Publié
            <input type="submit" name="add_article" value="Ajouter">
        </form>

        <?php include_once('includes/scripts.php'); ?>
    </body>

</html>
