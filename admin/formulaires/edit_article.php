<?php include_once("../../../../pdo_blog.php");

    $titre = $_POST['title'];
    $article = $_POST['article'];
    $id = $_POST['id'];
    $date = date("Y-m-d H:i:s");

    $req = $bdd->prepare('UPDATE articles SET titre = :titre, contenu = :contenu, date_redac = :date_redac WHERE idArticles = :id');

    $req->execute(array(
        'titre' => $titre,
        'contenu' => $article,
        'id' => $id,
        'date_redac' => $date
    ));
    $req->closeCursor();
    header("location: ../modif_article.php?u_article=ok");
?>
