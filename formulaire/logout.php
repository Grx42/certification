<?php
    session_start();

    unset($_SESSION['logged']);
    unset($_SESSION['login']);
    unset($_SESSION['email']);
    unset($_SESSION['priv_level']);
    session_destroy();

    header("location: ../index.php");
?>
