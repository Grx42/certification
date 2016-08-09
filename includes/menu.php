<?php
    if(isset($_SESSION['logged']))
    {
        if ($_SESSION['priv_level'] == 1) //menu admin
        {
            echo "
            <nav class='row'>
                <ul class='col-lg-3'>
                    <li>Pim</li>
                    <li>Pam</li>
                    <li>Poum</li>
                    <li><a href='backoffice.php'>Backoffice</a>
                    <form action='formulaire/logout.php' method='post'>
                        <button type='submit' class='btn btn-default'>Deconnexion</button>
                    </form>
                </ul>
            </nav>";
        }

        //menu user normal
        else
        {
            echo "
            <nav class='row'>
                <ul class='col-lg-3'>
                    <li>lien 1</li>
                    <li>lien 2</li>
                    <li>lien 3</li>
                    <form action='formulaire/logout.php' method='post'>
                        <button type='submit' class='btn btn-default'>Deconnexion</button>
                    </form>
                </ul>
            </nav>";
        }
    }

    else //menu visiteur
    {
        echo "
        <nav class='row'>
            <ul class='col-lg-3'>
                <li>lien 1</li>
                <li>lien 2</li>
                <li>lien 3</li>
            </ul>
        </nav>";
    }
?>
