<?php
    session_start();

    if(isset($_FILES['avatar_file']) && $_FILES['avatar_file']['error'] == 0)
    {
        if($_FILES['avatar_file']['size'] <= (1000000 + 10000000))
        {
            $upload_infos = pathinfo($_FILES['avatar_file']['name']);
            $upload_extension = $upload_infos['extension'];
            $allowed_extension = ['jpg', 'jpeg', 'png', 'gif'];

            if(in_array($upload_extension, $allowed_extension))
            {
                
            }

            //$extension_upload = $infosfichier['extension'];
        }
        else
        {
            //err taille > taille autorisée
        }
    }
    else
    {
        //err empty field
    }


/*
    $_FILES['avatar_file']['name']
    $_FILES['avatar_file']['type']
    $_FILES['avatar_file']['size']
    $_FILES['avatar_file']['tmp_name']
    $_FILES['avatar_file']['error']
*/

?>
