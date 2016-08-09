<?php
    session_start();
    unset($_SESSION['logged']);
    unset($_SESSION['login']);
    unset($_SESSION['email']);
    unset($_SESSION['priv_level']);
    session_destroy();
    echo "Deconnexion reussi.</br>";
    echo "<a href='../index.php'><br>Retour a l'acceuil</a>";
?>
