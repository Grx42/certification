<?php
    session_start();

    if(isset($_FILES['avatar_file']) && $_FILES['avatar_file']['error'] == 0)
    {
        if($_FILES['avatar_file']['size'] <= 1000000)
        {
            $upload_infos = pathinfo($_FILES['avatar_file']['name']);
            $upload_extension = $upload_infos['extension'];
            $allowed_extension = ['jpg', 'jpeg', 'png', 'gif'];
            //nomme l'avatar avec le pseudo de l'utilisateur + son extension de depart
            $new_name = $_SESSION['login'] ."." .$upload_infos['extension'];

            if(in_array($upload_extension, $allowed_extension))
            {
                move_uploaded_file($_FILES['avatar_file']['tmp_name'], '../../avatars/' . basename($new_name));
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
