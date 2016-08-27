<?php
    session_start();

    if(isset($_FILES['avatar_file']) && $_FILES['avatar_file']['error'] == 0)
    {
        if($_FILES['avatar_file']['size'] <= 1000000) //taille inferieure a 1mo
        {
            $upload_infos = pathinfo($_FILES['avatar_file']['name']);
            $upload_extension = $upload_infos['extension'];
            $allowed_extension = ['jpg', 'jpeg', 'png', 'gif'];
            //nomme l'avatar avec l'id du compte utilisateur + son extension de depart
            $new_name = $_SESSION['idcomptes'] ."." .$upload_infos['extension'];

            if(in_array($upload_extension, $allowed_extension))
            {
                include_once('../../fonctions/librairie.php');
                removePreviousAvatar($_SESSION['idcomptes']);
                move_uploaded_file($_FILES['avatar_file']['tmp_name'], '../../avatars/' . basename($new_name));//deplace le fichier tmp dans avatars/ et le nomme

                include_once("../../../../pdo_blog.php");
                $req = $bdd->prepare('UPDATE comptes SET avatar = :path_file WHERE idcomptes = :idcomptes');
                $req->execute(array(
                    'path_file' => $new_name,
                    'idcomptes' => $_SESSION['idcomptes']
                ));
                $req->closeCursor();
                header('location: ../profil.php?upload=ok');
            }
        }
        else
        {
            header('location: ../profil.php?errAv=tailleSup');
        }
    }
    else
    {
        header('location: ../profil.php?errAv=emptyFields');
    }

?>
