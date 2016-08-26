<?php

    include_once("../../../../pdo_blog.php");

    $est_un_brouillon = $_POST["est_un_brouillon"];
    $idArticles = $_POST["idArticles"];

    $req = $bdd->prepare('UPDATE articles SET brouillon = :est_un_brouillon WHERE idArticles = :idArticles');
    $req->execute(array(
        "est_un_brouillon" => $est_un_brouillon,
        "idArticles" => $idArticles
    ));
    $req->closeCursor();

?>
