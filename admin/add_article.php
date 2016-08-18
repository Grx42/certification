<?php
    include_once("../../../pdo_blog.php");

    $titre = $_POST['title'];
    $article = $_POST['article'];
    $brouillon = $_POST['brouillon'];
    $date = $_POST['date_redac'];

    $req = $bdd->prepare('INSERT INTO articles(titre, contenu, brouillon, date_redac) VALUES(:titre, :contenu, :brouillon, :date_redac)');

    $req->execute(array(
        'titre' => $titre,
        'contenu' => $article,
        'brouillon' => $brouillon,
        'date_redac' => $date
    ));

    echo "Article ajouté</br>";
    echo "<a href='admin.php'>Retour a la page admin</a>";


/*
    echo $titre;
    echo $article;
    echo $date;
    echo $brouillon;
*/

?>
