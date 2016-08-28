<?php include_once("../../../../pdo_blog.php");

    $id = $_GET['id'];

    $req = $bdd->prepare('DELETE FROM contact WHERE idcontact = :id');
    $req->execute(array(
        'id' => $id
    ));
    $req->closeCursor();

    header("location: ../lire_contact.php?d_article=ok");


?>
