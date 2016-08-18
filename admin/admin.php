<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>Ajouter un article</h2>
        <form class="add_article" action="add_article.php" method="post">
            <label for="title">Titre</label>
            <input type="text" name="title" value="">

            <label for="article">Article</label>
            <textarea name="article" rows="15" cols="50"></textarea>

            <label for="brouillon">Brouillon ?</label>
            <input type="radio" name="brouillon" value="1">oui
            <input type="radio" name="brouillon" value="0">non

            <input type="date" name="date_redac" value="<?php echo date("Y-m-d H:i:s")?>" hidden="">
            <input type="submit" name="add_article" value="Ajouter">
        </form>

        <div style="margin-top: 40px;">
            <a href="lire_brouillon.php">lire les brouillons</a>
            <a href="lire_publies.php">lire les articles publies</a>
        </div>

    </body>
</html>
