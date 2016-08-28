<?php include_once("../../../../pdo_blog.php");

    $id = $_GET['id'];

    $req = $bdd->prepare('SELECT brouillon FROM articles WHERE idArticles = :id');
    $req->execute(array(
        'id' => $id
    ));
    $article = $req->fetch();
    $req->closeCursor();


    $req = $bdd->prepare('DELETE FROM articles WHERE idArticles = :id');
    $req->execute(array(
        'id' => $id
    ));
    $req->closeCursor();

    if($article['brouillon'] == 1)
    {
        header("location: ../lire_brouillon.php?d_article=ok");
    }
    elseif ($article['brouillon'] == 0)
    {
        header("location: ../lire_publies.php?d_article=ok");
    }

?>
