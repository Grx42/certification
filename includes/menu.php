<div class="row nav">
    <ul class="nav nav-pills nav-justified">
        <li role="presentation" <?php if($page == "index"){echo "class='active'";} ?>><a href="index.php">Accueil</a></li>
        <li role="presentation" <?php if($page == "blog"){echo "class='active'";} ?>><a href="blog.php">Blog</a></li>
        <li role="presentation" <?php if($page == "album"){echo "class='active'";} ?>><a href="album.php">Album</a></li>
        <li role="presentation" <?php if($page == "contact"){echo "class='active'";} ?>><a href="contact.php">Contact</a></li>
        <?php
            if(isset($_SESSION['logged']))
            {
                //menu admin
                if ($_SESSION['priv_level'] == 1)
                {?>
                    <li role="presentation"><a href='admin/index.php'>Interface d'administration</a>
                    
                <?php
                }

                //menu user normal
                else
                {
                    echo "
                        <li role=\"presentation\"><form action='formulaires/logout.php' method='post'>
                            <button type='submit' class='btn btn-default'>Deconnexion</button>
                        </form></li>
                    ";
                }
            }
        ?>

    </ul>
</div>
