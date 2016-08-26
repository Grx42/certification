<?php
    include_once("../../../../pdo_blog.php");

    $titre = $_POST['title'];
    $article = $_POST['article'];
    $brouillon = $_POST['brouillon'];
    $date = date("Y-m-d H:i:s");

    $req = $bdd->prepare('INSERT INTO articles(titre, contenu, brouillon, date_redac) VALUES(:titre, :contenu, :brouillon, :date_redac)');

    $req->execute(array(
        'titre' => $titre,
        'contenu' => $article,
        'brouillon' => $brouillon,
        'date_redac' => $date
    ));
    $req->closeCursor();
    header("location: ../admin.php");

?>
