<?php
    session_start();
    unset($_SESSION['logged']);
    session_destroy();
    echo "Bye bye";
    echo "<a href='../index.php'><br>Retour a l'acceuil</a>";
?>
